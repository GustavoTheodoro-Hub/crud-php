<?php
include("conexao.php");

$id = $_GET['id'];
if($estado != "São Paulo"){
    
$sql = "DELETE FROM clientes WHERE id=$id";
$rs = mysqli_query($conexao,$sql) or die("Erro ao excluir! Detalhes do erro: " . mysqli_error($conexao));;

}
else{
    echo"O cliente não pode ser excluido";
}
header('Location:lista-cliente.php');

?>