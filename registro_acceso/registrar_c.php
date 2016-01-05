<?php
include("conexion.php");
if (isset($_POST['nombre'])&& !empty($_POST['nombre']) &&
	isset($_POST['user'])&& !empty($_POST['user']) &&
	isset($_POST['pw'])&& !empty($_POST['pw']) &&
	isset($_POST['pw2'])&& !empty($_POST['pw2']) &&
	isset($_POST['email'])&& !empty($_POST['email']) &&
	$_POST['pw'] == $_POST['pw2']
	)
{
	$con = mysql_connect($host,$user,$pw)
	or die("problemas al conectar");
	mysql_select_db($db,$con)
	or die("problemas al conectar la bd");
	mysql_query("insert into registro(nombre,user,pw,email)
		values ('$_POST[nombre]','$_POST[user]','$_POST[pw]','$_POST[email]')");
	echo "datos insertados<br>";
	echo "Nombre: ".$_POST['nombre'] ."<br>";
	echo "user: ".$_POST['user']."<br>";
	echo "pw: ".$_POST['pw']."<br>";
	echo "email:". $_POST['email']."<br>";
	

}else
{
	echo "verifica que llenaste los campos y los passwords coincidan";
}
?>