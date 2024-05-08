<?php

    include_once('../Config/Conexion.php');

    $Id = $_POST['Id'];
    $nom = $_POST['nombre'];
    $dni = $_POST['DNI'];
    $des = $_POST['descrip'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $area = $_POST['Area'];
    $enfer = $_POST['enfermero'];
    $medu = $_POST['medico'];
    $llamado = $_POST['llamado'];

    $sql = "INSERT INTO citasmedicas(nombre,DNI,descrip,fecha,hora,Area,enfermero,medico,llamado)VALUES('$nom','$dni','$des','$fecha','$hora','$area','$enfer','$medu','$llamado')";

    $query = mysqli_query($conexion,$sql);

    if ($query === TRUE) {
        header("Location: ../index2.php");
    }