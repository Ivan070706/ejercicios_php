<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Ecuacion 2º grado </title>
</head>
<body>
    <?php

$a = 1;
$b = -5;
$c = 6;

// Calculamos la x
$y = ($b ** 2) - (4 * $a * $c);

// Comprobamos que a no sea 0
if ($a != 0) {

    // Comprobamos que las soluciones sean reales
    if ($y >= 0) {

        $x1 = (-$b + sqrt($y)) / (2 * $a);
        $x2 = (-$b - sqrt($y)) / (2 * $a);

        echo "x1 = " . $x1 . "<br>";
        echo "x2 = " . $x2;

    } else {
        echo "La ecuación no tiene soluciones reales";
    }

} else {
    echo "No es una ecuación de segundo grado porque a = 0";
}

?>

</body>
</html>