<?php
Class Controller_Index Extends Controller_Base {
    //Шаблон
    public $layouts = "first_layouts";

    //Экшен
    function index() {
        //$model = new Model_Users();
        //$userInfo = $model->getUser();
        //$this->template->vars('userInfo', $userInfo);
        if (isset($_SESSION['userID'])) {
            $this->template->view('index');
        }else{
            header('Location: /users');
            exit();
        }

    }
}