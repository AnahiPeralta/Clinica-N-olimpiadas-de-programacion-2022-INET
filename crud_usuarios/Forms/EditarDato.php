<?php
    include_once('../Config/Conexion.php');
    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM login WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
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
        <h1 class="text-center">Editar usuario</h1>
    </div>

    <div class="container_ag">
    <br>

    <div class="container">
        <form action="../CRUD/Editar.php" method="POST">
            <input type="Hidden" name="id" value="<?php echo $fila['id']?>">
            
            <div class="mb-3">
            <i class="fa fa-user"></i><input type="text" class="form-control" placeholder="Nombre" name="user" value="<?php echo $fila['user']?>">
            </div>

            <div class="mb-3">
            <i class="fa fa-user"></i><input type="text" class="form-control" placeholder="Nombre" name="email" value="<?php echo $fila['email']?>">
            </div>

            <div class="mb-3">
            <h2 class="scopp">Añada una passadmin</h2>
            <i class="fa fa-user"></i><input type="text" class="form-control" placeholder="Passadmin" name="pasadmin" value="<?php echo $fila['pasadmin']?>">
            </div>

            <div class="mb-3">
            <h2>Seleccione el rol del usuario</h2>
            <i class="fa fa-user-md"></i><select name="rol">
                <option value="2">Medico</option>
                <option value="1">Administrador</option>
                </select>
            </div>

            <div class="container_b">
                <button type="submit" class="btn btn-primary">Editar usuario</button>
                <a href="../Index.php" class="btn btn-dark">Regresar</a>
            </div>

        </form>
    </div>

    
</body>

</html>