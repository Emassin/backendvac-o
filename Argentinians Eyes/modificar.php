<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Tienda de argentinianseyes</title>
</head>

<body>
    <main>
        <div class="cont logo"><a href="./welcomestore.php"><img src="./img/logo.jpg" alt="logo triforce?" style="width:42px;height:42px;"></a>
            <p>Inicio</p>
        </div>
        <div class="cont container">
            <div class="buttones">
                <p>¿Necesitas ayuda?</p>
            </div>
        </div>
        <div class="cont" id="formis">
            <div class="consformis">
                <FORM action="busqueda.php" method="$_POST">
                    Filtrar: <INPUT TYPE="text" NAME="dato" value="">
                    <input type="submit" name="submit" value="Buscar">

                </FORM>

            </div>
        </div>
        <div class="cont" id="contcard">

            <?php
            /*conexión a la base de datos*/
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "tiendaropa";

            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if (!$conn) {
                die("no hay conexión manin!: " . mysqli_connect_error());
            };
            // 2) Almacenamos los datos del envío GET
            // a) generar variables para el id a utilizar
            $id = $_GET['id'];
            // 3) Preparar la SQL
            // => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
            // a) generar la consulta a realizar
            $consulta = "SELECT * FROM prendas WHERE id= '$id'";
            // 4) Ejecutar la orden y almacenamos en una variable el resultado
            // a) ejecutar la consulta
            $repuesta = mysqli_query($conn, $consulta);
            // 5) Transformamos el registro obtenido a un array
            $datos = mysqli_fetch_array($repuesta);
            // 6) asignamos a diferentes variables los respectivos valores del array $datos.
            $descripcion = $datos["descripcion"];
            $marca = $datos["marca"];
            $talle = $datos["talle"];
            $precio = $datos["precio"];
            ?>


            <h2>Modificar</h2>
            <p>Ingrese los nuevos datos de la prenda.</p>
            <form action="" method="post" enctype="multipart/form-data">
                <label>Tipo de prenda</label>
                <input type="text" name="descri" placeholder="descri" value="<?php echo "$descri"; ?>">
                <label>Marca</label>
                <input type="text" name="nombre" placeholder="nombre" value="<?php echo "$nombre"; ?>">
                <label>Talle</label>
                <input type="text" name="img" placeholder="img" value="<?php echo "$img"; ?>">
                <label>Precio</label>
                <input type="text" name="id" placeholder="id" value="<?php echo "$id"; ?>">
                <label>Precio</label>
                <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
                <input type="submit" name="guardar_cambios" value="Guardar Cambios">
                <button type="submit" name="Cancelar" formaction="tienda.html">Cancelar</button>
            </form>
            <?php
            // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
            if (array_key_exists('guardar_cambios', $_POST)) {
                // 2') Almacenamos los datos actualizados del envío POST
                // a) generar variables para cada dato a almacenar en la bbdd
                // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
                // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
                $nombre = $_POST['nombre'];
                $descri = $_POST['descri'];
                $img = $_POST['img'];
                $precio = $_POST['precio'];
                $id = $_POST['id'];
                // 3') Preparar la orden SQL
                // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
                // a) generar la consulta a realizar
                $consulta = "UPDATE productos SET descri='$descri', nombre='$nombre', img='$img', precio='$precio' WHERE id='$id'";
                // 4') Ejecutar la orden y actualizamos los datos
                // a) ejecutar la consulta
                mysqli_query($conn, $consulta);
                // a) rederigir a 
                header('location: modificar.html');
            } ?>
        </div>
        <div class="cont">Tienda online / catálogo productos</div>
    </main>
</body>

</html>