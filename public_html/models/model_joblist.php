<?php
Class Model_Joblist Extends Model_Base {
    public $id;
    public $job;
    public $price;

    public function fieldsTable() {
        return array(
          'id' => 'ID',
          'job' => 'Job',
          'price' => 'Price',
        );
    }
}
