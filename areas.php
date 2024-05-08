
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dash-style.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
          
            <div class="col-8 barra">
                <img src="img/log.png" width="150"
                height="50" >
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="desconectar.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
        
        </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="home.php"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="medicos.php"><i class="fa fa-user-md"></i><span>Médicos</span></a>
                    <a href="enfermeros.php"><i class="fa fa-hospital-o"></i><span>Enfermeros</span></a>
                    <a href="pacientes.php"><i class="fas fa-users"></i><span>Pacientes</span></a>
                    <a href="citasmedicas.php"><i class="fa fa-hospital-o"></i><span>Citas Médicas</span></a>
                    <a href="areas.php"><i class="fa fa-hospital-o"></i><span>Áreas del hospital</span></a>
                </nav>
            </div>

            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna5" id="columna5">
                    <?php include("crud_area/Index.php");?>
                    </div>
                </div>
            </main>


           
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
</body>

</html>