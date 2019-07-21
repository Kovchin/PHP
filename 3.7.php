<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <link rel="stylesheet" href="css/tabs.css">
    <link rel="stylesheet" href="css/3.7.css">
    <script src="JS\jquery-3.4.1.min.js"></script>
    <script src="JS\show_hide.js" defer></script>
    <title>Права доступа к файлам</title>
</head>

<body>
    <main>
        <p>Доступ к файлу характеризуется 3-мя восьмеричными числами к примеру 0744</p>
        <h3>UGO</h3>
        <ul>
            <li>User - Права пользователя</li>
            <li>Group - Права группы</li>
            <li>Other - Права остальных</li>
        </ul>
        <p>Каждое число это определенные права для 3-ех категорий</p>
        <ul>
            <li>read - <b>4*x</b> - Это права на чтение</li>
            <li>write - <b>2*x</b> - Это права запись</li>
            <li>execute - <b>1*x</b> - Это права исполнение</li>
        </ul>
        <h3>То есть 0754 - Означает -rwxr-xr--</h3>
        <ul>
            <li>Права пользователя
                <p>7 = 4*1 + 2*1 + 1*1</p>
                <p>-rwx - пользователь имеет право на чтение запись и исполнение файла</p>
            </li>
            <li>Права группы
                <p>5 = 4*1 + 2*0 + 1*1</p>
                <p>-r-x - Группа имеет право на чтение и исполнение файла</p>
            </li>
            <li>Права остальных
                <p>4 = 4*1 + 2*0 + 1*0</p>
                <p>-r-- - Остальные пользователи имеют право только на чтение файла</p>
            </li>
        </ul>
        <h1>Права доступа к файлам</h1>
        <ul>
            <li>fileowner('Путь к файлу') - Возвращает идентификатор владельца файла</li>
            <li>filegroup('Путь к файлу') - Получает идентификатор группы файла</li>
            <li>fileperms('Путь к файлу') - Возвращает информацию о правах доступа на файл. </li>
            <li>decoct(int) - Переводит число из десятичной системы счисления в восьмеричную</li>
            <li>octdec(int) - Переводит число из восьмеричной системы счисления в десятичную</li>
            <li>chown('Имя файла', 'user') - Изменяет владельца файла. user - идентификатор нового пользователя</li>
            <li>chmod('Имя файла', 'int $mode') - Изменяет режим доступа к файлу</li>
            <li> flock ( resource $handle , int $operation [, int &$wouldblock ] ) : bool - Портируемая консультативная блокировка файлов</li>
        </ul>
        <h3>Урок</h3>
        <?php
        echo 'Результат исполнения команды <b>fileowner()</b> - '.fileowner('3/3.7.txt').'<br />';
        echo 'Результат исполнения команды <b>filegroup()</b> - '.filegroup('3/3.7.txt').'<br />';
        echo 'Права доступа к файлу в числовом виде <b>fileperms()</b> - '.fileperms('3/3.7.txt').'<br />';
        echo 'Права доступа к файлу в нормальном виде <b>decoct(fileperms())</b> - '.decoct(fileperms('3/3.7.txt')).'<br />';
        
        chown('3/3.7.txt',1000);
        //Меняет права на доступ к файлу на rwxr-xr--
        chmod('3/3.7.txt',777);
        //Функция которя позволяет запускать экземпляр скрипта только 1 раз в противном случае вернется исключение
        $f = fopen(__FILE__, 'r');    
        if (!flock($f, LOCK_EX | LOCK_NB)){
            die('Скрипт уже запущен');
        }
        for ($i = 0 ; $i < 10000; $i++)

        ?>

        <div class="code"> 
        $f = fopen(__FILE__, 'r');<br />    
        if (!flock($f, LOCK_EX | LOCK_NB)){<br />
            die('Скрипт уже запущен');
        }
        </div>
    </main>
</body>

</html>