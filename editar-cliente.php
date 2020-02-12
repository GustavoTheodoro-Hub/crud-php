<!DOCTYPE html>
<html>
	<?php
		require('conexao.php');
		include('cabecalho.php');
	?>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style/style.css">
		<title>Clientes</title>
	</head>
	<body>
	<center><h1>Editar Cliente</h1></center>
		<?php
			$id = $_GET["id"];
			$sql = "SELECT * from clientes WHERE id = '{$id}'";
			$rs = mysqli_query($conexao,$sql);
			$dados = mysqli_fetch_array($rs) or die(mysqli_error($conexao));
			
			
			$nome = $dados["nome"];
			$email = $dados["email"];
			$telefone = $dados["telefone"];
			$estado = $dados["estado"];
			$cidade = $dados["cidade"];
			$data_nasc = $dados["data_nasc"];
			$plano1 = $dados["plano1"];
			$plano2 = $dados["plano2"];
			$plano3 = $dados["plano3"];

		?>
	<center><form action="atualizar-cliente.php" method="post">
		<input name="id" type="hidden" value="<?=$id?>">
		<div>Nome: 		<input name="nome" type="text" value="<?=$nome?>"></div>
		<div>E-mail: 	<input name="email" type="text" value="<?=$email?>"></div>
		<div>Telefone: 	<input name="telefone" type="text" value="<?=$telefone?>"></div>
		<div>Estado: 	<input name="estado" type="text" value="<?=$estado?>"></div>
		<div>Cidade: 	<input name="cidade" type="text" value="<?=$cidade?>"></div>
		<div>Data de nascimento: <input name="data_nasc" type="text" value="<?=$data_nasc?>"></div>
		<div>Plano 1: 	<input name="plano1" type="text" value="<?=$plano1?>"></div>
		<div>Plano 2: 	<input name="plano2" type="text" value="<?=$plano2?>"></div>
		<div>Plano 3: 	<input name="plano3" type="text" value="<?=$plano3?>"></div>
		<div><input type="submit" value="Gravar"></div>
		</center>
		</form>
	</body>
</html>
