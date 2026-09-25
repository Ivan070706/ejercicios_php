<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
</head>
<body>
    <?php

$rubrica = [
    "inicial" => 10,
    "primera" => 20,
    "segunda" => 30,
    "tercera" => 40
];

$notas = [
    "inicial" => 6,
    "primera" => 7,
    "segunda" => 8,
    "tercera" => 9
];

$notaFinal = 0;

foreach ($rubrica as $parte => $porcentaje) {
    $notaFinal = $notaFinal + ($notas[$parte] * $porcentaje / 100);
}

echo "Nota final: " . $notaFinal . "<br>";

if ($notaFinal >= 5) {
    echo "La persona aprueba";
}

if ($notaFinal < 5) {
    echo "La persona suspende";
}

?>

</body>
</html>


