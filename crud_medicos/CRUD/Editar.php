<?php 

    include_once("../Config/Conexion.php");

    $Id = $_POST['Id'];
    $nom = $_POST['nombre'];
    $dni = $_POST['DNI'];
    $telf = $_POST['telefono'];
    $dire = $_POST['direccion'];
    $core = $_POST['correo'];
    $area = $_POST['area'];
    


    $sql = "UPDATE medicos SET nombre='$nom', DNI='$dni', telefono='$telf' , direccion='$dire' , correo= '$core' , area='$area' WHERE id='$Id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location: ../Index.php');
    }

?>