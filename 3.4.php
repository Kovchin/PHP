<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <link rel="stylesheet" href="css\tabs.css">
    <script src="JS\jquery-3.4.1.min.js"></script>
    <script src="JS\show_hide.js" defer></script>
    <title>Функции работы со временем</title>
</head>

<body>
    <main>
        <h1>Функции для работы со временем</h1>
        <!--
================
    microtime
================
-->
        <div class="block">
            <h2>microtime</h2>
            <p>microtime ([ bool $get_as_float = FALSE ])- Возвращает текущую метку времени Unix с микросекундами</p>
            <p>Если в качестве необязательного параметра указать true то результатом будет число типа float иначе выведется строка где первым актетом будут микросекунды, а вторым время в секундах от начала эпохи linux.</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>

                <div class="tabs">
                    <div>
                        <?php
                        $start = microtime(true);
                        echo 'Время запуска программы: ' . $start . '<br />';
                        for ($i = 0; $i < 1000000; $i++) { }
                        echo 'Время выполнения программы: ' . (microtime(true) - $start) . ' секунд. <br />';
                        ?>
                    </div>
                    <div>
                        $start = microtime(true); <br />
                        echo 'Время запуска программы: '.$start.'&lt;br /&gt;'; <br />
                        for ($i = 0; $i &lt; 1000000; $i++)<br />
                        {<br />
                        }<br />
                        echo 'Время выполнения программы: ' .(microtime(true) - $start).' секунд. &lt;br /&gt;';
                    </div>
                </div>
            </div>
        </div>
        <!--
================
    time
================
-->
        <div>
            <h2>time</h2>
            <p>time (void) - Возвращает текущую метку системного времени Unix</p>
            <div class="my_tabs">
                <div class='head_tabs'>
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class='tabs'>
                    <div>
                        <?php
                        $time = time();
                        echo $time;
                        ?>
                    </div>
                    <div>
                        $time = time(); <br>
                        echo $time;
                    </div>
                </div>
            </div>
        </div>
        <!--
================
    date
================
-->
        <div>
            <h2>date</h2>
            <p> date ( string $format [, int $timestamp = time() ] ) : string - Возвращает строку, отформатированную в соответствии с указанным шаблоном format. Используется метка времени, заданная аргументом timestamp, или текущее системное время, если timestamp не задан. Таким образом, timestamp является необязательным и по умолчанию равен значению, возвращаемому функцией time(). </p>
            <table class="doctable table">
                <caption><strong>В параметре <code class="parameter">format</code> распознаются
                        следующие символы</strong></caption>

                <thead>
                    <tr>
                        <th>Символ в строке <code class="parameter">format</code></th>
                        <th>Описание</th>
                        <th>Пример возвращаемого значения</th>
                    </tr>

                </thead>

                <tbody class="tbody">
                    <tr>
                        <td style="text-align: center;"><em class="emphasis">День</em></td>
                        <td>---</td>
                        <td>---</td>
                    </tr>

                    <tr>
                        <td><em>d</em></td>
                        <td>День месяца, 2 цифры с ведущим нулём</td>
                        <td>от <em>01</em> до <em>31</em></td>
                    </tr>

                    <tr>
                        <td><em>D</em></td>
                        <td>Текстовое представление дня недели, 3 символа</td>
                        <td>от <em>Mon</em> до <em>Sun</em></td>
                    </tr>

                    <tr>
                        <td><em>j</em></td>
                        <td>День месяца без ведущего нуля</td>
                        <td>от <em>1</em> до <em>31</em></td>
                    </tr>

                    <tr>
                        <td><em>l</em> (строчная 'L')</td>
                        <td>Полное наименование дня недели</td>
                        <td>от <em>Sunday</em> до <em>Saturday</em></td>
                    </tr>

                    <tr>
                        <td><em>N</em></td>
                        <td>Порядковый номер дня недели в соответствии со
                            стандартом ISO-8601 (добавлено в PHP 5.1.0)</td>
                        <td>от <em>1</em> (понедельник) до <em>7</em> (воскресенье)</td>
                    </tr>

                    <tr>
                        <td><em>S</em></td>
                        <td>Английский суффикс порядкового числительного дня месяца, 2 символа</td>
                        <td>
                            <em>st</em>, <em>nd</em>, <em>rd</em> или
                            <em>th</em>. Применяется совместно с <em>j</em>
                        </td>
                    </tr>

                    <tr>
                        <td><em>w</em></td>
                        <td>Порядковый номер дня недели</td>
                        <td>от <em>0</em> (воскресенье) до <em>6</em> (суббота)</td>
                    </tr>

                    <tr>
                        <td><em>z</em></td>
                        <td>Порядковый номер дня в году (начиная с 0)</td>
                        <td>От <em>0</em> до <em>365</em></td>
                    </tr>

                    <tr>
                        <td style="text-align: center;"><em class="emphasis">Неделя</em></td>
                        <td>---</td>
                        <td>---</td>
                    </tr>

                    <tr>
                        <td><em>W</em></td>
                        <td>Порядковый номер недели года в соответствии со стандартом
                            ISO-8601; недели начинаются с понедельника</td>
                        <td>Например: <em>42</em> (42-я неделя года)</td>
                    </tr>

                    <tr>
                        <td style="text-align: center;"><em class="emphasis">Месяц</em></td>
                        <td>---</td>
                        <td>---</td>
                    </tr>

                    <tr>
                        <td><em>F</em></td>
                        <td>Полное наименование месяца, например, January или March</td>
                        <td>от <em>January</em> до <em>December</em></td>
                    </tr>

                    <tr>
                        <td><em>m</em></td>
                        <td>Порядковый номер месяца с ведущим нулём</td>
                        <td>от <em>01</em> до <em>12</em></td>
                    </tr>

                    <tr>
                        <td><em>M</em></td>
                        <td>Сокращенное наименование месяца, 3 символа</td>
                        <td>от <em>Jan</em> до <em>Dec</em></td>
                    </tr>

                    <tr>
                        <td><em>n</em></td>
                        <td>Порядковый номер месяца без ведущего нуля</td>
                        <td>от <em>1</em> до <em>12</em></td>
                    </tr>

                    <tr>
                        <td><em>t</em></td>
                        <td>Количество дней в указанном месяце</td>
                        <td>от <em>28</em> до <em>31</em></td>
                    </tr>

                    <tr>
                        <td style="text-align: center;"><em class="emphasis">Год</em></td>
                        <td>---</td>
                        <td>---</td>
                    </tr>

                    <tr>
                        <td><em>L</em></td>
                        <td>Признак високосного года</td>
                        <td><em>1</em>, если год високосный, иначе <em>0</em>.</td>
                    </tr>

                    <tr>
                        <td><em>o</em></td>
                        <td>Номер года в соответствии со стандартом ISO-8601. Имеет то же значение, что и
                            <em>Y</em>, кроме случая, когда номер недели ISO
                            (<em>W</em>) принадлежит предыдущему или следующему году; тогда
                            будет использован год этой недели. (добавлено в PHP 5.1.0)</td>
                        <td>Примеры: <em>1999</em> или <em>2003</em></td>
                    </tr>

                    <tr>
                        <td><em>Y</em></td>
                        <td>Порядковый номер года, 4 цифры</td>
                        <td>Примеры: <em>1999</em>, <em>2003</em></td>
                    </tr>

                    <tr>
                        <td><em>y</em></td>
                        <td>Номер года, 2 цифры</td>
                        <td>Примеры: <em>99</em>, <em>03</em></td>
                    </tr>

                    <tr>
                        <td style="text-align: center;"><em class="emphasis">Время</em></td>
                        <td>---</td>
                        <td>---</td>
                    </tr>

                    <tr>
                        <td><em>a</em></td>
                        <td>Ante meridiem (лат. "до полудня") или Post meridiem (лат. "после полудня")
                            в нижнем регистре</td>
                        <td><em>am</em> или <em>pm</em></td>
                    </tr>

                    <tr>
                        <td><em>A</em></td>
                        <td>Ante meridiem или Post meridiem в верхнем регистре</td>
                        <td><em>AM</em> или <em>PM</em></td>
                    </tr>

                    <tr>
                        <td><em>B</em></td>
                        <td>Время в формате Интернет-времени (альтернативной системы отсчета времени суток)</td>
                        <td>от <em>000</em> до <em>999</em></td>
                    </tr>

                    <tr>
                        <td><em>g</em></td>
                        <td>Часы в 12-часовом формате без ведущего нуля</td>
                        <td>от <em>1</em> до <em>12</em></td>
                    </tr>

                    <tr>
                        <td><em>G</em></td>
                        <td>Часы в 24-часовом формате без ведущего нуля</td>
                        <td>от <em>0</em> до <em>23</em></td>
                    </tr>

                    <tr>
                        <td><em>h</em></td>
                        <td>Часы в 12-часовом формате с ведущим нулём</td>
                        <td>от <em>01</em> до <em>12</em></td>
                    </tr>

                    <tr>
                        <td><em>H</em></td>
                        <td>Часы в 24-часовом формате с ведущим нулём</td>
                        <td>от <em>00</em> до <em>23</em></td>
                    </tr>

                    <tr>
                        <td><em>i</em></td>
                        <td>Минуты с ведущим нулём</td>
                        <td>от <em>00</em> до <em>59</em></td>
                    </tr>

                    <tr>
                        <td><em>s</em></td>
                        <td>Секунды с ведущим нулём</td>
                        <td>от <em>00</em> до <em>59</em></td>
                    </tr>

                    <tr>
                        <td><em>u</em></td>
                        <td>
                            Микросекунды (добавлено в PHP 5.2.2). Учтите, что <span class="function"><strong>date()</strong></span>
                            всегда будет возвращать <em>000000</em>, т.к. она принимает целочисленный
                            параметр, тогда как <span class="methodname"><a href="datetime.format.php" class="methodname">DateTime::format()</a></span> поддерживает
                            микросекунды, если <a href="class.datetime.php" class="classname">DateTime</a> создан с ними.
                        </td>
                        <td>Например: <em>654321</em></td>
                    </tr>

                    <tr>
                        <td><em>v</em></td>
                        <td>
                            Миллисекунды (добавлено в PHP 7.0.0). Замечание такое же как и для
                            <em>u</em>.
                        </td>
                        <td>Пример: <em>654</em></td>
                    </tr>

                    <tr>
                        <td style="text-align: center;"><em class="emphasis">Временная зона</em></td>
                        <td>---</td>
                        <td>---</td>
                    </tr>

                    <tr>
                        <td><em>e</em></td>
                        <td>Идентификатор временной зоны (добавлено в PHP 5.1.0)</td>
                        <td>Примеры: <em>UTC</em>, <em>GMT</em>, <em>Atlantic/Azores</em></td>
                    </tr>

                    <tr>
                        <td><em>I</em> (заглавная i)</td>
                        <td>Признак летнего времени</td>
                        <td><em>1</em>, если дата соответствует летнему времени, <em>0</em> в противном случае.</td>
                    </tr>

                    <tr>
                        <td><em>O</em></td>
                        <td>Разница с временем по Гринвичу, в часах</td>
                        <td>Например: <em>+0200</em></td>
                    </tr>

                    <tr>
                        <td><em>P</em></td>
                        <td>Разница с временем по Гринвичу с двоеточием между часами и минутами (добавлено в PHP 5.1.3)</td>
                        <td>Например: <em>+02:00</em></td>
                    </tr>

                    <tr>
                        <td><em>T</em></td>
                        <td>Аббревиатура временной зоны</td>
                        <td>Примеры: <em>EST</em>, <em>MDT</em> ...</td>
                    </tr>

                    <tr>
                        <td><em>Z</em></td>
                        <td>Смещение временной зоны в секундах. Для временных зон,
                            расположенных западнее UTC возвращаются отрицательные числа,
                            а расположенных восточнее UTC - положительные.</td>
                        <td>от <em>-43200</em> до <em>50400</em></td>
                    </tr>

                    <tr>
                        <td style="text-align: center;"><em class="emphasis">Полная дата/время</em></td>
                        <td>---</td>
                        <td>---</td>
                    </tr>

                    <tr>
                        <td><em>c</em></td>
                        <td>Дата в формате стандарта ISO 8601 (добавлено в PHP 5)</td>
                        <td>2004-02-12T15:19:21+00:00</td>
                    </tr>

                    <tr>
                        <td><em>r</em></td>
                        <td>Дата в формате <a href="http://www.faqs.org/rfcs/rfc2822" class="link external">»&nbsp;RFC 2822</a></td>
                        <td>Например: <em>Thu, 21 Dec 2000 16:01:07 +0200</em></td>
                    </tr>

                    <tr>
                        <td><em>U</em></td>
                        <td>Количество секунд, прошедших с начала Эпохи Unix (1 января 1970 00:00:00 GMT)</td>
                        <td>См. также <span class="function"><a href="function.time.php" class="function">time()</a></span></td>
                    </tr>

                </tbody>

            </table>
            <div class="my_tabs">
                <div class='head_tabs'>
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class='tabs'>
                    <div>
                        <?php
                        echo date('l - d.m.Y h:m:s');
                        ?>
                    </div>
                    <div>
                        echo date('l - d.m.Y H:m:s');
                    </div>
                </div>
            </div>
        </div>
        <!--
================
    mktime
================
-->
        <div>
            <h2>mktime</h2>
            <p>mktime — Возвращает метку времени Unix для заданной даты</p>
            <p> mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] ) : int</p>
            <p>mktime(часы, минуты, секунды, месяц, день, год);</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        echo 'Время от начала UNIX эпохи 10:10:10 май 5 1980 - ' . (mktime(10, 10, 10, 5, 5, 1980)) . 'сек.';
                        ?>
                    </div>
                    <div>
                        echo 'Время от начала UNIX эпохи 10:10:10 май 5 1980 - '.(mktime(10, 10, 10, 5, 5, 1980)).'сек.';
                    </div>
                </div>
            </div>
        </div>
        <!--
================
    strtotime
================
-->
        <div class="block">
            <h2>strtotime</h2>
            <p> strtotime ( string $time [, int $now = time() ] ) : int - Преобразует текстовое представление даты на английском языке в метку времени Unix</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $time = strtotime('05.05.1980');
                        echo $time;
                        echo '<br />Или в нормальном виде - ' . date('d. m. Y', $time);
                        ?>
                    </div>
                    <div>
                        $time = strtotime('05.05.1980');<br />
                        echo $time;<br />
                        echo '&lt;br /&gt;Или в нормальном виде - '.date('d. m. Y', $time);
                    </div>
                </div>
            </div>
        </div>
        <!--
================
    checkdate
================
-->
        <div class="block">
            <h2>checkdate</h2>
            <p> checkdate ( int $month , int $day , int $year ) : bool - Проверяет корректность даты по григорианскому календарю</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        if (checkdate(5, 5, 1980)) echo 'Дата существует.';
                        else echo 'Дата не существует.';
                        ?>
                    </div>
                    <div>
                        if (checkdate(5,5,1980)) echo 'Дата существует.';<br />
                        else echo 'Дата не существует.';
                    </div>
                </div>
            </div>
        </div>
        <!--
================
Смещение времени по часовым поясам
================
-->
        <div class="block">
            <h2>Функции смещения по часовым поясам</h2>
            <p>Смещение времени по часовым поясам</p>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Пример</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        function getGM($local)
                        {
                            $offset = date('Z', $local);
                            return $local - $offset;
                        }

                        function getLM($local, $offset)
                        {
                            return $local + $offset;
                        }
                        echo date('Y.m.d H:i', getGM(time(), 7 * 3600));
                        echo '<br />' . date('Z') / 3600;
                        echo '<pre>';
                        echo date('Y.m.d H:i', $_SERVER['REQUEST_TIME']);
                        echo '</pre>';
                        ?>
                    </div>
                    <div>
                        function getGM($local) <br />
                        { <br />
                        $offset = date('Z',$local); <br />
                        return $local - $offset; <br />
                        } <br />
                        <br />
                        function getLM($local, $offset) <br />
                        { <br />
                        return $local + $offset; <br />
                        } <br />
                        echo date('Y.m.d H:i', getGM(time(), 7*3600)); <br />
                        echo '&lt;br /&gt;' . date('Z') / 3600;<br />
                        echo '&lt;pre&gt;';<br />
                        echo date('Y.m.d H:i', $_SERVER['REQUEST_TIME']);<br />
                        echo '&lt;/pre&gt;';
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <h2>Задание</h2>
            <ul>
                <li>Узнайте, сколько времени у Вас будет выполняться такой скрипт: &lt;?php for($i = 0; $i < 10**7; $i++); ?&gt; </li> <li>Возьмите текущее время от функции time() и прибавьте к нему случайное значение десятков тысяч секунд. Примерно так: time() + mt_rand(1, 10) * 10000;</li>
                <li>Выведите текущую дату и конечную из 2-го пункта с помощью функции date().</li>
                <li>Выведите, сколько осталось часов, минут и секунд до от текущей даты до той, что получилась во 2-м пункте.</li>
                <li>Выведите форму со списком (select), где пользователь сможет выбрать часовой пояс. Добавьте 3 часовых пояса.</li>
                <li>Выведите время на сервере и время, которое сейчас у пользователя на основе того часового пояса, который он выбрал.</li>
            </ul>
            <form action="" method="get">
                <select name="GMT" id="">
                    <option value="0">Гринвич</option>
                    <option value="3">Москва</option>
                    <option value="7">Красноярск</option>
                </select>
                <input type="submit" value="Рассчитать время">
            </form>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $start_time = microtime(true);
                        for ($i = 0; $i < 10 ** 7; $i++);
                        $end_time = microtime(true);
                        echo 'Время выполнения программы = ' . ($end_time - $start_time) . ' секунд.';
                        echo '<br />';
                        $random_time = time() + (mt_rand(0, 10) * 10000);
                        echo "Текущее время плюс случайно добавленное количество десятков тысяч секунд от 0 до 10 = " . date('Y.m.d H:i:s', $random_time);
                        echo '<br />';
                        echo 'Разница между получившимся ' . date('Y.m.d H:i:s', $random_time) . ' и текущим ' . date('Y.m.d H:i:s') . ' временем = ';
                        echo time();
                        echo '<br />';
                        echo $random_time;
                        echo '<br />';
                        echo $delta = $random_time - time();
                        echo '<br /> Это ';
                        echo floor($delta / 3600) . ' часов ' . floor(($delta % 3600) / 60) . ' минут. <br />';
                        echo date('Z') / 3600;
                        echo 'hello';
                        echo '<br /> Время по Гринвичу = ' . date('Y.m.d H:i:s', getGM(time())).'<br />';
                        if (is_numeric($_GET['GMT'])){
                        echo date('Y.m.d H:i:s',getLM(getGM(time()),$_GET['GMT']*3600));
                            }
                        ?>
                    </div>
                    <div>
                    $start_time = microtime(true); <br />
                        for ($i = 0; $i < 10 ** 7; $i++); <br />
                        $end_time = microtime(true); <br />
                        echo 'Время выполнения программы = ' . ($end_time - $start_time) . ' секунд.'; <br />
                        echo '&lt;br /&gt;'; <br />
                        $random_time = time() + (mt_rand(0, 10) * 10000); <br />
                        echo "Текущее время плюс случайно добавленное количество десятков тысяч секунд от 0 до 10 = " . date('Y.m.d H:i:s', $random_time); <br />
                        echo '&lt;br /&gt;'; <br />
                        echo 'Разница между получившимся ' . date('Y.m.d H:i:s', $random_time) . ' и текущим ' . date('Y.m.d H:i:s') . ' временем = '; <br />
                        echo time(); <br />
                        echo '&lt;br /&gt;'; <br />
                        echo $random_time; <br />
                        echo '&lt;br /&gt;'; <br />
                        echo $delta = $random_time - time(); <br />
                        echo '&lt;br /&gt; Это '; <br />
                        echo floor($delta / 3600) . ' часов ' . floor(($delta % 3600) / 60) . ' минут. &lt;br /&gt;'; <br />
                        echo date('Z') / 3600; <br />
                        echo 'hello'; <br />
                        echo '&lt;br /&gt; Время по Гринвичу = ' . date('Y.m.d H:i:s', getGM(time())).'&lt;br /&gt;'; <br />
                        if (is_numeric($_GET['GMT'])){ <br />
                        echo date('Y.m.d H:i:s',getLM(getGM(time()),$_GET['GMT']*3600)); <br />
                            } <br />
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>