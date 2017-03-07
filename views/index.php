<?php
/* @var  $log array  */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/web/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="well">
                <h3>Задание 1</h3>
                <label>Вставьте текст</label>
                <textarea class="form-control" id="task1_source">[tag1:описание1]данные1[/tag1][tag2:описание2]данные2[/tag2][tag3:]данные3[/tag3]</textarea>

                <button type="button" class="btn btn-primary" id="task1_button">Распарсить</button>
                <pre  id="task1_result"></pre>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <h3>Задание 2</h3>
                <label>Вставьте текст</label>
                <textarea class="form-control" id="task2_source">1111111111111 dva: 22222222222222 raz:333333333333333333 tri:444444444444444444raz:5555555555</textarea>

                <button type="button" class="btn btn-primary" id="task2_button">Распарсить</button>
                <pre id="task2_result"></pre>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <h3>Задание 4</h3>
                Из таблицы из задания 3 сделать выборку записей без родителей, с тремя и более потомками. <br>
                <button type="button" class="btn btn-primary" id="task4_button">Получить данные</button>
                <pre  id="task4_result"></pre>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <h3>Задание 5</h3>
                Из таблицы из задания 3 сделать выборку записей без потомков, но с 2-мя старшими родителями  <br>
                <button type="button" class="btn btn-primary" id="task5_button">Получить данные</button>
                <pre  id="task5_result"></pre>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <h3>Задание 6</h3>
                Есть массив чисел диапазона с 100000 по 1500000 с 1000000 элементами. Нужно с минимальным использованием процессорного времени найти все повторяющиеся числа.  <br>
                <button type="button" class="btn btn-primary" id="task6_button">Получить данные</button>
                <pre  id="task6_result"></pre>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="well">
                <h3>Задание 7</h3>
                Дан 2-х мерный массив, количество элементов в каждой строке может быть разной и заранее не известно. Так же не известно количество строк.
                <button type="button" class="btn btn-primary" id="task7_button">Посчитать</button>
                <pre  id="task7_result"></pre>
            </div>
        </div>
    </div>



    <?php if(count($log)> 0): ?>
        <h3>Лог</h3>
        <pre>
<?php
print_r($log);
?>
</pre>
    <?php endif;?>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="/web/js.js"></script>

</body>
</html>
