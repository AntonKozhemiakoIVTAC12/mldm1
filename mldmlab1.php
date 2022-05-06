<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторные работы</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="scripts/scripts1.js"></script>
</head>
<body>
<form method="" action="">
    <table>
        <tr>
            <td>Первый массив</td>
            <td><input type="text" id="arr_1" value="" size=200/></td>
        </tr>
        <tr>
            <td>Второй массив</td>
            <td><input type="text" id="arr_2" value="" size=200/></td>
        </tr>
        <tr>
            <td><input type="button" class="button" value="Объединение" onclick="unification();"/></td>
            <td><input type="button" class="button" value="Пересечение" onclick="intersection();"/></td>
        </tr>
        <tr>
            <td><input type="button" class="button" value="Дополнение A\B" onclick="additionAB();"/></td>
            <td><input type="button" class="button" value="Дополнение B\A" onclick="additionBA();"/></td>
        </tr>
        <tr>
            <td><input type="button" class="button" value="Симметрическая разность" onclick="symmetricdifference();"/></td>
        </tr>        
    </table>
</form>
<div id="outResult"></div>
</body>
</html>