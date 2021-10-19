<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro Pessoa Jurídica</title>
		<link rel="stylesheet" type="text/css" href="NOMEDOARQUIVOCSS" media="screen">
	</head>

	<body>
		<fieldset>
			<header>
				<a href=""><img src="Imagens/Logo.jpeg" width="150"></a>
			</header>
		</fieldset>

			<div>
				<h1>Cadastro para pessoa jurídica</h1>
				<br>
				<h3>Preencha os espaços abaixo com as informações da clínica:</h3>
			</div>

		<form method="POST" action="FinalCadastroPJ.php" enctype="multipart/form-data">
			<fieldset>
				<div>
					<label for="nome"><strong>Nome da clínica</strong></label>
					<br>
					<input type="text" name="nome" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="cnpj"><strong>CNPJ</strong></label>
					<br>
					<input type="text" name="cnpj"
					title="Digite um CNPJ no formato: XX.XXX.XXX/XXXX-XX"
					placeholder="00.000.000/0000-00" required>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="cep"><strong>CEP</strong></label>
					<br>
					<input type="text" name="cep"
					title="Digite um CEP no formato: xxxxx-xxx"
					placeholder="00000-000" required>
				</div>

				<div>
					<label for="endereço"><strong>Endereço</strong></label>
					<br>
					<input type="text" name="endereço" required>
				</div>

				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="cel"><strong>Número para contato</strong></label>
					<br>
					<input type="text" name="cel" placeholder="(00) 00000-0000" required>
				</div>

				<div>
					<label for="horario">
						<strong>Horário de funcionamento</strong>
					</label>
					<br>
					<textarea 
					row="10" style="width: 20em" name="horario">
					</textarea>
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
					<label for="foto">
						<strong>Foto ou Logo da clínica (opcional)</strong>
					</label>
					<br>
					<img src="Imagens/avatarc.png" width="100">
					<br>
					<input type="file" name="foto">
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="desc">
						<strong>Coloque uma descrição da clínica</strong>
					</label>
					<br>
					<textarea 
					row="10" style="width: 20em" name="desc">
					</textarea>
				</div>
			</fieldset>

			<input type="submit" value="Cadastrar">
			
		</form>
	</body>
</html>