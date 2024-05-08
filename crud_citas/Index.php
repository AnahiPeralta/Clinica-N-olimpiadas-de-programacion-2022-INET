<?php include("../cabecera_medic.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD MYSQLI</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/citas-style.css">
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous">
    </script>
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
            $where = "WHERE DNI like '%$valor%' OR  fecha like '$valor' OR  hora like '$valor' OR llamado like '$valor%%' OR medico like '%$valor%'  OR enfermero like '%$valor%' OR area like '%$valor%'" ;
        }
}
$consulta = "SELECT * FROM citasmedicas $where";
$resultado = $conexion->query($consulta);
?>

<div class="sector">
<div class="dash1">
    <h1>Dashboard</h1>
    </div>
    <br>

    <div class="container_buscadores">
    <div class="container1">
            <div class="text">
                <h4>Búsqueda por DNI, nombre, área o estado</h4>
            </div>
            <div clas="col-sm12 col-md12 col-lg12">
                <form class="" action=<?php echo $_SERVER['PHP_SELF']?> METHOD="post">
                    <div class="buscador">
                        <input type="text" name="Buscar" class="form-control" placeholder="Ingresar DNI, nombre, área o estado"><br>
                    </div>
                    <div class="boton">
                        <input type="submit" name="Buscando" class="btn-block btn-sm btn-success" value="Buscar">    
                    </div>
                </form>
            </div>
    </div>

    <div class="container1">
    <div class="text">
            <h4>Búsqueda por fecha</h4>
</div>
            <div clas="col-sm12 col-md12 col-lg12">
                <form class="" action=<?php echo $_SERVER['PHP_SELF']?> METHOD="post">
                    <div class="buscador">
                        <input type="date" name="Buscar" class="form-control"><br>
                    </div>
                    <div class="boton">
                        <input type="submit" name="Buscando" class="btn-block btn-sm btn-success" value="Buscar">    
                    </div>
                </form>
            </div>
    </div>

    <div class="container1">
    <div class="text">
            <h4>Búsqueda por hora</h4>
</div>
            <div clas="col-sm12 col-md12 col-lg12">
                <form class="" action=<?php echo $_SERVER['PHP_SELF']?> METHOD="post">
                    <div class="buscador">
                        <input type="time" name="Buscar" class="form-control" step="0.001"><br>
                    </div>
                    <div class="boton">
                        <input type="submit" name="Buscando" class="btn-block btn-sm btn-success" value="Buscar">    
                    </div>
                </form>
            </div>
    </div>
</div>


<div class="container_tabla">
        <div class="tablas">
            <h1>Lista de Citas</h1>
            <div class="container">
                <a href="Forms/AgregarCliente.php" class=""><i class='bx bxs-message-square-add' > </i></a>
            </div>
            <div class="scrol">
            <table class="table">
            <thead class="table1">
                <tr>
                <th scope="col">Accion</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Area</th>
                    <th scope="col">Enfermero</th>
                    <th scope="col">Medico</th>
                    <th scope="col">Estado</th>
                </tr> 
            </thead> 

            <tbody>
            <?php while($fila = mysqli_fetch_array($resultado)){?>
                <tr>
                    <th scope="row">
                            <a href="Forms/EditarDato.php?Id=<?php echo $fila['id']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="CRUD/EliminarDato.php?Id=<?php echo $fila['id']?>" onclick="return confirmacion()" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>                            
                    </th>
                    <th scope="row"><?php echo $fila['nombre']?></th>
                    <th scope="row"><?php echo $fila['DNI']?></th>
                    <th scope="row" class="descrip"><?php echo $fila['descrip']?></th>
                    <th scope="row"><?php echo $fila['fecha']?></th>
                    <th scope="row"><?php echo $fila['hora']?></th>
                    <th scope="row"><?php echo $fila['Area']?></th>
                    <th scope="row"><?php echo $fila['enfermero']?></th>
                    <th scope="row"><?php echo $fila['medico']?></th>
                    <th scope="row"><?php echo $fila['llamado']?></th>
                </tr>
                                <?php } ?>
                           </tbody>
                    </table>
                </div>
            </div>
</div>
    
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


