<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays de dias de la semana </title>
</head>
<body>

<h2>Manejo de array constante de dias de la semana </h2>
<?php 

// Tambien usar define ( , )
const DIAS_SEMANA = array ("Lunes","Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

echo ("<p>Hoy es ".DIAS_SEMANA[4]."</p>");

// todos los dias 
for ($i = 0 ; $i<= 6 ; $i++){
    echo("Dia ".($i+1)." : ". DIAS_SEMANA[$i]."<br>");
}


echo "<h2> En una lista enumerada</h2>";
// Ahora en forma de lista enumerada
echo"<ol>";
for ($i = 0 ; $i<= 6 ; $i++){
    echo("<li> : ". DIAS_SEMANA[$i]."</li>");
}
echo"</ol>";


// la longitud de un array se mide con count()

echo "<p> Los dias de la semana son ". count(DIAS_SEMANA). "</p>";

?>
    
</body>
</html>