<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division Restas</title>
</head>
<body>
    <?php

$dividendo = 17;
$divisor = 5;

if ($dividendo <= 0 || $divisor <= 0) {

    echo "Los números deben ser positivos";

} else {

    $resto = $dividendo;
    $cociente = 0;

    while ($resto >= $divisor) {

        $resto = $resto - $divisor;

        $cociente++;
    }

    echo "Cociente: " . $cociente . "<br>";
    echo "Resto: " . $resto;
}

?>

</body>
</html>