<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactorizacion</title>
</head>
<body>
    <?php

$a = 1;
$b = -5;
$c = 6;

// CASO 1: a = 0
if ($a == 0) {

    // Si a y b son 0
    if ($b == 0) {

        if ($c == 0) {
            echo "La ecuación tiene infinitas soluciones";
        } else {
            echo "La ecuación no tiene solución";
        }

    } else {
        // Es una ecuación de primer grado
        $x = -$c / $b;

        echo "Es una ecuación de primer grado.<br>";
        echo "x = " . $x;
    }

} else {

    // CASO 2: c = 0
    if ($c == 0) {

        $x1 = 0;
        $x2 = -$b / $a;

        echo "x1 = " . $x1 . "<br>";
        echo "x2 = " . $x2;

    } else {

        // CASO 3: b = 0
        if ($b == 0) {

            $resultado = -$c / $a;

            if ($resultado >= 0) {

                $x1 = sqrt($resultado);
                $x2 = -sqrt($resultado);

                echo "x1 = " . $x1 . "<br>";
                echo "x2 = " . $x2;

            } else {
                echo "No existen soluciones reales";
            }

        } else {

            // CASO 4: ecuación de segundo grado normal
            $y = ($b ** 2) - (4 * $a * $c);

            if ($y > 0) {

                $x1 = (-$b + sqrt($y)) / (2 * $a);
                $x2 = (-$b - sqrt($y)) / (2 * $a);

                echo "x1 = " . $x1 . "<br>";
                echo "x2 = " . $x2;

            } elseif ($y == 0) {

                $x = -$b / (2 * $a);

                echo "La ecuación tiene una única solución.<br>";
                echo "x = " . $x;

            } else {

                echo "No existen soluciones reales";
            }
        }
    }
}

?>

</body>
</html>