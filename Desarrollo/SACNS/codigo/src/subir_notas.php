<?php
include("conexion_db.php");


if(isset($_POST['editar'])) {
    $N1=$_POST['N1'];
    $N2=$_POST['N2'];
    $N3=$_POST['N3'];
    $asignatura_id=$_POST['asignatura_id'];
    $alumnos_id=$_POST['id'];



$buscar1=mysqli_query($conexion,"SELECT * FROM nota WHERE alum_id='$alumnos_id' AND asignatura_id='$asignatura_id' AND trimestre = 1");
$buscar2=mysqli_query($conexion,"SELECT * FROM nota WHERE alum_id='$alumnos_id' AND asignatura_id='$asignatura_id' AND trimestre = 2");
$buscar3=mysqli_query($conexion,"SELECT * FROM nota WHERE alum_id='$alumnos_id' AND asignatura_id='$asignatura_id' AND trimestre = 3");


$c1 = mysqli_num_rows($buscar1);
$c2 = mysqli_num_rows($buscar2);
$c3 = mysqli_num_rows($buscar3);
if($c1!=1 ||$c2 != 1 || $c3 != 1){
    $fila1='';
    $fila2='';
    $fila3='';
}

else{
    $fila1 = mysqli_fetch_array($buscar1);
    $fila2 = mysqli_fetch_array($buscar2);
    $fila3 = mysqli_fetch_array($buscar3);
}   


if($fila1==''||$fila2==''||$fila3==''){
    
    $sql = $conexion->prepare("INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N1,$alumnos_id,$asignatura_id, 1)");
    mysqli_query($conexion, $sql);
    var_dump($sql);

    $sql = $conexion->prepare("INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N2,$alumnos_id,$asignatura_id, 2)");
    mysqli_query($conexion, $sql);
    var_dump($sql);

    $sql = $conexion->prepare("INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N3,$alumnos_id,$asignatura_id, 3)");
    mysqli_query($conexion, $sql);
    var_dump($sql);
}
else{

    $consulta1=mysqli_query($conexion,"UPDATE nota SET nota = TRIM('.$N1.') WHERE alumno_id=TRIM('.$alumnos_id.') AND trimestre = 1 AND asignatura_id = TRIM('.$asignatura_id.')");
    $consulta1=mysqli_query($conexion,"UPDATE nota SET nota = TRIM('.$N2.') WHERE alumno_id=TRIM('.$alumnos_id.') AND trimestre = 2 AND asignatura_id = TRIM('.$asignatura_id.')");
    $consulta1=mysqli_query($conexion,"UPDATE nota SET nota = TRIM('.$N3.') WHERE alumno_id=TRIM('.$alumnos_id.') AND trimestre = 3 AND asignatura_id = TRIM('.$asignatura_id.')");
}
header('location: docente_notas.php');
}


?> 