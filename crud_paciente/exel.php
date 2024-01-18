<?php include("Config/Conexion.php");?> 
<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= inventario_ebooks.xls");

$sql = "SELECT * FROM pacientes";
$query = mysqli_query($conexion, $sql);
?>

<div class="tablasf">
    <div class="scrol">        
            <div class="col-md-7">
                <div class="table-responsive">
                    <table class="table">   
                    <thead class="text-muted">
                    <th scope="col">Nombre</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Salud</th>
                    <th scope="col">Alergias</th>
                    <th scope="col">Medicacion</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Enfermero</th>
                    <th scope="col">Llamado</th>
                    <th scope="col">Estado</th> 
                           </thead> 
                           <tbody>
                           <?php while ($fila = mysqli_fetch_array($query)) { ?>
                            <tr>
                            <th scope="row"><?php echo $fila['nombre']?></th>
                            <th scope="row"><?php echo $fila['dni']?></th>
                            <th scope="row"><?php echo $fila['telef1']?></th>
                            <th scope="row"><?php echo $fila['telef2']?></th>
                            <th scope="row"><?php echo $fila['direc']?></th>
                            <th scope="row"><?php echo $fila['salud']?></th>
                            <th scope="row"><?php echo $fila['alergias']?></th>
                            <th scope="row"><?php echo $fila['medicacion']?></th>
                            <th scope="row"><?php echo $fila['ubica']?></th>
                            <th scope="row"><?php echo $fila['enfermero']?></th>
                            <th scope="row"><?php echo $fila['llamado']?></th>
                            <th scope="row"><?php echo $fila['estado']?></th>
                                <?php }  ?>

                           </tbody>
                    </table>
                </div>
            </div>

    </div>