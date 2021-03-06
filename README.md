# php-learn
## Lesson 1
Начнём с того, что выражение в языке PHP - это вообще любая строка, число, объект, массив, или что-то ещё, что представлено в явном виде или в виде каких-либо вычислений.

Например:

```bash
'строка с пробелами'
7
2 + 2
5 / 2
```
Всё вышеперечисленное является выражениями. При этом выражение должно иметь какое-либо значение. Для примеров выше это, например, строка с текстом, целое число 7, целое число 4 и, наконец, дробное число 2.5.

Как вы понимаете, сами по себе выражения бесполезны, пока они не используются. Вся прелесть PHP в том что он может встраиваться в HTML.

Например:

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Пример встраивания PHP в HTML</title>
</head>
<body>
<h1>Пример встраивания PHP в HTML</h1>
2 + 2 = <?php echo 2 + 2; ?>
</body>
</html>
```
## Lesson 2 Переменные в PHP
Переменная – это какое-то значение, которому соответствует определённое имя.
Как в математике, x = 2 – переменная x равна двум. Здесь x – имя переменной, 2 – её значение.

В PHP переменные начинаются со знака "$".
Например: $x.

Эта операция так и называется – присваивание переменной.

Разумеется, переменной можно присвоить и результат целого выражения. Пример:

```php
$sum = 5 + 10;
echo $sum;
```

Также мы можем использовать переменные внутри других выражений:

```php
$x = 2 + 3;
$y = ($x * 2) / ($x + 1);

echo $y;
```

### Имена переменных
Стоит обратить внимание, что имена переменных в PHP являются регистрозависимыми. То есть $x и $X – две разные переменные.

Также сразу хотелось бы сказать об именовании переменных. Это один из важнейших навыков хорошего программиста, которым начинающие поначалу пренебрегают. Так вот, переменным нужно всегда давать имена, которые будут явно говорить о том, что же именно содержится в этой переменной в данный момент. Примеры хороших имён:

```php
$subscriberEmail = ‘user@email.com’;
$catName = ‘Барсик’;
$dayOfWeek = ‘среда’;

```
Кроме того, есть определённые правила, которые не влияют на работоспособность кода, но которых придерживаются все программисты на PHP. Это позволяет легко читать код других программистов, а это очень важно, так как над крупными проектами работает всегда несколько человек, и им обязательно приходится читать код друг друга. Повторюсь, эти правила чрезвычайно важны, потому что в будущем, когда Вы придёте работать на работу, Ваш код будут читать и изменять другие программисты, подумайте о них уже сейчас. Итак, перечислим эти правила.

- Имя переменной должно состоять только из английских слов, и уж тем более только из букв английского алфавита.
  Никаких $imyaKota или тем более `$имяКота`, строго `$catName`.
- Имя переменной должно начинаться с маленькой буквы, а следующие слова, содержащиеся в её имени, должны начинаться с большой буквы. Этот стиль называется lowerCamelCase, или "нижнийВерблюжийРегистр"
  Никаких `$catname` или `$CatName`, только `$catName`.