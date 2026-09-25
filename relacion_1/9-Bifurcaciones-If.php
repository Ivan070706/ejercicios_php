<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bifurcaciones IF </title>
</head>
<body>
    <?php

$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

// Comprobamos primero que pueda existir un triángulo
if (($lado1 + $lado2 > $lado3) &&
    ($lado1 + $lado3 > $lado2) &&
    ($lado2 + $lado3 > $lado1)) {

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "El triángulo es equilátero";
    } else {

        if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "El triángulo es isósceles";
        } else {
            echo "El triángulo es escaleno";
        }
    }

} else {
    echo "Los lados no forman un triángulo";
}

?>

</body>
</html>