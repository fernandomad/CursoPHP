<?php
$pass="12345";
$md5 = md5($pass);


echo $pass."</br>";
echo $md5."</br>";

$md6 = md5($pass);
$md7 = md5($pass);
echo $md6."</br>";
echo $md7."</br>";
?>