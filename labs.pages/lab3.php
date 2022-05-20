<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Лабораторные работы</title>
    <link rel = "stylesheet" href = "/styles/style.css">
    <script type = "text/javascript" src = "/scripts/lab3script.js"></script>
</head>
<body>
<h1>Лабораторная работа №3</h1>
<form>
    <table>

        <tr>
            <td>Множество А</td>
            <td><input type="text" id = "mn1" value=""/><br></td>
        </tr>
        <tr>
            <td>Множество В</td>
            <td><input type="text" id = "mn2" value=""/><br></td>
        </tr>
        <tr>
            <td>Отношение</td>
            <td><input type="text" id = "rel" value=""/><br></td>
        </tr>
        <tr>
            <td colspan="3">
                <input id="analyze"type="button" value="Анализ" onclick=analyze_();>
                <input id="clear"type="button" value="Очистить" onclick=clear_();>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label id="res">Результат: </label><br>
            </td>
        </tr>
    </table>
</form>

</body>
</html>