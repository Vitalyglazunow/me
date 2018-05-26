<html lang="ru">
<head>
    <meta charset="utf-8">
</head>

<body>
<form method="GET">
    Число: <input type="text" name="x">
    <input type="submit" value="Отправить">
</form>


<?php
echo "<br>Число = ". $_GET['x'];
$x = $_GET['x'];
$odin = 1;
$dva = 1;
echo "<br>";

while(true) {
    if ($odin > $x) {
        echo "Задуманное число НЕ входит в числовой ряд";
        break;
    }
    elseif ($odin == $x) {
        echo "Задуманное число входит в числовой ряд";
        break;
    }
    else {
        $tri = $odin;
        $odin = $odin + $dva;
        $dva = $tri;
        echo $odin; echo "<br>";
    }
}
?>

</body>
</html>