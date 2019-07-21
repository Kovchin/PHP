<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/tabs.css">
    <script src="../js/jquery-3.4.1.min.js" defer></script>
    <script src="../js/show_hide.js" defer></script>
    <title>Функции для работы с массивами</title>
</head>

<body>
    <main>
        <h1>Функции для работы с массивами</h1>
        <!--
============
array_unique
============
-->
        <div class="block">
            <h2>array_unique</h2>
            <p>array_unique - возвращает массив выкинув из него все дублирующиеся значения</p>
            <p>Стоит обратить внимание что в результате действия этой функции простой перебор данного массива циклом for становится невозможным, так как появляются пробелы в индексах.</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>php</p>
                </div>
                <div class="tabs">
                    <div class="tab_1">
                        <?php
                        $a = [-3, 8, 12, 7, 12, 0, -3, -3, 15];
                        echo '<pre>';
                        print_r($a);
                        echo '</pre>';
                        echo '<br />';
                        $a = array_unique($a);
                        echo '<pre>';
                        print_r($a);
                        echo '</pre>';
                        echo '<br />';
                        ?>
                    </div>
                    <div class="tab_2">
                        $a = [-3, 8, 12, 7, 12, 0, -3, -3, 15]; <br />
                        echo '&lt;pre&gt;';<br />
                        print_r($a);<br />
                        echo '&lt;/pre&gt;';<br />
                        echo '&lt;br /&gt;';<br />
                        $a = array_unique($a);<br />
                        echo '&lt;pre&gt;';<br />
                        print_r($a);<br />
                        echo '&lt;/pre&gt;';<br />
                        echo '&lt;br /&gt;';<br />
                    </div>
                </div>
            </div>
        </div>
        <!--
============
shuffle
============
-->
        <div class="block">
            <h2>shuffle</h2>
            <p>shuffle() - Перемешивает значения массива</p>
            <p>В результате деятельности функции теряются индексы и любой ассоциативный массив превращается в обычный список</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>php</p>
                </div>
                <div class="tabs">
                    <div class="tab_1">
                        <?php
                        echo '<pre>';
                        print_r($a);
                        echo '<br />';
                        shuffle($a);
                        echo '<pre>';
                        print_r($a);
                        echo '</pre>';
                        ?>
                    </div>
                    <div class="tab_2">
                        echo '&lt;pre&gt;'; <br />
                        print_r($a);<br />
                        echo '&lt;br /&gt;';<br />
                        shuffle($a);<br />
                        echo '&lt;pre&gt;';<br />
                        print_r($a);<br />
                        echo '&lt;/pre&gt;';
                    </div>
                </div>
            </div>
        </div>
        <!--
============
array_reverse
============
-->
        <div class="block">
            <h2>array_reverse</h2>
            <p>array_reverse - отзеркаливает элементы внутри массива</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        echo '<pre>';
                        print_r($a);
                        echo '</pre> <br /> <pre>';
                        $a = array_reverse($a);
                        echo '<pre>';
                        print_r($a);
                        echo '</pre>';
                        ?>
                    </div>
                    <div>
                        echo '&lt;pre&gt;'; <br />
                        print_r($a); <br />
                        echo '&lt;/pre&gt; &lt;br /&gt; &lt;pre&gt;'; <br />
                        $a = array_reverse($a); <br />
                        echo '&lt;pre&gt;'; <br />
                        print_r($a); <br />
                        echo '&lt;/pre&gt;' <br />
                    </div>
                </div>
            </div>
        </div>
        <!--
============
array_flip
============
-->
        <div class="block">
            <h2>array_flip</h2>
            <p>array_flip - меняет местами ключи и значения в массиве</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        echo '<pre>';
                        print_r($a);
                        echo '</pre> <br /> <pre>';
                        $a = array_flip($a);
                        print_r($a);
                        echo '</pre>';
                        $a = array_flip($a);
                        $a = shuffle($a);
                        ?>
                    </div>
                    <div>
                        echo '&lt;pre&gt;'; <br />
                        print_r($a);<br />
                        echo '&lt;/pre&gt; &lt;br /&gt; &lt;pre&gt;';<br />
                        $a = array_flip($a);<br />
                        print_r($a);<br />
                        echo '&lt;/pre&gt;';
                    </div>
                </div>
            </div>
        </div>
        <!--
============
array_values
============
-->
        <div class="block">
            <h2>array_values</h2>
            <p>array_values - возвращает элементы ассоциативного массива в виде одномерного массива</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $aa = ['name' => 'Pavel', 'age' => '39'];
                        echo '<pre>';
                        print_r($aa);
                        echo '</pre>';
                        echo '<br /> <pre>';
                        $temp = array_values($aa);
                        print_r($temp);
                        echo '</pre>';
                        ?>
                    </div>
                    <div>
                        $aa = ['name' => 'Pavel', 'age' => '39']; <br />
                        echo '&lt;pre&gt;'; <br />
                        print_r($aa); <br />
                        echo '&lt;br /&gt;';
                        print_r(array_values($aa));<br />
                        echo '&lt;/pre&gt;'; <br />
                    </div>
                </div>
            </div>
        </div>
        <!--
============
array_values
============
-->
        <div class="block">
            <h2>array_keys</h2>
            <p>array_keys - возвращает ключи ассоциативного массива в виде одномерного массива</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        echo '<pre>';
                        print_r($aa);
                        echo '</pre>';
                        echo '<br /> <pre>';
                        $temp = array_keys($aa);
                        print_r($temp);
                        echo '</pre>';
                        ?>
                    </div>
                    <div>
                        echo '&lt;pre&gt;'; <br />
                        print_r($aa); <br />
                        echo '&lt;br /&gt;';
                        print_r(array_keys($aa));<br />
                        echo '&lt;/pre&gt;'; <br />
                    </div>
                </div>
            </div>
        </div>
        <!--
============
array_merge
============
-->
        <div class="block">
            <h2>array_merge</h2>
            <p>array_merge - Сложение массивов</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $list1 = [0, 1, 2, 3, 4, 5];
                        $list2 = [6, 7, 8, 9, 10, 11];
                        echo 'list1 = ';
                        print_r($list1);
                        echo '<br /> list2 = ';
                        print_r($list2);
                        echo '<br /> summ_list = ';
                        $summ_list = array_merge($list1, $list2);
                        print_r($summ_list);
                        ?>
                    </div>
                    <div>
                        $list1 = [0,1,2,3,4,5]; <br />
                        $list2 = [6,7,8,9,10,11]; <br />
                        echo 'list1 = '; <br />
                        print_r ($list1); <br />
                        echo '&lt;br /&gt; list2 = '; <br />
                        print_r ($list2); <br />
                        echo '&lt;br /&gt; summ_list = '; <br />
                        $summ_list = array_merge($list1, $list2); <br />
                        print_r($summ_list);
                    </div>
                </div>
            </div>
        </div>
        <!--
============
range
============
-->
        <div class="block">
            <h2>range</h2>
            <p>range(0,100) - создаст одномерный массив от 0 до 100</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $temp = range(0, 100);
                        echo 'temp = ';
                        print_r($temp);
                        ?>
                    </div>
                    <div>
                        $temp = range(0,100);<br />
                        echo 'temp = '; <br />
                        print_r($temp);<br />
                    </div>
                </div>
            </div>
        </div>
        <!--
============
array_slice
============
-->
        <div class="block">
            <h2>array_slice</h2>
            <p>array_slice ($array, startpos, length) - аналог substr только для массивов. Позволяет достать подмассив из массива</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        print_r($temp);
                        echo '<br />';
                        print_r(array_slice($temp, 10, 5));
                        ?>
                    </div>
                    <div>
                        print_r($temp);<br />
                        echo '&lt;br /&gt;';<br />
                        print_r(array_slice($temp, 10,5));<br>
                    </div>
                </div>
            </div>
        </div>
        <!--
============
sort
============
-->
        <div class="block">
            <h2>sort</h2>
            <p>sort - сортирует массив по возрастанию.</p>
            <p>Все хорошо, но теряется индекс.</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $temp = range(0, 100);
                        echo 'Стартовый массив от 0 до 100 <br />';
                        print_r($temp);
                        echo '<br />';
                        shuffle($temp);
                        echo 'Перемешанный массив от 0 до 100 <br />';
                        print_r($temp);
                        echo '<br />';
                        $temp = array_slice($temp, 0, 10);
                        echo 'Взяли первые 10 элементов массива <br />';
                        print_r($temp);
                        echo '<br />';
                        sort($temp);
                        echo 'Отсортировали по возрастанию <br />';
                        print_r($temp);
                        ?>
                    </div>
                    <div>
                        $temp = range(0, 100); <br />
                        echo 'Стартовый массив от 0 до 100 &lt;br /&gt;'; <br />
                        print_r($temp); <br />
                        echo '&lt;br /&gt;'; <br />
                        shuffle($temp); <br />
                        echo 'Перемешанный массив от 0 до 100 &lt;br /&gt;'; <br />
                        print_r($temp); <br />
                        echo '&lt;br /&gt;'; <br />
                        $temp = array_slice($temp, 0, 10); <br />
                        echo 'Взяли первые 10 элементов массива &lt;br /&gt;'; <br />
                        print_r($temp); <br />
                        echo '&lt;br /&gt;'; <br />
                        sort($temp); <br />
                        echo 'Отсортировали по возрастанию &lt;br /&gt;'; <br />
                        print_r($temp);
                    </div>
                </div>
            </div>
        </div>
        <!--
        ============
        rsort
        ============
        -->
        <div class="block">
            <h2>rsort</h2>
            <p>rsort ($array) - сортирует массив по убыванию</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        shuffle($temp);
                        echo 'Исходный массив <br />';
                        print_r($temp);
                        rsort($temp);
                        echo '<br /> Отсортированный по убыванию массив <br />';
                        print_r($temp);
                        ?>
                    </div>
                    <div>
                        shuffle($temp); <br />
                        echo 'Исходный массив &lt;br /&gt;'; <br />
                        print_r($temp); <br />
                        rsort($temp); <br />
                        echo '&lt;br /&gt; Отсортированный по убыванию массив &lt;br /&gt;'; <br />
                        print_r($temp);
                    </div>
                </div>
            </div>
        </div>
        <!--
        ============
        asort / arsort
        ============
        -->
        <div class="block">
            <h2>asort / arsort / ksort</h2>
            <p>asort / arsort - сортировка ассоциативных массивов с сохранением ключей по возрастанию и убыванию соответственно</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $temp = ['1' => 1234, '2' => 23452, '3' => 123, 'name' => 'pavel', 'age' => 39, '45' => 12];
                        echo 'Изначальный массив temp выглядел так <br />';
                        print_r($temp);
                        echo '<br /> После сортировки asort стал выглядеть так <br />';
                        asort($temp);
                        print_r($temp);
                        echo '<br /> Сортировка arsort даст зеркальный результат <br />';
                        arsort($temp);
                        print_r($temp);
                        echo '<br /> Ну и напоследок сортировка по ключам <br />';
                        ksort($temp);
                        print_r($temp);
                        ?>
                    </div>
                    <div>
                        $temp = ['1' =&gt; 1234, '2' =&gt; 23452, '3' =&gt; 123, 'name' =&gt; 'pavel', 'age' =&gt; 39, '45' =&gt; 12]; <br />
                        echo 'Изначальный массив temp выглядел так &lt;br /&gt;'; <br />
                        print_r($temp); <br />
                        echo '&lt;br /&gt; После сортировки asort стал выглядеть так &lt;br /&gt;'; <br />
                        asort($temp); <br />
                        print_r($temp); <br />
                        echo '&lt;br /&gt; Сортировка arsort даст зеркальный результат &lt;br /&gt;'; <br />
                        arsort($temp); <br />
                        print_r($temp); <br />
                        echo '&lt;br /&gt; Ну и напоследок сортировка по ключам &lt;br /&gt;'; <br />
                        ksort($temp); <br />
                        print_r($temp);
                    </div>
                </div>
            </div>
        </div>
        <!--
        ============
        usort, uasort
        ============
        -->
        <div class="block">
            <h2>usort, uasort</h2>
            <p>usort, uasort - сортировка списков / массивов по заданным мной правилам</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $temp = [10, 55, 50, 40, 84, 20, 12, 30, 70, 12];
                        echo 'Изначальный массив для сортировки <br />';
                        print_r($temp);
                        echo '<br /> Результат сортировки <br />';
                        uasort($temp, 'mysort');
                        print_r($temp);

                        function mysort($a, $b)
                        {
                            if ($a % 10 == 0 && $b % 10 != 0) return 1;
                            if ($a % 10 != 0 && $b % 10 == 0) return -1;
                            else return ($a <=> $b);
                        }
                        ?>
                    </div>
                    <div>
                        $temp = [10, 55, 50, 40, 84, 20, 12, 30, 70, 12]; <br />
                        echo 'Изначальный массив для сортировки &lt;br /&gt;';<br />
                        print_r($temp);<br />
                        echo '&lt;br /&gt; Результат сортировки &lt;br /&gt;';<br />
                        uasort($temp, 'mysort');<br />
                        print_r($temp);<br />
                        <br />
                        function mysort($a, $b)<br />
                        {<br />
                        if ($a % 10 == 0 && $b % 10 != 0) return 1;<br />
                        if ($a % 10 != 0 && $b % 10 == 0) return -1;<br />
                        else return ($a &lt;=&gt; $b);<br />
                        }
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <h2>Упражнение</h2>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Задание</p>
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <ul>
                            <li>Создайте массив из нескольких чисел.</li>
                            <li>Выведите случайный элемент из этого массива, используя mt_rand().</li>
                            <li>Сделайте задачу из пункта 2, но с использованием shuffle().</li>
                            <li>Создайте двумерный массив с сотрудниками, где каждый сотрудник будет представлять из себя ассоциативный массив с именем и возрастом.</li>
                            <li>Сделайте сортировку массива с помощью uasort() так, чтобы все сотрудники были отсортированы по возрасту, например, по возрастанию.</li>
                        </ul>
                    </div>
                    <div>
                        <?php
                        $arr = range(10, 20);
                        echo 'Массив из чисел от 10 до 20 <br />';
                        print_r($arr);
                        $num = mt_rand(0, 10);
                        echo '<br /> Элемент из этого массива под номером ' . $num . ' = ' . $arr[$num];
                        echo '<br /> Теперь перемешаем этот массив<br />';
                        shuffle($arr);
                        print_r($arr);
                        echo '<br /> и возьмем первый элемент из результата <br />';
                        print_r($arr[0]);
                        echo '<br />';

                        $arr = [
                            ['id' => 0, 'name' => 'Pavel', 'age' => 39, 'sex' => 'male'],
                            ['id' => 1, 'name' => 'Sergey', 'age' => 9, 'sex' => 'male'],
                            ['id' => 2, 'name' => 'Natalya', 'age' => 38, 'sex' => 'female'],
                            ['id' => 3, 'name' => 'Ellina', 'age' => 13, 'sex' => 'female']
                        ];
                        print_r($arr);

                        function mysort1($key)
                        {
                            return function ($a, $b) use ($key) {
                                return strnatcmp($a[$key], $b[$key]);
                            };
                        }
                        echo 'Отсортированный массив при помощи usort по ключу "age" по возрастанию';
                        usort($arr, mysort1('age'));
                        echo '<br />';
                        print_r($arr);
                        ?>
                    </div>
                    <div>
                        $arr = [ <br />
                        ['id' =&gt; 0, 'name' =&gt; 'Pavel', 'age' =&gt; 39, 'sex' =&gt; 'male'], <br />
                        ['id' =&gt; 1, 'name' =&gt; 'Sergey', 'age' =&gt; 9, 'sex' =&gt; 'male'], <br />
                        ['id' =&gt; 2, 'name' =&gt; 'Natalya', 'age' =&gt; 38, 'sex' =&gt; 'female'], <br />
                        ['id' =&gt; 3, 'name' =&gt; 'Ellina', 'age' =&gt; 13, 'sex' =&gt; 'female'] <br />
                        ]; <br />
                        print_r($arr); <br />
                        <br />
                        function mysort1($key) <br />
                        { <br />
                        return function($a, $b) use ($key){ <br />
                        return strnatcmp($a[$key], $b[$key]); <br />
                        }; <br />
                        } <br />
                        echo 'Отсортированный массив при помощи usort по ключу "age" по возрастанию'; <br />
                        usort($arr, mysort1('age')); <br />
                        echo '&lt;br /&gt;'; <br />
                        print_r($arr);
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>