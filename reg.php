<?php 
//conexion con la base de datos 
$link = mysql_connect("localhost","root","") or die("<h2>no se encuentra el servidor</h2>");;
$db = mysql_select_db("prueba",$link) or die("<h2>error de conexion</h2>");

//obtenemos los valores del formulario
$nombre = $_POST['nombreclie'];
$apellido = $_POST['apellidoclie'];
$sexo = $_POST['sexoclie'];
$edad = $_POST['edadclie'];
$dni = $_POST['dniclie'];
$cel = $_POST['celclie'];

//obtiene la longuitud de un string
$req = (strlen($nombre)*strlen($apellido)*strlen($edad)*strlen($sexo)*strlen($dni)*strlen($cel)) or die("No se han llenado todos los campos <br><br><a href='formulario.html' > volver </a>")

//ingresar la informacion a la tabla 
mysql_query("INSERT INTO clientes VALUES ('$nombre','$apellido','$sexo','$edad','$dni','$cel')",$link) or die("<h2>error de envio</h2>"); 

echo '
<h2>registro completo</h2> 
<h5>gracias por comprar en nuestra web</h5>
<a href="formulario.html" >Regresar</a>
';

