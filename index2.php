<!DOCTYPE html>
<html>
    <head>
        <title>
        <?php

        echo "::Mi pagina con php y HTML::"

        ?>
        </title>
    </head>
    <body>


<?php

echo "Bienvenidos";
echo "<h2>UTSelva</h2>";
//declarar variables
$nombre="pepe";
$edad=32;
$mayorEdad=true;

echo "Tu nombre es: ".$nombre;
echo "<br>";
echo "tu edad es: ".$edad;
$edad=$edad+3;
echo "<br>";
echo "tu edad es: ".$edad;
echo "<br>";
echo "¿Es mayor de edad:".$mayorEdad."?";
echo "<br>";
echo $nombre.$nombre.$edad."<h2>Bye</h2>";
?>

<footer>
    <hr>
    <?php

    echo "<a href=#> Derechos Reservados </a>"

    ?>
</footer>
</body>
</html>