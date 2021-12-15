<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <h1>Tienda de Argentinian's Eyes</h1>
  <button type="submit"><a href="index.html">Inicio</a></button>
  <button type="submit"><a href="listar.php">Listar productos</a></button>
  <button type="submit"><a href="agregar.html">Agregar productos</a></button>
  <button type="submit"><a href="borrar.php">Eliminar productos</a></button>

  <h2>Lista de productos</h2>
  <p>A continuación verá un detalle de los productos en stock.</p>

  <section>
    <div class="container">
      <div class="row">


        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "argentinianseyes");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla
        $consulta='SELECT * FROM productos';

        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($conexion, $consulta);

        //  recorro todos los registros y genero una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="card col-sm-12 col-md-6 col-lg-3">
            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['img'])?>" alt="" width="100px" height="100px")>
            <a href="ver.php?id=<?php echo $reg['id'];?>" class="card-body">
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['nombre']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span> <?php echo $reg['descri']; ?></span>
            </a>
          </div>

        <?php } ?>

      </div>
    </div>
  </section>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
