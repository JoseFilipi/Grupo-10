<?php

 session_start();
 
 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Smile.net - Login</title>

		<!-- CSS -->
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style-padrao.css">
        <link rel="stylesheet" href="style-login.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

		<!-- JS -->
        <script> 
            function mostrar(id_mostrar, id_ocultar){
                document.getElementById(id_mostrar).style.display = 'inline-block';
                document.getElementById(id_ocultar).style.display = 'none';
            }
        </script>
		

	</head>
	<body>
		<header class="topo">
			<div class="caixa">
				<h1><img src="Imagens/logo2.png" class="logo-padrao"></h1>

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
            <!-- Essa parte deve ser separada em dois (um para PF e outro para PJ) e colocada em uma parte mais apropriada. -->
            <?php 
                if(isset($_SESSION['msg'])){ 
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
            ?>
            <section>
                <!-- Foram separados cada item da lista como sendo um bloco de conteúdo-->
                <ul class="tipo-login">
                    <!-- Esse bloco mostra as vantagens para pessoa Física, o botão 'minha conta' oculta esse bloco e mostra o bloco de login de Pessoa Física ao usuário -->
                    <li class="escolha-login" id="vantagem-pf">
                        <h2>Para Pacientes</h2>
                        <img src="imagens/imagem-paciente.png" class="img-login">
                        <ul class="vantagens">
                            <li>Facilidade para marcar consultas</li>
                            <li>Otimização do seu tempo</li>
                            <li>Comparação entre diversas clínicas</li>
                            <li>Criação de conta e navegação gratuita no programa</li>
                            <button class="botao-conta" onclick="mostrar('login-pf','vantagem-pf')">Minha conta</button>
                        </ul>
                    </li>
                    <!-- Esse bloco vem oculto a princípio, e é mostrado através do botão 'minha conta' do bloco de vantagens de PF. Mostra ao usuário o bloco de login para PF. O botão 'voltar' faz o caminho inverso do 'minha conta' -->
                    <li class="login" id="login-pf">
                        <button class="botao-voltar" onclick="mostrar('vantagem-pf', 'login-pf')"><em>&#8617</em> Voltar</button>
                        <h2>Logar como Paciente</h2>
                        <h3>Para entrar na sua conta, preencha as informações abaixo:</h3>
                        <form method="POST" action="valida.php">
                            <input type="number" name="cpf" placeholder="CPF">
                            <input type="password" name="senha" placeholder="Senha">
                            <a href="EsqueceuSenhaCPF.php" class="esqueceu-senha">Esqueceu a senha?</a>
                            <button class="botao-login" type="submit" name="btnLogin" value="btnLogin">Login</button>
                        </form>
                        <hr>
                        <p>Não tem uma conta?</p>
                        <a href="CadastroPF.php" class="links"><button class="botao-cadastrar">Cadastre-se aqui</button></a>
                    </li>
                    <!-- Esse bloco mostra as vantagens para pessoa Jurídica, o botão 'minha conta' oculta esse bloco e mostra o bloco de login de Pessoa Jurídica ao usuário -->
                    <li class="escolha-login" id="vantagem-pj">
                        <h2>Para Clínicas</h2>
                        <img src="imagens/imagem-clinica.jpg" class="img-login">
                        <ul class="vantagens">
                            <li>Automação de suas fichas de anamnese</li>
                            <li>Maior visibilidade para a sua clínica</li>
                            <li>Maior organização e praticidade aos seus pacientes</li>
                            <li>Uso totalmente gratuito dos recursos do site</li>
                            <button class="botao-conta" onclick="mostrar('login-pj','vantagem-pj')">Minha conta</button>
                        </ul>
                    </li>
                     <!-- Esse bloco vem oculto a princípio, e é mostrado através do botão 'minha conta' do bloco de vantagens de PJ. Mostra ao usuário o bloco de login para PJ. O botão 'voltar' faz o caminho inverso do 'minha conta' -->
                    <li class="login" id="login-pj">
                        <button class="botao-voltar" onclick="mostrar('vantagem-pj', 'login-pj')"><em>&#8617</em> Voltar</button>
                        <h2>Logar como Clínica</h2>
                        <h3>Para entrar na sua conta, preencha as informações abaixo:</h3>
                        <form method="POST" action="valida2.php">
                            <input type="number" name="cnpj" placeholder="CNPJ">
                            <input type="password" name="senha2" placeholder="Senha">
                            <a href="EsqueceuSenhaCNPJ.php" class="esqueceu-senha">Esqueceu a senha?</a>
                            <button class="botao-login" type="submit" name="btnLogin2" value="btnLogin2">Login</button>
                        </form>
                        <hr>
                        <p>Não tem uma conta?</p>
                        <a href="CadastroPJ.php" class="links"><button class="botao-cadastrar">Cadastre-se aqui</button></a>
                    </li>
                </ul>
            </section>
        </main>
        
		<footer>
			<img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
			<p class="copyright"> &copy; Copyright Smile Anamnese - 2021</p>
		</footer>
	</body>
</html>