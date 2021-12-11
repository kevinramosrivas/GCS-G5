<?php
    include('conexion_db.php');
    var_dump($_POST);
    $nombresPadre = $_POST['nombresPadre'];
    $apellidosPadre = $_POST['apellidosPadre'];
    $dniPadre = $_POST['dniPadre'];
    $celularPadre = $_POST['celularPadre'];
    $emailPadre = $_POST['emailPadre'];
    $nombresAlumno = $_POST['nombresAlumno'];
    $apellidosAlumno = $_POST['apellidosAlumno'];
    $dniAlumno = $_POST['dniAlumno'];
    $gradoAlumno = $_POST['gradoAlumno'];
    $dniPadre = stripcslashes($dniPadre);
    $dniAlumno = stripcslashes($dniAlumno);

    $sql = "SELECT * FROM `alumno` WHERE alum_id = '$dniAlumno'";
    $result = mysqli_query($conexion, $sql);
    $count = mysqli_num_rows($result);
    if($count !== 1) {
        $sql = "INSERT INTO `alumno` (`alum_id`, `nivel_id`, `nombres`, `apellidos`) 
        VALUES ('$dniAlumno', '$gradoAlumno' , '$nombresAlumno', '$apellidosAlumno')";
        mysqli_query($conexion, $sql);
        $sql = "INSERT INTO `padre` (`padre_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `alum_id`, `email`, `celular`) 
        VALUES ('$dniPadre', $nombresPadre, '$dniPadre', '$nombresPadre', '$apellidosPadre', '$dniAlumno', '$emailPadre', '$celularPadre')";
        mysqli_query($conexion, $sql);
    }
    
?>