<?php include("../cabecera.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous">
    </script>
    <title>CRUD MYSQLI</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/enferm-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Quicksand:wght@400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>

<body>
   
    <?php 
include("Config/Conexion.php");

$where = "";
if(!empty($_POST)){
        $valor = $_POST['Buscar'];
        if(!empty($valor)){
            $where = "WHERE DNI like '%$valor%' OR  area like '$valor' OR nombre like '$valor%%'" ;
        }
}
$consulta = "SELECT * FROM enfermeros $where";
$resultado = $conexion->query($consulta);

?>
 <div class="sector">
     <div class="dash1">
    <h1>Dashboard</h1>
    <br>
    <h1>Enfermeros añadidos</h1>
    </div>

    <div class="wrapper">
        <div class="wr1">
        <div class="cards">
            <h1>Pediatría</h1>
            <div class="scrol">
        <?php
            include("Config/Conexion.php");
                $sql = "SELECT * FROM enfermeros WHERE area ='1'";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
            <div class="card">
                <div class="log-sector">
                    <img src="../img/redo.png">
                </div>
        
                <div class="info">
                    <h2><?php echo $fila['nombre']?></h2>
                    <p>DNI <?php echo $fila['DNI']?></p>
                    <div class="boton2">
                    <a name="" id="" class="btn btn-primary" href="CRUD/ver_mas.php?id=<?php echo $fila['id'] ?>" role="button"> ver mas </a>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
        </div>
                <div class="container_AGR">
                <center><i class='bx bxs-message-square-add'>
                            <a href="Forms/AgregarCliente.php" class="btn btn-add">Añadir Enfermero</a></i></center>
                 </div>
        </div>


        <div class="wr1">
        <div class="cards">
            <h1>Urgencias</h1>
        <div class="scrol">
        <?php
            include("Config/Conexion.php");
                $sql = "SELECT * FROM enfermeros WHERE area ='2'";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
            <div class="card">
                <div class="log-sector">
                    <img src="../img/redo.png">
                </div>
        
                <div class="info">
                    <h2><?php echo $fila['nombre']?></h2>
                    <p>DNI <?php echo $fila['DNI']?></p>
                    <div class="boton2">
                    <a name="" id="" class="btn btn-primary" href="CRUD/ver_mas.php?id=<?php echo $fila['id'] ?>" role="button"> ver mas </a>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
        </div>
                <div class="container_AGR">
                <center><i class='bx bxs-message-square-add'>
                            <a href="Forms/AgregarCliente.php" class="btn btn-add">Añadir Enfermero</a></i></center>
                 </div>
        </div>


        <div class="wr1">
        <div class="cards">
            <h1>Traumatología</h1>
            <div class="scrol">
        <?php
            include("Config/Conexion.php");
                $sql = "SELECT * FROM enfermeros WHERE area ='3'";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
            <div class="card">
                <div class="log-sector">
                    <img src="../img/redo.png">
                </div>
        
                <div class="info">
                    <h2><?php echo $fila['nombre']?></h2>
                    <p>DNI <?php echo $fila['DNI']?></p>
                    <div class="boton2">
                    <a name="" id="" class="btn btn-primary" href="CRUD/ver_mas.php?id=<?php echo $fila['id'] ?>" role="button"> ver mas </a>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
        </div>
                <div class="container_AGR">
                <center><i class='bx bxs-message-square-add'>
                            <a href="Forms/AgregarCliente.php" class="btn btn-add">Añadir Enfermero</a></i></center>
                 </div>
        </div>


        <div class="wr1">
        <div class="cards">
            <h1>Obstetricia</h1>
        <div class="scrol">
        <?php
            include("Config/Conexion.php");
                $sql = "SELECT * FROM enfermeros WHERE area ='4'";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
            <div class="card">
                <div class="log-sector">
                    <img src="../img/redo.png">
                </div>
        
                <div class="info">
                    <h2><?php echo $fila['nombre']?></h2>
                    <p>DNI <?php echo $fila['DNI']?></p>
                   <div class="boton2">
                    <a name="" id="" class="btn btn-primary" href="CRUD/ver_mas.php?id=<?php echo $fila['id'] ?>" role="button"> ver mas </a>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
        </div>
                <div class="container_AGR">
                <center><i class='bx bxs-message-square-add'>
                            <a href="Forms/AgregarCliente.php" class="btn btn-add">Añadir Enfermero</a></i></center>
                 </div>
        </div>

        </div>
    <div class="container">
    <h1>Lista de Enfermeros</h1>
            <h4>Busqueda de datos</h4>
            <div clas="col-sm12 col-md12 col-lg12">
                <form class="" action=<?php echo $_SERVER['PHP_SELF']?> METHOD="post">
                    <div class="buscador">
                        <input type="text" name="Buscar" class="form-control" placeholder="Busqueda por nombre"><br>
                    </div>

                    <div class="boton">
                        <input type="submit" name="Buscando" class="btn-block btn-sm btn-success" value="Buscar">    
                    </div>
                </form>
            </div>
    </div>


<div class="container_tabla">
    <div class="tablas">
    <div class="container_">
                <a href="Forms/AgregarCliente.php" class=""><i class='bx bxs-message-square-add' > </i></a>
            </div>
            <div class="scrol1">
        <table class="table">
        <thead class="table1">
        <tr>
        <th scope="col">Accion</th>
        <th scope="col">Nombre</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Area</th>
        </tr>
        </thead> 
        <tbody>
            <?php while($fila = mysqli_fetch_array($resultado)){?>
                    <tr>
                    <th scope="row">
                        <div class="flexi">
                            <a href="Forms/EditarDato.php?Id=<?php echo $fila['id']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="CRUD/EliminarDato.php?Id=<?php echo $fila['id']?>"  onclick="return confirmacion()" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>                            
                    </div>
                        </th>
                        <th scope="row"><?php echo $fila['nombre']?></th>
                        <th scope="row"><?php echo $fila['DNI']?></th>
                        <th scope="row"><?php echo $fila['telefono']?></th>
                        <th scope="row"><?php echo $fila['direccion']?></th>
                        <th scope="row"><?php echo $fila['correo']?></th>
                        <th scope="row"><?php echo $fila['area']?></th>
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
