<?php

/*conexión a la base de datos*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "argentinianseyes";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("error de conexión, vuelva a intentar en un momento " . mysqli_connect_error());
};
  // 2) Almacenamos los datos del envío POST
  // a) generar variables para cada dato a almacenar en la bbdd
  $nombre = $_POST['nombre'];
  $descri = $_POST['descri'];
  $precio = $_POST['precio'];
  $id = $_POST['id'];
  $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));


  // 3) Preparar la orden SQL
  // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
  // => Ingresa dentro de la siguiente tabla los siguientes valores
  // a) generar la consulta a realizar
$consulta = "INSERT INTO productos (id,nombre,descri,precio,img)
        VALUES ('','$nombre','$descri','$precio','$img')";
  // 4) Ejecutar la orden y ingresamos datos
  mysqli_select_db($conn,$dbname);
  // a) ejecutar la consulta
  mysqli_query($conn,$consulta);
  // a) rederigir a...
  header('location: tienda.html');
?>
