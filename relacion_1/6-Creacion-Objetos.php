<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de Objetos</title>
</head>
<body>
    <?php
    class Fruta{
        public $nombre;
        public $color;

        public function __construct($nombre, $color) {
           $this-> nombre = $nombre;
           $this -> color = $color;
        }

        public function set_name($nombre){
            $this-> nombre = $nombre;
        }

        public function get_name(){
            return $this-> nombre;
        }
    }
    
    $manzana= new Fruta ("Manzana" , "Rojo");
    $platano = new Fruta ("Platano" , "Amarillo");

    echo "Fruta 1= " . $manzana->get_name(). "<br>";
    echo "Frunta2 = ". $platano->get_name();


    ?>
</body>
</html>