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

            <form>
                Nome completo:<br>
                <input type="text" name="nome">
                <br><br>

                Data de nascimento:<br>
                <input type="text" name="nascimento" placeholder="00/00/0000">
                <br><br>

                Data de nascimento:<br>
                <input type="text" name="nascimento" placeholder="00/00/0000">
                <br><br>

                RG:<br>
                <input type="text" name="rg">
                <br><br>

                CEP:<br>
                <input type="text" name="cep" placeholder="00000-000">
                <br><br>

                Número de celular:<br>
                <input type="text" name="cel" placeholder="(00) 00000-0000">
                <br><br>

                E-mail:<br>
                <input type="text" name="email"><br><br>
                <strong>Não se esqueça de ter certeza que você tem acesso a este e-mail, pois caso você perca sua senha, será a partir dele que o seu acesso será reconcedido!</strong>
                <br><br>

                Confirme o e-mail:<br>
                <input type="text" name="emailconf">
                <br><br>

                <strong>Para alterar sua senha, será necessário entrar na área de login e ir em "esqueceu a senha"; assim será enviado um e-mail para você, esse processo é devido uma maior segurança.</strong>
                <br><br>

                Possui ulgum plano de saúde?<br>
                <input type="radio" name="plano" value="sim">Sim
                <input type="radio" name="plano" value="não">Não
                <br><br>
                <input type="text" name="textoplano" placeholder="Se sim, qual?">
                <br><br>
                <input type="text" name="carteirinha" placeholder="Número da carteirinha">
                <br><br>

                Adicione uma nova foto ao perfil, ou então mande o mesmo arquivo de antes (opcional)<br><br>
                <img src="imagens/avatar.png" width="100">
                <br><br>
                <input type="file" name="foto">
            </form>
                
            <button type="submit">
                <a href="">Concluir atualização de dados</a>
            </button>
            <br><br>

        </main>

        <footer>
            <img src="imagens/logo2.png" class="logo-padrao" alt="logo Smile Anamnese">
            <p class="copyright"> &copy; Copyright Smile Anamnese - UnB/FGA - GAMA/DF- 2021</p>
        </footer>
    </body>

</html>