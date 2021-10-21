<?php
 //Inclusão da sessão 
session_start();

include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Clínicas</title>
		
		 <!-- CSS -->
		 <link rel="stylesheet" href="reset.css">
		 <link rel="stylesheet" href="style.css">
		 <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		 <link rel="stylesheet" href="bootstrap.min.css">
		 <link rel="stylesheet" href="style-clinicas.css">
	</head>

	<body>
		<header class="topo">
			<div class="caixa">
				<h1><img src="Imagens/logo2.png"></h1>

				<nav>
					<ul>		<!-- VÁRIOS HREF'S -->
						<li><a href="AlterarDadosPF.php.">Alterar Meus Dados</a></li>
                        <li><a href="PaginaClinicas.php">Consultar Clínicas</a></li>
                        <li><a href="historicoAtendimentos.php">Histórico de Atendimentos</a></li>
                        <li><button><a href="logar.php"><strong>Sair</strong></a></button></li>

					</ul>
				</nav>
			</div>
		</header>
		<br>
		
        <h3>Clínicas</h3>

        <div>  <!-- ESPAÇO PARA APARIÇÃO DAS CLÍNICAS -->

			<form method="POST" action="">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome da clínica"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
		
		<?php
		//recebendo a string digitada e comparando com a coluna de nomes das clinicas do banco de dados, resgatando aquelas quue possuem a string em seu nome ou parte dele
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_clinica = "SELECT * FROM clinicas WHERE nome LIKE '%$nome%'";
			$resultado_clinica = mysqli_query($conn, $result_clinica);
			while($row_clinica = mysqli_fetch_assoc($resultado_clinica)){
				echo '<a href="FormularioAnamnese.php"><img src="' . "fotoperfil/" . $row_clinica['logo'].'"width="200"></a><br>';
				echo $row_clinica['nome'] . "<br>";
				echo $row_clinica['horariofunc'] . "<br>";
				echo $row_clinica['telefone'] . "<br> <br>";
			}
		}
		?>
        </div>
	</body>
</html>