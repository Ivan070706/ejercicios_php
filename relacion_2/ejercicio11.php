
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Entrada de números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width:450px">
        <div class="card-body">

            <h2 class="mb-4">Introducir dos números</h2>

            <form action="resultado.php" method="POST">

                <input type="number" name="num1"
                    class="form-control mb-3"
                    placeholder="Número 1" required>

                <input type="number" name="num2"
                    class="form-control mb-3"
                    placeholder="Número 2" required>

                <button class="btn btn-primary w-100">
                    Enviar
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
