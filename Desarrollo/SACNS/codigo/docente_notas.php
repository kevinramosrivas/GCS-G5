<?php
    session_start();
    if(!isset($_SESSION['datos_usuario']) || !$_SESSION['role']=='docente') {
        header("Location: login.php");
    }
   

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina - Tabla de Notas por Bimestre</title>
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/P2.Nota_por_Mes_Docente.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>



<body>

    <?php include("src/notas.php") ?>
    <?php require_once('includes/sidebar_docente.php') ?>
 
    

    <div>
    
        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;" >
            <div class="row" style="background: #FFFFFF; border-radius:20px;" > 
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1>Curso:  <?php echo $asignatura; ?></h1>
                           
                                        <table class="table user-list">
                                            <thead>
                                            <tr>
                                                <th ><span>Alumno</span></th>                                                
                                                <th class="text-center th-nota" ><span>NOTA 1</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 2</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 3</span></th> 
                                                
                                                <th class="text-center th-nota" ><span>   </span></th>                      
                                                <th class="text-center" >&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <?php  
                                                    foreach ($conexion->query("SELECT * FROM alumno WHERE nivel_id IN (SELECT nivel_id FROM asignatura WHERE asignatura_id = ".$asignatura_id.")") as $alumnos){
                                                         
                                                    
                                                            $alumnos_id=$alumnos['alum_id'];
                                                            

                                                            $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumnos_id." AND asignatura_id=".$asignatura_id." AND trimestre = 1 ";
                                                            $resultado_notas_1 = mysqli_query($conexion, $consulta);
                                                            
                                                            
                                                            $count1 = mysqli_num_rows($resultado_notas_1);
                                                            if($count1 == 1){
                                                                $notas_1 = mysqli_fetch_assoc($resultado_notas_1);
                                                                $notas1= $notas_1['nota'];
                                                            }
                                                            else{
                                    
                                                                $notas1=0;
                                                            }



                                                            $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumnos_id." AND asignatura_id=".$asignatura_id." AND trimestre = 2 ";
                                                            $resultado_notas_2 = mysqli_query($conexion, $consulta);
                                                           
                                                           
                                                            $count2 = mysqli_num_rows($resultado_notas_2);
                                                            if($count2 == 1){
                                                                $notas_2 = mysqli_fetch_assoc($resultado_notas_2);
                                                                $notas2= $notas_2['nota'];
                                                            }
                                                            
                                                            else{
                                                                $notas2=0;
                                                            }

                                                            $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumnos_id." AND asignatura_id=".$asignatura_id." AND trimestre = 3 ";
                                                            $resultado_notas_3 = mysqli_query($conexion, $consulta);
                                                          
                                                            
                                                            $count3 = mysqli_num_rows($resultado_notas_3);
                                                            if($count3 == 1){
                                                                $notas_3 = mysqli_fetch_assoc($resultado_notas_3);
                                                                $notas3= $notas_3['nota'];
                                                            }
                                                            
                                                            else{
                                    
                                                                $notas3=0;
                                                            }
                                                        
                                                        ?>
                                                            <tr>
                                                                <form method="POST" action="">
                                                                    <td>                                                     
                                                                        <span class="user-subhead text-center"><?php echo $alumnos['apellidos'].', '.$alumnos['nombres'] ?> </span>
                                                                    </td>
                                                                
                                                                    <td><input name="nota1" class="element text medium" type="text" value="<?php echo $notas1 ?>">
                                                                    </td>
                                                                    
                                                                    <td><input name="nota2" class="element text medium" type="text" value="<?php echo $notas2 ?>">
                                                                    </td>
                                                                    <td><input  name="nota3" class="element text medium" type="text" value="<?php echo $notas3 ?>">
                                                                    </td>
                                                                    <td >
                                                                   
                                                                    
                                                                    <input id="saveForm" class="btn btn-info" style="background: #4FD1C5; color: #FFFFFF;" type="submit" name="editar" value="Editar" />
                                                                
                                                                </form>
                                                            </tr>

                                                            <?php
 
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
    $sql ="SELECT * FROM nota WHERE alumno_id = '.$alumnos_id.' AND trimestre = 1 AND asignatura_id = '.$asignatura_id.'";
    $consult1=mysqli_query($conexion,$sql);
    $nota_id = mysqli_fetch_array($consult1);
    $nota = $nota_id['nota_id'];
    $consulta1=mysqli_query($conexion,"UPDATE nota SET nota = '.$N1.' WHERE nota_id = ".$nota." alumno_id= '.$alumnos_id.' AND trimestre = 1 AND asignatura_id = '.$asignatura_id.'");
}
    else{
    $sql1 = "INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N1,$alumnos_id,$asignatura_id, 1)";
    mysqli_query($conexion, $sql1);
    var_dump($sql1);
}


if($c2==1){
    $sql ="SELECT * FROM nota WHERE alumno_id = '.$alumnos_id.' AND trimestre = 2 AND asignatura_id = '.$asignatura_id.'";
    $consult2=mysqli_query($conexion,$sql);
    $nota_id = mysqli_fetch_array($consult2);
    $nota = $nota_id['nota_id'];
    $consulta2=mysqli_query($conexion,"UPDATE nota SET nota = '.$N2.' WHERE nota_id = '.$nota.' alumno_id= '.$alumnos_id.' AND trimestre = 2 AND asignatura_id = '.$asignatura_id.'");
}else{
    $sql1 = "INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N1,$alumnos_id,$asignatura_id, 2)";
    mysqli_query($conexion, $sql1);
    var_dump($sql1);
}


if($c3==1){
    $sql ="SELECT * FROM nota WHERE alumno_id = '.$alumnos_id.' AND trimestre = 3 AND asignatura_id = '.$asignatura_id.'";
    $consult2=mysqli_query($conexion,$sql);
    $nota_id = mysqli_fetch_array($consult3);
    $nota = $nota_id['nota_id'];
    $consulta2=mysqli_query($conexion,"UPDATE nota SET nota = '.$N3.' WHERE nota_id = '.$nota.' AND alumno_id= '.$alumnos_id.' AND trimestre = 3 AND asignatura_id = '.$asignatura_id.'");
}
    else{
    $sql1 = "INSERT INTO nota (nota, alum_id, asignatura_id, trimestre) VALUES ($N3,$alumnos_id,$asignatura_id, 3)";
    mysqli_query($conexion, $sql1);
    var_dump($sql1);
}
                                                    }}
                                                    


                                                ?>
  
                                                
                                                
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/sidebar.js"></script>
</body>

   