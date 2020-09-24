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
    <h2>Lesson 3 Операторы в PHP</h2>
    <h3>Арифметические операторы</h3>

    <p>Даны две переменные $a = 5 и $b = 3. Вот примеры операций с ними:</p>
    <p>Сложение</p>
    <code>
        $a + $b;
    </code>
    <?php
    $a = 5;
    $b = 3;
    var_dump($a + $b);
    ?>
    <p>Вычитание</p>
    <code>$a - $b;</code>
    <?php
    var_dump($a - $b);
    ?>

    <h3>Домашнее задание</h3>



    </body>
</html>
