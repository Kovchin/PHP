<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Операции с массивами</title>
</head>
<body>
    <main>
        <h1>Операции с массивами</h1>
        <h2>list - Позволяет присвоить элементы массива списку переменных</h2>
        <p>Что бы продемонстрировать заем эта функция нужна и что делает рассмотрите 2 варианта добиться отдного и того же результата через list  и стандартным способом.</p>
        <div class="code">
        //---1--- <br>
        $arr = ['Kovchin', 'Pavel', 39]; <br>
        $firstname = $arr[0]; <br>
        $surname = $arr[1]; <br>
        $age = $arr[2]; <br>
        echo "$firstname , $surname , $age"; <br>
        //---2--- <br>
        list($firstmane, $surname, $age) = $arr; <br>
        echo "$firstname , $surname , $age"; <br>
        </div>
        <?php
            //---1---
            $arr = ['Kovchin', 'Pavel', 39];
            $firstname = $arr[0];
            $surname = $arr[1];
            $age = $arr[2];
            echo "$firstname , $surname , $age <br>";
            //---2---
            list($firstmane, $surname, $age) = $arr;
            echo "$firstname , $surname , $age <br>";
        ?>
        <h2>Объединение массивов</h2>
        <p>При объединении массивов данные с одинаковыми индексами исчезают все кроме первых</p>
        <?php
        $arr1 = [1,2,3];
        $arr2 = [4,5,6];
        $arr0 = ['','','',7,8,9];
        $arr3 = $arr1 + $arr2 + $arr0;
        foreach ($arr3 as $value)
        echo $value.', ';
        ?>
        <div class="code">
        $arr1 = [1,2,3]; <br>
        $arr2 = [4,5,6]; <br>
        $arr0 = ['','','',7,8,9]; <br>
        $arr3 = $arr1 + $arr2 + $arr0; <br>
        foreach ($arr3 as $value) <br>
        echo $value.', ';
        </div>
        <h2>Задания</h2>
        <ul>
            <li>Создайте 2 массива с целыми числами: по 5 и 7 элементов соответственно.</li>
            <li>Объедините 2 массива в 1.</li>
            <li>Выведите все чётные числа из получившегося массива.</li>
        </ul>
        <h2>Реализация</h2>
        <?php
//создание 2-ух массивов
        $arr1 = [1,2,3,4,5];
        $arr2 = [6,7,8,9,10,11,12,13];
//объединение массивов
        $arr3 = $arr1;
        foreach ($arr2 as $value)
        $arr3[] = $value;
//вывод только четных
        foreach ($arr3 as $value)
        if ($value % 2 == 0)
        echo $value.', ';
        ?>
        <div class="code">
        //создание 2-ух массивов <br>
        $arr1 = [1,2,3,4,5]; <br>
        $arr2 = [6,7,8,9,10,11,12,13]; <br>
        //объединение массивов <br>
        $arr3 = $arr1; <br>
        foreach ($arr2 as $value) <br>
        $arr3[] = $value; <br>
        //вывод только четных <br>
        foreach ($arr3 as $value) <br>
        if ($value % 2 == 0) <br>
        echo $value.', ';
        </div>
    </main>
</body>
</html>