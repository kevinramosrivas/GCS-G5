<?php
    include("conexion_db.php");
    
    $id_docente = $_GET['id_docente'];
    
    if(!isset($_GET['docente_id'])) {
        header('Location: index.php');
    }
     /*para mostrar el nombre del curso*/
    $consulta = "SELECT * FROM asignatura WHERE asignatura_id IN(SELECT asignatura_id FROM docente WHERE docente_id='.$id_docente.'";
    $resultado = mysqli_query($conexion, $consulta);
    $curso = mysqli_fetch_array($resultado);
   
    $id_curso= $curso['id_curso'];

    /*para mostrar los datos de los alumnos*/
    $consulta = "SELECT * FROM alumno WHERE nivel_id IN (SELECT nivel_id FROM asignatura WHERE asignatura_id = $id_curso)";
    $resultado_alumnos = mysqli_query($conexion, $consulta);
    $alumnos = mysqli_fetch_array($resultado_alumnos);





?>