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

</div>

<div class="fondo">
    <h1>-</h1>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Pacientes atendidos de cada area'
        },
        subtitle: {
           
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'cantidad de pacientes'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Pediatria',
                y: 5,
                
            }, {
                name: 'Traumatologia',
                y: 2,

            }, {
                name: 'Urgencias',
                y: 2,
            }, {
                name: 'Obstetrica',
                y: 2,

            }, ]
        }],
        drilldown: {
            series: [{
                name: 'Microsoft Internet Explorer',
                id: 'Microsoft Internet Explorer',
                data: [
                    [
                        'v11.0',
                        24.13
                    ],
                    [
                        'v8.0',
                        17.2
                    ],
                    [
                        'v9.0',
                        8.11
                    ],
                    [
                        'v10.0',
                        5.33
                    ],
                    [
                        'v6.0',
                        1.06
                    ],
                    [
                        'v7.0',
                        0.5
                    ]
                ]
            }, {
                name: 'Chrome',
                id: 'Chrome',
                data: [
                    [
                        'v40.0',
                        5
                    ],
                    [
                        'v41.0',
                        4.32
                    ],
                    [
                        'v42.0',
                        3.68
                    ],
                    [
                        'v39.0',
                        2.96
                    ],
                    [
                        'v36.0',
                        2.53
                    ],
                    [
                        'v43.0',
                        1.45
                    ],
                    [
                        'v31.0',
                        1.24
                    ],
                    [
                        'v35.0',
                        0.85
                    ],
                    [
                        'v38.0',
                        0.6
                    ],
                    [
                        'v32.0',
                        0.55
                    ],
                    [
                        'v37.0',
                        0.38
                    ],
                    [
                        'v33.0',
                        0.19
                    ],
                    [
                        'v34.0',
                        0.14
                    ],
                    [
                        'v30.0',
                        0.14
                    ]
                ]
            }, {
                name: 'Firefox',
                id: 'Firefox',
                data: [
                    [
                        'v35',
                        2.76
                    ],
                    [
                        'v36',
                        2.32
                    ],
                    [
                        'v37',
                        2.31
                    ],
                    [
                        'v34',
                        1.27
                    ],
                    [
                        'v38',
                        1.02
                    ],
                    [
                        'v31',
                        0.33
                    ],
                    [
                        'v33',
                        0.22
                    ],
                    [
                        'v32',
                        0.15
                    ]
                ]
            }, {
                name: 'Safari',
                id: 'Safari',
                data: [
                    [
                        'v8.0',
                        2.56
                    ],
                    [
                        'v7.1',
                        0.77
                    ],
                    [
                        'v5.1',
                        0.42
                    ],
                    [
                        'v5.0',
                        0.3
                    ],
                    [
                        'v6.1',
                        0.29
                    ],
                    [
                        'v7.0',
                        0.26
                    ],
                    [
                        'v6.2',
                        0.17
                    ]
                ]
            }, {
                name: 'Opera',
                id: 'Opera',
                data: [
                    [
                        'v12.x',
                        0.34
                    ],
                    [
                        'v28',
                        0.24
                    ],
                    [
                        'v27',
                        0.17
                    ],
                    [
                        'v29',
                        0.16
                    ]
                ]
            }]
        }
    });
});
		</script>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
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

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<h1>-</h1>
	</body>
</html>


