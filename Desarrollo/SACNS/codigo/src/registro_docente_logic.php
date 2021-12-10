<?php
    include('conexion_db.php');
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $asignatura_id = $_POST['especialidad'];



    $docente_id = stripcslashes($dni);
    $usuario = strtoupper($nombres.$apellidos);

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
    $sql = "SELECT * FROM `asignatura` WHERE asignatura_id = '$asignatura_id'";
    $result = mysqli_query($conexion, $sql);
    $count = mysqli_num_rows($result);

    $sql = "SELECT * FROM `docente` WHERE docente_id = '$docente_id'";
    $result = mysqli_query($conexion, $sql);
    $count2 = mysqli_num_rows($result);
    var_dump($count);
    var_dump($count2);
    if($count == 1 || $count2 !==1 ){
        $sql = "INSERT INTO `docente` (`docente_id`, `usuario`, `contrasenia`, `nombres`, 
        `apellidos`, `asignatura_id`, `email`, `celular`, `especialidad`) 
        VALUES ('$docente_id','$usuario','$docente_id','$nombres','$apellidos','$asignatura_id','$email','$celular', '$especialidad');";
        mysqli_query($conexion, $sql);
    
        var_dump($sql);
    
        $sql = "INSERT INTO `asignatura` (`asignatura_id`, `nivel_id`, `docente_id`, `nombre`) VALUES ('$asignatura_id', '1' , '$docente_id', '$especialidad')";
        var_dump($sql);
        mysqli_query($conexion, $sql);
        header("location: ../registro_tipo_usuario.html");
    }
    else{
        header("location: ../admin_principal.php");
    }


?>