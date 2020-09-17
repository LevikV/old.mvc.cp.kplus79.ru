<?php
class Controller_Works extends Controller_Base {
    public $layouts = 'first_layouts';
    public $datelastweek;

    function index(){
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
        //
        //Заполняем массив работ предидущей недели
        //
        $worksLastWeek = array(
            array(
                'date' => $works[0]['date'],
                $works[0]['joblist_id'] => $works[0]['count']
            )
        );
        for ($i=0; $i < count($works); $i++){
            for ($j=0; $j < count($works); $j++) {
                if (isset($worksLastWeek[$i]['date'])) {
                    if ($worksLastWeek[$i]['date'] == $works[$j]['date']) {
                        $worksLastWeek[$i][$works[$j]['joblist_id']] = $works[$j]['count'];
                    }
                }elseif (!(in_array($works[$j]['date'], $worksLastWeek, true))) {
                    $worksLastWeek[$i]['date'] = $works[$j]['date'];
                    $worksLastWeek[$i][$works[$j]['joblist_id']] = $works[$j]['count'];
                }
            }
        }



        foreach ($works as $key => $val) {

        }

        //Передаем параметры в шаблон контроллера
        $this->template->vars('datelastweek', $this->getLastWeek());
        $this->template->vars('works', $works);
        //В зависимости от типа пользователя выбираем нужное отображение
        $this->template->view('indexmm');

    }
//Определение даты начала предидущей недели
    function getLastWeek(){
        $timenow = time();
        $d = getdate();
        switch ($d['wday']){
            case 0:
                $timelastweek = $timenow - 13 * 86400;
                $datelastweek = date("Y-m-d",$timelastweek);
                //$datelastweek = getdate($timelastweek);
                break;
            case 1:
                $timelastweek = $timenow - 7 * 86400;
                $datelastweek = date("Y-m-d",$timelastweek);
                //$datelastweek = getdate($timelastweek);
                break;
            case 2:
                $timelastweek = $timenow - 8 * 86400;
                $datelastweek = date("Y-m-d",$timelastweek);
                //$datelastweek = getdate($timelastweek);
                break;
            case 3:
                $timelastweek = $timenow - 9 * 86400;
                $datelastweek = date("Y-m-d",$timelastweek);
                //$datelastweek = getdate($timelastweek);
                break;
            case 4:
                $timelastweek = $timenow - 10 * 86400;
                $datelastweek = date("Y-m-d",$timelastweek);
                //$datelastweek = getdate($timelastweek);
                break;
            case 5:
                $timelastweek = $timenow - 11 * 86400;
                $datelastweek = date("Y-m-d",$timelastweek);
                //$datelastweek = getdate($timelastweek);
                break;
            case 6:
                $timelastweek = $timenow - 12 * 86400;
                $datelastweek = date("Y-m-d",$timelastweek);
                //$datelastweek = getdate($timelastweek);
                break;
        }
        return $datelastweek;
    }
}