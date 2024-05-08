<?php

    include_once('../Config/Conexion.php');

    $Id = $_POST['Id'];
    $nom = $_POST['nombre'];
    $dni = $_POST['DNI'];
    $tlef1 = $_POST['telef1'];
    $tlef2 = $_POST['telef2'];
    $direc = $_POST['direc'];
    $salud = $_POST['salud'];
    $aler = $_POST['alergias'];
    $medi = $_POST['medicacion'];
    $ubi = $_POST['ubica'];
    $enfer = $_POST['enfermero'];
    $llamado = $_POST['llamado'];
    $estado = $_POST['estado'];
    $edad = $_POST['edad'];
    $fechanac = $_POST['fechanac'];
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    $presion = $_POST['presion'];
    $prov = $_POST['prov'];
    $localidad = $_POST['localidad'];

    $sql = "INSERT INTO pacientes(nombre,DNI,telef1,telef2,direc,salud,alergias,medicacion,ubica,enfermero,llamado,estado,edad,fechanac,peso,estatura,presion,prov,localidad)VALUES('$nom','$dni','$tlef1','$tlef2','$direc','$salud','$aler','$medi','$ubi','$enfer','$llamado','$estado','$edad','$fechanac','$peso','$estatura','$presion','$prov','$localidad')";

    $query = mysqli_query($conexion,$sql);

    if ($query === TRUE) {
        header("Location: ../index2.php");
    }