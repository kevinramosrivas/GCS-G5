<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Observaciones</title>
  <link rel="shortcut icon" href="..\Imagenes\logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/P1.Observaciones.Alumno.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    
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

      <?php require_once('includes/sidebar_padre.php') ?>
    <div class="container mt-5 ml-5 p-5">
        <div class="container-fluid p-0">
        <h1 class="h3">Observaciones de Salones a cargo</h1>
        <div class="row">
          <div class="col-xl-8">
            <div class="card">
              <div class="card-header pb-0">
                
                <table  style="width:100%" style="height:100;">
                  <thead>
                    <tr>
                      <th>Curso</th>
                      
                      <th class="fecha">Fecha</th>
                    </tr>
                  </thead>
                  
                </table>
  
                <div class="container justify-content-center m-2 p-4" id="datos">
                  <table  style="width:100%" style="height:100;">
                    <thead>
                      
                    </thead>
                    <tbody>
                      <tr >
                        <td>
                        <p>Matematicas</p>
                        <p>Horario: 8:00 - 11:00 am</p>
                        <p>Observacion detallada 1</p>
                        </td>
                        <td>
  
                        </td>
                        <td>
                        <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #4FD1C5; color: #FFFFFF;"> Revisado </button></a>
                        </td>
                        <td>
                        14/08/21
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
                        <p>Horario: 8:00 - 11:00 am</p>
                        <p>Observacion detallada 1</p>
                        </td>
                        <td>
  
                        </td>
                        <td>
                        <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #4FD1C5; color: #FFFFFF;"> Revisado </button></a>
                        </td>
                        <td>
                        19/08/21
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
                      <p>Arte</p>
                      <p>Horario: 8:00 - 11:00 am</p>
                      <p>Observacion detallada 1</p>
                      </td>
                      <td>

                      </td>
                      <td>
                      <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #4FD1C5; color: #FFFFFF;"> Revisado </button></a>
                      </td>
                      <td>
                      19/08/21
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
    <script src="assets/js/sidebar.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>