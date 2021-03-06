<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Anamnese</title>
		<link rel="stylesheet" type="text/css" href="NOMEDOARQUIVOCSS" media="screen">
	</head>

	<body>
		<fieldset>
			<header>
				<a href=""><img src="Imagens/Logo.jpeg" width="150"></a>
			</header>
		</fieldset>

			<div>
				<h1>Ficha de anamnese</h1>
				<br>
				<h3>Preencha os espaços abaixo com informações de acordo com seu estado de saúde:</h3>
			</div>

		<form>
			<fieldset>
				<div>
					<label for="cuidadomedico">
                        <strong>Você está sob cuidado médico?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="cuidadomedico">Sim
                    </label>
                    <label>
                        <input type="radio" name="cuidadomedico">Não
                    </label>
				</div>
			</fieldset>
			<br>

			<fieldset>
				<div>
					<label for="cuidadomedicosim">
                        <strong>Caso esteja, desde quando?</strong>
                    </label>
					<br>
					<input type="text" name="cuidadomedicosim" required>
				</div>
                <br>
                <div>
                    <label for="motivo"><strong>Por que?</strong></label>
                    <br>
                    <input type="text" name="motivo" required>
                </div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="medico">
                        <strong>Nome do médico</strong>
                    </label>
					<br>
					<input type="text" name="medico" required>
				</div>
                <br>
                <div>
                    <label for="contatomedico"><strong>Contato</strong></label>
                    <br>
                    <input type="text" name="contatomedico" required>
                </div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="medicamentos">
                        <strong>Você está tomando medicamentos?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="medicamentos">Sim
                    </label>
                    <label>
                        <input type="radio" name="medicamentos">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="medafetamsaude">
                        <strong>Toma periodicamente substâncias que afetem a saúde?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="medafetamsaude">Sim
                    </label>
                    <label>
                        <input type="radio" name="medafetamsaude">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="alergico">
                        <strong>É alérgico a algum medicamento ou substância?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="alergico">Sim
                    </label>
                    <label>
                        <input type="radio" name="alergico">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="problema">
                        <strong>Tem algum problema com a penicilina, antibióticos, 
                        anestésicos ou com outros medicamentos?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="problema">Sim
                    </label>
                    <label>
                        <input type="radio" name="problema">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="sensivel">
                        <strong>É sensível aos metais ou ao latéx?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="sensivel">Sim
                    </label>
                    <label>
                        <input type="radio" name="sensivel">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="gravida">
                        <strong>Se você é mulher, está gravida ou crê que possa estar?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="gravida">Sim
                    </label>
                    <label>
                        <input type="radio" name="gravida">Não
                    </label>
				</div>
                <br>
				<div>
					<label for="anticoncepcional">
                        <strong>Utiliza algum anticoncepcional?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="anticoncepcional">Sim
                    </label>
                    <label>
                        <input type="radio" name="anticoncepcional">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="enfcardiacas">
                        <strong>Está sendo tratado para enfermidades cardíacas ou lhe
                        foi dito que poderia padecer delas?</strong> 
                    </label>
					<br>
                    <label>
                        <input type="radio" name="enfcardiacas">Sim
                    </label>
                    <label>
                        <input type="radio" name="enfcardiacas">Não
                    </label>
				</div>
                <br>
				<div>
					<label for="marcapasso">
                        <strong>Usa marcapasso ou válvula artificial?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="marcapasso">Sim
                    </label>
                    <label>
                        <input type="radio" name="marcapasso">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="febre">
                        <strong>Teve febre reumática?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="febre">Sim
                    </label>
                    <label>
                        <input type="radio" name="febre">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="sopro">
                        <strong>Sofre de sopro no coração?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="sopro">Sim
                    </label>
                    <label>
                        <input type="radio" name="sopro">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="operação">
                        <strong>Teve alguma enfermidade ou operação grave?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="operação">Sim
                    </label>
                    <label>
                        <input type="radio" name="operação">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="explicacao">
                        <strong>Se sim, explique:</strong>
                    </label>
					<br>
                    <input type="text" name="explicacao" required>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="quimiotrat">
                        <strong>Esteve sobre tratamento com radiação ou quimioterapia
                        para combater tumor, neoplasia, ou outra condição?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="quimiotrat">Sim
                    </label>
                    <label>
                        <input type="radio" name="quimiotrat">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="pressao">
                        <strong>Tem pressão alta ou pressão baixa?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="pressao">Sim
                    </label>
                    <label>
                        <input type="radio" name="pressao">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="enfinflamatoria">
                        <strong>Sofre de enfermidades inflamatórias, como artrite
                        ou reumatismo?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="enfinflamatoria">Sim
                    </label>
                    <label>
                        <input type="radio" name="enfinflamatoria">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="articulacoes">
                        <strong>Tem articulações artificiais ou usa prótese?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="articulacoes">Sim
                    </label>
                    <label>
                        <input type="radio" name="articulacoes">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="sangue">
                        <strong>Tem alterações no sangue, como anemia ou leucemia?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="sangue">Sim
                    </label>
                    <label>
                        <input type="radio" name="sangue">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="sangramento">
                        <strong>Sangrou excessivamente depois de cortar-se ou ferir-se?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="sangramento">Sim
                    </label>
                    <label>
                        <input type="radio" name="sangramento">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="estomago">
                        <strong>Tem algum problema estomacal?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="estomago">Sim
                    </label>
                    <label>
                        <input type="radio" name="estomago">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="rins">
                        <strong>Tem problemas renais?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="rins">Sim
                    </label>
                    <label>
                        <input type="radio" name="rins">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="hepatite">
                        <strong>Tem problemas hepáticos?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="hepatite">Sim
                    </label>
                    <label>
                        <input type="radio" name="hepatite">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="diabete">
                        <strong>É diabético?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="diabete">Sim
                    </label>
                    <label>
                        <input type="radio" name="diabete">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="asma">
                        <strong>Sofre de asma?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="asma">Sim
                    </label>
                    <label>
                        <input type="radio" name="asma">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="epilepsia">
                        <strong>Tem epilepsia ou ataques nervosos?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="epilepsia">Sim
                    </label>
                    <label>
                        <input type="radio" name="epilepsia">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="dst">
                        <strong>Tem ou teve alguma doença venérea?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="dst">Sim
                    </label>
                    <label>
                        <input type="radio" name="dst">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="hiv">
                        <strong>Foi-lhe diagnosticado ser HIV positivo?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="hiv">Sim
                    </label>
                    <label>
                        <input type="radio" name="hiv">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="antihepatite">
                        <strong>Teve hepatite ou tem anticorpos contra essa enfermidade</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="antihepatite">Sim
                    </label>
                    <label>
                        <input type="radio" name="antihepatite">Não
                    </label>
				</div>
			</fieldset>
			<br>

            <fieldset>
				<div>
					<label for="tuberculose">
                        <strong>Tem ou teve tuberculose?</strong>
                    </label>
					<br>
                    <label>
                        <input type="radio" name="tuberculose">Sim
                    </label>
                    <label>
                        <input type="radio" name="tuberculose">Não
                    </label>
				</div>
			</fieldset>
			<br>

			<button type="submit">
				<a href="FinalFormAnamnese.php">Enviar ficha</a>
			</button>
		</form>
	</body>
</html>