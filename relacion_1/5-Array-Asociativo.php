<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Constante asociativo </title>
</head>
<body>
    <h2>Manejo de array ASOCIATIVO de dias de la semana </h2>
<?php 

// Tambien usar define ( , )
const DIAS_SEMANA = array ("Lunes"=> 31,
                            "Martes"=> 32,
                            "Miercoles"=> 30,
                            "Jueves"=> 31,
                            "Viernes"=> 29,
                            "Sabado"=> 30, 
                            "Domingo"=> 31);

echo"<p> La tempera tura de hoy es ".DIAS_SEMANA["Viernes"]."</p>";

echo "<p>La temperatura maxima del viernes es : ".DIAS_SEMANA[4]."</p>";

foreach (DIAS_SEMANA as $etiqueta => $valor){
    echo "La tempratura del " .$etiqueta. " es " .$valor."<br>";
}

?>
</body>
</html>