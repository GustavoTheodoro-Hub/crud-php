<?php
require('conexao.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Clientes</title>
<link rel="stylesheet" href="style/style.css">
</head>

<body>
	<?php include("cabecalho.php"); ?>

<hr>
	<h3>Clientes cadastrados</h3>
<div>

</div>

	<div>
	<table border="2" bgcolor="#FFFFFF">
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>E-MAIL</th>
			<th>TELEFONE</th>
			<th>ESTADO</th>
			<th>CIDADE</th>
			<th>DATA DE NASCIMENTO</th>
			<th>PLANO 1</th>
			<th>PLANO 2</th>
			<th>PLANO 3</th>
			<th>AÇÕES</th>
		</tr>
	<?php
	if (isset($_GET['txtBuscar'])) {
		$txtBuscar = $_GET['txtBuscar'];
	} else {
		$txtBuscar = "";
	}



	$sql 	= "SELECT id,nome,email,telefone,estado,cidade,data_nasc,plano1,plano2,plano3 FROM clientes WHERE nome LIKE '%{$txtBuscar}%' OR id LIKE '%{$txtBuscar}%' ";
	$rs		= mysqli_query($conexao,$sql) or die("Erro ao executar a consulta: " . mysqli_error($conexao));
	while($dados = mysqli_fetch_array($rs)){
		
		$id			= $dados["id"];
		$nome		= $dados["nome"];
		$email		= $dados["email"];
		$telefone	= $dados["telefone"];
		$estado		= $dados["estado"];
		$cidade		= $dados["cidade"];
		$data_nasc	= $dados["data_nasc"];
		$plano1		= $dados["plano1"];
		$plano2		= $dados["plano2"];
		$plano3		= $dados["plano3"];
		
		echo "<tr><td>{$id}</td> 
			  <td>{$nome}</td> 
			  <td>{$email}</td> 
			  <td>{$telefone}</td> 
			  <td>{$estado}</td> 
			  <td>{$cidade}</td>
			  <td>{$data_nasc}</td> 
			  <td>{$plano1}</td> 
			  <td>{$plano2}</td> 
			  <td>{$plano3}</td>
			  <td><a href='excluir-cliente.php?id=$id'>Excluir</a> - <a href='editar-cliente.php?id=$id'>Editar</a></td></tr>";
	}
	?>



	


	
	</table>
	
		
	</div>
<hr>
</body>
</html>