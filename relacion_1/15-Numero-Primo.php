<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Es Primo?</title>
</head>
<body>
    <?php

$n = 17;

if ($n <= 0) {

    echo "El número debe ser positivo";

} else {

    $primo = true;

    for ($i = 2; $i < $n; $i++) {

        if ($n % $i == 0) {

            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo "$n es primo";
    } else {
        echo "$n no es primo";
    }
}

?>

</body>
</html>