<?php
 //Inclusão da sessão 
    session_start();
    //salvando cpf em uma variável comum para buscar dados no banco através da SQL
    $cpf = $_SESSION['cpf'];
    
    //Inclusão da conexão com o banco de dados e coleta de todas as informações na mesma linha do cpf salvo na variável acima
    include_once("conexao.php");
    $result_usuario = "SELECT * FROM pacientes WHERE cpf='$cpf'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Área Privada - Pessoa Física</title>

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
							<img src="fotoperfil/<?php echo$_SESSION['foto']; ?>" width="100"> <!-- CÓDIGOS EM PHP RESPONSÁVEIS POR APRESENTAR OS DADOS PRESENTES NO BANCO -->
							<br>

							Nome completo:
							<br>
							<p> <?php echo $row_usuario['nome']; ?> </p>

							Data de nascimento:
							<br>
							<p> <?php echo $row_usuario['nascimento']; ?> </p>

							CPF:
							<br>
							<p> <?php echo $row_usuario['cpf']; ?> </p>

							RG:
							<br>
							<p> <?php echo $row_usuario['rg']; ?> </p>

							CEP:
							<br>
							<p> <?php echo $row_usuario['cep']; ?> </p>

							Número de celular:
							<br>
							<p> <?php echo $row_usuario['telefone']; ?> </p>

							Email:
							<br>
							<p> <?php echo $row_usuario['email']; ?> </p>

							Plano de saúde:
							<br>
							<p> <?php echo $row_usuario['plano']." carteirinha n°".$row_usuario['numplano'];?> </p>
							<br>
						</fieldset>
					</div>
				</div>
			</div>	
		</main>
	</body>
</html>