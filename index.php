<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
//Мы сегодня создаем свой первый сайт магазина
//файл индекс пхп - это наш контроллер

//обьявляем константу текущей папки проекта
define('ROOT', dirname(__FILE__));
var_dump(ROOT);

//регулярные выражения - еще один способ работы со строками
$string = 'This is a good page 20555'; //входящая строка
$pattern = '/20[0-9a-zA-Z]{2}/'; //шаблон

//20, ot 0 do 9, ot a do z, ot A do Z, 2 simvola posle

//$string = 'This is a good page 2006'; //входящая строка
//$pattern = '/20.*/'; //шаблон
//
//$string = 'This is a good page 2006'; //входящая строка
//$pattern = '/20[0-9/{2}'; //шаблон

//поиск совпадения
$result = preg_match($pattern, $string);

//распечатаем результат
var_dump($result);

include_once ROOT.'/components/Router.php';

$router = new Router();
$router->run();


?>
        
    </body>
</html>
