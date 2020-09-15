<?php
class Controller_Works extends Controller_Base {
    public $layouts = 'first_layouts';
    public $datelastweek;

    function index(){
        $date1 = $this->getLastWeek();
        $date2 = date("Y-m-d", time());
        //'where' => 'id=1',
        //'where' => "date >= $date1 AND date <= $date2"
        //'where' => "date >= 2020-09-01 AND date <= 2020-09-30"
        $select = array(
            'where' => "date >= $date1"
            );
        $model = new Model_Works($select);
        $works = $model->getAllRows();
        //
        //
        $this->template->vars('datelastweek', $this->getLastWeek());
        $this->template->vars('works', $works);
        $this->template->view('index');

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