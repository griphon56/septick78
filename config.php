<?php
// Домен.
define('PATH', $_SERVER['DOCUMENT_ROOT']);

// Модель.
define('MODEL', 'Model/Model.php');

// Контроллер.
define('CONTROLLER', 'Controller/Controller.php');

// Вид.
define('VIEW', '/View/');

// папка с активным шаблоном
define('TEMPLATE', PATH.VIEW);

// папка с картинками контента
//define('PRODUCTIMG', PATH.'userfiles/product_img/baseimg/');

// папка с картинками галереи
//define('GALLERYIMG', PATH.'userfiles/product_img/');

// максимально допустимый вес загружаемых картинок - 1 Мб
define('SIZE', 1048576);

// сервер БД
define('HOST', 'localhost');

// Пользователь
define('USER', 'root');

// Пароль
define('PASS', '');

// БД
define('DB', 'septic');

// название магазина - title
define('TITLE', 'Септик5.рф');

// email администратора
define('ADMIN_EMAIL', '');

$link = mysqli_connect(HOST, USER, PASS,DB) or die('No connect to Server');
mysqli_query($link, "SET NAMES 'UTF8'") or die('Cant set charset');
?>