<?php
class Controller_Works extends Controller_Base {
    public $layouts = 'first_layouts';

    function index(){
        $select = array(
            'where' => 'id = 1',
        );
        $model = new Model_Works($select);
        $works = $model->getOneRow();

        $this->template->vars('works', $works);
        $this->template->view('index');

    }
}