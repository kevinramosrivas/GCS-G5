<?php
    include("conexion_db.php");
    $status = "";
    $alumnos_id = $_POST["alumnos_id"];
    $asignatura_id = $_POST["asignatura_id"];
    $N1= $_POST["N1"];
    $N2= $_POST["N2"];
    $N3= $_POST["N3"];


    if(($N1 >=0 && $N1<=20 ) && ($N2 >=0 && $N2<=20 ) && ($N3 >=0 && $N3<=20 ) ){
        $update1 = "UPDATE nota SET nota = '$N1' WHERE alum_id = '$alumnos_id' AND trimestre = '1' AND asignatura_id = '$asignatura_id' ;";

        $update2 = "UPDATE nota SET nota = '$N2' WHERE alum_id = '$alumnos_id' AND trimestre = '2' AND asignatura_id = '$asignatura_id' ;";
    
        $update3 = "UPDATE nota SET nota = '$N3' WHERE alum_id = '$alumnos_id' AND trimestre = '3' AND asignatura_id = '$asignatura_id' ;";
        mysqli_query($conexion,$update1);
        mysqli_query($conexion,$update2);
        mysqli_query($conexion,$update3); 
        header("location: ../docente_notas.php?mensaje=1");
    }
    //var_dump($update1);
    //var_dump($update2);
    //var_dump($update3); 

?> 