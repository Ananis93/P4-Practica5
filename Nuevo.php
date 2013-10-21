<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Nuevo</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td>
	<fieldset>

<form Action="ver.php" method="post">

Nuevo Contacto<br/>
Nombre<br/>
<input type="text" name="Nombre"><p/>
Telefono<br/>
<input type="text" name="Telefono"><p/>
Celular<br/>
<input type="text" name="Celular"><p/>
Domicilio<br/>
<input type="text" name="Domicilio"><p/>

<input type="submit" value="Guardar"/><br/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'formulario.php'" value="Cerrar Sesion"/>
</form>
</body>
</html>