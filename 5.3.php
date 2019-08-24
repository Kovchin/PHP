<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>try catch finally</title>
</head>

<body>
    <h1>try catch finally</h1>
    <p>Обработка исключений</p>
    <h3>try - секция что пытается выполниться</h3>
    <h3>catch - если возникла ошибка то что делать</h3>
    <h3>finally - блок что будет исполнен в любом случае</h3>
    <code>
        try{ <br />
        $email = 'kovchin@mail.ru'; <br />
        if (true) throw new Exception('My Error'); <br />
        echo 'Мы прошли проверку успешно!'; <br />
        } <br />
        catch <br />
        (Exception $e){ <br />
        echo 'Произошла ошибка: '.$e->getMessage(); <br />
        } <br />
        finally{ <br />
        echo '<br /> Этот код исполняется в любом случае.'; <br />
        } <br /> <br />
    </code>

    <?php
    try {
        $email = 'kovchin@mail.ru';
        if (true) throw new Exception('My Error');
        echo 'Мы прошли проверку успешно!';
    } catch (Exception $e) {
        echo 'Произошла ошибка: ' . $e->getMessage();
    } finally {
        echo '<br /> Этот код исполняется в любом случае.';
    }
    ?>
    <h2>Задание</h2>
    <ul>
        <li>Создайте класс Valid, в котором реализуйте статический метод validEmail($email). Метод validEmail() должен выбрасывать следующие исключения: пустая строка – исключение с message «E-mail не указан», некорректный e-mail (не прошёл проверку в регулярном выражении) – исключение «E-mail указан неправильно», длина e-mail больше 255 символов – исключение «Слишком длинный e-mail». Если всё хорошо, то метод возвращает true.</li>
        <li>Вызовите метод validEmail(), передавая ему разные параметры, а также перехватывайте и выводите исключения.</li>
    </ul>
    Примечание: Обратите внимание, что в методе validEmail() лишь выбрасываются исключения, а уже обработка (то есть блок try-catch) должна быть там, где вызывается этот метод.
</body>

</html>