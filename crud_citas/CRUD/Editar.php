<?php 

    include_once("../Config/Conexion.php");


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

    $sql = "UPDATE citasmedicas SET nombre='$nom', DNI='$dni', descrip='$des' , fecha='$fecha' , hora='$hora' , Area='$area', enfermero='$enfer', medico='$medu', llamado='$llamado' WHERE id='$Id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location: ../Index.php');
    }

?>