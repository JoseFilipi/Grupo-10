<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Smile.net - Contato</title>

		<!-- CSS -->
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style-padrao.css">
		<link rel="stylesheet" href="style-contato.css">

		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap.min.css">

		<!-- JS -->
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    	<noscript>Javascript de carregamento do Framework Jquery</noscript>
		<script type="text/javascript" src="js/script.js"></script>
    	<noscript>Javascript de carregamento do jquery do projeto</noscript>
    	<script src="js/swiper-bundle.min.js"></script>
    	<noscript>Javascript de carregamento do jquery do projeto</noscript>
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
<!-------------------------------------------------contato---------------------------------------------------->

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

<!-------------------------------------------------contato---------------------------------------------------->														<!--processa.php--->
		<main>
			<form class="contato" method="POST" action="processa.php">
				
				<label> Nome completo</label>
				<input type="text" name="nomesobrenome" placeholder="digite nome e sobrenome" class="input-padrao" required>

				<label>E-mail</label>
				<input type="email" name="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

				<label >Número de telefone</label>
				<input type="telefone" name="telefone" id="telefone" class="input-padrao" required placeholder="(XX) XXXXX-XXXX">

				<label >Mensagem</label>
				<textarea cols="70" rows="3" name="mensagem" id="mensagem" class="input-padrao" required></textarea>



				<label><legend>Infome a melhor forma para entrarmos em contato?</legend></label>
				1 - WhatsApp;<br>
				2 - Chamada Telefônica;<br>
				3 - E-mail.<br>
				<textarea cols="70" rows="1" name="forma" id="mensagem" class="input-padrao" required></textarea>
				


				<label><legend>E qual o horário mais adequado para falar conosco?</legend></label>
				1 - Manhã;<br>
				2 - Tarde;<br>
				3 - Noite.<br>
				<input type="text" name="horario" placeholder="digite 1, 2 ou todas as 03 opções" class="input-padrao" required>

			

				<label><legend>Gostaria de receber nossas novidades por email?</legend></label>
				1 - Sim;<br>
				2 - Não;<br>
				<input type="text" name="receber" placeholder="digite 1 ou 2 " class="input-padrao" required>


				<!--<label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades por email?</label>-->


				<input type="submit" name="Cadastrar" value="Cadastrar" class="enviar">
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
			<p class="copyright"> &copy; Copyright Smile Anamnese - 2021</p>
		</footer>
	</body>
</html>