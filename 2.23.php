<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Обработка форм</title>
</head>
<body>
    <main>
        <h1>Обработка форм</h1>
        <ul>
            <li>$_GET - Передача данных методом GET</li>
            <li>$_POST - Передача данных методом POST</li>
            <li>$_REQUEST - Оба вышеперечисленных массива данных</li>
        </ul>
        <h3>action=&lt;?=$_SERVER['REQUEST_URI']?&gt;</h3>
        <hr>
        <form name="my_form" action="<?=$_SERVER['REQUEST_URI']?>" method="get">
            <input type="number" name="x" id="">
            <input type="number" name="y" id="">
            <input type="submit" name="my_form" value="Сумма">
        </form>
        <?php
            echo 'Массив $_GET <pre>'.print_r($_GET,true).'</pre>';
            echo '<br /> Массив $_POST <pre>'.print_r($_POST,true).'</pre>';
            echo '<br /> Массив $_REQUEST <pre>'.print_r($_REQUEST,true).'</pre>';
        ?>
        <hr>
        <?php
            if (isset($_GET['my_form']) && is_numeric($_GET['x']) && is_numeric($_GET['y'])) 
            {
                echo 'Форма отправлена. <br />';
                $x = $_GET["x"];
                $y = $_GET["y"];
                echo 'Сумма x + y = '.($x + $y);
            }
        ?>
    <h2>Задание</h2>
        <ul>
            <li>Создайте форму с method=”post”.</li>
            <li>В форме должны быть текстовая область (textarea) и кнопка.</li>
            <li>В обработчике необходимо принять строку из текстовой области.</li>
            <li>Создайте массив, где каждый элемент будет содержать 1 символ из переданной строки.</li>
            <li>Удалите каждый чётный элемент (то есть 0, 2, 4 и так далее).</li>
            <li>Соедините все элементы получившегося массива в одну строку и выведите её.</li>
        </ul>
        <hr>
        <form name="Lesson" action="<?=$_SERVER['REQUEST_URI']?>" method="post">
            <textarea name="lesson_text" id="" cols="30" rows="10"></textarea>
            <p><input type="submit" name = "lesson_submit" value= "Обработать введенный текст"></p>
        </form>
        <?php
            $str = $_POST['lesson_text'];
            $newstr = '';
            echo 'Вы ввели строку = '.$_POST['lesson_text'].'<br /> Результат ее обработки: ';
                for ($i = 0; $i < strlen($str); $i++){
                    if ($i%2 != 0)
                    echo $str[$i];
                }
            print_r($str[8]);
        ?>
            <div class="code">
                $str = $_POST['lesson_text']; <br />
                $newstr = ''; <br />
                echo 'Вы ввели строку = '.$_POST['lesson_text'].'&lt;br /&gt; Результат ее обработки: '; <br />
                    for ($i = 0; $i < strlen($str); $i++){ <br />
                        if ($i%2 != 0) <br />
                        echo $str[$i]; <br />
                    } <br />
                print_r($str[8]); 
            </div>
    </main>
</body>
</html>