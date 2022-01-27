<?php
	include('verifica.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Página de cadastro de empresas</title>
</head>
<body>
	<div align="center"><center>
		<h2>Página de cadastro de empresas</h2>
		<form name="Cadastro-Empresa" action="cadastro-empresa.php" method="POST">
			<p><label>Nome da empresa: </label>
			<input type="text" name="NomeEmpresa" size="50" >
			<label> CNPJ: </label>
			<input type="text" name="CNPJEmpresa" size="14" placeholder="somente números"></p>
			<p><label>Telefone: <label>
			<input type="tel" name="TelefoneEmpresa" size="12" placeholder="(DDD)xxxx-xxxx">
			<label>Ramo: </label>
			<input type="text" name="RamoEmpresa" size="25">
			<label>Estado: </label>
			<input type="text" name="EstadoEmpresa" size="20"></p>
			<p><input type="submit" name="Cadastrar" value="Cadastrar"></p>
		</form>
		<a href="painel.php">Voltar à página inicial</a>
	</center></div>
</body>