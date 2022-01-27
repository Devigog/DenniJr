<body>
<div align="center"><center>	
<?php
	
	include('verifica.php');
	
	$ramo = $_POST['RamoEmpresa'];
	$estado = $_POST['EstadoEmpresa'];
	
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>CNPJ</th>";
	echo "<th>Nome</th>";
	echo "<th>Ramo</th>";
	echo "<th>Estado</th>";
	echo "<th>Telefone</th>";
	echo "</tr>";
	
	$conexao = mysqli_connect('localhost', 'denilson', '12345', 'cadastroempresas') or die('Não foi possível conectar ao banco de dados');
	
	$busca = "select CNPJEmpresa, NomeEmpresa, RamoEmpresa, EstadoEmpresa, TelefoneEmpresa from empresas where RamoEmpresa = '$ramo' and EstadoEmpresa = '$estado';";
	$sql = mysqli_query($conexao,$busca) or die("Erro ao retornar os dados.");
	$contador = mysqli_num_rows($sql);	
	
	if(isset($_POST['Pesquisar']) and empty($ramo)){
			
		$buscarestado = "select CNPJEmpresa, NomeEmpresa, RamoEmpresa, EstadoEmpresa, TelefoneEmpresa from empresas where EstadoEmpresa = '$estado';";
		$comando = mysqli_query($conexao,$buscarestado) or die("Erro ao retornar os dados.");
			
		while($registro = mysqli_fetch_array($comando)){
				
			$CNPJ = $registro['CNPJEmpresa'];
			$Nome = $registro['NomeEmpresa'];
			$Ramo = $registro['RamoEmpresa'];
			$Estado = $registro['EstadoEmpresa'];
			$Telefone = $registro['TelefoneEmpresa'];
			
			echo "<tr>";
			echo "<td>".$CNPJ."</td>";
			echo "<td>".$Nome."</td>";
			echo "<td>".$Ramo."</td>";
			echo "<td>".$Estado."</td>";
			echo "<td>".$Telefone."</td>";
			echo "</tr>";
		}
	}else{
		if(isset($_POST['Pesquisar']) and empty($estado)){
				
			$buscaramo = "select CNPJEmpresa, NomeEmpresa, RamoEmpresa, EstadoEmpresa, TelefoneEmpresa from empresas where RamoEmpresa = '$ramo';";
			$comando = mysqli_query($conexao,$buscaramo) or die("Erro ao retornar os dados");
				
			while($registro = mysqli_fetch_array($comando)){
					
				$CNPJ = $registro['CNPJEmpresa'];
				$Nome = $registro['NomeEmpresa'];
				$Ramo = $registro['RamoEmpresa'];
				$Estado = $registro['EstadoEmpresa'];
				$Telefone = $registro['TelefoneEmpresa'];
			
				echo "<tr>";
				echo "<td>".$CNPJ."</td>";
				echo "<td>".$Nome."</td>";
				echo "<td>".$Ramo."</td>";
				echo "<td>".$Estado."</td>";
				echo "<td>".$Telefone."</td>";
				echo "</tr>";
			}
		}else{
			if($contador == 0){
					
				echo "<script type='text/javascript'>alert('Nenhuma empresa encontrada.');window.location.href='form-consulta.php'</script>";
			}else{
				while($registro = mysqli_fetch_array($sql)){
						
					$CNPJ = $registro['CNPJEmpresa'];
					$Nome = $registro['NomeEmpresa'];
					$Ramo = $registro['RamoEmpresa'];
					$Estado = $registro['EstadoEmpresa'];
					$Telefone = $registro['TelefoneEmpresa'];
			
					echo "<tr>";
					echo "<td>".$CNPJ."</td>";
					echo "<td>".$Nome."</td>";
					echo "<td>".$Ramo."</td>";
					echo "<td>".$Estado."</td>";
					echo "<td>".$Telefone."</td>";
					echo "</tr>";
				}
			}
		}
	}
	
	mysqli_close($conexao);
	echo "</table>";
?>
<p><a href="form-consulta.php">Voltar à página de pesquisa</a></p>
</center></div>
</body>