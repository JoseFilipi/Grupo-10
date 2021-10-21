<?php
    //Inclusão da sessão 
    session_start();
    //salvando cpf em uma variável comum para buscar dados no banco através da SQL
    $cpf = $_SESSION['cpf'];
    
    //Inclusão da conexão com o banco de dados e coleta de todas as informações na mesma linha do cpf salvo na variável acima
    include_once("conexao.php");
    $result_usuario = "SELECT * FROM cadsa WHERE cpf='$cpf'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title>Dados pessoais</title>
        <meta charset="utf-8">

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
					<ul>		<!-- VÁRIOS HREF'S -->
                        <li><a href="AlterarDadosPF.php.">Alterar Meus Dados</a></li>
                        <li><a href="PaginaClinicas.php">Consultar Clínicas</a></li>
                        <li><a href="historicoAtendimentos.php">Histórico de Atendimentos</a></li>
                        <li><button><a href="logar.php"><strong>Sair</strong></a></button></li>
                    </ul>
                        
					</ul>
				</nav>
			</div>
		</header>

        <main>
            <br>
            <h3>Área de alteração de dados</h3>
            <hr>
            <p>Caso suas informações estejam desatualizadas ou necessitem de trocas devido algum erro de digitação, você pode troca-las preenchendo os dados abaixo novamente; só não se esqueça de colocar os dados corretos pois seu CPF está vinculado a alguns dados seus, caso esses dados não correspondam, problemas futuros poderão ser gerados!</p>
            <hr>

            Dados relativos ao CPF:

            <form method="POST" action="alteracao.php" enctype="multipart/form-data"> 
                Nome completo:<br>
                <input type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>">
                <br><br>

                RG:<br>
                <input type="text" name="rg" value="<?php echo $row_usuario['rg']; ?>">
                <br><br>

                CEP:<br>
                <input type="text" name="cep" placeholder="00000-000" value="<?php echo $row_usuario['cep']; ?>">
                <br><br>

                Número de celular:<br>
                <input type="text" name="cel" placeholder="(00) 00000-0000" value="<?php echo $row_usuario['telefone']; ?>">
                <br><br>

                E-mail:<br>
                <input type="email" name="email" value="<?php echo $row_usuario['email']; ?>"><br><br>
                <strong>Não se esqueça de ter certeza que você tem acesso a este e-mail, pois caso você perca sua senha, será a partir dele que o seu acesso será reconcedido!</strong>
                <br><br>

                Confirme o e-mail:<br>
                <input type="email" name="emailconf">
                <br><br>

                <strong>Para alterar sua senha, será necessário entrar na área de login e ir em "esqueceu a senha"; assim será enviado um e-mail para você, esse processo é devido uma maior segurança.</strong>
                <br><br>

                Possui ulgum plano de saúde?<br>
                <input type="radio" name="plano" value="sim">Sim
                <input type="radio" name="plano" value="não">Não
                <br><br>
                <input type="text" name="textoplano" value="<?php echo $row_usuario['plano']; ?>">
                <br><br>
                <input type="text" name="carteirinha" value="<?php echo $row_usuario['numplano']; ?>">
                <br><br>

                Altere afoto de perfil(opcional)<br><br>
                <img src="fotoperfil/<?php echo $row_usuario['foto']; ?>" width="200">
                <br><br>
                <input type="file" name="foto">
                <br><br>

                Confirme sua senha para validar a alteração:<br>
                <input type="password" name="senha">
                <br>

                <input type="submit" name="alterarbtn" value="Alterar dados">

            </form>

        </main>

        <footer>
            <img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
            <p class="copyright"> &copy; Copyright Smile Anamnese - UnB/FGA - GAMA/DF- 2021</p>
        </footer>
    </body>

</html>