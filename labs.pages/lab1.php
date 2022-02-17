<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Лабораторные работы</title>
    <link rel = "stylesheet" href = "/styles/style.css">
    <script type = "text/javascript" src = "/scripts/lab1script.js"></script>
</head>
<body>
<h1>Лабораторная работа №1</h1>
<form>
    <table>
        <tr>
            <td colspan="2">Ввод осуществлять в формате ibij ibij ibij...,<br> где i - четная цифра, b - буква, j - нечетная цифра</td>
        </tr>
        <tr>
            <td>Первый массив</td>
            <td><input type="text" id = "mass1" value=""/><br></td>
        </tr>
        <tr>
            <td>Второй массив</td>
            <td><input type="text" id = "mass2" value=""/><br></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" value="Подсчитать" onclick=main();></td>
        </tr>
    </table>
</form>

</body>
</html>