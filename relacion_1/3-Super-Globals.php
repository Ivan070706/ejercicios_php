<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Hola Mundo En PHP</title>
</head>
<body>
    <h1>Probando superglobals</h1>
<?php

echo "<h1>Hola mundo - Tipos de datos escalares en PHP</h1>";

/*
 * EJERCICIO 2
 * Tipos de datos escalares:
 * - bool
 * - int
 * - float
 * - string
 */

// Declaración de variables
$booleano = true;
$entero = 25;
$decimal = 15.75;
$cadena = "Hola mundo";

// ------------------------------------
// Mostrar los valores con echo
// ------------------------------------

echo "<h2>1. Valores con echo</h2>";

echo "Booleano: $booleano<br>";
echo "Entero: $entero<br>";
echo "Float: $decimal<br>";
echo "String: $cadena<br>";


// ------------------------------------
// Mostrar los tipos con var_dump()
// ------------------------------------

echo "<h2>2. Valores con var_dump()</h2>";

echo "Booleano: ";
var_dump($booleano);

echo "<br>Entero: ";
var_dump($entero);

echo "<br>Float: ";
var_dump($decimal);

echo "<br>String: ";
var_dump($cadena);


// ------------------------------------
// Mostrar los valores con printf()
// ------------------------------------

echo "<h2>3. Formateo con printf()</h2>";

// %b -> binario
printf("Entero en formato binario: %b<br>", $entero);

// %d -> entero decimal
printf("Entero en formato decimal: %d<br>", $entero);

// %f -> número decimal
printf("Float con 2 decimales: %.2f<br>", $decimal);

// %e -> notación científica
printf("Float en notación científica: %e<br>", $decimal);

// %s -> cadena de texto
printf("String: %s<br>", $cadena);

// %x -> hexadecimal
printf("Entero en hexadecimal: %x<br>", $entero);

// %o -> octal
printf("Entero en octal: %o<br>", $entero);


// ------------------------------------
// Diferentes posibilidades de printf()
// ------------------------------------

echo "<h2>4. Más ejemplos de printf()</h2>";

printf("Entero con 5 posiciones: %5d<br>", $entero);

printf("Entero rellenado con ceros: %05d<br>", $entero);

printf("Float con 1 decimal: %.1f<br>", $decimal);

printf("Float con 3 decimales: %.3f<br>", $decimal);

printf("Texto con ancho de 15 caracteres: %15s<br>", $cadena);


// ------------------------------------
// Variables variables
// ------------------------------------

echo "<h2>5. Variables variables ($$)</h2>";

$nombreVariable = "Hola desde una variable variable";

$nombre = "nombreVariable";

echo $$nombre . "<br>";


// ------------------------------------
// Reglas de nombres de variables
// ------------------------------------

echo "<h2>6. Nombres de variables</h2>";

$nombre_alumno = "Pilar";
$edad2 = 20;
$_curso = "PHP";

echo "Nombre: $nombre_alumno<br>";
echo "Edad: $edad2<br>";
echo "Curso: $_curso<br>";

?>
</body>
</html>
