<?php
error_reporting(0);

require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";  

set_error_handler("myError");

setlocale(LC_ALL, "ru_RU");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
$hour = (int)strftime('%H');
$welcome = "";

if ($hour > 0 && $hour < 6)
    $welcome = 'Доброй ночи';
elseif ($hour >= 6 && $hour < 12)
    $welcome = 'Доброе утро';
elseif ($hour >= 12 && $hour < 18)
    $welcome = 'Добрый день';
elseif ($hour >= 18 && $hour < 23)
    $welcome = 'Добрый вечер';
else
    $welcome = 'Доброй ночи';

//Title initialization
$title = "Сайт нашей школы";
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));

switch($id) {
    case 'about':
        $title = "О сайте";
        $header = "О нашем сайте";
        break;
    case 'contact':
        $title = "Контакты";
        $header = "Обратная связь";
        break;
    case 'table':
        $title = "Таблица умножения";
        $header = "Таблица умножения";
        break;
    case 'calc':
        $title = "Онлайн калькулятор";
        $header = "Калькулятор";
        break;   
}
?>

<!DOCTYPE html>
<html>

<head>
  <title><?=$title?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
    require_once "inc/top.inc.php"
    ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?=$header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <?php
        switch ($id){
            case 'about':
                include 'about.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            case 'table':
                include 'table.php';
                break;
            case 'calc':
                include 'calc.php';
                break;
            default:
                include 'inc/index.inc.php';
        }
      ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <!-- Меню -->
    <?php
    require_once "/inc/menu.inc.php";
    ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
      <?php
      require_once "/inc/bottom.inc.php"
      ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>
</html>