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

    <?php include("src/vernotaspadre.php") ?>
    <?php require_once('includes/sidebar_padre.php') ?>
    <div>
    
        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;" >
            <div class="row" style="background: #FFFFFF; border-radius:20px;" > 
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1>Nombres del alumno:  <?php echo $alumno['nombres'] ?></h1>
                                <h1>Apellidos del alumno:  <?php echo $alumno['apellidos'] ?></h1>
                                        <table class="table user-list">
                                            <thead>
                                                <tr>
                                                <th ><span>Curso</span></th>                                                
                                                <th class="text-center th-nota" ><span>NOTA 1</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 2</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 3</span></th> 
                                                
                                                <th class="text-center th-nota" ><span>PROMEDIO</span></th>                      
                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    while($alumno = mysqli_fetch_assoc($resultado_alumno)){
                                                           

                                                          
                                                        ?>
                                                            <tr>
                                                                <td>                                                     
                                                                    <span class="user-subhead text-center"> <?php echo $curso['nombre'] ?> </span>
                                                                </td>
                                                              
                                                              
                                                                <td><span class="label label-default"><?php
                                                                /*para mostrar las notas del primer trimestre*/
                                                                $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumno['alumno_id']." AND asignatura_id= ".$asignatura['asignatura_id']." AND trimestre = 1";
                                                                $resultado_nota1 =mysqli_query($conexion,$consulta);
                                                                $notas_1 = mysqli_fetch_array($resultado_nota);
                                                                echo $notas_1['nota'];
                                                                ?></td>

                                                                <td><span class="label label-default"><?php
                                                                /*para mostrar las notas del segundo trimestre*/
                                                                $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumno['alumno_id']." AND asignatura_id= ".$asignatura["asignatura_id"]." AND trimestre = 2";
                                                                $resultado_nota2 =mysqli_query($conexion,$consulta);
                                                                $notas_2 = mysqli_fetch_array($resultado_nota);
                                                                echo $notas_2['nota'];
                                                                ?></td>

                                                                <td><span class="label label-default"><?php
                                                                /*para mostrar las notas del tercer trimestre*/
                                                                $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumno['alumno_id']." AND asignatura_id= ".$asignatura["asignatura_id"]." AND trimestre = 3";
                                                                $resultado_nota3 =mysqli_query($conexion,$consulta);
                                                                $notas_3 = mysqli_fetch_array($resultado_nota);
                                                                echo $notas_3['nota'];
                                                                ?>
                                                              
                                                                <td >
                                                                <span class="label label-default"><?php echo ($notas_1['nota']+$notas_2['nota']+$notas_3['nota'])/3 ?></span>
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

   