<?php
	$nome = $_POST['NomeCliente'];
	$sobrenome = $_POST['SobrenomeCliente'];
	$sexo = $_POST['Sexo'];
	$produto = $_POST['ProdutoCliente'];
	
	$conexao = mysqli_connect('localhost', 'junior', '1234', 'Cliente_Produto');
	 if (!$conexao) {
		 die('Não foi possível conectar ao banco de dados');
	 }
	echo 'Conexão realizada com sucesso! <br><br>';
	echo 'O nome do cliente cadastrado: ' . $nome . '<br>';
	echo 'O sobrenome do cliente cadastrado: ' . $sobrenome . '<br>';
	echo 'O sexo do cliente cadastrado: ' . $sexo . '<br>';
	echo 'O produto do cliente: ' . $produto . '<br>';
	mysqli_close($conexao);
?>