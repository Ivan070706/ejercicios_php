
<?php
$personas = [
    ["Ana", "García", "ana@gmail.com", "600111222"],
    ["Pedro", "López", "pedro@gmail.com", "600333444"],
    ["María", "Sánchez", "maria@gmail.com", "600555666"],
    ["Juan", "Martín", "juan@gmail.com", "600777888"],
    ["Laura", "Pérez", "laura@gmail.com", "600999000"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Listado de personas</h2>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($personas as $persona): ?>
                <tr>
                    <td><?= htmlspecialchars($persona[0]) ?></td>
                    <td><?= htmlspecialchars($persona[1]) ?></td>
                    <td><?= htmlspecialchars($persona[2]) ?></td>
                    <td><?= htmlspecialchars($persona[3]) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

