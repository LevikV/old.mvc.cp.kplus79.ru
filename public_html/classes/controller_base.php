<?php
//Абстрактный класс контроллера
Abstract Class Controller_Base {
    protected $registry;
    protected $template;
    protected $layouts; //шаблон

    public $vars = array();

    //В конструкторе подключаем шаблоны
    function __construct($registry) {
        //Открываем сессию для любого контроллера
        session_start();
        //
        $this->registry = $registry;
        //шаблоны
        $this->template = new Template($this->layouts, get_class($this));
    }
    abstract function index();
}