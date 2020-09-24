<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <title>Learn php</title>
    </head>
    <body>
    <h1>Learn PHP.</h1>
    <h2>Пример встраивания Php в html</h2>
    <p>2 +3 = <?php echo 2+3; ?></p>
    <h2>Lesson 2</h2>
    <h3>Домашнее задание</h3>
    <?php
    $a = 3;
    $b = 5;

    $c = $a + $b;
    echo "<h4>Перестановка значений двух переменных</h4><p>Исходные значения:</p>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    $a = $c - $a;
    $b = $c - $b;
    echo "<p>Значения осле перестановки:</p>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    ?>
    <h3>Дополнительно</h3>
    <p>Вывод даты:</p>
    <?php
    echo "Текущая дата <br>";
    echo date(DATE_RSS);
    ?>

    </body>
</html>
