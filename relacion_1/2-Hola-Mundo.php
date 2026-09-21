<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Hola Mundo En PHP</title>
</head>
<body>
<?php

echo "<h1>Hola mundo - Superglobal $_SERVER</h1>";

echo "<h2>Informacion del servidor</h2>";

echo "<ul>";

echo "<li><b>DOCUMENT_ROOT:</b> " . $_SERVER['DOCUMENT_ROOT'] . "</li>";

echo "<li><b>PHP_SELF:</b> " . $_SERVER['PHP_SELF'] . "</li>";

echo "<li><b>SERVER_NAME:</b> " . $_SERVER['SERVER_NAME'] . "</li>";

echo "<li><b>SERVER_SOFTWARE:</b> " . $_SERVER['SERVER_SOFTWARE'] . "</li>";

echo "<li><b>SERVER_PROTOCOL:</b> " . $_SERVER['SERVER_PROTOCOL'] . "</li>";

echo "<li><b>HTTP_HOST:</b> " . $_SERVER['HTTP_HOST'] . "</li>";

echo "<li><b>HTTP_USER_AGENT:</b> " . $_SERVER['HTTP_USER_AGENT'] . "</li>";

echo "<li><b>REMOTE_ADDR:</b> " . $_SERVER['REMOTE_ADDR'] . "</li>";

echo "<li><b>REMOTE_PORT:</b> " . $_SERVER['REMOTE_PORT'] . "</li>";

echo "<li><b>SCRIPT_FILENAME:</b> " . $_SERVER['SCRIPT_FILENAME'] . "</li>";

echo "<li><b>REQUEST_URI:</b> " . $_SERVER['REQUEST_URI'] . "</li>";

echo "</ul>";


// ------------------------------------
// var_dump($_SERVER)
// ------------------------------------

echo "<h2>Volcado de \$_SERVER con var_dump()</h2>";

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";


// ------------------------------------
// print_r($_SERVER)
// ------------------------------------

echo "<h2>Volcado de \$_SERVER con print_r()</h2>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>
</body>
</html>
