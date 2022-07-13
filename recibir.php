<?php

    echo"<h1>Recibiendo informacion del formulario de registro</h1>";

    $tipo = $_GET['tipo_h'];
    $precio = $_GET['precio_h'];
    $cantidad = $_GET['cantidad_h'];
?>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  <section style ="padding: 20px;">
    
  <table class="table" style="background:white; color:black;  border-color:#8F3A84;">
    <thead style ="background:#35b3a7;">
      <th scope ="col" style="text-align: center;">Tipo</th>
       <th scope ="col" style="text-align: center;">Cantidad</th>
      <th scope ="col" style="text-align: center;">Precio</th>
      <th sope ="col"></th>
    </thead>
    <tbody>
      <tr>
        <td style="text-align: center;"><?=$tipo?></td>
        <td style="text-align: center;"><?=$cantidad?></td>
        <td style="text-align: center;"><?=$precio?></td>

        <td style="text-align:right;"><button style="background:red; color:white;">Eliminar</button> <button style ="background:chartreuse; color:black;">Modificar</button></td>
      </tr>
  
  </section>

</body>

</html>
