<?php
//conexión a la base de datos/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "argentinianseyes";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Error de conexión, revise los datos ingresados y vuelva a intentar ".mysqli_connect_error()); 
};

//Validación de usuario/
$user = $_POST["usuario"];
$pass = $_POST["contraseña"];

$query = mysqli_query($conn, "SELECT * FROM users WHERE usuario= '$user' AND contraseña= '$pass'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
  header('Location: home.php');
} else if ($nr == 0){
  header('Location: error.html');
};

?>