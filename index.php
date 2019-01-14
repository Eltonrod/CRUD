<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, inicial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Ambiente de Cadastro</title>
	<script src="script.js" type="text/javascript"></script>

</head>
<body>

<section class="formularios">
<!--CREATE-->
	<div id="cadastro" class="form">
			<legend><h3>CREATE</h3></legend>	
				<fieldset>	
					<legend>Cadastrar cliente:</legend>
					<input type="text" name="cadastroNome" id="nome" placeholder="Nome:" required>
					<BR>
					<input type="text" name="cadastroCpf" id="cpf" placeholder="CPF:" required>
					<BR>
					<input type="text" name="cadastroEmail" id="email" placeholder="E-mail:" required>
					<BR>	
					<input type="submit" onclick="return create();" value="Cadastrar">
					<input type="reset" value="Reset">
				</fieldset>
				<p id="mensagem_create"></p>
	</div>

<!--READ-->
	<div id="consulta" class="form">

		<legend><h3>READ</h3></legend>
		<fieldset>
			<legend>Localizar cliente:</legend>
			<input type="text" name="consultaNome" id="consultaNome" placeholder="Digite o nome">
			<BR>
			<input type="text" name="id" id="consultaId" placeholder="Digite o id">
			<BR><BR>
			<input type="submit" onclick="return consulta();" value="Consultar">
			<input type="reset" value="Reset">
			<BR>
		</fieldset>
			<h4 id="apareceId"></h4>
			<h4 id="apareceNome"></h4>
			<h4 id="apareceCpf"></h4>
			<h4 id="apareceEmail"></h4>
			<BR>
	</div>

<!--UPDATE-->
	<div id="update" class="form">

		<legend><h3>UPDATE</h3></legend>
		<fieldset>
			<legend>Localizar cliente:</legend>
			<input type="text" name="visualizarNome" id="visualizarNome" placeholder="Digite o nome">
			<BR>
			<input type="text" name="visualizarid" id="visualizarid" placeholder="Digite o id">
			<BR><BR>
			<input type="submit" onclick="return consultaUpdate();" value="Consultar">
			<input type="reset" value="Reset">
		</fieldset>
		<div id="alteracao">  
			<h4 id="aparece-id"></h4>
			<h4 id="aparece-nome"></h4>
			<h4 id="aparece-cpf"></h4>
			<h4 id="aparece-email"></h4>  
			     
			<legend>Altere o campo desejado:</legend>
			
			<input type="text" name="updateNome" id="updateNome" placeholder="Nome:">
			<BR><BR>
			<input type="text" name="updateCpf" id="updateCpf" placeholder="CPF:">
			<BR><BR>
			<input type="text" name="updateEmail" id="updateEmail" placeholder="E-mail:">
			<BR><BR>
			<input type="submit"  onclick="return update();" value="Alterar">
			<input type="reset" value="Limpar">
		</div>       
			<h4 id="mensagem-update"></h4>

	</div>
<!--DELETE-->
	<div id="delete" class="form">

		<legend><h3>DELETE</h3></legend>
		<fieldset>
			<legend>Localizar cliente:</legend>
			<input type="text" name="delNome" id="delNome" placeholder="Digite o nome">
			<BR>
			<input type="text" name="delId" id="delId" placeholder="Digite o id">
			<BR><BR>
			<input type="submit" onclick="return Consulta_Delete();" value="Consultar">
			<input type="reset" value="Reset">
		</fieldset>
		<div id="deletarId">
			<h4 id="aparece-delId"></h4>
			<h4 id="aparece-delNome"></h4>
			<h4 id="aparece-delCpf"></h4>
			<h4 id="aparece-delEmail"></h4>
			<input type="submit" onclick="return deleteId();" value="Deletar">
		</div>
		<h4 id="mensagem-delete"></h4>
	</div>
</section>
</body>
</html>
