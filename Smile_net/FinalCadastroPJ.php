<?php
    
   include_once("conexao.php");

   $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
   $cnpj = filter_input(INPUT_POST,'cnpj', FILTER_SANITIZE_STRING);
   $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
   $end = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);
   $cel = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_STRING);
   $horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
   $foto = $_FILES['foto']['name'];
   $descric = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);

   //criptografia da senha:
   $senha2 = password_hash($senha, PASSWORD_DEFAULT);
  
  // lógica de programação para salvar a imagem
  
  //Pasta onde o arquivo vai ser salvo
  $_UP['pasta'] = 'fotoperfil/';
  
  //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
  $nome_final = time().'.jpg';
  
  //Movendo a foto
  move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta']. $nome_final);
	
			


   //guardando o restante das variáveis do banco de dados:
   $result_usuario = "INSERT INTO clinicas (nome, cnpj, cep, endereco, telefone, horariofunc, email, senha, logo, descricao) VALUES ('$nome', '$cnpj', '$cep', '$end', '$cel', '$horario', '$email', '$senha2', '$nome_final', '$descric')";

   //condicional para averiguar a presença de erros durante a conexão dos arquivos
   if (mysqli_query($conn, $result_usuario)){ 
   	echo " ";
    } 
    else {
    	echo "Error: " . $result_usuario . "<br>" . mysqli_error($conn);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro concluído</title>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="style-conclusao-cadastro.css" media="screen">
	</head>

	<body>
		<header>
			<img src="Imagens/logo2.png" class="logo-padrao" alt="Logo Smile Anamnese">
		</header>

		<main>
			<div class="caixa">
				<section class="texto-principal">
					<h1>Seu cadastro foi realizado com sucesso!</h1>
					<h2>Nós, da equipe <strong>Smile Anamnese</strong> estamos muito felizes em ter sua clínica como uma parceira do nosso sistema. Aproveite todos os benefícios que ofertamos!</h2>
				</section>

				<section class="aviso-login">
					<h3>⚠ Atenção! ⚠</h3>
					<p>Não se esqueça,<br>seu usuário para login é o número do <em>CNPJ da clínica</em>.</p>
				</section>
				
				<section class="caixa-botoes">
					<button class="botao-esquerdo">
						<a href="areaPrivada_pj.php">Página principal</a>
					</button>

					<button class="botao-direito">
										<!--- Falta colocar o link referente a esse botão, que é a página que a clínica escolhe qual ficha de anamnese ela vai usar --->>
						<a href="">Fichas de Anamnese</a>
					</button>
				</section>
			</div>
		</main>
		
		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - 2021</p>
		</footer>
	</body>
</html>