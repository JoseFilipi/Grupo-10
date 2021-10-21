<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro - Pessoa Física</title>

		<!-- CSS -->
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style-padrao.css">
		<link rel="stylesheet" href="style-cadastro.css">
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

		<main>
			<div class="caixa-formulario">
				<section class="cabecalho-formulario">
					<h1>Cadastro Pessoa Física</h1>
					<h2>Informe seus dados pessoais abaixo:</h2>
				</section>

				<form class="formulario-cadastro" method="POST" action="FinalCadastroPF.php" enctype="multipart/form-data"> 
					<label for="nome">Nome completo</label>
					<input type="text" class="input-padrao" id="nome" name="nome" required>

					<label for="data-nascimento">Data de nascimento</label>
					<input type="date" class="input-padrao" id="data-nascimento" name="nascimento" placeholder="00/00/0000" required>
					
					<label for="rg">RG</label>
					<input type="number" class="input-padrao" id="rg" name="rg" required>
			
					<label for="cpf">CPF</label>
					<input type="number" class="input-padrao" id="cpf" name="cpf" title="Digite um CPF no formato: xxx.xxx.xxx-xx" placeholder="000.000.000-00" required>
					
					<label for="cep">CEP</label>
					<input type="text" class="input-padrao" id="cep" name="cep" title="Digite um CEP no formato: xxxxx-xxx" placeholder="00000-000" required>
							
					<label for="cel">Número de celular</label>
					<input type="tel" class="input-padrao" id="cel" name="cel" placeholder="(00)00000-0000" required>
							
					<label for="email">E-mail</label>
					<input type="email" class="input-padrao" id="email" name="email" placeholder="exemplo@exemplo.com" required>
					
					<label for="emailconf">Confirme o e-mail</label>
					<input type="email" class="input-padrao" id="emailconf" name="emailconf" placeholder="exemplo@exemplo.com" required>
					
					<label for="senha">Crie uma senha</label>
					<input type="password" class="input-padrao" id="senha" name="senha" required>

					<label for="senhaconf">Confirme sua senha</label>
					<input type="password" class="input-padrao" id="senhaconf" name="senhaconf" required>
		
					<fieldset class="plano-saude">
						<legend>Possui algum plano de saúde?</legend>
						<label for="sim-plano-saude"><input type="radio" name="plano" id="sim-plano-saude" required>Sim</label>
						<label for="nao-plano-saude"><input type="radio" name="plano" id="nao-plano-saude" required>Não</label>

						<input type="text" class="input-padrao" name="textoplano" placeholder="Se sim, qual?">
					</fieldset>
	
					<label for="carteirinha">Número da carteirinha do plano de saúde</label>
					<input type="number" class="input-padrao" id="carteirinha" name="carteirinha">

					<fieldset>
						<legend>Foto para perfil (opcional)</legend>
						<img src="Imagens/avatar.png" width="100" alt="Imagem de exemplo de avatar">
						<input type="file" name="foto">
					</fieldset>


					<button class="botao-enviar" type="submit">Enviar</button>

				</form>
			</div>
		</main>			
		

		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - 2021</p>
		</footer>
	</body>
</html>