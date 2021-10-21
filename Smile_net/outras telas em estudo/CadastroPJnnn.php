<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Cadastro Pessoa Jurídica</title>

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
						<li><a href="logar.php">Logar</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>

			<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p><a href="CadastroPF.php">Pessoa física</a></p>
				<p><a href="CadastroPJ.php">Pessoa jurídica</a></p>
      </div>
      
    </div>
  </div>	
</div>
			<div class="caixa-formulario">
				<section class="cabecalho-formulario">
					<h1>Cadastro Pessoa Jurídica</h1>
					<h2>Preencha os espaços abaixo com as informações da clínica:</h2>
				</section>

				<form class="formulario-cadastro">
					<label for="nome">Nome da clínica</label>
					<input type="text" class="input-padrao" id="nome" required>
					
					<label for="cnpj">CNPJ</label>
					<input type="number" class="input-padrao" id="cnpj" title="Digite um CNPJ no formato: XX.XXX.XXX/XXXX-XX" placeholder="00.000.000/0000-00" required>
					
					<label for="cep">CEP</label>
					<input type="number" class="input-padrao" id="cep" title="Digite um CEP no formato: xxxxx-xxx" placeholder="00000-000" required>

					<label for="endereço">Endereço</label>
					<input type="text" class="input-padrao" id="endereço" required>
				
					<label for="cel">Número para contato</label>
					<input type="tel" class="input-padrao" id="cel" placeholder="(00) 00000-0000" required>
						
					<label for="horario">Horário de funcionamento</label>
					<textarea cols="70" rows="10" class="input-padrao" id="horario"></textarea>

					<label for="email">E-mail</label>
					<input type="email" class="input-padrao" id="email" placeholder="exemplo@exemplo.com" required>
					
					<label for="emailconf">Confirme o e-mail</label>
					<input type="email" class="input-padrao" id="emailconf" placeholder="exemplo@exemplo.com" required>
					
					<label for="senha">Crie uma senha</label>
					<input type="password" class="input-padrao" id="senha" required>

					<label for="senhaconf">Confirme sua senha</label>
					<input type="password" class="input-padrao" id="senhaconf" required>

					<fieldset>
						<legend>Foto ou Logo da clínica (opcional)</legend>
						<img src="Imagens/avatar.png" width="100" alt="Imagem de exemplo de avatar">
						<input class="input-padrao" type="file" name="foto">
					</fieldset>

					<label for="descricao-clinica">Coloque uma descrição para a clínica</label>
					<textarea cols="70" rows="10" class="input-padrao" id="descricao-clinica"></textarea>
						
					<button class="botao-enviar" type="submit">
						<a href="FinalCadastroPJ.php">Enviar</a>
					</button>
				</form>
			</div>
		</main>

		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - UnB/FGA - GAMA/DF- 2021</p>
		</footer>
	</body>
</html>