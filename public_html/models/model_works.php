<?php
class Model_Works extends Model_Base{
    public $id;
    public $user_id;
    public $joblist_id;
    public $count;
    public $date;

    public function fieldsTable(){
        return array(
            'id' => 'ID',
            'user_id' => 'User ID',
            'joblist_id' => 'Joblist ID',
            'count' => 'Count',
            'date' => 'Date',
        );
    }
}