<?php
session_start();
include("conexion.php");
if (isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['pw']) && !empty($_POST['pw'])) 
{
	$con = mysql_connect($host,$user,$pw)
	or die("problemas al conectar");
	mysql_select_db($db,$con)
	or die("problemas al conectar la bd");
	$sel = mysql_query("select user,pw from registro where user='$_POST[user]'",$con);
	$s=mysql_fetch_array($sel);
	if($_POST['pw']==$s['pw']){
		$_SESSION['username'] = $_POST['user'];
		echo "sesion exitosa";
		echo $_SESSION['username'];
	}else{
		echo "convinacion erronea";
	}
}else{
	echo "debes llenar los campos";
}
?>