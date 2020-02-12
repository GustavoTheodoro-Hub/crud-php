<?php
	include('conexao.php');
	$nome 		= $_POST['nome'];
	$email 		= $_POST['email'];
	$telefone 	= $_POST['telefone'];
	$estado 	= $_POST['estado'];
	$cidade 	= $_POST['cidade'];
	$data_nasc 	= $_POST['data_nasc'];
	$plano1 	= $_POST['plano1'];
	$plano2 	= $_POST['plano2'];
	$plano3 	= $_POST['plano3'];


	$sql = "INSERT INTO clientes (nome,email,telefone,estado,cidade,data_nasc,plano1,plano2,plano3) 
	VALUES('{$nome}','{$email}','{$telefone}','{$estado}','{$cidade}','{$data_nasc}','{$plano1}','{$plano2}','{$plano3}')";
	$rs = mysqli_query($conexao,$sql);
	header('Location:lista-cliente.php');
