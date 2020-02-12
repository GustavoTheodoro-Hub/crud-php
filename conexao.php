<?php
	$server = "localhost";
	$user = "root";
	$senha = "";
	$banco = "db_clientes";

	$conexao = mysqli_connect($server, $user, $senha, $banco) or die(mysqli_connect_error());

	$db = mysqli_select_db($conexao, $banco) or die(mysqli_error());







?>