<?php
// Conectando, seleccionando la base de datos

    $link = mysql_connect('localhost','root', '')    
    or die('No se pudo conectar: ' . mysql_error());
   // echo 'Connected successfully';
   
    mysql_select_db('hotel') or die('No se pudo seleccionar la base de datos');
	
   echo"<link href='css/style.css' rel='stylesheet' type='text/css'  media='all' />"; //estilo al fondo y letras


$nombres="";
$apellidos="";
$direccion="";
$rut="";
$email="";
$ciudad="";
$fono="";
$opcion=$_POST['Boton'];

  if(!empty($_POST['NOMBRE']))
        $nombres=$_POST['NOMBRE'];
  else
       $nombres="";
   
    if(!empty($_POST['APELLIDO']))
        $apellidos=$_POST['APELLIDO'];
  else
       $apellidos="";
   
    if(!empty($_POST['DIRECCION']))
        $direccion=$_POST['DIRECCION'];
  else
       $direccion="";
   
   if(!empty($_POST['RUT']))
        $rut=$_POST['RUT'];
  else
       $rut="";
  
   if(!empty($_POST['EMAIL']))
        $email=$_POST['EMAIL'];
  else
       $email="";
   
   if(!empty($_POST['CIUDAD']))
        $ciudad=$_POST['CIUDAD'];
	else
       $ciudad="";
   
   if(!empty($_POST['TELEFONO']))
        $fono=$_POST['TELEFONO'];
  else
       $fono="";
   
     if ($opcion=="Guardar")
       Insertar($rut,$nombres,$apellidos,$direccion,$fono,$ciudad,$email); 
	   	   
function Insertar($rut,$nom,$ape,$dir,$fono,$ciu,$email)
{
    $sql = "INSERT INTO USUARIO (RUT, NOMBRE, APELLIDO,DIRECCION,TELEFONO,CIUDAD,EMAIL) 
						values ('".$rut."','".$nom."','".$ape."','".$dir."',".$fono.",'".$ciu."','".$email."')";
    $result = mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
    echo <script> alert("Registro insertado correctamente.");</script>;
	echo <script> window.location="booking.html"; </script>;     //solo de prueba
	
}   
    // Cerrar la conexión
    mysql_close($link);
>