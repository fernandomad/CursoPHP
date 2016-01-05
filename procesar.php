<?php
copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
echo "archivo subido";
$nombre=$_FILES['foto']['name'];
echo "<img src='$nombre'>";
?>