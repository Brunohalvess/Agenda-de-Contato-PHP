<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$telefone = filter_input(INPUT_POST, 'telefone');
$tipo = filter_input(INPUT_POST, 'tipo');
$email = filter_input(INPUT_POST, 'email');


$cadastro = "UPDATE contato SET nome='$nome',telefone='$telefone',tipo='$tipo', email='$email', data=NOW() WHERE id='$id'";
$consulta = mysqli_query($conn, $cadastro);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Contato editado com sucesso!</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color: #fff;'>ERRO ao editar contato.</p>";
	header("Location: index.php?id=$id");
}mysqli_close($conn);
?>
