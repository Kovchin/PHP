<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <link rel="stylesheet" href="css\tabs.css">
    <script src="JS\jquery-3.4.1.min.js"></script>
    <script src="js\show_hide.js" defer></script>
    <title>Парсинг ini файлов</title>
</head>

<body>
    <main>
        <h1>Парсинг ini файлов</h1>
        <h3>В php очень просто работать с данными ini файлов</h3>
        <p>Для этого используется 2 функции</p>
        <p>parse_ini_file</p>
        <p>parse_ini_string</p>
        <div class="block">
            <h2>parse_ini_file</h2>
            <p>parse_ini_file('путь к файлу',если указать true то вернется двухмерный массив с разделами ini файла)</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $arr = parse_ini_file('3/3.6.ini', true);
                        echo '<pre>';
                        print_r($arr);
                        echo '</pre> <br />';
                        $arr = parse_ini_file('3/3.6.ini');
                        echo 'Одномерный массив без учета секций ini файла <br /> <pre>';
                        print_r($arr);
                        echo '</pre> <br />';
                        ?>
                    </div>
                    <div>
                        $arr = parse_ini_file('3/3.6.ini', true); <br />
                        echo ' <br />
                        &lt;pre&gt;'; <br />
                        print_r($arr); <br />
                        echo '&lt;/pre&gt; &lt;br /&gt;'; <br />
                        $arr = parse_ini_file('3/3.6.ini'); <br />
                        echo 'Одномерный массив без учета секций ini файла &lt;br /&gt; <br />
                        &lt;pre&gt;'; <br />
                        print_r($arr); <br />
                        echo '&lt;/pre&gt; &lt;br /&gt;';
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <h2>Задание</h2>
            <ul>
                <li>Создайте INI-файл, где укажите цвет текста и его размер.</li>
                <li>Создайте простую HTML-страницу (обязательно с DOCTYPE и всеми базовыми HTML-тегами: html, head, body).</li>
                <li>Добавьте пару абзацев с помощью тега &lt;p&gt;.</li>
                <li>Получите данные из INI-файла и подставьте их внутри тега &lt;style&gt;, чтобы у текста внутри тега &lt;p&gt; был соответствующий цвет и размер.</li>
                <li>Создайте 2 языковых файла ru.ini и en.ini, где будут языковые константы и их перевод. Например, TITLE=Заголовок – в ru.ini, и TITLE=Title – в en.ini. Далее нужно проанализировать массив $_SERVER и узнать, какой язык предпочтительнее у пользователя. И вывести TITLE из того файла, который будет соответствовать языку пользователя. При этом если задать GET-параметр: lang=ru или lang=en – должно выводиться соответствующее представление языковой константы TITLE, независимо от того, что находится в массиве $_SERVER.</li>
            </ul>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <form action=<?= $_SERVER['REQUEST_URI'] ?> method="get">
                            <p>Выберете язык</p>
                            <select name="language" id="">
                                <option value="Ru">Русский</option>
                                <option value="En">English</option>
                            </select>
                            <hr>
                            <input type="submit" value="Выбрать язык">
                        </form>

                        <?php
                        $ini = parse_ini_file('3/3.6.ini');
                        $color = $ini['color'];
                        $font_size = $ini['font-size'];
                        echo "<style> p { color : $color; font-size: $font_size} </style>";
                        if ($_GET['language'] == 'Ru') {
                            $lang = parse_ini_file('3/3.6.ru.ini');
                            echo $lang['p'];
                        } else if ($_GET['language'] == 'En') {
                            $lang = parse_ini_file('3/3.6.en.ini');
                            echo $lang['p'];
                        } else echo 'Ничего не выбрано'
                        ?>
                    </div>
                    <div>
                        $ini = parse_ini_file('3/3.6.ini'); <br />
                        $color = $ini['color']; <br />
                        $font_size = $ini['font-size']; <br />
                        echo "&lt;style&gt; p { color : $color; font-size: $font_size} &lt;/style&gt;"; <br />
                        if ($_GET['language'] == 'Ru') { <br />
                            $lang = parse_ini_file('3/3.6.ru.ini'); <br />
                            echo $lang['p']; <br />
                        } else if ($_GET['language'] == 'En') { <br />
                            $lang = parse_ini_file('3/3.6.en.ini'); <br />
                            echo $lang['p']; <br />
                        } else echo 'Ничего не выбрано'
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>