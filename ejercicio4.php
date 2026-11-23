
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listas Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Lista de números</h2>

<ol class="list-group list-group-numbered">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<li class='list-group-item'>Elemento $i</li>";
    }
    ?>
</ol>

</body>
</html>
