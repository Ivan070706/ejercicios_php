
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width: 450px">

        <div class="card-header bg-primary text-white">
            <h3>Introducir números</h3>
        </div>

        <div class="card-body">
            <form action="calcular.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Primer número</label>
                    <input type="number" name="num1"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Segundo número</label>
                    <input type="number" name="num2"
                           class="form-control" required>
                </div>

                <button class="btn btn-primary w-100">
                    Enviar
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
