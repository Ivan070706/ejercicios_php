
<?php

$resultado = null;
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $num1 = filter_input(INPUT_POST, "num1", FILTER_VALIDATE_INT);
    $num2 = filter_input(INPUT_POST, "num2", FILTER_VALIDATE_INT);
    $operador = $_POST["operador"] ?? "";

    if ($num1 === false || $num1 === null ||
        $num2 === false || $num2 === null) {

        $error = "Introduce números enteros.";

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
            $error = "Operación no válida o división por cero.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora completa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<div class="card shadow mx-auto" style="max-width:450px">
    <div class="card-body">

        <h2>Calculadora PHP</h2>

        <form method="POST" id="formulario">

            <input type="number" name="num1" id="num1"
                   class="form-control mb-3" required>

            <input type="number" name="num2" id="num2"
                   class="form-control mb-3" required>

            <select name="operador" id="operador"
                    class="form-select mb-3" required>
                <option value="">Selecciona operación</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>

            <p id="errorJS" class="text-danger"></p>

            <button class="btn btn-primary w-100">Calcular</button>

        </form>

        <?php if ($error): ?>
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

<script>
document.getElementById("formulario").addEventListener("submit", function(e) {

    const n1 = document.getElementById("num1").value.trim();
    const n2 = document.getElementById("num2").value.trim();
    const op = document.getElementById("operador").value;

    const error = document.getElementById("errorJS");
    error.textContent = "";

    if (n1 === "" || n2 === "" ||
        !Number.isInteger(Number(n1)) ||
        !Number.isInteger(Number(n2))) {
        error.textContent = "Introduce dos números enteros.";
        e.preventDefault();
        return;
    }

    if (op === "") {
        error.textContent = "Selecciona una operación.";
        e.preventDefault();
        return;
    }

    if ((op === "/" || op === "%") && Number(n2) === 0) {
        error.textContent = "No puedes dividir entre cero.";
        e.preventDefault();
    }
});
</script>

</body>
</html>
