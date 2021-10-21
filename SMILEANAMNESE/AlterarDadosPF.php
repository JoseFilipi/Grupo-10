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
        <p>Caso suas informações estejam desatualizadas ou necessitem de trocas devido algum erro de digitação, você pode troca-las preenchendo os dados abaixo novamente; só não se esqueça de colocar os dados corretos pois seu CPF está vinculado a alguns dados seus, caso esses dados não correspondam, problemas futuros poderão ser gerados!</p>
        <hr><br><br>

        dados relativos ao CPF:
        <br><br> 

        <table border=1 width="100%">
            <tr>
                <td>
                    <form>
                        Nome completo:<br>
                        <input type="text" name="nome">
                    </form>
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    <form>
                        Data de nascimento:<br>
                        <input type="text" name="nascimento" placeholder="00/00/0000">
                    </form>
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    RG:<br>
                    <input type="text" name="rg">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    CEP:<br>
                    <input type="text" name="cep" placeholder="00000-000">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Número de celular:<br>
                    <input type="text" name="cel" placeholder="(00) 00000-0000">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    E-mail:<br>
                    <input type="text" name="email"><br><br>
                    <strong>Não se esqueça de ter certeza que você tem acesso a este e-mail, pois caso você perca sua senha, será a partir dele que o seu acesso será reconcedido!</strong>
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Confirme o e-mail:<br>
                    <input type="text" name="emailconf">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    <strong>Para alterar sua senha, será necessário entrar na área de login e ir em "esqueceu a senha"; assim será enviado um e-mail para você, esse processo é devido uma maior segurança.</strong>
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Possui ulgum plano de saúde?<br>
                    <input type="radio" name="plano" value="sim">Sim
                    <input type="radio" name="plano" value="não">Não
                    <br><br>
                    <input type="text" name="textoplano" placeholder="Se sim, qual?">
                    <br><br>
                    <input type="text" name="carteirinha" placeholder="Número da carteirinha">
                </td>
            </tr>
        </table>
        <br>

        <table border="1" width="100%">
            <tr>
                <td>
                    Adicione uma nova foto ao perfil, ou então mande o mesmo arquivo de antes (opcional)<br><br>
                    <img src="imagens/avatar.png" width="100">
                    <br><br>
                    <input type="file" name="foto">
                </td>
            </tr>
        </table>
        <br><br>

        <button type="submit">
            <a href="">Concluir atualização de dados</a>
        </button>
        
    </body>

</html>