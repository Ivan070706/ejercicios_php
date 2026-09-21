<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Hola Mundo En PHP</title>
</head>
<body>
    <!-- hola mundo como texto basico -->
    <?php echo 'Hola mundo'; ?>
    <!-- hola mundo como encabezado de nivel 2-->
    <h2><?php echo 'Hola mundo'; ?></h2>
    <!-- hola mundo como un parrafo con estilos -->
    <h2 style="color:red;font-family:Georgia, 'Times New Roman', Times, serif; text-align:center"><?php echo 'Hola mundo'; ?></h2>
      <!-- hola mundo con salto de linea -->
    <h2><?php echo 'Hola <br> mundo'; ?></h2>

    <!-- info sobre la version -->
     <?php echo phpversion() ; ?>

         <!-- info sobre la version -->
     <?php echo phpinfo() ; ?>

       <!-- info sobre la version -->
     <?php echo date("l jS \of F Y h:i:s A") ; ?>
</body>
</html>