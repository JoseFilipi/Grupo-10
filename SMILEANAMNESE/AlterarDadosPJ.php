<!DOCTYPE html>

<html>

    <head>
        <title>Página de alteração de dados</title>
        <meta charset="utf-8">
    </head>

    <body>

        <table border="0" width="100%">
            <tr>
                <td align="center"><img src="imagens/Logo.jpeg" width="230"></td>
            </tr>
        </table>
        <br><br>

        <hr>
        <p>Caso suas informações estejam desatualizadas ou necessitem de trocas devido algum erro de digitação, você pode troca-las preenchendo os dados abaixo novamente; só não se esqueça de colocar os dados corretos pois seu CNPJ está vinculado a alguns dados seus, caso esses dados não correspondam, problemas futuros poderão ser gerados!</p>
        <hr><br><br>

        Dados relativos ao CNPJ:
        <br><br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Nome da clínica:<br>
                    <input type="text" name="nome">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    CEP:<br>
                    <input type="text" name="cep" placeholder="xxxxx-xxx">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Endereço:<br>
                    <input type="text" name="endereço">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Número para contato:<br>
                    <input type="text" name="cel" placeholder="(00) 00000-0000">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Horário de funcionamento:<br>
                    <input type="text" name="horario">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    E-mail:<br>
                    <input type="text" name="email">
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
            Escreva uma breve descrição da sua clínica:<br>
            <textarea></textarea>
        </table>
        <br><br>

        <button>
            <a href="">Concluir atualização de dados</a>
        </button>

    </body>

</html>
