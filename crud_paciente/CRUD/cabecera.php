<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- CUSTOM JS -->
    <script src="../../js/app.js" defer></script>
</head>
<body>
    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="../../img/logg.png" alt="">
                <span>ClínicaN</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
       
        <div class="menu">
            <div class="enlace">
                <i class="bx bxs-home"></i>
                <a href="../../crud_usuarios/Indez.php">
                    <span>Inicio</span>
                </a>
            </div>

            <div class="enlace">
                <i class="bx bxs-user-circle"></i>
                <a href="../../crud_usuarios/Index.php">
                    <span>Usuarios</span>
                </a>
            </div>

            <div class="enlace">
                <i class="bx bx-plus-medical"></i>
                <a href="../../crud_medicos/Index.php">
                    <span>Médicos</span>
                </a>
            </div>
    
            <div class="enlace">
                <i class="bx bxs-group"></i>
                <a href="../../crud_enfermermeros/Index.php">
                    <span>Enfermeros</span>
                </a>
            </div>


            <div class="enlace">
                <i class="bx bxs-user-badge"></i>
                <a href="../../crud_paciente/Index.php">
                    <span>Pacientes</span>
                </a>
            </div>

            <div class="enlace">
                <i class="bx bxs-user-pin"></i>
                <a href="../../crud_citas/Index.php">
                    <span>Citas</span>
                </a>
            </div>

            <div class="enlace">
                <i class="bx bxs-grid-alt"></i>
                <a href="../../crud_area/Index.php">
                    <span>Sectores</span>
                </a>
            </div>
        </div>
    </div>

</body>
</html>