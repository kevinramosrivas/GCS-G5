<?php

$status = "";
if(isset($_POST["registrar"]))
{
$N1= $_POST["N1"];
$N2= $_POST["N2"];
$N3= $_POST["N3"];


  
$update1 = "UPDATE nota SET nota=TRIM('.$N1.') WHERE alumno_id=TRIM('.$alumnos_id.') AND trimestre = 1 AND asignatura_id = TRIM('.$asignatura_id.')";

$update2 = "UPDATE nota SET nota=TRIM('.$N2.') WHERE alumno_id=TRIM('.$alumnos_id.') AND trimestre = 2 AND asignatura_id = TRIM('.$asignatura_id.')";

$update3 = "UPDATE nota SET nota=TRIM('.$N3.') WHERE alumno_id=TRIM('.$alumnos_id.') AND trimestre = 3 AND asignatura_id = TRIM('.$asignatura_id.')";


  

mysqli_query($conexion,$update1);
mysqli_query($conexion,$update2);
mysqli_query($conexion,$update3);
 
}

?> 