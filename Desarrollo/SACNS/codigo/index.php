<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
<<<<<<< HEAD

    
=======
    <h1>Autenticacion ok</h1>
    <?php
        session_start();

        if(isset($_SESSION['datos_usuario'])) {
            if($_SESSION['role'] == 'padre'){
                echo "Bienvenido padre ".$_SESSION['datos_usuario']['nombres'];
            }

            else if($_SESSION['role'] == 'alumno'){
                echo "Bienvenido alumno ".$_SESSION['datos_usuario']['nombres'];
            }

            else if($_SESSION['role']=='administrador'){
                header('Location: admin_principal.php');
            }
            
        }

        else {
            header("location: login.php");
        }


    ?>
<<<<<<< HEAD
>>>>>>> Pedro
=======
    <a href="src/cerrar_sesion.php">cerrar sesion</a>    
>>>>>>> Pedro
</body>

</html>