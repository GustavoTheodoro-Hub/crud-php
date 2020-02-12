<?php
require('conexao.php');
include('cabecalho.php');
?>

<hr>
	<h3>NOVO CLIENTE</h3>
<hr>
<center><form action="grava-cliente.php" method="post">
	<div>Nome: <input name="nome" type="text"></div>
	<div>E-mail: <input name="email" type="text"></div>
	<div>Telefone: <input name="telefone" type="text"></div>
	<div>Estado: <input name="estado" type="text"></div>
	<div>Cidade: <input name="cidade" type="text"></div>
	<div>Data de nascimento: <input name="data_nasc" type="text"></div>
	<div>Plano 1: <input name="plano1" type="text"></div>
	<div>Plano 2: <input name="plano2" type="text"></div>
	<div>Plano 3: <input name="plano3" type="text"></div>
	<div><input type="submit" value="Gravar"></div>
</center>
</form>
</body>
</html>