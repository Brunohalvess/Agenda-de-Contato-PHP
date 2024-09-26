	<?php
	session_start();
	include_once("conexao.php");

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$cadastro = "SELECT * FROM contato WHERE id = '$id'";
	$consulta = mysqli_query($conn, $cadastro);
	$row_cont = mysqli_fetch_assoc($consulta);
	?>
	<DOCTYPE html>
		<html lang="pt-br">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width-device-width initial-scale=1.0">
			<title>.: Agenda de Contatos :</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<script type="text/javascript" src="js/script.js"></script>
		</head>

		<body>
			<main clas="container">
				<div class="row">
					<div class="col-xl-4"></div>
					<div class="col-xl-8 col-sm-8">
						<h3 class="titulo">_Editar</h3>

						<?php
						if (isset($_SESSION['msg'])) {
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						} ?>

						<form name="f1" action="editar_contato.php" method="post">
							<input type="hidden" name="id" value="<?php echo $row_cont['id']; ?>">
							<div class="col-md-6 mb-3">
								<label for="nome">Nome: </label>
								<input type="text" class="form-control" name="nome" value="<?php echo $row_cont['nome']; ?>">
							</div>
							<div class="col-md-6 mb-3">
								<label for="telefone">Telefone: </label>
								<input type="tel" class="form-control" name="telefone" value="<?php echo $row_cont['telefone']; ?>" maxlength="15" onkeyup="handlePhone(event)">
							</div>
							<div class="col-md-6 mb-3">
								<label for="tipo">Selecione: </label>
								<select name="tipo" class="form-control selectpicker" value="<?php echo $row_cont['tipo']; ?>">
									<option value="">Escolha uma Opção</option>
									<option class="text-center">WHATSAPP</option>
									<option class="text-center">CELULAR</option>
									<option class="text-center">FIXO</option>
									<option class="text-center">OUTROS </option>
								</select>
							</div>
							<div class="col-md-6 mb-3">
								<label for="email">E-mail: </label>
								<input type="mail" class="form-control" name="email" value="<?php echo $row_cont['email']; ?>">
							</div>
							<div class="col-md-6 mb-3">
								<button class="btn btn-success" type="submit">Salvar Contato</button>
								<a class="btn btn-info" href="index.php">Voltar</a>
							</div>
						</form>
					</div>
				</div>
			</main>
			<hr class="hr">
			<footer>
				<p class="text-center">© 2024 - Desenvolvido para fins de estudos da linguagem PHP</p>
			</footer>
		</body>

		</html>