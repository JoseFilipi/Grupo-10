<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Contato</title>

		<!-- CSS -->
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">
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
				<h1><img src="Imagens/logo2.png"></h1>

				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="Equipe.php">D.S-Equipe 10</a></li>
						<li><a href="Logar.php">Logar</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>
			<form class="contato">
				<label for="nomesobrenome">Nome completo</label>
				<input type="text" id="nomesobrenome" class="input-padrao" required>

				<label for="email">E-mail</label>
				<input type="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

				<label for="telefone">Número de telefone</label>
				<input type="tel" id="telefone" class="input-padrao" required placeholder="(XX) XXXXX-XXXX">

				<label for="mensagem">Mensagem</label>
				<textarea cols="70" rows="10" id="mensagem" class="input-padrao" required></textarea>

				<fieldset>
					<legend>Infome a melhor forma para entrarmos em contato?</legend>
					<label for="radio-email"><input type="radio" name="contato" value="email" id="radio-email"> E-mail</label>
					
					<label for="radio-telefone"><input type="radio" name="contato" value="telefone" id="radio-telefone"> por chamada Telefônica</label>
					
					<label for="radio-whatsapp"><input type="radio" name="contato" value="whatsapp" id="radio-whatsapp" checked> contato via WhatsApp</label>
				</fieldset>

				<fieldset>
					<legend>E qual o horário mais adequado para falar conosco?</legend>
					<select>
						<option>Manhã</option>
						<option>Tarde</option>
						<option>Noite</option>
					</select>
				</fieldset>

				<label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades por email?</label>

				<input type="submit" value="Enviar formulário" class="enviar">
			</form>

			<table class="horario">
				<tr>
					<td>Dia</td>
					<td>Horário</td>
				</tr>
				<tr>
					<td>Segunda</td>
					<td>8h ~ 20h</td>
				</tr>
				<tr>
					<td>Quarta</td>
					<td>8h ~ 20h</td>
				</tr>
				<tr>
					<td>Sexta</td>
					<td>8h ~ 20h</td>
				</tr>
			</table>
		</main>

		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - UnB/FGA - GAMA/DF- 2021</p>
		</footer>
	

	</body>
</html>