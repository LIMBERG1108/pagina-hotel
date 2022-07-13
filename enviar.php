<!DOCTYPE html>
<html>
    <head>
        <title> Enviar datos</title>
    </head>
    <body>
        <form action="recibir2.php" method="POST">
            <label>Matricula</label>
            <input type="text" name="matricula" placeholder="introduce tu matricula" required>
            <br>
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="introduce tu nombre" required>
            <br>
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha" required>
            <br>
            <button>Enviar</button>

        </form>
    </body>
</html>