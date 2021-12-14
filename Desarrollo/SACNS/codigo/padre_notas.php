<?php 

session_start();

if(!isset($_SESSION['datos_usuario']) || !$_SESSION['role']=='padre') {
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página - Notas del alumno</title>
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

    
    <?php require_once('includes/sidebar_padre.php') ?>
    <?php include("src/vernotaspadre.php") ?>
    
    <div>
    
        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;" >
            <div class="row" style="background: #FFFFFF; border-radius:20px;" > 
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1>Nombres del alumno:  <?php echo $alumno_nombre ?></h1>
                                <h1>Apellidos del alumno:  <?php echo $alumno_apellido ?></h1>
                                        <table class="table user-list">
                                            <thead>
                                                <tr>
                                                <th ><span>Curso</span></th>                                                
                                                <th class="text-center th-nota" ><span>NOTA 1</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 2</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 3</span></th> 
                                                
                                                                 
                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    /*seleccionamos las asignaturas que lleva el alumno*/
                                                    for ($i = 1; $i <= 5; $i++) {
                                                       
                                                        $consulta = "SELECT nombre FROM asignatura WHERE asignatura_id = '.$i.'";
                                                        $asig = mysqli_query($conexion, $consulta);
                                                        $asignatura = mysqli_fetch_array($asig);
                                                        
                                                        ?>
                                                            <tr>
                                                                <td>     
                                                                    <?
                                                                     
                                                                    <span class="user-subhead text-center"> <?php echo $asignatura; ?> </span>
                                                                </td>
                                                                 

                                                                <td><span class="label label-default"><?php
                                                                /*para mostrar las notas del primer trimestre*/
                                                                
                                                                $consulta = "SELECT * FROM nota WHERE alum_id = '.$alumno_id.' AND asignatura_id ='.$i.' AND trimestre = 1";
                                                                $resultado_notas_1 = mysqli_query($conexion, $consulta);
                                                            
                                                            
                                                                $count1 = mysqli_num_rows($resultado_notas_1);
                                                                if($count1 == 1){
                                                                    $notas_1 = mysqli_fetch_array($resultado_notas_1);
                                                                    $notas1= $notas_1['nota'];
                                                                }
                                                                else{
                                        
                                                                    $notas1=0;
                                                                }



                                                                
                                                                ?></td>

                                                                <td><span class="label label-default"><?php
                                                                /*para mostrar las notas del segundo trimestre*/
                                                                $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumno_id." AND asignatura_id  = '.$i.' AND trimestre = 2";
                                                                $resultado_nota2 =mysqli_query($conexion,$consulta);
                                                                $count2 = mysqli_num_rows($resultado_nota2);
                                                                
                                                                if($count2 == 1){
                                                                    $notas_2 = mysqli_fetch_array($resultado_nota2);
                                                                    echo $notas_2['nota'];

                                                                }
                                                                else{
                                                            
                                                                    echo 0;
                                                                }
                                                                    
     
                                                                ?></td>

                                                                <td><span class="label label-default"><?php
                                                                /*para mostrar las notas del tercer trimestre*/
                                                                $consulta = "SELECT * FROM nota WHERE alum_id = '.$alumno_id.' AND asignatura_id = '.$i.' AND trimestre = 3";
                                                                $resultado_nota3 =mysqli_query($conexion,$consulta);
                                                                $count3 = mysqli_num_rows($resultado_nota3);
                                                                if($count3 == 1){
                                                                    $notas_3 = mysqli_fetch_array($resultado_nota3);
                                                                    echo $notas_3['nota'];
                            


                                                                }
                                                                else{
                                                            
                                                                    echo 0;
                                                                    $promedio = 0;
                                                                }
          
                                                                ?>
                                                              
                                                                <td >
                                                                <span class="label label-default"><?php echo $promedio ?></span>
                                                                                                                   </td>
                                                            </tr>

                                                        <?php
                                                        
                                                       
                                                    }
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

   