<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal a Binario, Octal, Hexadecimal</title>
</head>
<body>
    <?php

$n = 25;
$opcion = 16;

// Elegimos la base
switch ($opcion) {

    case 2:
        $base = 2;
        echo "Binario: ";
        break;

    case 8:
        $base = 8;
        echo "Octal: ";
        break;

    case 16:
        $base = 16;
        echo "Hexadecimal: ";
        break;

    default:
        echo "Opción incorrecta";
        exit;
}

if ($n < 0) {

    echo "El número debe ser positivo";

} elseif ($n == 0) {

    echo "0";

} else {

    $resultado = array();

    do {

        $resto = $n % $base;

        // Para hexadecimal
        if ($resto == 10) {
            $resto = "A";
        } elseif ($resto == 11) {
            $resto = "B";
        } elseif ($resto == 12) {
            $resto = "C";
        } elseif ($resto == 13) {
            $resto = "D";
        } elseif ($resto == 14) {
            $resto = "E";
        } elseif ($resto == 15) {
            $resto = "F";
        }

        array_push($resultado, $resto);

        $n = intdiv($n, $base);

    } while ($n > 0);


    // Mostramos el resultado al revés
    for ($i = count($resultado) - 1; $i >= 0; $i--) {

        echo $resultado[$i];
    }
}

?>

</body>
</html>