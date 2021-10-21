<?php
  //Inclusão da sessão 
 session_start();
 
 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Smile Anamnese</title>

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


<!-- login------------------------------------------------>

<!DOCTYPE html>

<html>

    <head>
        <title>Página de Login</title>
        <meta charset="utf-8">
        <html lang="pt-br"></html>
        <link rel="stylesheet" type="text/css" href="login-css.css">
    </head>

    <body>
        
        <!--<div class="cabeçalho">
            <img src="imagens/Logo.jpeg" width="200px">
        </div>-->

        <br><br>

        <?php 
           //Caso haja erros relacionados ao login a mensagem irá ser ativada
          if(isset($_SESSION['msg'])){ 
           echo $_SESSION['msg'];
           unset($_SESSION['msg']);
           }
          ?>
          <?php 

          if(isset($_SESSION['msg2'])){ 
           echo $_SESSION['msg2'];
           unset($_SESSION['msg2']);
           }
          ?>

        <div class="conteúdo">
            <h4>Entrar como paciente - CPF</h4>
            <form method="POST" action="valida.php">

                CPF:<br>
                <input type="text" name="cpf"
                placeholder="xxx.xxx.xxx.xx">
                <br><br>

                Senha:<br>
                <input type="password" name="senha">
                <br><br>

                <input type="submit" name="btnLogin" value="Acessar">
                <br><br>

                <a href="EsqueceuSenhaCPF.php" class="links">Esqueceu a senha?</a>
                <br><br>
                Crie uma conta <a href="CadastroPF.php" class="links">aqui</a>
                <br>     
                
            </form>
        </div>

        <br><br>

        <div class="conteúdo">

            <h4>Entrar como clínica - CNPJ</h4>
            <form method="POST" action="valida2.php">

                CNPJ:<br>
                <input type="text" name="cnpj"
                placeholder="xx.xxx.xxx/xxxx-xx">
                <br><br>

                Senha:<br>
                <input type="password" name="senha2">
                <br><br>

                <input type="submit" name="btnLogin2" value="Acessar">
                <br><br>

                <a href="EsqueceuSenhaCNPJ.php" class="links">Esqueceu a senha?</a>
                <br><br>
                Crie uma conta para sua clínica <a href="CadastroPJ.php" class="links">aqui</a>
                <br>
            </form>

        </div>
        <br><br>

        <div class="título-conteúdo2">
            <h3>Vantagens de cada conta</h3>
        </div>
        <br><br>

        <div class="rodapé">
            <h4>Conta paciente - CPF</h4>
            <ul type="disc">
                <li>Facilidade para marcar consultas</li>
                <li>Otimização do tempo</li>
                <li>Comparação entre diversas clínicas</li>
                <li>Craição de conta e navegação gratuita no programa</li>
            </ul>

            <h4>Conta clínica - CNPJ</h4>
            <ul type="disc">
                <li>Maior visibilidade para a clínica</li>
                <li>Uso totalmente gratuito dos recursos do site</li>
                <li>Maior organização</li>
            </ul>

        </div>
  				
			</section>
		</main>

		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - UnB/FGA - GAMA/DF- 2021</p>
		</footer>

		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<noscript>Javascript de carregamento do Framework Bootstrap</noscript>
    	<script type="text/javascript" src="js/jquery.easing.min.js"></script>


	</body>
</html>