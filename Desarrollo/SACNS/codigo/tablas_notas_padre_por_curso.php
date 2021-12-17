<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de notas - Alumno</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/tablas_notas_padre.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>



<body>
    <?php 
        require_once('includes/sidebar_padre.php');
        $id_asignatura = $_POST['id_asignatura'];
        $alumno_id = $_POST['alumno_id'];
        include("src/conexion_db.php");
        $sql = "SELECT * FROM `asignatura` WHERE asignatura_id = '$id_asignatura'";
        $asig = mysqli_query($conexion, $sql);
        $asignatura = mysqli_fetch_array($asig);

    ?>
    <div>
        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;" >
            <div class="row" style="background: #FFFFFF; border-radius:20px;" > 
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1>Curso: <?php echo ($asignatura['nombre']); ?></h1>
                                <h2>Grado: <?php echo ($asignatura['nivel_id']); ?></h2>
                                <h2>Tabla de Notas</h2>
                                        <table class="table user-list">
                                            <thead>
                                                <tr>
                                                <th ><span>Trimestre</span></th>                                                
                                                <th class = "text-center" ><span>NOTA </span></th>
                                                <th class= "text-center" ><span>Estado</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:196px;">                                                     
                                                        <span class="user-subhead">1 Trimestre</span>
                                                    </td>
                                                    <td class="text-center"; >
                                                    <p>
                                                    <?php
                                                        $sql = "SELECT * FROM `nota` WHERE asignatura_id = '$id_asignatura' AND alum_id = '$alumno_id' AND trimestre = '1';";
                                                        $asig = mysqli_query($conexion, $sql);
                                                        $asignatura = mysqli_fetch_array($asig);
                                                        echo($asignatura['nota']);
                                                        $nota1 = $asignatura['nota'];
                                                    ?>
                                                    </p>
                                                    <td class="text-center" >
                                                    <button class="btn btn-info" style="background: <?php if($nota1>=11){echo("green");} else{echo("red");}?>; color: #FFFFFF; border: #666;"><?php  if($nota1>=11){echo("Aprobado");} else{echo("Desaprobado");}  ?></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:196px;">                                                     
                                                        <span class="user-subhead">2 Trimestre</span>
                                                    </td>
                                                    <td class="text-center"; >
                                                    <p id="nota1">
                                                    <?php
                                                        $sql = "SELECT * FROM `nota` WHERE asignatura_id = '$id_asignatura' AND alum_id = '$alumno_id' AND trimestre = '2';";
                                                        $asig = mysqli_query($conexion, $sql);
                                                        $asignatura = mysqli_fetch_array($asig);
                                                        echo($asignatura['nota']);
                                                        $nota2 = $asignatura['nota'];
                                                    ?>
                                                    </p>
                                                    <td class="text-center">
                                                    <button class="btn btn-info" style="background: <?php if($nota2>=11){echo("green");} else{echo("red");}?>; color: #FFFFFF; border: #666;"><?php  if($nota2>=11){echo("Aprobado");} else{echo("Desaprobado");}  ?></button>   
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:196px;">                                                     
                                                        <span class="user-subhead">3 Trimestre</span>
                                                    </td>
                                                    <td class="text-center"; >
                                                    <p id="nota2">
                                                    <?php
                                                        $sql = "SELECT * FROM `nota` WHERE asignatura_id = '$id_asignatura' AND alum_id = '$alumno_id' AND trimestre = '3';";
                                                        $asig = mysqli_query($conexion, $sql);
                                                        $asignatura = mysqli_fetch_array($asig);
                                                        echo($asignatura['nota']);
                                                        $nota3 = $asignatura['nota'];
                                                    ?>
                                                    </p>
                                                    <td class="text-center" >
                                                    <button class="btn btn-info" style="background: <?php if($nota3>=11){echo("green");} else{echo("red");}?>; color: #FFFFFF; border: #666;"><?php  if($nota3>=11){echo("Aprobado");} else{echo("Desaprobado");}  ?></button>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                            <?php
                                                $promedio = ($nota1 + $nota2 +$nota3)/3;
                                            ?>
                                            <tfoot>
                                                <tr>
                                                    <th ><span>PROMEDIO FINAL</span></th>                                             
                                                    <th class="text-center" ><span><?php echo($promedio); ?></span></th>                      
                                                    <th class="text-center"><a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: <?php if($promedio>=11){echo("green");} else{echo("red");}?>; color: #FFFFFF; border: #666;"><?php  if($promedio>=11){echo("Aprobado");} else{echo("Desaprobado");}  ?></button>
                                                </tr>
                                            </tfoot>
                                        </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/sidebar.js"></script>
</body>

</html> 