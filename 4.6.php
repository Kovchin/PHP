<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Статические методы и свойства</title>
</head>

<body>
    <h1>Статические методы и свойства</h1>
    <b>
        <p>public static function sin($value)</p>
        <p>self:: - обращение к константе, функции, свойству действующего класса</p>
    </b>
    <?php
    include '4/math.php';
    echo math::sin(5) . '<br />';
    echo math::$pi2;
    ?>
    <h2>Код класса math</h2>
    <div class="code">
        class math<br />
        {<br />
        private const PI = 3.1415926;<br />
        <br />
        public static $pi2 = self::PI ** 2;<br />
        <br />
        public static function sin($value)<br />
        {<br />
        return sin($value);<br />
        }<br />
        }
    </div>
    <h2>PHP</h2>
    <div class="code">
        include '4/math.php';<br />
        echo math::sin(5) . '&lt;br /&gt;';<br />
        echo math::$pi2;
    </div>
    <h2>Задание</h2>
    <ul>
        <li>
            Добавьте в класс Point (из предыдущего упражнения) статическое свойство counter, изначально равное 0.
        </li>
        <li>
            Добавьте в конструктор инкремент этого статического свойства. По сути, это будет счётчик объектов.
        </li>
        <li>
            Добавьте статический метод, возвращающий свойство counter.
        </li>
        <li>
            Создайте 3 объекта и выведите с помощью метода из 3-го пункта значение counter. Убедитесь, что оно равно 3.
        </li>
    </ul>
    <h2>Реализация</h2>
    <?php
    include '4/point.php';
    $test1 = new point(1, 2);
    $test2 = new point(3, 4);
    $test3 = new point(5, 6);
    echo 'Создано ' . point::$counter . ' экземпляра класса <b>point</b> <br />';
    ?>
    <h2>Вызов</h2>
    <div class="code">
        include '4/point.php';<br />
        $test1 = new point(1,2);<br />
        $test2 = new point(3,4);<br />
        $test3 = new point(5,6);<br />
        echo 'Создано '.point::$counter.' экземпляра класса &lt;b&gt;point&lt;/b&gt; &lt;br /&gt;';<br />
    </div>
    <h2>Код класса</h2>
    <div class="code">
        class point<br />
        {<br />
        public static $counter = 0;<br />
        private $x = 0;<br />
        private $y = 0;<br />
        public function showxy()<br />
        {<br />
        echo 'x = ' . $this-&gt;x . '&lt;br /&gt;';<br />
        echo 'y = ' . $this-&gt;y . '&lt;br /&gt;';<br />
        }<br />
        <br />
        public function __construct($x, $y)<br />
        {<br />
        self::$counter++;<br />
        $this-&gt;x = $x;<br />
        $this-&gt;y = $y;<br />
        }<br />
        public function setX($x)<br />
        {<br />
        $this-&gt;x = $x;<br />
        }<br />
        <br />
        public function setY($y)<br />
        {<br />
        $this-&gt;y = $y;<br />
        }<br />
        <br />
        public function getX()<br />
        {<br />
        return $this-&gt;x;<br />
        }<br />
        <br />
        public function getY()<br />
        {<br />
        return $this-&gt;y;<br />
        }<br />
        <br />
        public function __destruct()<br />
        {<br />
        echo 'Экземпляр класса &lt;b&gt;point&lt;/b&gt; удален';<br />
        }<br />
        }<br />
    </div>
</body>

</html>