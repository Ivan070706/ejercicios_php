
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de bases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow mx-auto" style="max-width:450px">

        <div class="card-header bg-dark text-white">
            <h2>Conversor de números</h2>
        </div>

        <div class="card-body">

            <form action="resultado.php" method="POST">

                <label class="form-label">Número decimal</label>

                <input type="number" name="numero"
                       class="form-control mb-3"
                       min="0" step="1" required>

                <label class="form-label">Selecciona la conversión</label>

                <select name="base" class="form-select mb-3" required>

                    <option value="0" selected disabled>
                        Selecciona operación
                    </option>

                    <option value="2">Binario</option>
                    <option value="8">Octal</option>
                    <option value="16">Hexadecimal</option>

                </select>

                <button class="btn btn-primary w-100">
                    Convertir
                </button>

            </form>

        </div>
    </div>
</div>

</body>
</html>
