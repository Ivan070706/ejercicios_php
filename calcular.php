
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operador = $_GET["operador"];
} else {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operador = $_POST["operador"];
}

$num1 = filter_var($num1, FILTER_VALIDATE_INT);
$num2 = filter_var($num2, FILTER_VALIDATE_INT);

if ($num1 === false || $num2 === false) {
    die("Debes introducir números enteros.");
}

$resultado = match ($operador) {
    "+" => $num1 + $num2,
    "-" => $num1 - $num2,
    "*" => $num1 * $num2,
    "/" => $num2 != 0 ? $num1 / $num2 : "Error: división por cero",
    "%" => $num2 != 0 ? $num1 % $num2 : "Error: división por cero",
    default => "Operador no válido"
};

echo "<h2>Resultado: $resultado</h2>";

echo '<a href="index.php">Volver</a>';

?>
