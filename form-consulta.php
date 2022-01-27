<?php
	include('verifica.php');
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Página de consulta</title>
<head>
<body>
	<div align="center"><center>
		<form name="consulta" action="consulta.php" method="POST">
			<label>Ramo da empresa: </label>
			<input type="text" name="RamoEmpresa" size="50">
			<label>Estado da empresa: </label>
			<input type="text" name="EstadoEmpresa" size="20"><br></br>
			<input type="submit" name="Pesquisar" value="Pesquisar">
		</form>
		<p><a href="painel.php">Voltar à página inicial</a></p>
	</center></div>
</body>
