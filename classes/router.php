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
        $path = rtrim($path, '/\\');
        $path .= DS;
        //Если путь не существует, сигнализируем об этом
        if (is_dir($path) == false) {
            throw new Exception('Invalid controller path: `' . $path . '`');
        }
        $this->path = $path;
    }

    //Определение контроллера и экшена из урла
    private function getController(&$file, &$controller, &$action, &$args) {
        $route = (empty($_GET['route'])) ? '' : $_GET['route'];
        unset($_GET['route']);
        if (empty($route)) {
            $route = 'index';
        }
        //Получаем части урл
        $route = rtrim($route, '/\\');
        $parts = explode('/', $route);

        //Находим контроллер
        $cmd_path = $this->path;
        foreach ($parts as $part) {
            $fullpath = $cmd_path . $part;
            //Проверка существования папки
            if (is_dir($fullpath)) {
                $cmd_path .= $part . DS;
                array_shift($parts);
                continue;
            }
            //Находим файл
            if (is_file($fullpath . '.php')) {
                $controller = $part;
                array_shift($parts);
                break;
            }
        }
        //Если в урле не указан контроллер, то используем по умолчанию index
        if (empty($controller)) {
            $controller = 'index';
        }
        //Получаем экшен
        $action = array_shift($parts);
        if (empty($action)) {
            $action = 'index';
        }
        $file = $cmd_path . $controller . '.php';
        $args = $parts;
    }

    function start() {
        //Анализируем путь
        $this->getController($file, $controller, $action, $args);

        //Проверка существования файла, иначе 404
        if (is_readable($file) == false) {
            die ('404 Not Found');
        }

        //Подключаем файл
        include ($file);

        //Создаем экземпляр контроллера
        $class = 'Controller_' . $controller;
        $controller = new $class($this->registry);

        //Если экшен не существует - 404
        if (is_callable(array($controller, $action)) == false) {
            die ('404 Not Found');
        }

        //Выполняем экшен
        $controller->$action();
    }
}