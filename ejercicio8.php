
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width: 500px">

        <div class="card-header bg-dark text-white">
            <h2>Calculadora PHP</h2>
        </div>

        <div class="card-body">

            <form action="calcular.php" method="POST">

                <label class="form-label">Número 1</label>
                <input type="number" name="num1"
                       class="form-control mb-3" step="1" required>

                <label class="form-label">Número 2</label>
                <input type="number" name="num2"
                       class="form-control mb-3" step="1" required>

                <label class="form-label">Operación</label>
                <select name="operador" class="form-select mb-3" required>
                    <option value="">Selecciona operación</option>
                    <option value="+">Sumar</option>
                    <option value="-">Restar</option>
                    <option value="*">Multiplicar</option>
                    <option value="/">Dividir</option>
                    <option value="%">Módulo</option>
                </select>

                <button type="submit" class="btn btn-success w-100">
                    Calcular
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
