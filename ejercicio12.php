
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calificación alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width:550px">
        <div class="card-body">

            <h2>Calificaciones</h2>

            <form action="resultado.php" method="POST">

                <label class="form-label">Nombre</label>
                <input type="text" name="nombre"
                       class="form-control mb-3" required>

                <label class="form-label">Correo electrónico</label>
                <input type="email" name="correo"
                       class="form-control mb-3" required>

                <?php
                $notas = ["Inicial", "Primera", "Segunda", "Tercera"];
                foreach ($notas as $nota):
                ?>
                    <label class="form-label"><?= $nota ?></label>
                    <input type="number" name="notas[]"
                           class="form-control mb-3"
                           min="0" max="10" step="0.01" required>
                <?php endforeach; ?>

                <button class="btn btn-primary w-100">
                    Calcular nota
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
