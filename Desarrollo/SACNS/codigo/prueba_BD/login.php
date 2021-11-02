<?php
/* Establecemos los parámetros*/
$dbhost = 'localhost'; /*usaremos nuestra PC para hacer la conexión*/
$dbuser = 'root';  /*Usuario por defecto*/
$dbpass = 'puertaploma'; /* por defecto el usuario root no tiene contraseña*/
$dbname = 'sacns_bd'; /* esto dependerá del nombre que le pongas a la base de datos en tu sistema*/


/* Unimos los parámetros en la variable 'conn' para definir la conexión */

$conn =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

/* En caso no haya conexión a la base de datos*/
if (!$conn)
{
    die('No hay conexión a la base de datos'.mysqli_connect_error());
}

/*ejecutamos la consuklta basándonos por el momento solo en la tabla padre*/
$query = mysqli_query($conn,"SELECT * FROM padre WHERE usuario = '".$_POST['usuario']."' and contrasenia = '".$_POST['contrasenia']."'");
$nr = mysqli_num_rows($query);/* en esta variable almacenamos las coincidencias */

if($nr == 1)/* si existe una coincidencia*/
{
	header("Location: ingreso.html");
	echo "Bienvenido:" .$_POST['usuario'];
}
else if ($nr == 0) /* si no existen coicidencias*/
{
	echo "	Conexión exitosa"; 
	echo "No ingresó"; 
	echo "<script> alert('Error: Usuario y/o contraseña no existe');window.location= 'index_prueba.html' </script>";

}
?>