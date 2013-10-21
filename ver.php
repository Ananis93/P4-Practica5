<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Ver</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td>
	<fieldset>

<?php

echo "Nombre " . $_POST['Nombre'] ."<br/>";
echo "Telefono " . $_POST['Telefono'] ."<br/>";
echo "Celular " . $_POST['Celular'] ."<br/>";
echo "Domicilio " . $_POST['Domicilio'] ."<br/>";

?>
<br/>
<form Action="formulario.php" method="post">
<input type="submit" value="Cerrar sesion"/>

<input type="submit" onclick = "this.form.action= 'Nuevo.php'" value="Volver"/>
<body>
<html>