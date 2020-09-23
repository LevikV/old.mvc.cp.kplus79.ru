<?php
class Controller_Works extends Controller_Base {
    public $layouts = 'first_layouts';
    public $datelastweek;
    public $timeLastWeek;

    function index(){
        $worksCurrentWeek = array();
        $worksLastWeek = array();
        $worksLCWeek = array();

        //Определяем дату периода выборки работ
        $date1 = $this->getLastWeek();
        $date2 = date("Y-m-d", time());

        //Создаем модель с записями для указанного пользователя из
        //интервала дат с пондельника прошлой недели
        $select = array(
            'where' => "user_id = 2 AND DATE(date) BETWEEN '$date1' AND '$date2'",
            "order" => 'date ASC'
            );
        $model = new Model_Works($select);
        $works = $model->getAllRows();

        //Заполняем массив работ с прошлой недели + до текущей даты

        for ($i=0; $i < count($works); $i++){
            for ($j=0; $j < count($works); $j++) {
                if (isset($worksLCWeek[$i]['date'])) {
                    if ($worksLCWeek[$i]['date'] == $works[$j]['date']) {
                        $worksLCWeek[$i][$works[$j]['joblist_id']] = $works[$j]['count'];
                    }
                }elseif (!in_array($works[$j]['date'], array_column($worksLCWeek, 'date'), true)) {
                    $worksLCWeek[$i]['date'] = $works[$j]['date'];
                    $worksLCWeek[$i][$works[$j]['joblist_id']] = $works[$j]['count'];
                }
            }
        }

        //Фрмируем массив работ предидущей недели с Пн.-Вс.
        //и текущей недели с Пн.-текущая дата

        for ($i=0; $i < 7; $i++) {
            $worksLastWeek[$i]['date'] = date("Y-m-d", strtotime($this->getLastWeek()) + (86400 * $i));
            if ($worksLCWeek[$i]['date'] === $worksLastWeek[$i]['date']) {
                $worksLastWeek[$i] = $worksLCWeek[$i];
            }
            //И сразу формируем текущую неделю
            $datet = date("Y-m-d", strtotime($this->getLastWeek()) + (86400 * ($i+7)));
            if ($datet <= $date2) {
                $worksCurrentWeek[$i]['date'] = date("Y-m-d", strtotime($this->getLastWeek()) + (86400 * ($i+7)));
                foreach ($worksLCWeek as $key => $val) {
                    if ($val['date'] === $worksCurrentWeek[$i]['date']) {
                        $worksCurrentWeek[$i] = $val;
                    }
                }
            }else{
                continue;
            }
        }

        //Получаем количество по каждому виду работ за периоды

        $jobCountLW = $this->getCountJob($date1, date("Y-m-d", strtotime($date1) + 6 * 86400), $works);
        $jobCountCW = $this->getCountJob(date("Y-m-d", strtotime($date1) + 7 * 86400), $date2, $works);






        //Передаем параметры в шаблон контроллера
        $this->template->vars('worksLastWeek', $worksLastWeek);
        $this->template->vars('worksCurrentWeek', $worksCurrentWeek);
        $this->template->vars('jobCountLW', $jobCountLW);
        $this->template->vars('jobCountCW', $jobCountCW);
        //В зависимости от типа пользователя выбираем нужное отображение
        $this->template->view('indexmm');

    }
//Определение даты начала предидущей недели
    function getLastWeek(){
        $timenow = time();
        $d = getdate();
        switch ($d['wday']){
            case 0:
                $timeLastWeek = $timenow - 13 * 86400;
                $datelastweek = date("Y-m-d",$timeLastWeek);
                //$datelastweek = getdate($timeLastWeek);
                break;
            case 1:
                $timeLastWeek = $timenow - 7 * 86400;
                $datelastweek = date("Y-m-d",$timeLastWeek);
                //$datelastweek = getdate($timeLastWeek);
                break;
            case 2:
                $timeLastWeek = $timenow - 8 * 86400;
                $datelastweek = date("Y-m-d",$timeLastWeek);
                //$datelastweek = getdate($timeLastWeek);
                break;
            case 3:
                $timeLastWeek = $timenow - 9 * 86400;
                $datelastweek = date("Y-m-d",$timeLastWeek);
                //$datelastweek = getdate($timeLastWeek);
                break;
            case 4:
                $timeLastWeek = $timenow - 10 * 86400;
                $datelastweek = date("Y-m-d",$timeLastWeek);
                //$datelastweek = getdate($timeLastWeek);
                break;
            case 5:
                $timeLastWeek = $timenow - 11 * 86400;
                $datelastweek = date("Y-m-d",$timeLastWeek);
                //$datelastweek = getdate($timeLastWeek);
                break;
            case 6:
                $timeLastWeek = $timenow - 12 * 86400;
                $datelastweek = date("Y-m-d",$timeLastWeek);
                //$datelastweek = getdate($timeLastWeek);
                break;
        }
        return $datelastweek;
    }

    //Метод добавления записи

    function add(){
        //
        $model = new Model_Works();
        $model->user_id = 2;
        $model->date = $_GET['date'];
        for ($i=1; $i<16; $i++) {
            $model->joblist_id = $i;
            $model->count = (isset($_GET['jobID_'.$i])) ? (int)$_GET['jobID_'.$i] : false;
            if ($model->count) {$model->save();}
        }



        $this->index();
        //$this->template->view('addresult');
    }

    //Функция определения количества по виду работ за период

    function getCountJob($date1, $date2, $works) {
        $jobCount = array();

        foreach ($works as $key => $val) {
            if (($val['date'] >= $date1) AND ($val['date'] <= $date2)) {
                if (isset($jobCount[$val['joblist_id']])) {
                    $jobCount[$val['joblist_id']] = $jobCount[$val['joblist_id']] + $val['count'];
                }else{
                    $jobCount[$val['joblist_id']] = $val['count'];
                }
            }
        }
        return $jobCount;
    }
}
