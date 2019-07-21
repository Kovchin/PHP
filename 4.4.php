<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Конструкторы, деструкторы и методы классов</title>
</head>

<body>
    <h1>Конструкторы, деструкторы и методы классов</h1>
    <?php
    //Подключаем классы используемые в уроке
    include '4/user.php';
    include '4/point.php';
    ?>

    <p>В уроке рассказывается как создавать конструкторы/деструкторы и методы в классах</p>

    <?php
    $user = new user('newUser', 'newEmail');
    echo $user->getName() . '<br />';
    echo $user->getEmail() . '<br />';
    $user->setName('Pavel');
    $user->setEmail('Pavel@mail.ru');
    $user->show();
    $user = '';
    unset($user);
    ?>
    <div class="code">
    $user = new user('newUser', 'newEmail');<br />
    echo $user->getName() . '&lt;br /&gt;';<br />
    echo $user->getEmail() . '&lt;br /&gt;';<br />
    $user->setName('Pavel');<br />
    $user->setEmail('Pavel@mail.ru');<br />
    $user->show();<br />
    <p>//2 Способа вызвать деструктор класса (по сути освободить память занимаемую им)</p>
    unset($user);<br />
    $user = '';
    </div>
    <h2>Класс User</h2>
    <div class="code">
class user <br />
{ <br />
    public $name = 'User'; <br />
    public $email = 'default@email.ru'; <br />
    <br />
    public function __construct($cname, $cemail) <br />
    { <br />
        $this->name = $cname; <br />
        $this->email = $cemail; <br />
    } <br />
    <br />
    public function show() <br />
    { <br />
        echo 'name = ' . $this->name . '&lt;br /&gt;'; <br />
        echo 'email = ' . $this->email . '&lt;br /&gt;'; <br />
    } <br />
    <br />
    public function getName() <br />
    { <br />
        return $this->name; <br />
    } <br />
    <br />
    public function getEmail() <br />
    { <br />
        return $this->email; <br />
    } <br />
    <br />
    public function setName($value) <br />
    { <br />
        $this->name = $value; <br />
    } <br />
    <br />
    public function setEmail($value) <br />
    { <br />
        $this->email = $value; <br />
    } <br />
    <br />
    public function __destruct() <br />
    { <br />
        echo '&lt;br /&gt;Удаляем экземпляр класса &lt;b&gt;User&lt;/b&gt; &lt;br /&gt;'; <br />
    } <br />
} <br />
<br />
    </div>

    <h2>Задание</h2>
    <ul>
        <li>Добавьте в класс, созданный в предыдущем упражнении, конструктор, принимающий x и y.</li>
        <li>Внутри конструктора присвойте полям значения, полученные в параметрах конструктора.</li>
        <li>Напишите GET и SET методы.</li>
        <li>Проверьте правильность их работы.</li>
    </ul>
    <i>Примечание: Вы должны самостоятельно понять, как убедиться, что всё работает верно: какие методы надо выполнить и какие выводы в браузер сделать.</i>
    <h2>Реализация</h2>
    <?php
    $p = new point(10, 15);
    $p -> showxy();
    $p -> setX(100);
    $p -> setY(200);
    echo 'x = '.$p -> getX().'<br />';
    echo 'y = '.$p -> getY().'<br />';
    unset ($p);
    ?>
    <h2>Код</h2>
    <div class="code">
    $p = new point(10, 15);<br />
    $p -> showxy();<br />
    $p -> setX(100);<br />
    $p -> setY(200);<br />
    echo 'x = '.$p -> getX().'&lt;br /&gt;';<br />
    echo 'y = '.$p -> getY().'&lt;br /&gt;';<br />
    unset ($p);
    </div>
    <h2>Код класса point</h2>
    <div class="code">
    class point <br />
{ <br />
    public $x = 0; <br />
    public $y = 0; <br />
    public function showxy() <br />
    { <br />
        echo 'x = ' . $this->x . '&lt;br /&gt;'; <br />
        echo 'y = ' . $this->y . '&lt;br /&gt;'; <br />
    } <br />
    public function __construct($x, $y) <br />
    { <br />
        $this->x = $x; <br />
        $this->y = $y; <br />
    } <br />
    public function setX($x) <br />
    { <br />
        $this->x = $x; <br />
    } <br />
    <br />
    public function setY($y) <br />
    { <br />
        $this->y = $y; <br />
    } <br />
    <br />
    public function getX() <br />
    { <br />
        return $this->x; <br />
    } <br />
    <br />
    public function getY() <br />
    { <br />
        return $this->y; <br />
    } <br />
    <br />
    public function __destruct() <br />
    { <br />
        echo 'Экземпляр класса &lt;b&gt;point&lt;/b&gt; удален'; <br />
    } <br />
} <br />
    </div>
</body>

</html>