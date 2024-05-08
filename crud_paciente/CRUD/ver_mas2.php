<?php include("cabecera_medic.php");?>
<?php
include("../Config/Conexion.php");
$idProducto = $_GET["id"];

$sql = "SELECT * FROM pacientes WHERE id='$idProducto'";
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
  <link rel="stylesheet" href="css/ver_mas.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Quicksand:wght@400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>
<body>

<div class="info_paciente">
    <div class="container_inform">
      <div class="datos">
      <div class="contener_ficha">
        <div class="datos_per">

            <div class="flex">
                <div class="avatar">
                  <img src="../../img/red3.png">
                </div>

                <div class="info1">
                  <h6 class="card-title1"><?php echo $libro['nombre'] ?></h6>
                  <h6 class="card-title">DNI: <?php echo $libro['dni'] ?></h6>
                  <h6 class="card-title">Edad: <?php echo $libro['edad'] ?> años</h6>
                  <h6 class="card-title">Cód_paciente: <?php echo $libro['id'] ?></h6>
                </div>
            </div>

            <div class="linea_deco"></div>
            <div class="info3">
              <h6 class="card-title2"><i class="fa fa-birthday-cake"></i>Fecha de nacimiento: <?php echo $libro['fechanac'] ?></h6>
              <h6 class="card-title2"><i class="fa fa fa-map-marker"></i>Direccion: <?php echo $libro['direc'] ?></h6>
              <h6 class="card-title2"><i class="fa fa-location-arrow"></i>Provincia: <?php echo $libro['prov'] ?></h6>
              <h6 class="card-title2"><i class="fa fa-location-arrow"></i>Localidad: <?php echo $libro['localidad'] ?></h6>
              <div class="linea_deco"></div>
              <h2 class="card-title1">Datos de Contacto</h2>
              <h6 class="card-title2"><i class="fa fa-phone"></i>Telefono: <?php echo $libro['telef1'] ?></h6>
              <h6 class="card-title2"><i class="fa fa-phone"></i>Telefono 2: <?php echo $libro['telef2'] ?></h6>
            </div>
       </div>

      

      <div class="datos_to">
        <div class="back">
      <div class="datos_cli">
          <h1>Datos clinicos</h1>
            <div class="info">
              <div class="wrapp">
              <div class="boxi1">
              <h1>Información específica</h1>
                <h6 class="card-title">Problemas de salud: </h6>
                <h5><?php echo $libro['salud'] ?></h5>
                <h6 class="card-title">Alergias: </h6>
                <h5><?php echo $libro['alergias'] ?></h5>
                <h6 class="card-title">Medicación: </h6>
                <h5><?php echo $libro['medicacion'] ?></h5>
              </div>

              <div class="boxi2">
                <h1>Datos fisionómicos</h1>
                <h6 class="card-title">Peso: </h6>
                <h5><?php echo $libro['peso'] ?></h5>
                <h6 class="card-title">Estatura: </h6>
                <h5><?php echo $libro['estatura'] ?></h5>
                <h6 class="card-title">Presión: </h6>
                <h5><?php echo $libro['presion'] ?></h5>
              </div>
            </div>
            </div>
       </div>

       <div class="datos_aten">
          <h1>Datos de Atención Médica</h1>
            <div class="info">
              <table>
                <thead>
                <tr>
                  <th class="scop">Ubicación del paciente</th>
                  <th>Enfermero a cargo</th>
                  <th>Tipo de llamado</th>
                  <th class="scop1">Estado</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                <th><?php echo $libro['ubica'] ?></th>
                <th><?php echo $libro['enfermero'] ?></th>
                <th><?php echo $libro['llamado'] ?></th>
                <th><?php echo $libro['estado'] ?></th>
                </tr>
                </tbody>
              </table>
            </div>
        </div>
       </div>
      </div>
       


      </div>
    </div>
</div>
</div>

    
</body>
</html>

 <?php } ?>