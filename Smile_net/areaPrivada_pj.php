<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Área Privada - Pessoa Jurídica</title>

		<!-- CSS -->		<!-- VÁRIOS HREF'S -->
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap.min.css">
		
	</head>
	<body>
		<header class="topo">
			<div class="caixa">
				<h1><img src="Imagens/logo2.png"></h1>

				<nav>
				</nav>
			
			</div>
		</header>

		<main class="areaPrivada">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="menu">
							<span>Minha área</span>
							<ul>					<!-- VÁRIOS HREF'S -->
								<li><a href="AlteraDadosBasicosPJ.php">Dados básicos</a></li>
								<li><a href="PacientesFichasDosPacientes.php">Pacientes: Fichas dos Pacientes</a></li>
								<li><a href="historicoFichasdeAnamnese.php">Fichas de Anamnese</a></li>
								<li><button><a href="logar.php"><strong>Sair</strong></a></button></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9">
						<div class="cards"> <!-- CÓD. BUSCAR NOME NO B.D. -->

							<p><strong>
								Seja bem vindo(a):   <?php echo $_SESSION['nome'] ?>
							</strong></p>

							<p>Gerencie informações, privacidade e segurança da sua conta.</p>
							<div class="row">
								<div class="col-md-4">
									<div class="item">
										<a href="AlteraDadosBasicosPJ.php"> <!-- HREF DADOS PESSOAIS -->
											<img src="Imagens/content.png">
											<div class="titulo">Altera Dados Básicos</div>
											<p class="descricao">Veja seus dados básicos, adicione ou altere seu nome, e-mail e telefone.</p>
										</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="item">
										<a href="PacientesFichasDosPacientes.php"> <!-- HREF CLÍNICAS -->
											<img src="Imagens/Pacientes_ Fichas_dos _Pacientes.png">
											<div class="titulo">Pacientes: Fichas dos Pacientes</div>
											<p class="descricao">Gerencie seus endereços.</p>
										</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="item">
										<a href="historicoFichasdeAnamnese.php"> <!-- HREF HISTÓRICO -->
											<img src="Imagens/fichas_anamnese.png">
											<div class="titulo">Fichas de Anamnese</div>
											<p class="descricao">Aumente a segurança da sua conta.</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</main>
		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - 2021</p>
		</footer>
	</body>
</html>