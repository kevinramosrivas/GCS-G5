<?php
    include('conexion_db.php');
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $asignatura_id = $_POST['especialidad'];



    $docente_id = stripcslashes($dni);
    $usuario = strtoupper($nombres.' '.$apellidos);

    switch($asignatura_id){
        case 1:
            $especialidad = "Matematica";
            break;
        case 2:
            $especialidad = "Comunicacion";
            break;
        case 3:
            $especialidad = "Ingles";
            break;
        case 4:
            $especialidad = "Ciencia,Tecnologia y Ambiente";
            break;
        case 5:
            $especialidad = "Educacion Fisica";
            break;
    }
    $sql = "SELECT * FROM `docente` WHERE asignatura_id = '$asignatura_id'";
    $result = mysqli_query($conexion, $sql);
    $count = mysqli_num_rows($result);
    //var_dump($count);

    $sql = "SELECT * FROM `docente` WHERE docente_id = '$docente_id'";
    $result = mysqli_query($conexion, $sql);
    $count2 = mysqli_num_rows($result);

    $sql = "SELECT * FROM `alumno` WHERE alum_id = '$docente_id'";
    $result = mysqli_query($conexion, $sql);
    $count3 = mysqli_num_rows($result);

    $sql = "SELECT * FROM `padre` WHERE padre_id = '$docente_id'";
    $result = mysqli_query($conexion, $sql);
    $count4 = mysqli_num_rows($result);

    if($count < 1 && $count2 < 1 && $count3 < 1 && $count4 < 1){
        $sql = "INSERT INTO `docente` (`docente_id`, `usuario`, `contrasenia`, `nombres`, 
        `apellidos`, `asignatura_id`, `email`, `celular`, `especialidad`) 
        VALUES ('$docente_id','$usuario','$docente_id','$nombres','$apellidos','$asignatura_id','$email','$celular', '$especialidad');";
        mysqli_query($conexion, $sql);
    
        //var_dump($sql);
        header("location: ../registro_docente.php?mensaje=1");
    }
    else{
        if($count == 1){
            header("location: ../registro_docente.php?error=1");
        }
        if($count2 == 1 || $count3 == 1 || $count4 == 1 ){
            header("location: ../registro_docente.php?error=2");
        }

        
    }


?>