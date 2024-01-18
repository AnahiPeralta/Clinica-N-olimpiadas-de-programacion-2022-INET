<?php 

    include_once("../Config/Conexion.php");


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


    $sql = "UPDATE pacientes SET nombre='$nom', DNI='$dni', telef1='$tlef1' , telef2='$tlef2' , direc='$direc' , salud='$salud', alergias='$aler', medicacion='$medi', ubica='$ubi', enfermero='$enfer' , llamado='$llamado' , estado='$estado' , edad='$edad' , fechanac='$fechanac' , peso='$peso' , estatura='$estatura' , presion='$presion' , prov='$prov' , localidad='$localidad' WHERE id='$Id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location: ../Index.php');
    }

?>