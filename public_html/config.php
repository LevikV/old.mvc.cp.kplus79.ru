<?php
//Задаем константы
define ('DS', DIRECTORY_SEPARATOR); //Разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define('SITE_PATH', $sitePath); //Путь к корневой папке сайта

//Для подключения к БД
define('DB_USER',  'cp_kplus79_mvc');
define('DB_PASS', '211212');
define('DB_HOST', 'localhost');
define('DB_NAME', 'cp_kplus79_mvc');