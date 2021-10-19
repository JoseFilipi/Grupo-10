<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Área privada_pf</title>

		<!-- CSS -->			<!-- VÁRIOS HREF'S -->
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
					<ul>			<!-- VÁRIOS HREF'S -->
						<li><a href="AlterarDadosPF.php">Alterar Meus Dados</a></li>
						<li><a href="PaginaClinicas.php">Consultar Clínicas</a></li>
						<li><a href="historicoAtendimentos.php">Histórico de Atendimentos</a></li>
						<li><button><a href="logar.php"><strong>Sair</strong></a></button></li>

					</ul>
				</div>
				</div>

				<div class="col-md-9">
					<div class="cards"> <!-- CÓD. BUSCAR NOME NO B.D. -->

						<strong>

							
						</strong></p>

						<p>Gerencie informações, procure clínicas e veja seus atendimentos anteriores aqui.</p>
						<div class="row">
							<div class="col-md-4">
							<div class="item">
								<a href="AlterarDadosPF.php"> <!-- HREF DADOS PESSOAIS -->
									<img src="Imagens/content.png">
									<div class="titulo">Alterar Meus Dados</div>
									<p class="descricao">Veja seus dados básicos, adicione ou altere seu nome, e-mail e telefone.</p>
								</a>
							</div>
							</div>
							<div class="col-md-4">
								<div class="item">
								<a href="PaginaClinicas.php"> <!-- HREF CLÍNICAS -->
									<img src="Imagens/endereco.png">
									<div class="titulo">Consultar Clínicas</div>
									<p class="descricao">Encontre clínicas e realize o seu atendimento.</p>
								</a>
							</div>
							</div>
							<div class="col-md-4">
							<div class="item">
								<a href="historicoAtendimentos.php"> <!-- HREF HISTÓRICO -->
									<img src="Imagens/cadeado.png">
									<div class="titulo">Histórico de Atendimentos</div>
									<p class="descricao">Veja seus atendimentos passados.</p>
								</a>
							</div>
							</div>
						</div>
					</div>
					<br>
					<fieldset>
						<h4>Dados pessoais</h4>
						<br>

						Foto perfil:
						<br>
						<img src="Imagens/avatar.png"> <!-- CÓD BUSCAR FOTO PERFIL -->
						<br>
						
						Nome completo:
						<br>
						<p> <!-- CÓD BUSCAR NOME COMPLETO --> </p>

						Data de nascimento:
						<br>
						<p> <!-- CÓD BUSCAR DATA DE NASCIMENTO --> </p>

						CPF:
						<br>
						<p> <!-- CÓD BUSCAR CPF --> </p>

						RG:
						<br>
						<p> <!-- CÓD BUSCAR RG --> </p>

						CEP:
						<br>
						<p> <!-- CÓD BUSCAR CEP --> </p>

						Número de celular:
						<br>
						<p> <!-- CÓD BUSCAR NÚMERO DE CELULAR --> </p>

						Email:
						<br>
						<p> <!-- CÓD BUSCAR EMAIL --> </p>

						Plano de saúde:
						<br>
						<p> <!-- CÓD BUSCAR PLANO DE SAÚDE --> </p>
						<br>
					</fieldset>
				</div>
			</div>
		</div>	
		</main>

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<noscript>Javascript de carregamento do Framework Bootstrap</noscript>
    	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	
	</body>
</html>