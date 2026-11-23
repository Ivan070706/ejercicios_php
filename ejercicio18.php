
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width:450px">

        <div class="card-header bg-primary text-white">
            <h2>Formulario de operación</h2>
        </div>

        <div class="card-body">

            <form action="resultado.php" method="POST">

                <label class="form-label">Introduce un número</label>

                <input type="number" name="numero"
                       class="form-control mb-3" required>

                <button class="btn btn-primary w-100">
                    Enviar
                </button>

            </form>

        </div>
    </div>
</div>

</body>
</html>
