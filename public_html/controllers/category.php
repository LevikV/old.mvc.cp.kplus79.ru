<?php
class Controller_Category extends Controller_Base {
    public $layouts = 'first_layouts';

    function index() {
    $idCategory = (isset($_GET['id'])) ? (int)$_GET['id'] : false;
    if ($idCategory) {
        $select = array(
            'where' => "is_active = 1 AND id_category = $idCategory", //условие
            'order' => 'date_create DESC' //сортируем
        );
        $model = new Model_Article($select); //Создаем объект модели
        $articles = $model->getAllRows(); //Получаем все строки
    } else {
        $articles = false;
    }

    $this->template->vars('articles', $articles);
    $this->template->view('index');
}
}