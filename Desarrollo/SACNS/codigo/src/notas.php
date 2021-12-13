<?php
    include("conexion_db.php");
    
  
    
    /*para mostrar el nombre del curso*/
    $consulta = "SELECT * FROM docente WHERE docente_id = 15021046";
    $resultado_curso = mysqli_query($conexion, $consulta);
    $curso = mysqli_fetch_assoc($resultado_curso);
    $id_curso = $curso['asignatura_id'];
    $curso = $curso['especialidad'];

    /*para mostrar los datos de los alumnos*/
    $consulta = "SELECT * FROM alumno WHERE nivel_id IN (SELECT nivel_id FROM asignatura WHERE asignatura_id = ".$id_curso.")";
    $resultado_alumnos = mysqli_query($conexion, $consulta);
    $alumnos = mysqli_fetch_array($resultado_alumnos);


?>