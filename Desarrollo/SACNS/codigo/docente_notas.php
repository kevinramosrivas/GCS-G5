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
                                <h1>Curso:  <?php echo $curso ?></h1>
                           
                                        <table class="table user-list">
                                            <thead>
                                            <tr>
                                                <th ><span>Alumno</span></th>                                                
                                                <th class="text-center th-nota" ><span>NOTA 1</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 2</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 3</span></th> 
                                                
                                                <th class="text-center th-nota" ><span></span></th>                      
                                                <th class="text-center" >&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <?php  
                                                    while($alumnos = mysqli_fetch_assoc($resultado_alumnos)){
                                                            $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumnos['alum_id']." AND asignatura_id=".$id_curso." AND trimestre = 1 ";
                                                            $resultado_notas_1 = mysqli_query($conexion, $consulta);
                                                            
                                                            
                                                            $count1 = mysqli_num_rows($resultado_notas_1);
                                                            if($count1 == 1){
                                                                $notas_1 = mysqli_fetch_assoc($resultado_notas_1);
                                                                $notas1= $notas_1['nota'];
                                                            }
                                                            else{
                                    
                                                                $notas1=0;
                                                            }



                                                            $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumnos['alum_id']." AND asignatura_id=".$id_curso." AND trimestre = 2 ";
                                                            $resultado_notas_2 = mysqli_query($conexion, $consulta);
                                                           
                                                           
                                                            $count2 = mysqli_num_rows($resultado_notas_2);
                                                            if($count2 == 1){
                                                                $notas_2 = mysqli_fetch_assoc($resultado_notas_2);
                                                                $notas2= $notas_2['nota'];
                                                            }
                                                            
                                                            else{
                                                                $notas2=0;
                                                            }

                                                            $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumnos['alum_id']." AND asignatura_id=".$id_curso." AND trimestre = 3 ";
                                                            $resultado_notas_3 = mysqli_query($conexion, $consulta);
                                                          
                                                            
                                                            $count3 = mysqli_num_rows($resultado_notas_3);
                                                            if($count3 == 1){
                                                                $notas3 = mysqli_fetch_assoc($resultado_notas_3);
                                                                $notas3= $notas_3['nota'];
                                                            }
                                                            
                                                            else{
                                    
                                                                $notas3=0;
                                                            }
                                                        ?>
                                                            <tr>
                                                                <td>                                                     
                                                                    <span class="user-subhead text-center"> <?php echo $alumnos['apellidos'].', '.$alumnos['nombres'] ?> </span>
                                                                </td>
                                                              
                                                                <td class="editable-col text-center" contenteditable="true" name="N1" id="N1" col-index='0' oldVal ="<?php echo $notas1 ?>"><?php echo $notas1 ?>
                                                                </td>
                                                                
                                                                <td class="editable-col text-center" contenteditable="true" name="N1" id="N1" col-index='0' oldVal ="<?php echo $notas2?>"><?php echo $notas2 ?>
                                                                </td>
                                                                
                                                                <td class="editable-col text-center" contenteditable="true" name="N1" id="N1" col-index='0' oldVal ="<?php echo $notas3 ?>"><?php echo $notas3 ?>
                                                                </td>
                                                                <td >
                                                                    <a href="">
                                                                <button class="btn btn-info" style="background: #4FD1C5; color: #FFFFFF;">Grabar</button></a>
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

   