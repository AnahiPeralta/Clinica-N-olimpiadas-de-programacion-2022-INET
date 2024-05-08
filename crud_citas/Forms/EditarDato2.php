<?php
    include_once('../Config/Conexion.php');
    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM citasmedicas WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Citas</title>
    <link rel="stylesheet" href="./css/agregar.css">
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>

<body>
<div class="container_tood">
    <div class="for">
        <img src="../../img/red5.png" class="avatar" alt="Avatar Image">
        <h1 class="text-center">Editar cita</h1>
    </div>


<div class="container_ag">
<br>

    <div class="container">
        <form action="../CRUD/Editar2.php" method="POST">
            <input type="Hidden" name="Id" value="<?php echo $fila['id']?>">
        <div class="box0">
            <div class="box1">
            
            <div class="mb-3">
            <i class="fa fa-user"></i><input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['nombre']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-id-card-o"></i><input type="text" class="form-control" placeholder="DNI" name="DNI" value="<?php echo $fila['DNI']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-calendar"></i><input type="text" class="form-control" placeholder="fecha" name="fecha" value="<?php echo $fila['fecha']?>">
            </div>

            <div class="mb-3">
            <h2>Emergencia médica:</h2>
            <i class="fa fa-list"></i><select name="descrip" id="">
                <option value="Sangrado que no para">Sangrado que no para</option>
                <option value="Problemas respiratorios">Problemas respiratorios </option>
                <option value="Cambios en el estado mental">Cambios en el estado mental</option>
                <option value="Dolor torácico">Dolor torácico</option>
                <option value="Asfixia">Asfixia</option>
                <option value="Expectoración">Expectoración</option>
                <option value="Desmayo">Desmayo</option>
                <option value="Lesión">Lesión</option>
                <option value="Desmayo">Desmayo</option>
                <option value="Ingestión de una sustancia tóxica">Ingestión de una sustancia tóxica</option>
            </select>
            </div>

            <div class="mb-3">
            <h2>Seleccione el área correspondiente:</h2>
            <i class="fa fa-hospital-o"></i><select name="Area" id="">
                <option value="Pediatria">Pediatria</option>
                <option value="Urgencias">Urgencias</option>
                <option value="Traumatologia">Traumatologia</option>
                <option value="Obstetricia">Obstetricia</option>
            </select>
            </div>

            </div>


            <div class="box2">

            <div class="mb-3">
            <i class="fa fa-user-md"></i><input type="text" class="form-control" placeholder="Enfermero" name="enfermero" value="<?php echo $fila['enfermero']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-user-md"></i><input type="text" class="form-control" placeholder="Médic@ responsable" name="medico" value="<?php echo $fila['medico']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-clock-o"></i><input type="text" class="form-control" placeholder="hora" name="hora" value="<?php echo $fila['hora']?>">
            </div>

            <div class="mb-3">
            <h2>Seleccione el estado de la cita:</h2>
            <i class="fa fa-medkit"></i><select name="llamado" id="">
                <option value="Atendido">Atendido</option>
                <option value="No atendido">No atendido</option>
                </select>
            </div>
            </div>
            </div>
            
            <div class="container_b">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="../index2.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>

      </div>
    </div>
    </div>
    </div>


</body>

</html>