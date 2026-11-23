
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MCD y división</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<div class="card shadow mx-auto" style="max-width:450px">
    <div class="card-body">

        <h2>MCD y división entera</h2>

        <form action="resultado.php" method="POST">

            <input type="number" name="num1"
                   class="form-control mb-3"
                   placeholder="Primer número"
                   min="1" required>

            <input type="number" name="num2"
                   class="form-control mb-3"
                   placeholder="Segundo número"
                   min="1" required>

            <h5>Selecciona los resultados:</h5>

            <div class="form-check">
                <input type="checkbox" name="opciones[]"
                       value="cociente" class="form-check-input">
                <label class="form-check-label">Cociente</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="opciones[]"
                       value="resto" class="form-check-input">
                <label class="form-check-label">Resto</label>
            </div>

            <button class="btn btn-primary w-100">Calcular</button>

        </form>
    </div>
</div>

</body>
</html>
