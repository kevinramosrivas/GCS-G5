<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Asistencia</title>
  <link rel="shortcut icon" href="../codigo/assets/img/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../codigo/assets/css/asistencia_padre.css" rel="stylesheet">
    <link rel="stylesheet" href="../codigo/assets/css/sidebar.css">
    
    <style type="text/css">
        .btn {
            display       : inline-block;
            font-size     : 1rem;
            padding       : .0.5rem;
        }
        .btn:hover {
            cursor: pointer;
        }
        .custom-btn {
            font-family : monospace;
            margin      : 0.5rem;
            padding-top : .0.5rem;
        }
        .vertical {
            transform: rotate(-90deg);
        }
    </style>
</head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
          <div id="logoprin" class='bx bxs-graduation icon' color="blue"></div>
          <div class="logo_name">E. SAN MARCOS</div>
          <i class='bx bx-menu' id="btn"></i>
      </div>
      <ul class="nav-list d-none" id="nav-list">
          <li>
              <a href="..\codigo\perfil_padre.php" onclick="">
                  <i class='bx bx-building-house'></i>
                  <span class="links_name">Principal</span>
              </a>
              <span class="tooltip">Principal</span>
          </li>
          <li>
              <a href="..\codigo\tablas_notas_padre.php">
                  <i class='bx bx-notepad'></i>
                  <span class="links_name">Registro de Notas</span>
              </a>
              <span class="tooltip">Notas</span>
          </li>
          <li>
              <a href="..\codigo\inasistencias_padre.php">
                  <i class='bx bxs-x-square'></i>
                  <span class="links_name">Registro de Faltas</span>
              </a>
              <span class="tooltip">Faltas</span>
          </li>
          <li>
              <a href="..\codigo\observaciones_padre.php">
                  <i class='bx bx-file-find'></i>
                  <span class="links_name">Generar Observaciones</span>
              </a>
              <span class="tooltip">Observaciones</span>
          </li>
          <div id="hogar">
              <p>Tu cuenta</p>
          </div>
          <li>
              <a href="../codigo/Modulo_Docente_Frontend/1.1 Editar Perfil/P1.Editar_Perfil.php">
                  <i class='bx bxs-wrench'></i>
                  <span class="links_name">Editar</span>
              </a>
              <span class="tooltip">Editar</span>
          </li>
          <li>
              <a href="..\codigo\login.php">
                  <i class='bx bx-exit'></i>
                  <span class="links_name">Salir</span>
              </a>
              <span class="tooltip">Salir</span>
          </li>
          <div id="hogar2">
              <p>Documentación</p>
          </div>
          <li>
              <a href="#">
                  <i class='bx bx-help-circle'></i>
                  <span class="links_name">Ayuda</span>
              </a>
              <span class="tooltip">Ayuda</span>
          </li>
      </ul>
  </div>
   

    <div class="container mt-4 ml-4 p-4">
        <div class="container-fluid p-0">
        <h1 class="h3">Asistencia</h1>
        <div class="row">
          <div class="col-xl-8">
            <div class="card">
              <div class="card-header pb-0">
                
                <table  style="width:100%" style="height:100;">
                  <thead>
                    <tr>
                      <th>Asignatura</th>
                      <th class="fecha">Fecha</th>
                      <th>Ausencias</th>
                    </tr>
                  </thead>
                  
                </table>
  
                <div class="container justify-content-center m-3 p-4" id="datos">
                  <table  style="width:100%" style="height:100;">
                    <thead>
                      
                    </thead>
                    <tbody>
                      <tr >
                        <td>
                        <p>Matematicas</p>
                        <p>Horario: 8:00 - 11:00 am</p>
                        </td>
                        <td>
                          14/08/21
                          </td>
                          <td class="text-center"; >
                              <input type="text" id="name" name="name"  minlength="18" maxlength="18" size="18">
                          </td>    
                      </tr>  
                    </tbody>
  
                  </table>
                 
                </div> 
  
                <div class="container justify-content-center m-2 p-4" id="datos">
                  <table  style="width:100%" style="height:100;">
                    <thead>
                      
                    </thead>
                    <tbody>
                      <tr >
                        <td>
                        <p>CTA</p>
                        <p>Horario: 8:00 - 11:00 am</p>
                        </td>
                        <td>
                          15/08/21
                          </td>
                          <td class="text-center"; >
                              <input type="text" id="name" name="name" required  minlength="18" maxlength="18" size="18">
                          </td>    
                      </tr>  
                    </tbody>
  
                  </table>
                </div>

                <div class="container justify-content-center m-2 p-4" id="datos">
                  <table  style="width:100%" style="height:100;">
                    <thead>
                      
                    </thead>
                    <tbody>
                      <tr >
                        <td>
                        <p>Ingles</p>
                        <p>Horario: 8:00 - 10:00 am</p>
                        </td>
                        <td>
                          15/09/21
                          </td>
                          <td class="text-center"; >
                              <input type="text" id="name" name="name" required  minlength="18" maxlength="18" size="18">
                          </td>    
                      </tr>  
                    </tbody>
  
                  </table>
                </div>

              </div>
              </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../codigo/assets/js/sidebar.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>