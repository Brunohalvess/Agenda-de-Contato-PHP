<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$telefone = filter_input(INPUT_POST, 'telefone');
$tipo = filter_input(INPUT_POST, 'tipo');
$email = filter_input(INPUT_POST, 'email');


$cadastro = "INSERT INTO contato (nome, telefone, tipo, email, data) VALUES ('$nome', '$telefone','$tipo', '$email', NOW())";
$resul_cad = mysqli_query($conn, $cadastro);


if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Contato salvo com sucesso!</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>ERRO ao salvar contato.</p>";
	header("Location: cadastrar.php");
}mysqli_close($conn);
?>