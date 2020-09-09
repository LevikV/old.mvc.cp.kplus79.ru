<?php
Class Model_Users Extends Models_Base {
    public $id;
    public $name;
    public $last_name;

    public function fieldsTable() {
        return array(
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name'
        );
    }

    public function getUser(){
        return array('id'=>1, 'name'=>'test_name');
    }
}
?>