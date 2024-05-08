<?php include("Config/Conexion.php");?> 
<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= inventario_ebooks.xls");

$sql = "SELECT * FROM login";
$query = mysqli_query($conexion, $sql);
?>

<div class="tablasf">
    <div class="scrol">        
            <div class="col-md-7">
                <div class="table-responsive">
                    <table class="table">   
                    <thead class="text-muted">
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">PassAdmin</th>
                    <th scope="col">Rol</th>
                           </thead> 
                           <tbody>
                           <?php while ($fila = mysqli_fetch_array($query)) { ?>
                            <tr>
                            <th scope="row"><?php echo $fila['email']?></th>
                    <th scope="row"><?php echo $fila['user']?></th>
                    <th scope="row"><?php echo $fila['password']?></th>
                    <th scope="row"><?php echo $fila['pasadmin']?></th>
                    <th scope="row"><?php echo $fila['rol']?></th> 
                                <?php }  ?>

                           </tbody>
                    </table>
                </div>
            </div>

    </div>