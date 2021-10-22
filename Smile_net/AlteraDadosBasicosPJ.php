<?php
    //Inclusão da sessão 
    session_start();
    //salvando cnpj em uma variável comum para buscar dados no banco através da SQL
    $cnpj = $_SESSION['cnpj'];
    
    //Inclusão da conexão com o banco de dados e coleta de todas as informações na mesma linha do cnpj salvo na variável acima
    include_once("conexao.php");
    $result_usuario = "SELECT * FROM clinicas WHERE cnpj='$cnpj'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title>Página de alteração de dados</title>
        <meta charset="utf-8">

         <!-- CSS -->           <!-- VÁRIOS HREF'S -->
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
                    <ul>        <!-- VÁRIOS HREF'S SAIR-->
                       	<li><a href="AlteraDadosBasicosPJ.php">Dados básicos</a></li>
						<li><a href="PacientesFichasDosPacientes.php">Pacientes: Fichas dos Pacientes</a></li>
						<li><a href="historicoFichasdeAnamnese.php">Fichas de Anamnese</a></li>
						<li><button><a href="logar.php"><strong>Sair</strong></a></button></li>
                    </ul>
                </nav>
            </div>
		</header>
        <?php 
           //caso haja alguma mensagem de erro, ela será mostrada
           if(isset($_SESSION['msg3'])){ 
			   echo $_SESSION['msg3'];
			   unset($_SESSION['msg3']);
           }
         ?>

        <hr>
        <p>Caso suas informações estejam desatualizadas ou necessitem de trocas devido algum erro de digitação, você pode troca-las preenchendo os dados abaixo novamente; só não se esqueça de colocar os dados corretos pois seu CNPJ está vinculado a alguns dados seus, caso esses dados não correspondam, problemas futuros poderão ser gerados!</p>
        <hr><br><br>

        Dados relativos ao CNPJ:
        <br><br>
		
        <form method="POST" action="alteracao2.php"> 
        	<table border="1" width="100%">
            	<tr>
                	<td>
                    	Nome da clínica:<br>
                    	<input type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>">
                	</td>
            	</tr>
        	</table>
        	<br>
        	<table border="1" width="100%">
            	<tr>
                	<td>
                    	CEP:<br>
                    	<input type="text" name="cep" placeholder="xxxxx-xxx" value="<?php echo $row_usuario['cep']; ?>">
                	</td>
            	</tr>
        	</table>
        	<br>

        	<table border="1" width="100%">
            	<tr>
                	<td>
                    	Endereço:<br>
                    <input type="text" name="endereco" value="<?php echo $row_usuario['endereco']; ?>">
                	</td>
				</tr>
			</table>
			<br>

			<table border="1" width="100%">
				<tr>
					<td>
						Número para contato:<br>
                    	<input type="text" name="telefone" placeholder="(00) 00000-0000" value="<?php echo $row_usuario['telefone']; ?>">
                	</td>
				</tr>
			</table>
			<br>

			<table border="1" width="100%">
				<tr>
					<td>
						Horário de funcionamento:<br>
						<input type="text" name="horariofunc" value="<?php echo $row_usuario['horariofunc']; ?>">
					</td>
				</tr>
			</table>
			<br>
			<table border="1" width="100%">
				<tr>
					<td>
						E-mail:<br>
						<input type="text" name="email" value="<?php echo $row_usuario['email']; ?>">
					</td>
				</tr>
			</table>
			<br>

			<table border="1" width="100%">
				<tr>
					<td>
						confirme o e-mail:<br>
						<input type="text" name="emailconf"><br><br>
						<strong>Não se esqueça de ter certeza que você tem acesso a este e-mail, pois caso você perca sua senha, será a partir dele que o seu acesso será reconcedido!</strong>
					</td>
				</tr>
			</table>
			<br>

			<table border="1" width="100%">
				<tr>
					<td>
						Adicione uma foto para representar sua clínica no site (opcional)<br><br>
						<img src="imagens/avatarc.png" width="100">
						<br><br>
						<input type="file" name="foto">  
					</td>
				</tr>
			</table>
			<br>

			<table border="1" width="100%">
				<tr>
					<td>
						Digite sua senha para validar a alteração:<br>
						<input type="password" name="senha">
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" name="alterarbtn" value="Alterar dados">
		   </form>
    </body>

</html>
