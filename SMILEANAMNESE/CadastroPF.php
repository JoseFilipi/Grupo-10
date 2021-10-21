<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro Pessoa Física</title>
		<link rel="stylesheet" type="text/css" href="NOMEDOARQUIVOCSS" media="screen">
	</head>

	<body>
		<fieldset>
			<header>
				<a href=""><img src="Imagens/Logo.jpeg" width="150"></a>
			</header>
		</fieldset>

			<div>
				<h1>Cadastro para pessoa física</h1>
				<br>
				<h3>Preencha os espaços abaixo com suas informações pessoais:</h3>
			</div>

		<form method="POST" action="FinalCadastroPF.php" enctype="multipart/form-data">
			<fieldset>
				<div>
					<label for="nome"><strong>Nome completo</strong></label>
					<br>
					<input type="text" name="nome" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="nascimento"><strong>Data de nascimento</strong></label>
					<br>
					<input type="date" name="nascimento" placeholder="00/00/0000" required>
				</div>

				</div>

				<div>
					<label for="rg"><strong>RG</strong></label>
					<br>
					<input type="text" name="rg" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="cpf"><strong>CPF</strong></label>
					<br>
					<input type="text" name="cpf"
					title="Digite um CPF no formato: xxx.xxx.xxx-xx"
					placeholder="000.000.000-00" required>
				</div>

				<div>
					<label for="cep"><strong>CEP</strong></label>
					<br>
					<input type="text" name="cep"
					title="Digite um CEP no formato: xxxxx-xxx"
					placeholder="00000-000" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="cel"><strong>Número de celular</strong></label>
					<br>
					<input type="text" name="cel" placeholder="(00) 00000-0000" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="email"><strong>E-mail</strong></label>
					<br>
					<input type="email" name="email" required>
				</div>

				<div>
					<label for="emailconf"><strong>Confirme o e-mail</strong></label>
					<br>
					<input type="email" name="emailconf" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="senha"><strong>Crie uma senha</strong></label>
					<br>
					<input type="password" name="senha" required>
				</div>

				<div>
					<label for="senhaconf"><strong>Confirme sua senha</strong></label>
					<br>
					<input type="password" name="senhaconf" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="plano">
						<strong>Possui algum plano de saúde?</strong>
					</label>
					<br>
					<label>
						<input type="radio" name="plano" required>Sim
					</label>
					<label>
						<input type="radio" name="plano" required>Não
					</label>
					<br>
					<input type="text" name="textoplano" placeholder="Se sim, qual ?">
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="carteirinha">
						<strong>Número da carteirinha do plano de saúde</strong>
					</label>
					<br>
					<input type="text" name="carteirinha">
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="foto">
						<strong>Foto para perfil (opcional)</strong>
					</label>
					<br>
					<img src="Imagens/avatar.png" width="100">
					<br>
					<input type="file" name="foto">
				</div>
			</fieldset>
			<br>

			<input type="submit" value="Cadastrar">
				
		</form>
	</body>
</html>