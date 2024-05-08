<?php include("../cabecera.php");?>
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
    <link rel="stylesheet" href="./css/user.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
            $where = "WHERE user like '%$valor%' OR  email like '$valor'" ;
        }
}
$consulta = "SELECT * FROM login $where";
$resultado = $conexion->query($consulta);

?>
<div class="sect">

    <div class="dash1">
    <h1>Usuarios registrados</h1>
    </div>
    <br>
    
    <div class="container1">
        <div class="text">
            <h4>Búsqueda por nombre o mail de registro</h4>
        </div>

        <div clas="col-sm12 col-md12 col-lg12">
                <form class="" action=<?php echo $_SERVER['PHP_SELF']?> METHOD="post">
                <div class="buscador">
                    <input type="text" name="Buscar" class="form-control" placeholder="Busqueda por nombre o mail"><br>
                </div>
                <div class="boton">
                    <input type="submit" name="Buscando" class="btn-block btn-sm btn-success" value="Buscar">    
                </div>
                </form>
        </div>
<br>

<div class="container_tabla">
<div class="contenedor_todd">
<div class="box0">
    <div class="box2">
    <div class="cards">
        <?php
            include("Config/Conexion.php");
                $sql = "SELECT * FROM cargo WHERE id ='1'";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>

            <div class="card">
        
                <div class="info">
                    <h3><?php echo $fila['id']?></h3>
                    <h2>Rol <?php echo $fila['descripcion']?></h2>
                </div>
                <div class="log-sector">
                    <img src="../img/red1.png">
                </div>
            </div>
            <?php
                }
                ?>

            <?php
            include("Config/Conexion.php");
                $sql = "SELECT * FROM cargo WHERE id ='2'";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
            <div class="card">
        
        <div class="info">
            <h3><?php echo $fila['id']?></h3>
            <h2>Rol <?php echo $fila['descripcion']?></h2>
        </div>
        <div class="log-sector">
            <img src="../img/red2.png">
        </div>
    </div>

            <?php
                }
                ?>
        </div>
    </div>
    <div class="box1">
    <div class="tablas">
        <br>
        <div class="excel">
            <a href="exel.php" class="boton"><i class="fas fa-download"></i>Descargar planilla de Excel</i></a>
        </div>
        <br>
        <div class="scrol">
        <table class="table">
        <thead class="table1">
            <tr> 
                    <th scope="col">Modificar Rol</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">PassAdmin</th>
                    <th scope="col">Rol</th>
            </tr> 
        </thead> 

        <tbody>
        <?php while($fila = mysqli_fetch_array($resultado)){?>
                <tr>
                <th scope="row">
                    <div class="flexi">
                    <a href="Forms/EditarDato.php?Id=<?php echo $fila['id']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>                            
                    </div>
                    </th>
                    <th scope="row"><?php echo $fila['email']?></th>
                    <th scope="row"><?php echo $fila['user']?></th>
                    <th scope="row"><?php echo $fila['password']?></th>
                    <th scope="row"><?php echo $fila['pasadmin']?></th>
                    <th scope="row"><?php echo $fila['rol']?></th> 
                </tr>
                                <?php } ?>
                           </tbody>
                    </table>
                </div>
                <br>
                
            </div>
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


