<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro Pessoa Jurídica</title>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="style-cadastro.css" media="screen">
	</head>

	<body>
		<header>
			<div class="caixa">
				<!-- A imagem do cabeçalho está com o link para a Home, que deverá ser colocado o link correto depois -->
				<a href="home.html"><img src="Imagens/logo2.png" class="logo-padrao" alt="Logo Smile Anamnese"></a>

				<nav>
					<ul>
					<!-- Aqui tem que colocar os links corretos posteriormente -->
						<li><a href="home.html">Home</a></li>
						<li><a href="Contato.html">Contato</a></li>
						<li><a href="login.html">Login</a></li>
					</ul>
				</nav>	
			</div>
		</header>
		<main>
			<div class="caixa-formulario">
				<section class="cabecalho-formulario">
					<h1>Cadastro Pessoa Jurídica</h1>
					<h2>Preencha os espaços abaixo com as informações da clínica:</h2>
				</section>

				<form class="formulario-cadastro" method="POST" action="FinalCadastroPJ.php" enctype="multipart/form-data">
					<label for="nome">Nome da clínica</label>
					<input type="text" class="input-padrao" id="nome" name="nome" required>
					
					<label for="cnpj">CNPJ</label>
					<input type="number" class="input-padrao" id="cnpj" name="cnpj" title="Digite um CNPJ no formato: XX.XXX.XXX/XXXX-XX" placeholder="00.000.000/0000-00" required>
					
					<label for="cep">CEP</label>
					<input type="number" class="input-padrao" id="cep" name="cep" title="Digite um CEP no formato: xxxxx-xxx" placeholder="00000-000" required>

					<label for="endereço">Endereço</label>
					<input type="text" class="input-padrao" id="endereço" name="endereço" required>
				
					<label for="cel">Número para contato</label>
					<input type="tel" class="input-padrao" id="cel" name="cel" placeholder="(00) 00000-0000" required>
						
					<label for="horario">Horário de funcionamento</label>
					<textarea cols="70" rows="10" class="input-padrao" id="horario" name="horario"></textarea>

					<label for="email">E-mail</label>
					<input type="email" class="input-padrao" id="email" name="email" placeholder="exemplo@exemplo.com" required>
					
					<label for="emailconf">Confirme o e-mail</label>
					<input type="email" class="input-padrao" id="emailconf" name="emailconf" placeholder="exemplo@exemplo.com" required>
					
					<label for="senha">Crie uma senha</label>
					<input type="password" class="input-padrao" id="senha" name="senha" required>

					<label for="senhaconf">Confirme sua senha</label>
					<input type="password" class="input-padrao" id="senhaconf" name="senhaconf" required>


					<fieldset>
						<legend>Foto ou Logo da clínica (opcional)</legend>
						<img src="Imagens/avatar.png" width="100" alt="Imagem de exemplo de avatar">
						<input class="input-padrao" type="file" name="foto">
					</fieldset>

					<label for="descricao-clinica">Coloque uma descrição para a clínica</label>

					<textarea cols="70" rows="10" class="input-padrao" id="descricao-clinica" name="desc"></textarea>
						
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