<?php
	$nome = $_POST['NomeEmpresa'];
	$cnpj = $_POST['CNPJEmpresa'];
	$telefone = $_POST['TelefoneEmpresa'];
	$ramo = $_POST['RamoEmpresa'];
	$estado = $_POST['EstadoEmpresa'];
	
	$conexao = mysqli_connect('localhost', 'denilson', '12345', 'cadastroempresas') or die('Não foi possível conectar ao banco de dados');
	
	$insert = "INSERT INTO empresas(CNPJEmpresa, NomeEmpresa, RamoEmpresa, EstadoEmpresa, TelefoneEmpresa) VALUE('$cnpj', '$nome', '$ramo', '$estado', '$telefone');";
	
	$busca = "select CNPJEmpresa, NomeEmpresa from empresas where CNPJEmpresa = '$cnpj' and NomeEmpresa = '$nome';";
	$result = mysqli_query($conexao,$busca);
	$cont = mysqli_num_rows($result);
	
	if(isset($_POST['Cadastrar']) and empty($nome) or empty($cnpj) or empty($ramo) or empty($estado)){
		
		echo "<script type='text/javascript'>alert('Todos os campos devem ser preenchidos!');window.location.href='form-cadastro-empresa.php'</script>";
	}else{
		
		if($cont == 1){
			
			echo "<script type='text/javascript'>alert('Empresa já cadastrada!');window.location.href='form-cadastro-empresa.php'</script>";
		}else{
			
			$sql = mysqli_query($conexao,$insert);
			echo "<script type='text/javascript'>alert('Empresa cadastrada com sucesso!');window.location.href='form-cadastro-empresa.php'</script>";
		}
	}
?>

