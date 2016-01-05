<?php
include("conexion.php");

@$nombre = $_POST['nombre'];
@$pass = $_POST['pass'];
@$tipo = $_POST['botn'];

function insertar($nombre,$pass){
echo $nombre." ".$pass;
$archivo = fopen("archivo.txt", "a") or die ("problemas al abrir");
fwrite($archivo, $nombre."\n");
fwrite($archivo, $pass);
fclose($archivo);
}
function leer(){
@$archi = fopen("archivo.txt", "r") or die ("problemas al abrir");
while (!feof($archi)) {
	$obt = fgets($archi);
	$salto = nl2br($obt);
	echo $salto;
}
}
function insertarbd($nombre,$pass,$host,$user,$pw,$db){
$con = mysql_connect($host,$user,$pw)
or die("problemas al conectar");
mysql_select_db($db,$con)
or die("problemas al conectar la bd");

mysql_query("insert into dat(nombre,pw) values('$nombre','$pass')",$con);
echo "Datos insertados";
}

function consulta($host,$user,$pw,$db){
$con = mysql_connect($host,$user,$pw)
or die("problemas al conectar");
mysql_select_db($db,$con)
or die("problemas al conectar la bd");
$reg = mysql_query("select * from dat")
or die("problemas en la consulta:".mysql_error());
while ($r=mysql_fetch_array($reg)) {
	echo $r['nombre'].$r['pw'];
}
}
function consultanombre($host,$user,$pw,$db,$nombre){
$con = mysql_connect($host,$user,$pw)
or die("problemas al conectar");
mysql_select_db($db,$con)
or die("problemas al conectar la bd");
$reg = mysql_query("select * from dat where nombre='$nombre'")
or die("problemas en la consulta:".mysql_error());
while ($r=mysql_fetch_array($reg)) {
	echo $r['nombre'].$r['pw'];
}
}
function borrar($host,$user,$pw,$db,$nombre){
	$con = mysql_connect($host,$user,$pw)
	or die("problemas al conectar");
	mysql_select_db($db,$con)
	or die("problemas al conectar la bd");
	$reg=mysql_query("select id from dat where nombre='$nombre'",$con);

	if($re = mysql_fetch_array($reg))
	{
		mysql_query("delete from dat where nombre='$nombre'",$con);
		echo "datos eliminados";

	}else echo "datos no eliminados";
}

switch ($tipo) {
	case 'InsertarArchivo':
		insertar($nombre,$pass);
		break;
	case 'LeerArchivo':
		leer();
		break;
	case 'InsertarBD':
		if(isset($nombre)&& !empty($nombre)&&isset($pass)&& !empty($pass)){
		insertarbd($nombre,$pass,$host,$user,$pw,$db);
		}else{echo "sin datos";}
		break;
	case 'LeerBD':
		consulta($host,$user,$pw,$db);
		break;
	case 'LeerBDPN':
		consultanombre($host,$user,$pw,$db,$nombre);
		break;
	case 'BorrarBD':
			borrar($host,$user,$pw,$db,$nombre);
			break;
	default:
		echo "no se encontro ocpion ocurrio algun error";
		break;
}

?>