
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<div class="card shadow mx-auto" style="max-width:450px">
    <div class="card-body">

        <h2>Operaciones con números</h2>

        <form action="resultado.php" method="POST">

            <label class="form-label">Introduce un número</label>

            <input type="number" name="numero"
                   class="form-control mb-3"
                   min="1" step="1" required>

            <h5>Selecciona una opción:</h5>

            <div class="form-check">
                <input class="form-check-input" type="radio"
                       name="opcion" value="primo" required>
                <label class="form-check-label">Comprobar si es primo</label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio"
                       name="opcion" value="divisores">
                <label class="form-check-label">Mostrar divisores</label>
            </div>

            <button class="btn btn-primary w-100">Enviar</button>

        </form>
    </div>
</div>

</body>
</html>
