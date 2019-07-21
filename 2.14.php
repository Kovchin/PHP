<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>foreach</title>
</head>
<body>
    <h1>Цикл foreach</h1>
    <h2>Обычный список</h2>
    <div class="code">
    $arr = [5, 'test', true, 5.7, [5,3]]; <br>
    <br>
    foreach ($arr as $value) <br>
    echo $value.' ';
    </div>
<?php
    $arr = [5, 'test', true, 5.7, [5,3]];

    foreach ($arr as $value)
    echo $value.' ';
?>
<h2> Ассоциативный массив</h2>
<div class="code">
$arr_1 = [ <br>
        [ <br>
            'name' =&gt; 'Pavel', <br>
            'age' =&gt; 39 <br>
        ], <br>
        [ <br>
            'name' =&gt; 'Michael', <br>
            'age' =&gt; 29 <br>
        ], <br>
        [ <br>
            'name' =&gt; 'Maxim', <br>
            'age' =&gt; 33 <br>
        ] <br>
    ]; <br>
    foreach ($arr_1 as $value){ <br>
            <span class='red'>foreach ($value as $kk =&gt; $v)</span> <br>
            echo $kk.' - '.$v.' , '; <br>
        echo '&lt;br&gt;'; <br>
        }
</div>
<?php
    $arr_1 = [
        [
            'name' => 'Pavel',
            'age' => 39
        ],
        [
            'name' => 'Michael',
            'age' => 29
        ],
        [
            'name' => 'Maxim',
            'age' => 33
        ]
    ];
    foreach ($arr_1 as$value){
            foreach ($value as $kk => $v)
            echo $kk.' - '.$v.' , ';
        echo '<br>';
        }
?>
<h2>Пример</h2>
<ul>
    <li>Создадим массив из 100 элементов и выведем его</li>
    <li>Переберем массив уменьшив каждый его элемент на 2 и выведем получившийся массив</li>
    <li>Умножим элементы получившегося массива на 2 при помощи жестких ссылок и выведем результат</li>
</ul>
<?php
$arr = [];
    for ($i = 0; $i < 100; $i++){
        $arr[] = $i*5; 
    }
    foreach ($arr as $value)
        echo $value.', ';
        echo '<hr>';

        foreach ($arr as $key => $value)
        $arr[$key] = $value/2;

        foreach ($arr as $key => $value)
        if ($key < count($arr))
        echo $value.', ';
        echo $value.'. <hr>';

        foreach ($arr as &$value)
        $value *= 2;
        foreach ($arr as $value)
        echo $value.', ';
?>
<div class="code">
$arr = []; <br>
    for ($i = 0; $i &lt; 100; $i++){ <br>
        $arr[] = $i*5; <br>
    } <br>
    foreach ($arr as $value) <br>
        echo $value.', '; <br>
        echo '&lt;hr&gt;'; <br>
        <br>
    foreach ($arr as $key =&gt; $value) <br>
        $arr[$key] = $value/2; <br>
    foreach ($arr as $key =&gt; $value) <br>
    if ($key &lt; count($arr)) <br>
        echo $value.', '; <br>
        echo $value.'. &lt;hr&gt;'; <br>
        <br>
    foreach ($arr as &$value) <br>
    $value *= 2; <br>
    foreach ($arr as $value) <br>
    echo $value.', ';
</div>
    <h2>Задание</h2>
    <ul>
        <li>Создайте ассоциативный массив с сотрудниками, где каждый сотрудник будет представлять из себя массив со следующими ключами: name и age. Фактически, это будет двумерный массив.</li>
        <li>Найдите средний возраст сотрудников и выведите его.</li>
    </ul>
    <h2>Реализация</h2>
    <?php
        $arr = [
            [
                'name' => 'Pavel',
                'age' => 39
            ],
            [
                'name' => 'Natalya',
                'age' => 38
            ],
            [
                'name' => 'Ellina',
                'age' => 13
            ],
            [
                'name' => 'Sergey',
                'age' => 9
            ]
        ];
        $sr = 0;
        foreach ($arr as $value)
            $sr += $value['age'];
        echo 'Средний возраст нашей семьи '.$sr/count($arr).'лет.';
    ?>
    <h2>Код</h2>
    <div class="code">
    $arr = [ <br>
            [ <br>
                'name' =&gt; 'Pavel', <br>
                'age' =&gt; 39 <br>
            ], <br>
            [ <br>
                'name' =&gt; 'Natalya', <br>
                'age' =&gt; 38 <br>
            ], <br>
            [ <br>
                'name' =&gt; 'Ellina', <br>
                'age' =&gt; 13 <br>
            ], <br>
            [ <br>
                'name' =&gt; 'Sergey', <br>
                'age' =&gt; 9 <br>
            ] <br>
        ]; <br>
        <br>
        $sr = 0; <br>
        foreach ($arr as $value) <br>
            $sr += $value['age']; <br>
        echo 'Средний возраст нашей семьи '.$sr/count($arr).'лет.';
    </div>
</body>
</html>