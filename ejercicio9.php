
<?php
$resultado = null;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = filter_input(INPUT_POST, "num1", FILTER_VALIDATE_INT);
    $num2 = filter_input(INPUT_POST, "num2", FILTER_VALIDATE_INT);
    $operador = $_POST["operador"] ?? "";

    if ($num1 === false || $num1 === null ||
        $num2 === false || $num2 === null) {

        $error = "Introduce dos números enteros.";

    } else {

        $resultado = match ($operador) {
            "+" => $num1 + $num2,
            "-" => $num1 - $num2,
            "*" => $num1 * $num2,
            "/" => $num2 != 0 ? $num1 / $num2 : null,
            "%" => $num2 != 0 ? $num1 % $num2 : null,
            default => null
        };

        if ($resultado === null) {
            $error = "Operación incorrecta o división por cero.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width:500px">

        <div class="card-header bg-primary text-white">
            <h2>Calculadora PHP</h2>
        </div>

        <div class="card-body">

            <form method="POST">

                <input type="number" name="num1"
                       class="form-control mb-3"
                       placeholder="Primer número"
                       step="1" required>

                <input type="number" name="num2"
                       class="form-control mb-3"
                       placeholder="Segundo número"
                       step="1" required>

                <select name="operador" class="form-select mb-3" required>
                    <option value="">Selecciona operación</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>

                <button class="btn btn-success w-100">
                    Calcular
                </button>

            </form>

            <?php if ($error != ""): ?>
                <div class="alert alert-danger mt-3">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php elseif ($resultado !== null): ?>
                <div class="alert alert-success mt-3">
                    Resultado: <?= htmlspecialchars((string)$resultado) ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

</body>
</html>
