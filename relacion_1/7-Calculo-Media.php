<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcularmos las nota de un alumno </title>
</head>
<body>

<?php 
    $nota1 = 7;
    $nota2 = 9;
    $faltas = 4;

    $media = (($nota1 + $nota2) / 2);
    $notaDefinitiva = ($media - ($faltas* 0.25));

    if ($notaDefinitiva >= 5){
        echo "Aprobado";
    }
    if($notaDefinitiva< 5){
        echo "Suspenso";
    }


 ?>

    
</body>
</html>