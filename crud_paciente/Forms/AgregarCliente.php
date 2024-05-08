<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Ficha de Paciente</title>
    <link rel="stylesheet" href="./css/agregar.css">
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Commissioner:wght@700&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
    </head>

<body>

    <div class="container_tood">
    <div class="for">
        <img src="../../img/red4.png" class="avatar" alt="Avatar Image">
        <h1 class="text-center">Agregar Paciente</h1>
    </div>

    <div class="container_ag">
    <br>
    <div class="container">
        <form action="../CRUD/Insertar.php" method="POST">
        <div class="box0">
        <div class="box1">
        <h4 class="text-center">Datos personales</h4>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
            </div>

            <div class="box4">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="DNI" name="DNI">
                </div>
                
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Edad" name="edad">
                </div>
            </div>

            <div class="mb-3">
                <h3>Fecha de nacimiento</h3>
                <input type="date" class="form-control" placeholder="fecha de nacimiento" name="fechanac">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Telefono del paciente" name="telef1">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Telefono de un familiar" name="telef2">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Direccion del paciente" name="direc">
            </div>
            <div class="box4">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="provincia" name="prov">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="localidad" name="localidad">
            </div>
            </div>
    </div>


    <div class="box2">
    <h4 class="text-center">Datos clínicos</h4>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Problemas de salud" name="salud">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Alergias" name="alergias">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Medicacion que consume el paciente" name="medicacion">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="peso" name="peso">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="estatura" name="estatura">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="presion" name="presion">
            </div>

    </div>

    <div class="box3">
    <h4 class="text-center">Datos de atención</h4>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Ubicacion de atencion del paciente" name="ubica">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Enfermero asignado" name="enfermero">
            </div>

            <div class="mb-3">
            <h2>Seleccione el tipo de llamado:</h2>
                <select name="llamado" id="">
                <option value="Normal">Normal</option>
                <option value="Emergencia">Emergencia</option>
                </select>
            </div>

            <div class="mb-3">
            <h2>Seleccione el estado de atención:</h2>
                <select name="estado" id="">
                <option value="Atendido">Atendido</option>
                <option value="No atendido">No atendido</option>
                </select>
            </div>

    </div>
    </div>

            <div class="container_b">
                <button type="submit" class="btn btn-primary">Agregar Paciente</button>
                <a href="../Index.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
        </div>
    </div>
    </div>
    </div>

</body>

</html>