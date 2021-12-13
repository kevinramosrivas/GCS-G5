<?php
    include('conexion_db.php');
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
    
    $sql = "SELECT * FROM `padre` WHERE padre_id = '$dniPadre'";
    $result = mysqli_query($conexion, $sql);
    $count2 = mysqli_num_rows($result);

    $sql = "SELECT * FROM `docente` WHERE docente_id = '$dniPadre'";
    $result = mysqli_query($conexion, $sql);
    $count3 = mysqli_num_rows($result);

    $sql = "SELECT * FROM `docente` WHERE docente_id = '$dniAlumno'";
    $result = mysqli_query($conexion, $sql);
    $count4 = mysqli_num_rows($result);

    if($count !== 1 && $count2 !== 1 && $count3 !==1 && $count4 !==1) {
        $sql = "INSERT INTO `alumno` (`alum_id`, `nivel_id`, `nombres`, `apellidos`) 
        VALUES ('$dniAlumno', '$gradoAlumno' , '$nombresAlumno', '$apellidosAlumno')";
        mysqli_query($conexion, $sql);
        var_dump($sql);
        $sql = "INSERT INTO `padre` (`padre_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `alum_id`, `email`, `celular`) 
        VALUES ('$dniPadre', '$nombresPadre', '$dniPadre', '$nombresPadre', '$apellidosPadre', '$dniAlumno', '$emailPadre', '$celularPadre')";
        var_dump($sql);
        mysqli_query($conexion, $sql);
        header("location: ../registro_padre_alumno.php?mensaje=1");
    }
    else{
        if($count == 1){
            header("location: ../registro_padre_alumno.php?error=1");
        }
        if($count2 == 1 || $count3 == 1 || $count4 == 1){
            header("location: ../registro_padre_alumno.php?error=2");
        }
        
    }
    
?>