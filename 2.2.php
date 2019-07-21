<h2>Теория</h2>

<p>В PHP есть следующие типы данных</p>
<ul>
    <li>integer - Целое число максимальное значение зависит от разрядности операционной системы</li>
    <li>double он же float - Число с плавающей точкой либо e в степени (максимальная степень 308)</li>
    <li>string - строка</li>
    <li>boolean - буленовская переменная принимающая значение true либо false ('' либо 1)</li>
    <li>null - отдельный тип данных означающий "ничего" - то есть память выделена, но переменная пустая.</li>
    <li>Array - массив</li>
    <li>Object - объект</li>
    <li>Resource - Ссылка на ресурс (путь к странице и т.д.) - как то странно но в PHP под это есть отдельный тип данных</li>
    <li>Callable - </li>
</ul>

<hr>

<?php
    $x = 5;
    echo $x;
    echo '<br>';
    echo PHP_INT_MAX;
    echo '<br>';

    $d_1 = 1.5;
    $d_2 = 9.5e5;
    $d_3 = 9.5e-5;

    echo "d_1 = $d_1; d_2 = $d_2; d_3 = $d_3; <br>";

    $s = 'My string';
    echo $s;
    echo '<br>';

    $b_0 = false;
    $b_1 = true;
    echo "b_0 = $b_0; b_1 = $b_1; <br>";

    $obj = null;
    echo "obj = $obj";

    /*
    Остались не рассмотренными следующие типы данных
    Array
    Object
    Resource
    Callable
    */
?>

<hr>

<h2>код урока</h2>
<div class="code">
$x = 5; <br>
    echo $x; <br>
    echo '&lt;br&gt;'; <br>
    echo PHP_INT_MAX; <br>
    echo '&lt;br&gt;'; <br>
    <br>
    $d_1 = 1.5; <br>
    $d_2 = 9.5e5; <br>
    $d_3 = 9.5e-5; <br>
    <br>
    echo "d_1 = $d_1; d_2 = $d_2; d_3 = $d_3; &lt;br&gt;"; <br>
    <br>
    $s = 'My string'; <br>
    echo $s; <br>
    echo '&lt;br&gt;'; <br>
    <br>
    $b_0 = false; <br>
    $b_1 = true; <br>
    echo "b_0 = $b_0; b_1 = $b_1; &lt;br&gt;"; <br>
    <br>
    $obj = null; <br>
    echo "obj = $obj";
</div>

<hr>

<h2>Задание</h2>
<ul>
    <li>Создайте целую переменную с именем age и установите значение у неё в виде Вашего возраста.</li>
    <li>Создайте строковую переменную со значением: «Мой возраст $age лет» и выведите её.</li>
    <li>Создайте вещественную переменную с любым значением и выведите её.</li>
    <li>Создайте и выведите булевскую переменную со значением true, а после поменяйте на false и посмотрите, что изменилось в выводе.</li>
    <li>Создайте переменную со значением null и выведите её. Объясните самому себе, чем отличается null от false, 0 и пустой строки?</li>
</ul>

<hr>

<?php
    $age = 39;
    $my_age = 'Мой возраст';

    echo " $my_age - $age лет <br>";

    $d = 1.5;

    echo "d = $d <br>";

    $b = true;

    echo "b = $b <br>";

    $n = null;

    echo "n = $n";
?>

<hr>

<h2>Код домашнего задания</h2>
<div class="code">
    $age = 39; <br>
    $my_age = 'Мой возраст'; <br>
    <br>
    echo "$my_age - $age лет &lt;br&gt;"; <br>
    <br>
    $d = 1.5; <br>
    <br>
    echo "d = $d &lt;br&gt;"; <br>
    <br>
    $b = true; <br>
    <br>
    echo "b = $b &lt;br&gt;"; <br>
    <br>
    $n = null; <br>
    <br>
    echo "n = $n"; <br>
</div>