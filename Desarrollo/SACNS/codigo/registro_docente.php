<?php
    session_start();

    if(!isset($_SESSION['datos_usuario']) || !$_SESSION['role']=='admin') {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar_Tipo_Usuario</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/registro_docente.css">

</head>
<body>
        <div class="row">
            <div class="col-md-5 p-5 fst-quote-container text-white min-h-100vh">
                <div class="container">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/admin_prueba.png" alt="admin-foto" />
                            <div class="text-white ms-3">
                                <p class="fw-bold fst-italic mb-0">Administrador</p>
                                <p class="mb-0"> <?php echo($_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'])?> </p>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <div class="d-flex justify-content-center align-items-center"> 
                                <i class="fas fa-graduation-cap logo text-dark"></i>
                                <h2 class="fw-lighter ms-3 fw-bold mb-0 fst-italic text-decoration-underline text-dark">E. SAN MARCOS</h2>       
                            </div>
                            <div>
                                <p class="pt-4 lh-lg mb-0">
                                    El colegio San Marcos es uno de los mejores colegios en Lima reconocido por la educación personalizada
                                    y centrada en el alumno. La misión del colegio es formar personas íntegras, responsables, sensibles, 
                                    seguras de sí mismas, con pasión por el aprendizaje y que sean miembros comprometidos y activos en 
                                    una comunidad global.
                                </p>
                            </div>
                            <div class="text-center mt-5">
                                <p class="text-white fst-italic">¿Ayuda?</p>
                                <button class="btn btn-light w-100 mx-auto py-3 fw-bold">DOCUMENTACIÓN</button>
                            </div>
                        </div>
                    </div>
                    
                </div>

                
            </div>
            <div class="col-md-7 min-h-100vh d-flex align-items-center">
                <div class="container py-5">
                    <div class="d-flex justify-content-between align-self-start align-items-center ">
                        <div id="cerrarSesion" class="d-flex align-items-center mb-5 pointer">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
                            </svg>
                    
                            <a href = "registro_tipo_usuario.php" class="mb-0 ms-2 text-secondary"> Volver </a>
                        </div>
                        <div id="volver" class="d-flex align-items-center mb-5 pointer d-none">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
                            </svg>
                    
                            <p class="mb-0 ms-2 text-secondary">Volver</p>
                        </div>
                        <div class="d-flex flex-column justify-content-end mb-5 me-lg-5">
                            <p style="font-size: 13px; color: #bdbdbd;" class="mb-0 me-lg-5">Cuenta Administrativa</p>
                            <p class="text-secondary mb-0 text-end me-lg-5" id="titlePhase">Menu Principal</p>
                        </div>
                    </div>
                    
                    <div class="container ml-4" id="containerLoginPageRight">
                        <div>
                            <h5 class="fw-bold fs-4" id="titleLoginPage">Datos del docente</h5>
                        </div>
                        <form role="form" action="src/registro_docente_logic.php" method="POST" class="formulario">
                            <div class="form-group">
                              <label for="full_name">Nombres:</label>
                              <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Juan carlos">
                            </div>

                            <div class="form-group">
                              <label for="full_name">Apellidos:</label>
                              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Torres Cano">
                            </div>
                            <div class="form-group">
                                <label for="Telefono">Telefono:</label>
                                <input type="tel" class="form-control" id="celular" placeholder="+51  123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required name="celular">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo:</label>
                                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email">
                            </div>
                            <div class="form-group">
                                <label for="DNI">DNI:</label>
                                <input type="tel" class="form-control" id="dni" placeholder="28844275" name="dni">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Especialidad :</label> 
                                <select class="form-select" aria-label="Default select example" name="especialidad" id="especialidad">
                                    <option selected>Seleccione</option>
                                    <option value="1">Matematica</option>
                                    <option value="2">Comunicacion</option>
                                    <option value="3">Ingles</option>
                                    <option value="4">Ciencia,Tecnologia y Ambiente</option>
                                    <option value="5">Educacion Fisica</option>
                                </select>
                            </div>
                            <div  class = " mt-5 " >
                            <button  class = " btn btn-colors d-block w-100 " type = " submit " id="btnRegistrar"> Registrar </button>
                        </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/registerDocenteLogic.js?v=<?php echo time(); ?>"></script>
        <!--Fotter-->
         <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- FontAwesome para iconos -->
        <script src="https://kit.fontawesome.com/57888ec9eb.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
    </body>
</html>