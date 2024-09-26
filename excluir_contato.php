<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$cadastro = "DELETE FROM contato WHERE id='$id'";
	$consulta = mysqli_query($conn, $cadastro);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Contato Apagado com sucesso!</p>";
		header("Location: index.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro ao apagar contato</p>";
		header("Location: index.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Selecione um contato para apagar</p>";
	header("Location: index.php");
}mysql_close();
 ?>