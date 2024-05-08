<?php include("../cabecera.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD MYSQLI</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/area-styl.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Quicksand:wght@400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sector">
    
    <div class="dash1">
    <h1 class="scopee">Dashboard</h1>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Promedio de demora de atención en cada area'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        
        
        
        
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['traumatologia', 30.0],
                ['Pediatria', 26.8],
                {
                    name: 'obstetria',
                    y: 30.0,
                    sliced: true,
                    selected: true
                },
                ['urgenicas', 40.0],
            ]
        }]
    });
});
		</script>
	</head>
	<body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
        
    
    </div>

    <div class="container_tabla">
        <div class="contenedor_todd">
        <div class="box0">

        <div class="box1">
        <div class="tablas">
            <h1>Lista de Sectores hospitalarios</h1>
        <table class="table">
            <thead class="table1">
                <tr>
                    <th scope="col">Cod. de Área</th>
                    <th scope="col">Zona Hospitalaria</th>
                    <th scope="col">Ubicacion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("Config/Conexion.php");

                $sql = "SELECT * FROM area";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $fila['id']?></th>
                        <th scope="row"><?php echo $fila['descripcion']?></th>
                        <th scope="row"><?php echo $fila['ubicacion']?></th>
                        <th scope="row">
                            <a href="Forms/EditarDato.php?Id=<?php echo $fila['id']?>" class="btn btn-primary">Editar Datos</a>
                            <a href="CRUD/EliminarDato.php?Id=<?php echo $fila['id']?>" onclick="return confirmacion()" class="btn btn-danger">Eliminar Datos</a>
                        </th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
        </div>

        <div class="box2">
        <div class="cards">
            <h1>Sectores añadidos</h1>
        <?php
            include("Config/Conexion.php");
                $sql = "SELECT * FROM area";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
            <div class="card">
                <div class="log-sector">
                    <img src="../img/redo.png">
                </div>
        
                <div class="info">
                    <h2><?php echo $fila['descripcion']?></h2>
                    <p>Ubicada en el <?php echo $fila['ubicacion']?></p>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
        <div class="container_AGR">
        <center><i class='bx bxs-message-square-add'>
                    <a href="Forms/AgregarCliente.php" class="btn btn-add">Añadir Sector</a></i></center>
                </div>
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