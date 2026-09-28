<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>
<body>
    <?php

$n = 10;

if ($n <= 0) {

    echo "El número debe ser positivo";

} else {

    echo "Divisores de $n:<br>";

    $i = 1;

    while ($i <= $n) {

        if ($n % $i == 0) {

            echo "<span style='color:red; font-weight:bold;'>$i</span> ";

        } else {

            echo "$i ";
        }

        $i++;
    }
}

?>

</body>
</html>