
<?php

$nombre = trim($_POST["nombre"] ?? "");
$correo = $_POST["correo"] ?? "";
$notas = $_POST["notas"] ?? [];

if ($nombre === "" ||
    !filter_var($correo, FILTER_VALIDATE_EMAIL) ||
    !is_array($notas) || count($notas) != 4) {
    die("Datos incorrectos.");
}

$notas = array_map("floatval", $notas);

foreach ($notas as $nota) {
    if (!is_finite($nota) || $nota < 0 || $nota > 10) {
        die("Las notas deben estar entre 0 y 10.");
    }
}

$media = array_sum($notas) / 4;
$porcentaje = $media * 10;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nota final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<div class="card shadow">
    <div class="card-body">

        <h2>Resultado de <?= htmlspecialchars($nombre) ?></h2>

        <p>Correo: <?= htmlspecialchars($correo) ?></p>

        <h4>Nota media: <?= number_format($media, 2) ?></h4>

        <div class="progress" style="height:30px">
            <div class="progress-bar <?= $media >= 5 ? 'bg-success' : 'bg-danger' ?>"
                 role="progressbar"
                 style="width: <?= $porcentaje ?>%"
                 aria-valuenow="<?= $porcentaje ?>"
                 aria-valuemin="0"
                 aria-valuemax="100">
                <?= number_format($porcentaje, 1) ?>%
            </div>
        </div>

        <h3 class="mt-3">
            <?= $media >= 5 ? "APROBADO" : "SUSPENSO" ?>
        </h3>

        <a href="index.php" class="btn btn-primary mt-3">Volver</a>

    </div>
</div>

</body>
</html>
