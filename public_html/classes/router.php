<?php
Class Router {
    private $registry;
    private $path;
    private $args = array();

    //Получаем хранилище
    function __construct($registry) {
        $this->registry = $registry;
    }

    //Задаем путь до папки с контроллерами
    function setPath($path) {
        $path = trim($path, '/\\');
        $path .= DS;
        //Если путь не существует, сигнализируем об этом
        if (is_dir($path) == false) {
            throw new Exception('Invalid controller path: `' . $path . '`');
        }
        $this->path = $path;
    }

    //Определение контроллера и экшена из урла
}