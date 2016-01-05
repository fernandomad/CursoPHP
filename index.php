<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h5>
<?php
echo "hola<br>mundo<br>";
//com
/*
com
com
*/

//variables
$num=5;
$texto="texto";
$bolt=true; //1 es true 0 o nada false 
$bolf=false;
echo $num.$texto;
echo $bolf.$bolt."<br>";
//constantes
define("saludo","hola");
define("numero",10);
echo saludo.numero."<br>";

//arreglos predefinidos
$arreglo = array("txt1",2,"txt2");
echo $arreglo[2].$arreglo[1]."<br>";

//arreglos asociativos
$asoc = array('clave1' => 'valor','clave2' => 0 );
echo $asoc['clave1'].$asoc['clave2'].'<br>';

//operaciones aritmeticos (+)(-)(*)(/) asignacion (=)

$suma = 4+4;
$multi = $suma*3;
echo $suma.'<br>'.$multi.'<br>';
//operadores de coparacion igual (==) identico(===)
// (!= o <>) (!==) (<) (>) (>=) (<=)
echo (6>=4).(4==11);//1 es true 0 o nada false 

//@ elimina error de vista de usuario
@define();
define();
// ++ incremento
$vari=3;
echo $vari++.'<br>';
echo $vari.'<br>';
echo ++$vari.'<br>';
//logicos (&&) y (or)

//if

if(9 == 7 or 0==5 )
{
	echo "true";
}
elseif(5!=5)
{
	echo "false";
}else{
	echo "final";
}
//while

$aumento =5;
while($aumento<10){
	echo 'N°'.$aumento+=2;
}
echo '<br>';
//do while

do{
	echo 'N°'.$aumento+=2;
}while($aumento<10);

echo '<br>';
//for

for($i=0;$i<10;$i++){
	echo $i;
}
echo '<br>';
//foereach

foreach($arreglo as $j){
	echo $j;
}
foreach($asoc as $j){
	echo $j;
}
foreach($asoc as $j => $k){
	echo $j.'='.$k;
}
//switch

echo "<br>";
$val="hoa";
switch($val){
	case 1: echo "es 1";break;
	case 'hola': echo "es hola";break;
	default: echo "es otra";break;
}
echo "<br>";
//funciones

function fun($p1,$p2){
	return $p1*$p2;
}
echo fun(5,3);

?>
	</h5>
	
</body>
</html>