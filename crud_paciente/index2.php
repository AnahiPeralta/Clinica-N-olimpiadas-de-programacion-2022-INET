<?php include("../cabecera_medic.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD MYSQLI</title>
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/pacientes.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Quicksand:wght@400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php 

    include("Config/Conexion.php");

    $where = "";
    if(!empty($_POST)){
            $valor = $_POST['Buscar'];
            if(!empty($valor)){
                $where = "WHERE DNI like '%$valor%' OR  direc like '$valor' OR llamado like '$valor%%'  OR enfermero like '%$valor%' OR ubica like '%$valor%'" ;
            }
    }
    $consulta = "SELECT * FROM pacientes $where";
    $resultado = $conexion->query($consulta);

    ?>
    <div class="sect">
        <div class="container_bot_azul">
            <a href="Forms/AgregarCliente2.php" class="btn btn-gd"><i class='bx bxs-message-square-add'>Código Azul</i></a>
        </div>
        <div class="dash1">
            <h1>Buscar Paciente</h1>
        </div>
        <br>
        <div class="container1">

            <div clas="col-sm12 col-md12 col-lg12">
                    <form class="" action=<?php echo $_SERVER['PHP_SELF']?> METHOD="post">
                        <div class="buscador">
                            <input type="text" name="Buscar" class="form-control" placeholder="Busqueda por nombre, DNI, tipo de llamado, estado y ubicacion"><br>
                        </div>
                        <div class="boton">
                            <input type="submit" name="Buscando" class="btn-block btn-sm btn-success" value="Buscar">    
                        </div>
                    </form>
            </div>
            <br>
            <br>
            <div class="container_tabla">
                    <div class="tablas">
                        <h1>Lista de pacientes</h1>
                        <div class="container">
                            <a href="Forms/AgregarCliente2.php" class="btn btn-primary"><i class="fa fa-user-plus"></i></a>
                        </div>
                        <div class="scrol">
                            <table class="table">
                                <thead class="table1">
                                    <tr> 
                                            <th scope="col">Información adicional</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Ubicacion</th>
                                            <th scope="col">Enfermero</th>
                                            <th scope="col">Llamado</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Accion</th> 
                                    </tr> 
                                </thead> 

                                <tbody>
                                <?php while($fila = mysqli_fetch_array($resultado)){?>
                                        <tr>
                                            <th><div class="flex3">
                                                <a name="" id="" class="btn btn-primary" href="CRUD/ver_mas.php?id=<?php echo $fila['id'] ?>" role="button">Ver más</a></center>
                                                </div></th>
                                            <th scope="row"><?php echo $fila['nombre']?></th>
                                            <th scope="row"><?php echo $fila['dni']?></th>
                                            <th scope="row"><?php echo $fila['telef1']?></th>
                                            <th scope="row"><?php echo $fila['ubica']?></th>
                                            <th scope="row"><?php echo $fila['enfermero']?></th>
                                            <th scope="row"><?php echo $fila['llamado']?></th>
                                            <th scope="row"><?php echo $fila['estado']?></th>
                                            <th scope="row">
                                            <div class="flexi">
                                            <a href="Forms/EditarDato2.php?Id=<?php echo $fila['id']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="CRUD/EliminarDato2.php?Id=<?php echo $fila['id']?>" onclick="return confirmacion()" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>                            
                                            </div>
                                            </th>
                                        </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="excel">
                            <a href="exel.php" class="boton"><i class="fas fa-download"></i>Descargar planilla de Excel</i></a>
                        </div>
                    </div>
            </div>
        <div>
    </div>
<script>
        function confirmacion (){
            var respuesta = confirm("¿Desea eliminar el registro?");
            if(respuesta==true){
                return true;
            }else{
                return false;
            }
        }
</script>

</body>
</html>


