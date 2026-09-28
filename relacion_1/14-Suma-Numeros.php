<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Numeros</title>
</head>
<body>
    <?php

$n = 10;

if ($n <= 0) {

    echo "El número debe ser positivo";

} else {

    $suma = 0;

    for ($i = 1; $i <= $n; $i++) {

        $suma = $suma + $i;
    }

    echo "La suma de los primeros $n números es: " . $suma;
}

?>

</body>
</html>