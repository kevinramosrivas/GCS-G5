<?php
include("conexion_db.php");
if(isset($_POST['editar'])) {
    $N1=$_POST['nota1'];
    $N2=$_POST['nota2'];
    $N3=$_POST['nota3'];
  
  
$buscar1=mysqli_query($conexion,"SELECT * FROM nota WHERE alum_id='$alumnos_id' AND asignatura_id='$asignatura_id' AND trimestre = 1");
$buscar2=mysqli_query($conexion,"SELECT * FROM nota WHERE alum_id='$alumnos_id' AND asignatura_id='$asignatura_id' AND trimestre = 2");
$buscar3=mysqli_query($conexion,"SELECT * FROM nota WHERE alum_id='$alumnos_id' AND asignatura_id='$asignatura_id' AND trimestre = 3");


$c1 = mysqli_num_rows($buscar1);
$c2 = mysqli_num_rows($buscar2);
$c3 = mysqli_num_rows($buscar3);

if($c1==1){
    $sql ="SELECT nota_id FROM nota WHERE alumno_id = '.$alumnos_id.' AND trimestre = 1 AND asignatura_id = '.$asignatura_id.'";
    $consult1=mysqli_query($conexion,$sql);
    $nota_id = mysqli_array($consult1);
    $consulta1=mysqli_query($conexion,"UPDATE nota SET nota = '.$N1.' WHERE nota_id = '.$nota_id.' alumno_id= '.$alumnos_id.' AND trimestre = 1 AND asignatura_id = '.$asignatura_id.'");
else{
    $sql1 = "INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N1,$alumnos_id,$asignatura_id, 1)";
    mysqli_query($conexion, $sql1);
    var_dump($sql1);
}


if($c2==1){
    $sql ="SELECT nota_id FROM nota WHERE alumno_id = '.$alumnos_id.' AND trimestre = 2 AND asignatura_id = '.$asignatura_id.'";
    $consult2=mysqli_query($conexion,$sql);
    $nota_id = mysqli_array($consult1);
    $consulta2=mysqli_query($conexion,"UPDATE nota SET nota = '.$N2.' WHERE nota_id = '.$nota_id.' alumno_id= '.$alumnos_id.' AND trimestre = 2 AND asignatura_id = '.$asignatura_id.'");
else{
    $sql1 = "INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N1,$alumnos_id,$asignatura_id, 2)";
    mysqli_query($conexion, $sql1);
    var_dump($sql1);
}


if($c3==1){
    $sql ="SELECT nota_id FROM nota WHERE alumno_id = '.$alumnos_id.' AND trimestre = 3 AND asignatura_id = '.$asignatura_id.'";
    $consult2=mysqli_query($conexion,$sql);
    $nota_id = mysqli_array($consult1);
    $consulta2=mysqli_query($conexion,"UPDATE nota SET nota = '.$N3.' WHERE nota_id = '.$nota_id.' alumno_id= '.$alumnos_id.' AND trimestre = 3 AND asignatura_id = '.$asignatura_id.'");
else{
    $sql1 = "INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N3,$alumnos_id,$asignatura_id, 3)";
    mysqli_query($conexion, $sql1);
    var_dump($sql1);
}




?> 