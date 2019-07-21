<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автоматическое подключение классов</title>
</head>

<body>
    <h1>Автоматическое подключение классов</h1>
    <h2>В PHP есть методы позволяющие автоматической подгрузки классов</h2>
    <p>Для автоматической подгрузки классов есть 2 способа</p>
    <ul>
        <p>Если один раздел с классами</p>
        <li>function __autoload($classname)<br />
            {<br />
            require_once "4/lib_4.13/class_{$classname}.php";<br />
            }</li>
        <p>Если мест для библиотек больше одной используется следующая конструкция</p>
        <li>
            set_include_path(get_include_path().PATH_SEPARATOR.'4/lib_4.13');<br />
            spl_autoload_extensions('_class.php');<br />
            spl_autoload_register();<br />

            <ul>
                <li>
                    get_include_path() - показать путь библиотек php;
                <li>
                    set_include_path() - установить путь библиотек php;
                </li>
                <li>
                    PATH_SEPARATOR - разделитель;
                </li>
                <li>
                    spl_autoload_extensions('_class.php'); - Устанавличваем расширение что не будет счиаться именем класса
                </li>
                <li>
                    spl_autoload_register(); - регистрируем автоматический загрузчик библиотек
                </li>
            </ul>
        </li>
    </ul>

    <?PHP
    //============
    //      1 
    //============
    //Стандартное подключение библиотек
    //require_once '4/lib_4.13/class_point.php';
    //============
    //      2 
    //============
    //Реалтзация __autoload()
    function __autoload($classname)
    {
        require_once "4/lib_4.13/{$classname}_class.php";
    }
    /*
    //============
    //      3
    //============
    set_include_path(get_include_path() . PATH_SEPARATOR . '4/lib_4.13');
    spl_autoload_extensions('_class.php');
    spl_autoload_register();
    */
    $u = new User;
    $p = new Point;
    echo $p->x;
    echo $u->name;
    ?>
</body>

</html>