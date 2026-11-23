
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Tabla de productos</h2>

<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $productos = [
        ["Ordenador", 750],
        ["Teclado", 25],
        ["Ratón", 15],
        ["Monitor", 180]
    ];

    foreach ($productos as $i => $producto) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . htmlspecialchars($producto[0]) . "</td>";
        echo "<td>" . number_format($producto[1], 2) . " €</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<button class="btn btn-primary">Aceptar</button>

<div class="spinner-border text-primary ms-3"></div>

<ul class="list-group mt-3">
    <li class="list-group-item">Primer elemento</li>
    <li class="list-group-item">Segundo elemento</li>
</ul>

</body>
</html>
