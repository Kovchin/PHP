/*
Данная библиотека функций java script создается в обучающих целях что бы вести конспекты во время обучения*/
/*
==============================
Структура документа для данной библиотеки
==============================
<div>
<h2>Описываемый (класс, метод, тег, свойство и т.д.)</h2>
Далее любые теги для описания изучаемого материала после чего можно вставить блок примера использования
<div class="my_tabs">
    <div>
        <p>С названиями вкладок (HTML, CSS, JS, PHP, Результат)</p>
        <p>С названиями вкладок (HTML, CSS, JS, PHP, Результат)</p>
    </div>
    <div>
        <div>
            Здесь идет блок демонстрации кода HTML, JS, CSS, PHP и выводимый результат
        <div>
        <div>
            Здесь идет блок демонстрации кода HTML, JS, CSS, PHP и выводимый результат
        <div>       
    </div>
</div>
==============================
Расстановка стартовых переменных и css свойств для документа
==============================
*/
//Назначаем обработчик событий на все h2 что бы скрывать и отображать секции кода
$('h2').on('click', change_view);
//Скрываем теги кроме заголовков h2 что бы страница выглядела попроще
$($($('h2').parent()).children()).hide();
$('h2').show();

//Делаем активными все шапки и отображаем первые вкладки
var my_tabs = $('.my_tabs');//это собственно все наши блоки со вкладками

for (var i = 0; i < my_tabs.length; i++) {
    for (var j = 0; j < $(my_tabs[i]).children.length; j++)
    //если четный ребенок то это шапка назначаем первого ребенка активным и присваиваем всем обработчик onclick
        if (j % 2 == 0){
            $($($(my_tabs[i]).children()[j]).children()[0]).addClass('active');
            $($($(my_tabs[i]).children()[j]).children()).on('click', set_active);
        }
    //если ребенок не четный то это вкладка все прячем и первую делаем видимой
        else{
        $($($(my_tabs[i]).children()[j]).children()).hide();
        $($($(my_tabs[i]).children()[j]).children()[0]).show();
    }
}
/*
==============================
Используемые функции
==============================
*/
//Функция меняет видимость элементов в блоке кроме h2
function change_view(event) {
    var checked_children = $($(event.target).parent()).children();
    if ($(checked_children[0]).css('color') != 'rgb(0, 0, 0)') {
        $(checked_children[0]).css('color', '#000');
        for (var i = 1; i < checked_children.length; i++) {
            $(checked_children[i]).hide(500);
        }
    }
    else {
        $(checked_children[0]).css('color', '#777');
        for (var i = 1; i < checked_children.length; i++) {
            $(checked_children[i]).show(500);
        }
    }
}
//функция делает активной кликнутую шапку и отображает соответствующую вкладку
function set_active(event) {
    //удаляем класс у всех заголовков вкладок выбранного блока
    $($($(event.target).parent()).children()).removeClass('active');
    //скрываем все вкладки выбранного блока
    $($($($(event.target).parent()).parent().children()[1]).children()).hide();
    //добавляем класс 'active' кликнутому заголовку выбранного блока (Понимаю что написано сумбурно но у меня сейчас очень поздно :-)
    $(event.target).addClass('active');
    //цикл перебирает все вкладки в блоке и на показывает ту по шапке которого кликнули
    for (var i = 0; i < $($(event.target).parent()).children().length; i++)
        if ($($($(event.target).parent()).children()[i]).attr('class') == 'active')
            $($($($(event.target).parent()).parent().children()[1]).children()[i]).show();
}

