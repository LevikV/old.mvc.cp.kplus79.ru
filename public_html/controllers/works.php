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





        //Передаем параметры в шаблон контроллера
        $this->template->vars('worksLastWeek', $worksLastWeek);
        $this->template->vars('worksCurrentWeek', $worksCurrentWeek);
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
}