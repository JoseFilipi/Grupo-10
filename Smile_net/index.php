<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Smile.net - Home</title>

		<!-- CSS -->
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style-padrao.css">
		<link rel="stylesheet" href="style-index.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap.min.css">

		<!-- JS -->
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    	<noscript>Javascript de carregamento do Framework Jquery</noscript>
		<script type="text/javascript" src="js/script.js"></script>
    	<noscript>Javascript de carregamento do jquery do projeto</noscript>
    	<script src="js/swiper-bundle.min.js"></script>
    	<noscript>Javascript de carregamento do jquery do projeto</noscript>
		<!-- JS -->

	</head>
	<body>
		<header class="topo">
			<div class="caixa">
				<h1><img src="Imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese"></h1>

				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="Equipe.php">Sobre Nós</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="logar.php">Login</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>
			<section class="principal">
				<img src="Imagens/fundo-home.jpg" class="fundo-home" alt="Fundo - dentista em sala médica">
				<div class="conteudo-principal">
					<h1 class="titulo-principal">Fichas de Anamnese a um <em>clique!</em></h1>
					<p>A <strong>Smile Anamnese</strong> traz para as pessoas e clínicas um suporte de pré-atendimento no quesito de melhoria no atendimento e ganho de tempo no atendimento ao cliente.</p>
					<p>Sendo um programa <em>gratuito</em> que visa facilitar o processo, tanto de marcação de uma consulta em uma clínica odontológica, quanto o questionário de anamnese que é necessário preencher antes de qualquer consulta.</p>			
					<p>Através do nosso site você poderá ter acesso a diversas clínicas que estão perto de você e também decidir qual a melhor, com base em: informações da clínica, tipos de serviços ofertados, avaliaçãoes de outros pacientes e muito mais!</p>
					<h2>Veja agora mesmo as vantagens de cada conta e obtenha as facilidades ofertadas pelo programa!</h2>
					<a href="logar.php"><button class="btn-confira">Confira</button></a>
				</div>
				<div class="img-ficha">
					<img src="Imagens/ficha-anamnese.png" alt="Mão usando ficha de anamnese">
				</div>
			</section>

			<section class="beneficios">
				<h1 class="titulo-secundario">Benefícios</h1>
				<div class="caixa">
					<div class="conteudo-beneficios">
						<ul class="lista-beneficios">
							<li class="itens">Cadastro e login no site;</li>
							<br>
							<li class="itens">Para cliente e Clínicas;</li>
							<br>
							<li class="itens">Ótimo serviço de pesquisar clínicas;</li>
							<br>
							<li class="itens">Preenchimento de Ficha de Anamnese;</li>
							<br>
							<li class="itens">Agilidade nas consultas;</li>
							<br>
							<li class="itens">Possibilidade de Pesquisar clínicas credenciadas;</li>
							<br>
							<li class="itens">O cliente em primeiro lugar;</li>
						</ul>
					</div>
					<div class="carrossel">
						<div id="slider">
							<img class="selected" src="Imagens/beneficios.jpg" alt="Dente em projeção futurista">
							<img src="Imagens/dentes-carrossel.jpg" alt="desenho de dentes e utensílios odontológicos">
							<img src="Imagens/dente neon-carrossel.jpg" alt="Dente e utensílios odontológicos em neon">
							<img src="Imagens/exame dente-carrossel.jpg" alt="Exame odontológico em paciente">
						</div>
						<script src="js/carrossel.js"></script>
					</div>
				</div>
				
			</section>
		</main>

		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - 2021</p>
		</footer>

		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<noscript>Javascript de carregamento do Framework Bootstrap</noscript>
    	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	</body>
</html>