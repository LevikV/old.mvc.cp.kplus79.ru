<?php
Class Model_Posts Extends Model_Base{
    public $id;
    public $post;

    public function fieldsTable(){
        return array(
            'id' => 'ID',
            'post' => 'Post'
        );
    }
}
