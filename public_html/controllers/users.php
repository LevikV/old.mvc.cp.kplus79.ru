<?php
class Controller_Users extends Controller_Base{
    public $layouts = 'first_layouts';

    function index()
    {
        if (isset($_SESSION['userID'])){
            //
        }else{
            $this->login();
        }
    }

    //Авторизация пользователя
    function login(){
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
        }else{
            $this->template->view('login');
        }
    }
}
