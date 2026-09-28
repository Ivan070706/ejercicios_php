<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximo Común Divisor</title>
</head>
<body>
    <?php

$a = 48;
$b = 18;

if ($a <= 0 || $b <= 0) {

    echo "Los números deben ser positivos";

} else {

    while ($b != 0) {

        $resto = $a % $b;

        $a = $b;
        $b = $resto;
    }

    echo "El máximo común divisor de ( 48 y 18 ) es: " . $a;
}

?>

</body>
</html>