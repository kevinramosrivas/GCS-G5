<?php
    include("conexion_db.php");
    $padre = 1;
  
    /*
    if(!isset($_GET['padre_id'])) {
        header('Location: index.php');
    }
    */
    $id_padre = $padre /*$_GET['id_padre']*/;
  
    

    /*para mostrar los datos del alumno*/
    $consulta = "SELECT * FROM alumno WHERE ID IN (SELECT alum_id FROM padre WHERE padre_id = ".$id_padre.")";
    $resultado_alumno = mysqli_query($conexion, $consulta);
    $alumno = mysqli_fetch_array($resultado_alumno);


?>