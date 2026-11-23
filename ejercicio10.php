
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario separado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Calculadora</h2>

<form action="resultado.php" method="POST">

    <label>Primer número</label>
    <input type="number" name="num1" class="form-control mb-3" required>

    <label>Segundo número</label>
    <input type="number" name="num2" class="form-control mb-3" required>

    <label>Operador</label>
    <select name="operador" class="form-select mb-3" required>
        <option value="">Selecciona operación</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>

    <button class="btn btn-primary">Calcular</button>

</form>

</body>
</html>
