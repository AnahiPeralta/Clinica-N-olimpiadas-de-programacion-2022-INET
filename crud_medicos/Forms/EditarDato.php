<?php
    include_once('../Config/Conexion.php');
    $Id = $_REQUEST['Id'];

    $sql = "SELECT * FROM medicos WHERE id = '$Id'";
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Médicos</title>
    <link rel="stylesheet" href="./css/agregar.css">
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container_tood">
    <div class="for">
        <img src="../../img/red3.png" class="avatar" alt="Avatar Image">
        <h1 class="text-center">Agregar Medico</h1>
    </div>


    <div class="container_ag">
    <br>

    <div class="container">
        <form action="../CRUD/Editar.php" method="POST">
            <input type="Hidden" name="Id" value="<?php echo $fila['id']?>">
            <div class="mb-3">
                <i class="fa fa-user"></i><input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['nombre']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-id-card-o"></i><input type="text" class="form-control" placeholder="DNI" name="DNI" value="<?php echo $fila['DNI']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-phone"></i><input type="text" class="form-control" placeholder="Telefono" name="telefono" value="<?php echo $fila['telefono']?>">
            </div>
            <div class="mb-3">
            <i class="fa fa-map-marker"></i><input type="text" class="form-control" placeholder="Direccion" name="direccion" value="<?php echo $fila['direccion']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-envelope"></i><input type="text" class="form-control" placeholder="Correo" name="correo" value="<?php echo $fila['correo']?>">
            </div>
            
            <div class="mb-3">
            <h2>Seleccione el área correspondiente:</h2>
            <i class="fa fa-user-md"></i><select name="area" id="">
                <option value="Pediatria">Pediatria</option>
                <option value="Urgencias">Urgencias</option>
                <option value="Traumatologia">Traumatologia</option>
                <option value="Obstetricia">Obstetricia</option>
            </select>
            </div>

            <div class="container_b">
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <a href="../Index.php" class="btn btn-dark">Regresar</a>
            </div>

        </form>
    </div>
    </div>
    </div>
</body>

</html>