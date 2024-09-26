	<?php
	session_start();
	include_once("conexao.php");
	?>
	<DOCTYPE html>
		<html lang="pt-br">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width-device-width initial-scale=1.0">
			<title>.: Agenda de Contatos :</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<style type="text/css">
				a {
					color: #fff;
					text-decoration: none;

				}

				a:hover {
					color: #fff;
					text-decoration: none;
				}

				footer,
				h2,
				th {
					color: #10f404;
				}

				hr {
					border-color: #10f404;
					margin: 2% 10% 2% 10%;
				}

				th {
					background: #4f4f4f;
				}
			</style>
		</head>

		<body clas="container" style="color:#fff; background:#363636;">
			<main class="row">
				<div class="col-xl-1"></div>
				<div class="col-xl-10 col-sm-12">
					<h2>_Agenda de contatos</h2>
					
					<aside class="row">
						<table class="table table-striped table-hover table-responsive-sm text-center">
							<thead class="thead">
								<tr>
									<th scope="col" class="text-center">NOME </th>
									<th scope="col" class="text-center">TELEFONE</th>
									<th scope="col" class="text-center">TIPO</th>
									<th scope="col" class="text-center">E-MAIL</th>
									<th scope="col" class="text-center">DATA CRIAÇÃO</th>
									<th scope="col" class="text-center">AÇÃO</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
									$cadastro = "SELECT * FROM contato";
									$consulta = mysqli_query($conn, $cadastro);
									while ($row_cont = mysqli_fetch_assoc($consulta)) {

										$id = $row_cont['id'];
										$nome = $row_cont['nome'];
										$telefone = $row_cont['telefone'];
										$tipo = $row_cont['tipo'];
										$email = $row_cont['email'];
										$data = $row_cont['data'];
										?>
										<td><?php echo $row_cont['nome']; ?></td>
										<td><?php echo $row_cont['telefone']; ?></td>
										<td><?php echo $row_cont['tipo']; ?></td>
										<td><?php echo $row_cont['email']; ?></td>
										<td><?php echo date("d/m/Y", strtotime($row_cont['data'])); ?></td>
										<td><span class="btn btn-info"><?php echo "<a href='editar.php?id=" . $row_cont['id'] . "'>Editar</a>"; ?></span>
											<span class="btn btn-danger"><?php echo "<a href='excluir_contato.php?id=" . $row_cont['id'] . "'>Apagar</a>"; ?></span>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</aside>
					<div>
						<a class="btn btn-success" href="cadastrar.php">Novo Contato</a>
						<a class="btn btn-info" href="index.php">Atualizar</a>
					</div>
					<section class="mensagem">
						<p>
							<?php
							if (isset($_SESSION['msg'])) {
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							} ?>
						</p>
					</section>
				</div>
				<div class="col-xl-1"></div>
			</main>
			<hr>
			<footer>
				<p class="text-center">© 2024 - Desenvolvido para fins de estudos da linguagem PHP</p>
			</footer>
		</body>

		</html>