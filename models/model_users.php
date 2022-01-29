<?php
class Model_Users extends Model_Base {
    public $id;
    public $name;
    public $last_name;
    public $post_id;
    public $pwd;
    public $email;

    public function fieldsTable() {
        return array(
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'post_id' => 'Post ID',
            'pwd' => 'Password',
            'email' => 'E-mail',
        );
    }
}
?>