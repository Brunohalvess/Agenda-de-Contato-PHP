	<DOCTYPE html>
		<html lang="pt-br">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width-device-width initial-scale=1.0">
			<title>.: Agenda de Contatos :</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<script type="text/javascript" src="js/script.js"></script>
		</head>

		<body clas="container">
			<main class="row">
				<div class="col-xl-4"></div>
				<div class="col-xl-8 col-sm-8">
					<h3 class="titulo">_Novo Contato</h3>
					<form name="f1" action="cadastrar_contato.php" method="post">
						<div class="col-md-6 mb-3">
							<label for="nome">Nome: </label>
							<input type="text" class="form-control" name="nome" required autofocus>
						</div>
						<div class="col-md-6 mb-3">
							<label for="telefone">Telefone: </label>
							<input type="num" class="form-control" name="telefone" required maxlength="15" onkeyup="handlePhone(event)">
						</div>
						<div class="col-md-6 mb-3">
							<label for="tipo">Selecione: </label>
							<select name="tipo" class="form-control selectpicker">
								<option value=" ">Escolha uma Opção:</option>
								<option class="text-center">WHATSAPP</option>
								<option class="text-center">CELULAR</option>
								<option class="text-center">FIXO</option>
								<option class="text-center">OUTROS </option>
							</select>
						</div>
						<div class="col-md-6 mb-3">
							<label for="email">E-mail: </label>
							<input type="mail" class="form-control" name="email" required maxlength="60">
						</div>
						<div></div>
						<div class="col-md-6 mb-3">
							<button class="btn btn-success" type="submit">Salvar Contato</button>
							<a class="btn btn-info" href="index.php">Voltar</a>
						</div>
					</form>
				</div>
			</main>
			<footer>
				<hr class="hr">
				<p class="text-center">© 2024 - Desenvolvido para fins de estudos da linguagem PHP</p>
			</footer>
		</body>

		</html>