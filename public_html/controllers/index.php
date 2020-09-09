<?php
Class Controller_Index Extends Controller_Base {
    //Шаблон
    public $layouts = "first_layouts";

    //Экшен
    function index() {
        //$model = new Model_Users();
        //$userInfo = $model->getUser();
        //$this->template->vars('userInfo', $userInfo);
        $this->template->view('index');
    }
}