<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal a Binario</title>
</head>
<body>
    <?php

$n = 25;

if ($n < 0) {

    echo "El número debe ser positivo";

} else {

    $binario = array();

    if ($n == 0) {

        echo "Binario: 0";

    } else {

        while ($n > 0) {

            $resto = $n % 2;

            array_push($binario, $resto);

            $n = intdiv($n, 2);
        }

        echo "Binario: ";

        for ($i = count($binario) - 1; $i >= 0; $i--) {

            echo $binario[$i];
        }
    }
}

?>

</body>
</html>