
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Super Index</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mis ejercicios PHP</a>
    </div>
</nav>

<div class="container mt-5">

    <h1 class="text-center mb-4">Relaciones de ejercicios</h1>

    <div class="row g-4">

        <?php
        for ($i = 1; $i <= 20; $i++) {
        ?>

        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio <?php echo $i; ?></h5>
                    <p class="card-text">
                        Accede al ejercicio número <?php echo $i; ?>.
                    </p>

                    <a href="ejercicio<?php echo $i; ?>/index.php"
                       class="btn btn-primary">
                       Entrar
                    </a>
                </div>
            </div>
        </div>

        <?php
        }
        ?>

    </div>
</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    Desarrollo Web en Entorno Servidor
</footer>

</body>
</html>
