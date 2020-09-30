<?php
class Controller_Users extends Controller_Base{
    public $layouts = 'first_layouts';

    function index()
    {
        if (isset($_SESSION['userID'])){
            $this->template->view('index');
        }else{
            $this->login();
        }
    }

    //Авторизация пользователя
    function login(){
        //Если была нажата кнопка, то проверяем введенные данные
        if ((isset($_POST['email'])) && ($_POST['email'] != '') && ($_POST['pwd'] != '')) {
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            //Создаем запрос к БД для выборки пользователя по email
            $select = array(
                'where' => "email = '$email'"
            );
            $model = new Model_Users($select);
            $user = $model->getOneRow();
            //Получаем хеш пароля пользователя из БД
            $hash = $user['pwd'];
            //Проверяем пароль совпадает или нет
            if (password_verify($pwd, $hash)) {
                //
                $_SESSION['userID'] = $user['id'];
                $_SESSION['userPostID'] = $user['post_id'];
                $_SESSION['userFirstName'] = $user['first_name'];
                $_SESSION['userLastName'] = $user['last_name'];
                $_SESSION['userEmail'] = $user['email'];
                //
                $this->template->view('index');
            }else{
                //Пароли не совпали
            }
        }else{
            $this->template->view('login');
        }
    }

    //Выход пользователя
    function logout(){
        $_SESSION = array();
        setcookie(session_name(), '', time() - 2592000, '/');
        session_destroy();
        header('Location: /');
        exit();
    }
}
