<?php
require('conexao.php');
include('cabecalho.php');
?>
<hr>
	<h3 class="subtitle">ATUALIZAÇÃO DE CLIENTES</h3>
<hr>

<?php
	

	$id					= $_POST["id"];
	$nome			    = $_POST["nome"];
	$email				= $_POST["email"];
	$telefone			= $_POST["telefone"];
	$estado				= $_POST["estado"];
	$cidade				= $_POST["cidade"];
	$data_nasc			= $_POST["data_nasc"];
	$plano1				= $_POST["plano1"];
	$plano2				= $_POST["plano2"];
	$plano3				= $_POST["plano3"];

	$sql = "UPDATE clientes set nome='$nome',email='$email',telefone='$telefone',estado='$estado',cidade='$cidade',data_nasc='$data_nasc',plano1='$plano1',plano2='$plano2',plano3='$plano3' WHERE id = $id";
	$rs = mysqli_query($conexao,$sql) or die ("Não foi possível editar o cliente. Erro: " . mysqli_error($conexao));

?>

<h5>Cliente Atualizado com Sucesso!</h5>
<?php   
echo "ID: $id <br>";   
echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Telefone: $telefone <br>";
echo "Estado: $estado <br>";
echo "Cidade: $cidade <br>";
echo "Data de nascimento: $data_nasc <br>";
echo "Plano 1: $plano1 <br>";
echo "Plano 2: $plano2 <br>";
echo "Plano 3: $plano3 <br>";

header( "refresh:5;url=lista-cliente.php" );
?>