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
