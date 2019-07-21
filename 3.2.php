<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <title>Функции для работы со строками</title>
</head>
<body>
    <main>
        <h1>Функции для работы со строками</h1>
        <?php
            $s1 = 'Hello world!';
            $s2 = 'Привет мир!';

            echo 'Строка s1 = '.$s1.'<br />';
            echo 'Строка s2 = '.$s2.'<br />';

            echo '4-ый символ строки <b>s1[3]</b> = '.$s1[3].'<br />';
            echo '4-ый символ строки <b>s2[3]</b> = '.$s2[3].'<br />';

            echo 'Длинна строки <b>strlen</b>(s1) = '.strlen($s1).'<br />';
            echo 'Длинна строки <b>strlen</b>(s2) = '.strlen($s2).'<br />';

        ?>
        <h3>Такое расхождение вызвано тем что английские буквы кодируются 1 байтом, а кирилица 2-мя</h3>
        <p>Этого избежать можно при помощи методов библиотеки <b>mb</b></p>

        <?php
            echo 'Длинна строки s1 при помощи метода <b>mb_strlen</b> = '.mb_strlen($s1).'<br />';
            echo 'Длинна строки s2 при помощи метода <b>mb_strlen</b> = '.mb_strlen($s2).'<br />';

            echo 'Поиск в строке <b>strpos</b>(s1, "искомый элемент строки") = '.strpos($s1, 'll').'<br /> <hr>';

            if (strpos($s2, 'При') !== false)
                echo strpos($s2,'При');
                else echo 'Подстрока не найдена!';
            echo '<br />';
        ?>
            <div class="code">
            if (strpos($s2, 'При') !== false) <br />
                echo strpos($s2,'При'); <br />
                else echo 'Подстрока не найдена!';<br />
            echo '&lt;br /&gt;';<br />
            </div>
            <?php
                echo 'Поиск подстроки в строке <b>mb_substr($s2, "С какой позиции","Сколько символов");</b> <br /> mb_substr($s2, 7, 3) = '.mb_substr($s2, 7, 3).'<br /><br />';
                echo 'Функция обрезающая пробелы до и после значимого текста в нашей строке (trim(Наша строка)) <br />';
                $s3 = '    Привет амлет и куча пробелов.    ';
                echo 'Строка s3 = '.$s3.'<br />';
                echo 'После удаления пробелов в строке <b>trim($s3)</b> = '. trim($s3).'<br /> <hr>';                
            ?>
            <p>Здесь этого не видно, но в тексте HTML документа <i>(ctrl+U)</i> можно наблюдать как после функции trim  все пробелы в строке s3 удалились</p>
<hr>
            <p>Функция позволяющая производить замену в строке <b>str_replace</b>('что меняем', 'на что меняем', 'наша строка');</p>
            <p>Произведем замену всех букв 'и' на &lt;b&gt;и&lt;/b&gt;</p>
            <?php
                echo "str_replace('и', '&lt;b&gt;и&lt;/b&gt;',$s2) = ".str_replace('и', '<b>и</b>',$s2).'<br /><hr>';
                $s4 = 'Здравствуйте %name%. Вы зарегистрировались у меня на сайте %site%.';
                echo 'Строка s4 = '.$s4.'<br/ >';
                echo 'Произведем замену <i>%name%</i> и <i>%site%</i> на <i>Павел</i> и <i>kovchin.com</i> </br>';
                echo str_ireplace(['%name%', '%site%'], ['Павел','kovchin.com'],$s4);
            ?>
            <div class="code">
            $s4 = 'Здравствуйте %name%. Вы зарегистрировались у меня на сайте %site%.';<br />
            echo str_ireplace(['%name%', '%site%'], ['Павел','kovchin.com'],$s4);
            </div>
<ul>
    <li>mb_strtolower('Наша строка'); - заменяет все символы строчными буквами</li>
    <li>mb_strtoupper('Наша строка'); - аналог text-transform: uppercase; в CSS</li>
</ul>   
<?='mb_strtolower($s1) = '.mb_strtolower($s1).'<br />'?>
<?='mb_strtoupper($s1) = '.mb_strtoupper($s1).'<br />'?>
<hr>
<p>Получить всю строку URL включая параметры и спец символы и обратная ей функция</p>
<ul>
    <li>urlencode()</li>
    <li>urldecode()</li>
</ul>
<?php
    $s5 = 'Hello <b> My frends</b>!';
?>
    <p>К примеру есть у на строка $s5 = <?=$s5?><pre>Hello &lt;b&gt;My frends&lt;/b&gt;!</pre></p>
    <p>Результат urlencode($s5) = <?=urlencode($s5).'<br />'?></p>
    <p>И наоборот если передать всю верхнюю строку в urldecode то получим просто</p>
    <?=urldecode('Hello+%3Cb%3E+My+frends%3C%2Fb%3E%21')?>
    <hr>
    <h4>htmlspecialchars() - эта функция переводит html код в обычный текст с заменой всех тегов спец символами</h4>
    <?=htmlspecialchars('<br /> <')?>
    <p>Если глянуть в код страницы то все кавычки и спец символы заменились на их коды то есть мы получили хитрую строку</p>
    <h4>striptags($5); - Удаляет все теги из переданной ей строки</h4>
    <?='strip_tags($s5) = '.strip_tags($s5).'<br />'?>
    <h2>Хэш = md5</h2>
    <p>Для получения хеш переданной строки достаточно дать команду md5('text');</p>
    <?='Хэш строки s1 ('.$s1.') = '.md5($s1).'<br />'?>
    <hr>
    <p>Для получения уникальной строки привязанной к системному времени сервера можно воспользоваться функцией <b>uniqid()</b></p>
    <?='uniqid() = '.uniqid()?>
    <h4>И последние 2 функции работы со строками</h4>
    <ul>
        <li>nl2br - добавляет к символу перевода каретки (\n) тег &lt;br /&gt;</li>
        <li>wordwrap('text', 'длинна строки') - форматирует текст под указанную длину строки</li>
    </ul>
    <h2>Задание</h2>
    <ul>
        <li>Создайте форму с текстовой областью и текстовым полем.</li>
        <li>Выведите длину строки из текстовой области.</li>
        <li>Выведите всю строку из текстовой области, а те места, где есть совпадение с тем, что совпадает со строкой из текстового поля, выделите тегом &lt;b&gt;.</li>
    </ul>
    <form action=<?=$_SERVER['REQUEST_URI']?> method="get">
        <p><textarea name="text_in" id="" cols="30" rows="10">Введите текст</textarea></p>
        <p><input type="text" name="text_in_b" id="" value="текст для подсветки"></p>
        <p><button type="submit">Форматировать текст</button></p>
    </form>
    <?php
        if (mb_strlen($_GET['text_in']) > 0){
            $str = $_GET['text_in'];
            echo 'Длинна строки '.$str.' = '.mb_strlen($str).'<br />';
        }
            else
            echo 'Вы не написали текст текст <br />';   

        if (mb_strlen($_GET['text_in_b']) > 0)
        {
            echo 'Текст для подсветки найден <br />';
            $str_b = $_GET['text_in_b'];
        }
            else
            echo 'Не найден текст для подсветки <br />';
        
           echo str_replace($str_b, '<b>'.$str_b.'</b>', $str);
        
    ?>
</main> 
</body>
</html>