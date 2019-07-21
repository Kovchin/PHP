<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <link rel="stylesheet" href="css/tabs.css">
    <script src="JS\jquery-3.4.1.min.js"></script>
    <script src="JS\show_hide.js" defer></script>
    <title>Функции для работы с каталогами</title>
</head>

<body>
    <main>
        <h1>Функции для работы с каталогами</h1>
        <h3> mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = FALSE [, resource $context ]]] ) : bool - создает директорию</h3>
        <h3> rmdir ( string $dirname [, resource $context ] ) : bool - удаляет директорию</h3>
        <h3> glob ( string $pattern [, int $flags = 0 ] ) : array - находит файловые пути совпадающие с шаблоном</h3>
        <h3> scandir ( string $directory [, int $sorting_order = SCANDIR_SORT_ASCENDING [, resource $context ]] ) : array - Получает список файлов и каталогов по указанному пути</h3>
        <?php
        mkdir('3/3.8');
        rmdir('3/3.8');
        $arr = glob('*.ini');
        echo '<pre>';
        print_r($arr);
        echo '</pre>';

        //Функция выводит всю структуру папки, включая вложенные.

        function printDir($folder, $space = '')
        {
            $files = scandir($folder);
            foreach ($files as $file) {
                if ($file == '.' || $file == '..') continue;
                $f = $folder . '/' . $file;
                echo $space . $file . '<br />';
                if (is_dir($f)) printDir($f, $space . '&nbsp;&nbsp;');
            }
        }
        printDir('C:\server\domains\phpinfo');
        ?>
        <div class="code">
            mkdir('3/3.8'); <br />
            rmdir('3/3.8'); <br />
            $arr = glob('*.ini'); <br />
            echo '&lt;pre&gt;'; <br />
            print_r($arr); <br />
            echo '&lt;/pre&gt;'; <br />
            <br />
            //Функция выводит всю структуру папки, включая вложенные. <br />
            <br />
            function printDir($folder, $space = '') <br />
            { <br />
            $files = scandir($folder); <br />
            foreach ($files as $file) { <br />
            if ($file == '.' || $file == '..') continue; <br />
            $f = $folder . '/' . $file; <br />
            echo $space . $file . '&lt;br /&gt;'; <br />
            if (is_dir($f)) printDir($f, $space . '&nbsp;&nbsp;'); <br />
            } <br />
            } <br />
            printDir('C:\server\domains\phpinfo');
        </div>
        <h3>Задание</h3>
        <ul>
            <li>Создайте через PHP 5 директорий со случайными именами (например, с помощью функции uniqid()) рядом с index.php, где и запускается скрипт.</li>
            <li>Зайдите случайным образом в любую из директории с помощью PHP и создайте там файл со случайным названием.</li>
            <li>Проверьте всё это.</li>
            <li>Удалите всё, что было создано в 1-м и 2-м пункте через PHP.</li>
        </ul>
        <?php
        //Создаем новую директорию со случайным именем  и префиксом New в каталоге исполнения php скрипта
        mkdir(uniqid('New'));
        //Получаем массив каталогов с префиксом New
        $new = (glob('New*'));
        //Создаем случайный файл *.txt в случайном каталоге с префиксом New
        $nf = fopen(($new[mt_rand(0, count($new) - 1)] . '/' . uniqid() . '.txt'), 'w');
        fclose($nf);
        //Обновляем массив файлов с префиксом New
        $new = (glob('New*'));
        //Пробегаем по всем директориям с префиксом New
        foreach ($new as $key) {
            $arr_files = scandir($key);
            //Заходим в каждую и анализируем на наличие файлов.
            foreach ($arr_files as $file)
                if ($file == '.' || $file == '..') continue;
            //Удаляем все файлы в директориях
            unlink($key . '/' . $file);
            //Удаляем директории с префиксом New
            rmdir($key);
        }
        ?>
        <div class="code">
            mkdir(uniqid('New')); <br />
            $new = (glob('New*')); <br />
            $nf = fopen(($new[mt_rand(0, count($new) - 1)] . '/' . uniqid() . '.txt'), 'w'); <br />
            fclose($nf); <br />
            $new = (glob('New*')); <br />
            foreach ($new as $key) { <br />
            $arr_files = scandir($key); <br />
            foreach ($arr_files as $file) <br />
            if ($file == '.' || $file == '..') continue; <br />
            unlink($key . '/' . $file); <br />
            rmdir($key); <br />
            }
        </div>
    </main>
</body>

</html>