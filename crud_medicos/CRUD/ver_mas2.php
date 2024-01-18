<?php include("cabecera.php");?>

<?php
include("../Config/Conexion.php");
$idProducto = $_GET["id"];

$sql = "SELECT * FROM medicos WHERE id='$idProducto'";
$query = mysqli_query($conexion, $sql);
?>

<?php while ($libro = mysqli_fetch_array($query)) { ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Información del libro</title>
  <link rel="stylesheet" href="./css/ver-as.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Quicksand:wght@400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>
<body>

          <div class="contener_ficha">
          <div class="datos_per">
          
          <div class="flex">
                <div class="avatar">
                  <img src="../../img/red3.png">
                </div>

                <div class="info1">
                  <h6 class="card-title1"><?php echo $libro['nombre'] ?></h6>
                  <h6 class="card-title">DNI: <?php echo $libro['DNI'] ?></h6>
                </div>
          </div>

          <div class="linea_deco"></div>
          <div class="info3">
                <h2 class="card-title1">Pertenece al área:</h2>
                
                <h5 class="card-title2"><?php echo $libro['area'] ?></h5>

                <h6 class="card-title2"><i class="fa fa-id-badge" aria-hidden="true"></i>Cód_Médico: <?php echo $libro['id'] ?></h6>

                <h6 class="card-title2"><i class="fa fa fa-map-marker"></i>Direccion: <?php echo $libro['direccion'] ?></h6>
                <div class="linea_deco"></div>

                  <h2 class="card-title1">Datos de Contacto</h2>
                  <h6 class="card-title2"><i class="fa fa-phone"></i>Teléfono: <?php echo $libro['telefono'] ?></h6>
                  <h6 class="card-title2"><i class="fa fa-envelope"></i>E-mail: <?php echo $libro['correo'] ?></h6>
                </div>
          </div>


          </div>
   
</body>
</html>

 <?php } ?>