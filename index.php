
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>

<h2>Calculadora</h2>

<form action="calcular.php" method="GET">
    <label>Primer número:</label>
    <input type="number" name="num1" step="1" required>

    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="num2" step="1" required>

    <br><br>

    <label>Operador:</label>
    <select name="operador" required>
        <option value="">Selecciona operador</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>

    <br><br>

    <button type="submit">Calcular con GET</button>
</form>

<hr>

<form action="calcular.php" method="POST">
    <input type="number" name="num1" placeholder="Primer número" required>
    <input type="number" name="num2" placeholder="Segundo número" required>

    <select name="operador" required>
        <option value="">Selecciona operador</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>

    <button type="submit">Calcular con POST</button>
</form>

</body>
</html>
