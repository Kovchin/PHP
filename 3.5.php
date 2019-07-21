<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <link rel="stylesheet" href="css\tabs.css">
    <script src="js\show_hide.js" defer></script>
    <script src="js\jquery-3.4.1.min.js"></script>
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Функции для работы с файлами</h1>
        <div class="block">
            <h2>fopen</h2>
            <p>fopen('имя файла',режим открытия файла) - функция открывающая файл</p>
            <table>
                <caption><strong>
                        Список возможных режимов для <span class="function"><strong>fopen()</strong></span>,
                        используя <code class="parameter">mode</code>
                    </strong></caption>

                <thead>
                    <tr>
                        <th><code class="parameter">mode</code></th>
                        <th>Описание</th>
                    </tr>

                </thead>

                <tbody class="tbody">
                    <tr>
                        <td><em>'r'</em></td>
                        <td>
                            Открывает файл только для чтения; помещает указатель
                            в начало файла.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'r+'</em></td>
                        <td>
                            Открывает файл для чтения и записи; помещает указатель
                            в начало файла.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'w'</em></td>
                        <td>
                            Открывает файл только для записи; помещает указатель
                            в начало файла и обрезает файл до нулевой длины.
                            Если файл не существует - пробует его создать.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'w+'</em></td>
                        <td>
                            Открывает файл для чтения и записи; помещает указатель
                            в начало файла и обрезает файл до нулевой длины.
                            Если файл не существует - пытается его создать.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'a'</em></td>
                        <td>
                            Открывает файл только для записи; помещает указатель в конец
                            файла. Если файл не существует - пытается его создать.
                            В данном режиме функция <span class="function"><a href="function.fseek.html" class="function">fseek()</a></span> не применима, записи всегда добавляются в конец.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'a+'</em></td>
                        <td>
                            Открывает файл для чтения и записи; помещает указатель в конец
                            файла. Если файл не существует - пытается его создать. В данном режиме функция <span class="function"><a href="function.fseek.html" class="function">fseek()</a></span> влияет только на позицию чтения, записи всегда добавляются в конец.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'x'</em></td>
                        <td>
                            Создаёт и открывает только для записи; помещает указатель в
                            начало файла. Если файл уже существует, вызов
                            <span class="function"><strong>fopen()</strong></span> закончится неудачей, вернёт <strong><code>FALSE</code></strong> и
                            выдаст ошибку уровня <strong><code>E_WARNING</code></strong>.
                            Если файл не существует, попытается его создать. Это эквивалентно
                            указанию флагов <em>O_EXCL|O_CREAT</em> для внутреннего
                            системного вызова <em>open(2)</em>.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'x+'</em></td>
                        <td>
                            Создаёт и открывает для чтения и записи; в остальном имеет то же поведение, что и<em>'x'</em>.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'c'</em></td>
                        <td>
                            Открывает файл только для записи. Если файл не существует, то он создается.
                            Если же файл существует, то он не обрезается (в отличие от
                            <em>'w'</em>), и вызов к этой функции не вызывает ошибку (также как
                            и в случае с <em>'x'</em>). Указатель на файл будет установлен
                            на начало файла. Это может быть полезно при желании заблокировать
                            файл (см. <span class="function"><a href="function.flock.html" class="function">flock()</a></span>) перед изменением, так как использование
                            <em>'w'</em> может обрезать файл еще до того как была получена блокировка
                            (если вы желаете обрезать файл, можно использовать функцию
                            <span class="function"><a href="function.ftruncate.html" class="function">ftruncate()</a></span> после запроса на блокировку).
                        </td>
                    </tr>

                    <tr>
                        <td><em>'c+'</em></td>
                        <td>
                            Открывает файл для чтения и записи; в остальном имеет то же поведение, что и <em>'c'</em>.
                        </td>
                    </tr>

                    <tr>
                        <td><em>'e'</em></td>
                        <td>
                            Установить флаг close-on-exec (закрыть при запуске) на открытый файловый
                            дескриптор. Доступно только в PHP скомпилированном на системах
                            поддерживающих POSIX.1-2008.
                        </td>
                    </tr>

                </tbody>
            </table>

            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Результат</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        $handler = fopen('3/3.5.txt', 'r+');
                        //1-ый способ чтения данных в файле
                        $str = fread($handler, 60);
                        echo '<br />1-ый способ вывода данных из файла <hr> <br />' . $str . '<br />';
                        //2-ой способ чтения данных в файле
                        $str = '';
                        fseek($handler, 0);
                        while (!feof($handler)) {
                            $str .= fread($handler, 1);
                        }
                        echo '<br />2-ый способ вывода данных из файла <hr>  <br />' . $str . '<br />';
                        //3-ий способ чтения данных в файле
                        $str = '';
                        fseek($handler, 0);
                        $str = fread($handler, filesize('3/3.5.txt'));
                        echo '<br />3-ый способ вывода данных из файла <hr>  <br />' . $str . '<br />';
                        //Запись в файл (если это позволяет режим в котором мы получили доступ к файлу)
                        $new_str = "\n <br />Это новая строка записанная в файл с помощью php <br />";
                        fwrite($handler, $new_str);
                        fclose($handler);
                        //4-ый способ получить данные из файла
                        echo '<br />4-ый способ вывода данных из файла <hr>  <br />' . file_get_contents('3/3.5.txt');
                        //Второй способ записи в файл
                        file_put_contents('3/3.5.txt', file_get_contents('3/3.5.txt') . 'Hello world/n<br /> записанный при помощи <b>file_put_contents()</b><br />');
                        copy('3/3.5.txt', '3/3.5.copy.txt');
                        rename('3/3.5.copy.txt', '3/temp.txt');
                        unlink('3/temp.txt');

                        //Создание временного файла который будет сразу удален после выполнения php скрипта
                        echo '<br /> <hr> <br /> Результат создания записи и вывода данных из временного файла <br /> <br /> <hr> <br />';
                        $handler = tmpfile();
                        fwrite($handler, 'Hello');
                        fseek($handler, 0);
                        $str = '';
                        while (!feof($handler)) {
                            $str .= fread($handler, 1);
                        }
                        echo $str;
                        ?>
                    </div>
                    <div>
                        $handler = fopen('3/3.5.txt', 'r+'); <br />
                        //1-ый способ чтения данных в файле <br />
                        $str = fread($handler, 60); <br />
                        echo '&lt;br /&gt;1-ый способ вывода данных из файла &lt;hr&gt; &lt;br /&gt;' . $str . '&lt;br /&gt;'; <br />
                        //2-ой способ чтения данных в файле <br />
                        $str = ''; <br />
                        fseek($handler, 0); <br />
                        while (!feof($handler)) { <br />
                        $str .= fread($handler, 1); <br />
                        } <br />
                        echo '&lt;br /&gt;2-ый способ вывода данных из файла &lt;hr&gt; &lt;br /&gt;' . $str . '&lt;br /&gt;'; <br />
                        //3-ий способ чтения данных в файле <br />
                        $str = ''; <br />
                        fseek($handler, 0); <br />
                        $str = fread($handler, filesize('3/3.5.txt')); <br />
                        echo '&lt;br /&gt;3-ый способ вывода данных из файла &lt;hr&gt; &lt;br /&gt;' . $str . '&lt;br /&gt;'; <br />
                        //Запись в файл (если это позволяет режим в котором мы получили доступ к файлу) <br />
                        $new_str = "\n &lt;br /&gt;Это новая строка записанная в файл с помощью php &lt;br /&gt;"; <br />
                        fwrite($handler, $new_str); <br />
                        fclose($handler); <br />
                        //4-ый способ получить данные из файла <br />
                        echo '&lt;br /&gt;4-ый способ вывода данных из файла &lt;hr&gt; &lt;br /&gt;' . file_get_contents('3/3.5.txt'); <br />
                        //Второй способ записи в файл <br />
                        file_put_contents('3/3.5.txt', file_get_contents('3/3.5.txt') . 'Hello world/n&lt;br /&gt; записанный при помощи &lt;b&gt;file_put_contents()&lt;/b&gt;&lt;br /&gt;'); <br />
                        copy('3/3.5.txt', '3/3.5.copy.txt'); <br />
                        rename('3/3.5.copy.txt', '3/temp.txt'); <br />
                        unlink('3/temp.txt'); <br />
                        <br />
                        //Создание временного файла который будет сразу удален после выполнения php скрипта <br />
                        echo '&lt;br /&gt; &lt;hr&gt; &lt;br /&gt; Результат создания записи и вывода данных из временного файла &lt;br /&gt; &lt;br /&gt; &lt;hr&gt; &lt;br /&gt;'; <br />
                        $handler = tmpfile(); <br />
                        fwrite($handler, 'Hello'); <br />
                        fseek($handler, 0); <br />
                        $str = ''; <br />
                        while (!feof($handler)) { <br />
                        $str .= fread($handler, 1); <br />
                        } <br />
                        echo $str;

                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <h2>fclose</h2>
            <p>fclose ( resource $handle ) : bool - Закрывает открытый дескриптор файла</p>
        </div>
        <div class="block">
            <h2>fread</h2>
            <p> fread ( resource $handle , int $length ) : string - Бинарно-безопасное чтение файла.</p>
            <p>Первый параметр это дескриптор, второй длинна в байтах что требуется считать из фала</p>
            <p>Результатом возвращается строка</p>
        </div>
        <div class="block">
            <h2>feof</h2>
            <p> feof ( resource $handle ) : bool - Проверяет достигнут ли конец файла</p>
        </div>
        <div class="block">
            <h2>filesize</h2>
            <p> filesize ( string $filename ) : int - функция возвращает размер файла в байтах.</p>
        </div>
        <div class="block">
            <h2>fseek</h2>
            <p> fseek ( resource $handle , int $offset [, int $whence = SEEK_SET ] ) : int — Устанавливает смещение в файловом указателе</p>
            <h3>Список параметров</h3>
            <h4>handle</h4>
            <p>Указатель (resource) на файл, обычно создаваемый с помощью функции fopen().</p>
            <h4>offset</h4>
            <p>
                Смещение. Для смещения позиции перед концом файла необходимо передать отрицательное значение offset и установить параметр whence в SEEK_END.
            </p>
            <h4>whence</h4>
            <p> Значениями whence являются:</p>
            <ul>
                <li>SEEK_SET - Установить смещение в offset байт.</li>
                <li>SEEK_CUR - Установить смещение в текущее положение плюс offset.</li>
                <li>SEEK_END - Установить смещение в конец файла плюс offset.</li>
            </ul>
        </div>
        <div class="block">
            <h2>fwrite</h2>
            <p> fwrite ( resource $handle , string $string [, int $length ] ) : int — fwrite() записывает содержимое string в файловый поток handle. </p>
            <h3>Параметры</h3>
            <h4>handle</h4>
            <p>Указатель (resource) на файл, обычно создаваемый с помощью функции fopen().</p>
            <h4>string</h4>
            <p>Записываемая строка. </p>
            <h4>length</h4>
            <p>Если передан аргумент length, запись остановится после того, как length байтов будут записаны или будет достигнут конец строки string, смотря что произойдёт раньше.</p>
            <p>Учтите, что если указан аргумент length, то директива magic_quotes_runtime будет проигнорирована, и строка string не будет очищена от слешей.</p>
        </div>
        <div class="block">
            <h2>file_get_contents</h2>
            <p> file_get_contents ( string $filename [, bool $use_include_path = FALSE [, resource $context [, int $offset = 0 [, int $maxlen ]]]] ) : string - читает содержимое файла в строку</p>
            <h3 class="title">Список параметров</h3>
            <p class="para">
            </p>
            <dl>


                <dt>
                    <code class="parameter">filename</code></dt>

                <dd>

                    <p class="para">
                        Имя читаемого файла.
                    </p>
                </dd>



                <dt>
                    <code class="parameter">use_include_path</code></dt>

                <dd>

                    <blockquote class="note">
                        <p><strong class="note">Замечание</strong>:
                        </p>
                        <p class="para">
                            Можно использовать константу
                            <strong><code>FILE_USE_INCLUDE_PATH</code></strong> для поиска файла
                            в <a href="ini.core.html#ini.include-path" class="link">include path</a>.
                            Только помните, что если вы используете <a href="functions.arguments.html#functions.arguments.type-declaration.strict" class="link">строгую типизацию</a>,
                            то так сделать не получится, поскольку
                            <strong><code>FILE_USE_INCLUDE_PATH</code></strong> имеет тип <span class="type"><a href="language.types.integer.html" class="type int">int</a></span>.
                            В таком случае используйте <strong><code>TRUE</code></strong>.
                        </p>
                        <p></p>
                    </blockquote>
                </dd>



                <dt>
                    <code class="parameter">context</code></dt>

                <dd>

                    <p class="para">
                        Корректный ресурс контекста, созданный с помощью функции
                        <span class="function"><a href="function.stream-context-create.html" class="function">stream_context_create()</a></span>. Если в использовании
                        особого контекста нет необходимости, можно пропустить этот параметр
                        передав в него значение <strong><code>NULL</code></strong>.
                    </p>
                </dd>



                <dt>
                    <code class="parameter">offset</code></dt>

                <dd>

                    <p class="para">
                        Смещение, с которого начнется чтение оригинального потока.
                        Отрицательное значение смещения будет отсчитываться с конца потока.
                    </p>
                    <p class="para">
                        Поиск смещения (<code class="parameter">offset</code>) не поддерживается при
                        работе с удаленными файлами. Попытка поиска смещения на нелокальных
                        файлах может работать при небольших смещениях, но результат будет
                        непредсказуемым, так как функция работает на буферизованном потоке.
                    </p>
                </dd>



                <dt>
                    <code class="parameter">maxlen</code></dt>

                <dd>

                    <p class="para">
                        Максимальный размер читаемых данных. По умолчанию чтение
                        осуществляется пока не будет достигнут конец файла. Учтите, что
                        этот параметр применяется и к потоку с фильтрами.
                    </p>
        </div>
        <div class="block">
            <h2>file_put_contents</h2>
            <p> file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] ) : int - Пишет данные в файл</p>
            <h3 class="title">Список параметров</h3>
            <p class="para">
            </p>
            <dl>


                <dt>
                    <code class="parameter">filename</code></dt>

                <dd>

                    <p class="para">
                        Путь к записываемому файлу.
                    </p>
                </dd>



                <dt>
                    <code class="parameter">data</code></dt>

                <dd>

                    <p class="para">
                        Записываемые данные. Может быть типа <span class="type"><a href="language.types.string.html" class="type string">string</a></span>,
                        <span class="type"><a href="language.types.array.html" class="type array">array</a></span> или ресурсом потока.
                    </p>
                    <p class="para">
                        Если <code class="parameter">data</code> является потоковым ресурсом
                        (<span class="type"><span class="type stream">stream</span></span>), оставшийся буфер этого потока будет скопирован
                        в указанный файл. Это похоже на использование функции <span class="function"><a href="function.stream-copy-to-stream.html" class="function">stream_copy_to_stream()</a></span>.
                    </p>
                    <p class="para">
                        Также вы можете передать одномерный массив в качестве параметра
                        <code class="parameter">data</code>. Это будет эквивалентно вызову
                        <em>file_put_contents($filename, implode('', $array))</em>.
                    </p>
                </dd>



                <dt>
                    <code class="parameter">flags</code></dt>

                <dd>

                    <p class="para">
                        Значением параметра <code class="parameter">flags</code> может быть
                        любая комбинация следующих флагов, соединенных бинарным
                        оператором ИЛИ (<em>|</em>).
                    </p>
                    <p class="para">
                    </p>
                    <table class="doctable table">
                        <caption><strong>Доступные флаги</strong></caption>

                        <thead>
                            <tr>
                                <th>Флаг</th>
                                <th>Описание</th>
                            </tr>

                        </thead>

                        <tbody class="tbody">
                            <tr>
                                <td>
                                    <strong><code>FILE_USE_INCLUDE_PATH</code></strong>
                                </td>
                                <td>
                                    Ищет <code class="parameter">filename</code> в подключаемых директориях.
                                    Подробнее смотрите директиву <a href="ini.core.html#ini.include-path" class="link">include_path</a>.
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong><code>FILE_APPEND</code></strong>
                                </td>
                                <td>
                                    Если файл <code class="parameter">filename</code> уже существует, данные
                                    будут дописаны в конец файла вместо того, чтобы его перезаписать.
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong><code>LOCK_EX</code></strong>
                                </td>
                                <td>
                                    Получить эксклюзивную блокировку на файл на время записи. Другими словами,
                                    между вызовами <span class="function"><a href="function.fopen.html" class="function">fopen()</a></span> и <span class="function"><a href="function.fwrite.html" class="function">fwrite()</a></span> произойдет
                                    вызов функции <span class="function"><a href="function.flock.html" class="function">flock()</a></span>. Это не одно и то же, что вызов
                                    <span class="function"><a href="function.fopen.html" class="function">fopen()</a></span> с флагом "x".
                                </td>
                            </tr>

                        </tbody>

                    </table>

                    <p></p>
                </dd>



                <dt>
                    <code class="parameter">context</code></dt>

                <dd>
                    <p class="para">
                        Корректный ресурс контекста, созданный с помощью функции
                        <span class="function"><a href="function.stream-context-create.html" class="function">stream_context_create()</a></span>.
                    </p>
        </div>
        <div class="block">
            <h2>copy</h2>
            <p> copy ( string $source , string $dest [, resource $context ] ) : bool - копирует файл</p>
            <h3>Параметры</h3>
            <h4>source</h4>
            <p>Путь к исходному файлу.</p>
            <h4>dest</h4>
            <p>Путь к целевому файлу. Если dest является URL, то операция копирования может завершиться ошибкой, если обертка URL не поддерживает перезаписывание существующих файлов. </p>
        </div>
        <div class="block">
            <h2>rename</h2>
            <p> rename ( string $oldname , string $newname [, resource $context ] ) : bool — Переименовывает файл или директорию</p>
            <h3>Параметры</h3>
            <h4>oldname</h4>
            <p>Старое имя.</p>
            <p>Замечание: Обёртка, используемая в oldname должна совпадать с обёрткой, используемой в newname.</p>
            <h4>newname</h4>
            <p>Новое имя.</p>
            <h4>context</h4>
            <p>Замечание: Поддержка контекста была добавлена в PHP 5.0.0. Для описания контекстов смотрите раздел Потоки.</p>
        </div>
        <div class="block">
            <h2>unlink</h2>
            <p> unlink ( string $filename [, resource $context ] ) : bool - удаляет файл</p>
            <h3>Параметры</h3>
            <h4>filename</h4>
            <p>Путь к файлу.</p>
            <h4>context</h4>
            <p>Замечание: Поддержка контекста была добавлена в PHP 5.0.0. Для описания контекстов смотрите раздел Потоки.</p>
        </div>
        <div class="block">
            <h2>tmpfile</h2>
            <p> tmpfile ( void ) : resource - Создаёт временный файл</p>
            <p> Создаёт временный файл с уникальным именем, открывая его в режиме чтения и записи (w+) и возвращает файловый указатель.
                Этот файл автоматически удаляется после закрытия (например, путем вызова функции fclose() или если не осталось ни одной ссылки на указатель файла, возвращаемый tmpfile()), или при завершении работы скрипта. </p>
        </div>
        <div class="block">
            <h2>Задание</h2>
            <ul>
                <li>Создать форму с текстовой областью и тремя кнопками: «Сохранить», «Загрузить» и «Удалить».</li>
                <li>Если пользователь вводит в текстовую область какой-то текст и жмёт кнопку «Сохранить», то данный текст должен быть сохранён в текстовый файл на сервере, а у пользователя должна появиться строка: «Сохранение прошло успешно».</li>
                <li>При нажатии кнопки «Загрузить» в текстовой области должен появиться текст, который был записан до этого в файл. Если файла не существует, то вывести строку: «Файл не существует».</li>
                <li>При нажатии кнопки «Удалить» файл должен быть удалён, а у пользователя должна появиться строка: «Файл успешно удалён». Если файла не существует, то вывести строку: «Файл не существует».</li>
            </ul>
            <div class="my_tabs">
                <div class="head_tabs">
                    <p>Задание</p>
                    <p>PHP</p>
                </div>
                <div class="tabs">
                    <div>
                        <?php
                        if ($_GET['text']) {
                            if ($_GET['save']) {
                                $str = $_GET['text'];
                                echo 'Вы записали файл с данными = ' . $str;
                                file_put_contents('3/3_example.txt', $str);
                            } else if (file_exists('3/3_example.txt')) {
                                if ($_GET['add']) {
                                    $str = $_GET['text'];
                                    file_put_contents('3/3_example.txt', file_get_contents('3/3_example.txt') . $str);
                                    echo 'Введенная Вами строка = <b>' . $str . '</b> была добавлена в файл';
                                } else if ($_GET['remove']) {
                                    unlink('3/3_example.txt');
                                }
                            } else echo 'Файла не существует.';
                        } else if ($_GET['remove'] && file_exists('3/3_example.txt'))
                            unlink('3/3_example.txt');
                        else if (!file_exists('3/3_example.txt'))
                            echo 'Файла не существует';
                        else
                            echo 'Введите текст';
                        ?>
                    </div>
                    <div>
                        if ($_GET['text']) { <br />
                        if ($_GET['save']) { <br />
                        $str = $_GET['text']; <br />
                        echo 'Вы записали файл с данными = ' . $str; <br />
                        file_put_contents('3/3_example.txt', $str); <br />
                        } else if (file_exists('3/3_example.txt')){ <br />
                        if ($_GET['add']) { <br />
                        $str = $_GET['text']; <br />
                        file_put_contents('3/3_example.txt', file_get_contents('3/3_example.txt') . $str); <br />
                        echo 'Введенная Вами строка = &lt;b&gt;' . $str.'&lt;/b&gt; была добавлена в файл'; <br />
                        } else if ($_GET['remove']) { <br />
                        unlink('3/3_example.txt'); <br />
                        } <br />
                        } else echo 'Файла не существует.'; <br />
                        } else if ($_GET['remove']&&file_exists('3/3_example.txt')) <br />
                        unlink('3/3_example.txt'); <br />
                        else if(!file_exists('3/3_example.txt')) <br />
                        echo 'Файла не существует'; <br />
                        else <br />
                        echo 'Введите текст';
                    </div>
                </div>
            </div>
        </div>
        <form action=<?= $_SERVER['REQUEST_URI'] ?> method="get">
            <textarea name="text" id="" cols="30" rows="10"></textarea>
            <hr>
            <input type="submit" name="save" value="Сохранить в файл">
            <input type="submit" name="remove" value="Удалить файл">
            <input type="submit" name="add" value="Добавить в файл">
        </form>

    </main>
</body>

</html>