<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Bucle for </title>
</head>
<body>
    <?php

$n = 5;

// Comprobamos que sea positivo
if ($n <= 0) {
    echo "El número debe ser positivo";
} else {

    $factorial = 1;

    echo "Cálculos:<br>";

    for ($i = $n; $i >= 1; $i--) {

        $factorial = $factorial * $i;

        echo $factorial . "<br>";
    }

    echo "El factorial de $n es: " . $factorial;
}

?>

</body>
</html>
