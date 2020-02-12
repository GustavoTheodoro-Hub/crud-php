<?php
require('conexao.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Planos</title>
<link rel="stylesheet" href="style/styles.css" >
</head>

<body>
	<?php include("cabecalho.php"); ?>

<hr>
	<h3>Planos</h3>
<div>

</div>

	<div>
	<table border="2" bgcolor="#FFFFFF">
		<tr>
			<th>PLANOS</th>
			<th>PREÇO (R$)</th>
			
		</tr>
	<?php
	if (isset($_GET['txtBuscar'])) {
		$txtBuscar = $_GET['txtBuscar'];
	} else {
		$txtBuscar = "";
	}



	$sql 	= "SELECT plano,preco FROM planos WHERE plano LIKE '%{$txtBuscar}%'";
	$rs		= mysqli_query($conexao,$sql) or die("Erro ao executar a consulta: " . mysqli_error($conexao));
	while($dados = mysqli_fetch_array($rs)){
		
		$plano			= $dados["plano"];
		$preco		= $dados["preco"];
		
		$preco = number_format($preco,2, ',', '.');
		
		echo "<tr><td>{$plano}</td> 
			  <td>{$preco}</td> </tr>";
	}
	?>



	


	
	</table>
	
		
	</div>
<hr>
</body>
</html>