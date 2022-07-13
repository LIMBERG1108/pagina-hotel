<?php

//recibir variables por el metodo GET
$matricula = $_POST["matricula"];
$nombre = $_POST["nombre"];
$fecha= $_POST["fecha"];

//Recibir la informacion en un formulario

echo '<form>';
echo '<label>matricula</label>';
echo '<input type="text" value="'.$matricula.'" name="matricula">';
echo '<br>';
echo '<label>nombre</label>';
echo '<input type="text" value="'.$nombre.'" name="nombre">';
echo '<br>';
echo '<label>Fecha de Nacimiento</label>';
echo '<input type="date" value="'.$fecha.'" name="fecha">';
echo '</form>';

?>
