<?php

$nickname=" Alexander";
$hello="Привет";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP цикл FOR</title>
</head>
<body>
    <header>
        <h2 class="subtitle">PHP цикл for в массиве</h2>
    </header>
    <div class="step__first">
        <p>
            Пример использования массива данных в цикле for. <br>
            Создаем массив данных arr:
            <ul>
                <li>$arr[0]="Продукты";</li>
                <li>$arr[1]="Бутылка с водой";</li>
            </ul>
            Далее пришем цикл for<br>
            <ul>
                <li>for($i=0; $i < count($arr); $i++){</li>
                <li>echo $arr[$i]." br>";</li>
                <li>}</li>
            </ul>
            В данном примере используем весь массив через функцию count($arr), но можно указать и конкретный индекс массива.<br>
            Ниже видим данный код в работе, т.е. используя цикл for мы выводим на экран содержимое массива arr в столбик, как бы говоря, что переменная i равно нулю, если переменная i меньше индекса равного нулю, то необходимо совершить увеличение значения переменной i на одну единицу, т.е. прибавить 1, до тех пор пока переменная i будет меньше массива arr, т.е. пока в данном массиве незакончится индексы, о чем нам говорить функция count($arr). <br>
            Далее мы просим интерпретатор вывести на экран монитора список массива arr в столбик.
        </p>
        <div class="code__php">
            <?php 
                $arr[0] = "Продукты";
                $arr[1] = "Бутылка с водой";

                for($i = 0; $i< count($arr); $i++){
                    echo $arr[$i]."<br>";
                }
            ?>            
        </div>
        <p>
            Пример вывода массива в цикле while:<br>
            <ul>
                <li>$i=0;</li>
                <li>while($i < count($arr)){</li>
                <li>echo $arr[$i]."br>";</li>
                <li>$i++</li>
                <li>}</li>
            </ul>
            Смотрим как работает данный код цикла while  ниже.
        </p>
        <div class="code__php">
            <?php
                $i=0;
                while($i < count($arr)){
                    echo $arr[$i]."<br>";
                    $i++;
                }
            ?>
        </div>
    </div>

    
</body>
</html>