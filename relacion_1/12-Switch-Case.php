<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php

$nota = 8;

// Comprobamos que sea un entero
if (filter_var($nota, FILTER_VALIDATE_INT) !== false) {

    // Comprobamos que esté entre 1 y 10
    if ($nota >= 1 && $nota <= 10) {

        switch ($nota) {

            case 10:
            case 9:
                echo "Sobresaliente";
                break;

            case 8:
            case 7:
                echo "Notable";
                break;

            case 6:
                echo "Bien";
                break;

            case 5:
                echo "Suficiente";
                break;

            case 4:
            case 3:
            case 2:
            case 1:
                echo "Suspenso";
                break;
        }

    } else {
        echo "Error: la nota debe estar entre 1 y 10";
    }

} else {
    echo "Error: la nota debe ser un número entero";
}

?>

</body>
</html>