<html>
<head>
	<title>POST</title>
</head>
<body>
	<form action='dpost.php' method='post' name='frm'>
		<input type='text' name='nombre' placeholder="nombre" required/>
		<input type='password' name='pass' placeholder="password" required/>
		<input type='submit' value='InsertarArchivo' name="botn" />
	</form>

	<form action='dpost.php' method='post' name='frm1'>
		<input type='submit' value='LeerArchivo' name="botn" />
	</form>
	<form action='dpost.php' method='post' name='frm'>
		<input type='text' name='nombre' placeholder="nombre" required/>
		<input type='password' name='pass' placeholder="password" required/>
		<input type='submit' value='InsertarBD' name="botn" />
	</form>
	<form action='dpost.php' method='post' name='frm'>
		<input type='submit' value='LeerBD' name="botn" />
	</form>
	<form action='dpost.php' method='post' name='frm'>
		<input type='text' name='nombre' placeholder="nombre" required/>
		<input type='submit' value='LeerBDPN' name="botn" />
	</form>
	<form action='dpost.php' method='post' name='frm'>
		<input type='text' name='nombre' placeholder="nombre" required/>
		<input type='submit' value='BorrarBD' name="botn" />
	</form>

</body>
</html>
