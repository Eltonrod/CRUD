//SCRIPT PARA MOSTRA O ID NO CADASTRO
function idCreate(){
    var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if(request.readyState === 4) {
				if(request.status === 200) {

					var objIdCreate = JSON.parse(request.responseText);

					document.getElementById('id-create').innerHTML = "<p'><b>Cód do cliente: </b>" + objIdCreate.idCreate + "</p>";
					
				} else {
	    			alert('Erro: ' +  request.status + ' ' + request.statusText);
			            }
			    }
			}
			var url = "http://localhost:8079/sistemaCadastro/bd_idCreate.php";
			
			request.open('Get', url);

		request.send();
		return false;
        }

//SCRIPT PARA NOVOS REGISTROS

function create(){
    var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if(request.readyState === 4) {
				if(request.status === 200) {
					document.getElementById('nome').innerHTML = "";
					document.getElementById('cpf').innerHTML = "";
					document.getElementById('email').innerHTML = "";
					document.getElementById('mensagem_create').innerHTML = "<p style='text-align: center; font-size:17px;color:blue;padding: 10px 0'><b>** Cadastrado com sucesso! **</b></p>";
					
				} else {
	    			alert('Erro: ' +  request.status + ' ' + request.statusText);
			            }
			    }
			}
			var url = "http://localhost:8079/sistemaCadastro/bd_create.php";
			var gravarNome = document.getElementById('nome').value;
			var gravarCpf = document.getElementById('cpf').value;
			var gravarEmail = document.getElementById('email').value;

			request.open('Get', url+"?gravarNome="+gravarNome+"&gravarCpf="+gravarCpf+"&gravarEmail="+gravarEmail);

		request.send();
		return false;
        }
        
//SCRIPT PARA CONSULTAR REGISTRO
function consulta(){
    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
	if(request.readyState === 4) {
		if(request.status === 200) {

			var objRead = JSON.parse(request.responseText);
			document.getElementById('apareceId').innerHTML = "<b>ID:</b> " + objRead.consultaId;
            document.getElementById('apareceNome').innerHTML = "<b>NOME:</b> " +objRead.consultaNome;
			document.getElementById('apareceCpf').innerHTML = "<b>CPF:</b> " + objRead.consultaCpf;
			document.getElementById('apareceEmail').innerHTML =  "<b>E-mail:</b> " + objRead.consultaEmail;
		} else {
			alert('Erro: ' +  request.status + ' ' + request.statusText);
		}
	}
}
	var url = "http://localhost:8079/sistemaCadastro/bd_read.php";
	var consultaId = document.getElementById('consultaId').value;
	var consultaNome = document.getElementById('consultaNome').value;
	request.open('Get', url+"?consultaId="+consultaId+"&consultaNome="+consultaNome);
	request.send();
	return false;
}

//SCRIPT PARA APRESENTAR OS DADOS A SEREM ALTERADOS
function consultaUpdate(){
    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
	if(request.readyState === 4) {
		if(request.status === 200) {
			var objConsulta = JSON.parse(request.responseText);
			document.getElementById('alteracao').style.display="block";
			document.getElementById('aparece-id').innerHTML = "<b>ID:</b> " + objConsulta.updateId;
			updateId = objConsulta.updateId;
			document.getElementById('aparece-nome').innerHTML = "<b>NOME:</b> " + objConsulta.updateNome;
			updateNome = objConsulta.updateNome;
			document.getElementById('aparece-cpf').innerHTML = "<b>CPF:</b> " + objConsulta.updateCpf;
			updateCpf = objConsulta.updateCpf;
			document.getElementById('aparece-email').innerHTML =  "<b>E-mail:</b> " + objConsulta.updateEmail;
			updateEmail = objConsulta.updateEmail;
		} else {
			alert('Erro: ' +  request.status + ' ' + request.statusText);
		}
	}
}
	var url = "http://localhost:8079/sistemaCadastro/bd_updateRead.php";
	var updateId = document.getElementById('visualizarid').value;
	var updateNome = document.getElementById('visualizarNome').value;
	request.open('Get', url+"?updateId="+updateId+"&updateNome="+updateNome);
	request.send();
	return false;
}


//SCRIPT PARA REALIZAR ALTERAÇÃO
updateId ="";
updateNome = "";
updateCpf = "";
updateEmail = "";

function update(){
		
	var request = new XMLHttpRequest();
	
		request.onreadystatechange = function() {
			if(request.readyState === 4) {
				if(request.status === 200) {

				document.getElementById('alteracao').style.display="none";
				document.getElementById('mensagem-update').innerHTML = "<p style='text-align: center; font-size:16px;color:blue;padding: 10px 0'><b>** Cadastro atualizado! **</b></p>";
			} else {
		alert('Erro: ' +  request.status + ' ' + request.statusText);
	}
	}
	}
	var url = "http://localhost:8079/sistemaCadastro/bd_update.php";
	var gravarUpdateId = updateId;
	//console.log('updateId');
	var registroUpdateNome = document.getElementById('updateNome').value;
	
	var gravarUpdateNome = updateNome;
		if(registroUpdateNome != ""){
			gravarUpdateNome = registroUpdateNome;
		}
	var registroUpdateCpf = document.getElementById('updateCpf').value;
	var gravarUpdateCpf = updateCpf;
		if(registroUpdateCpf != ""){
			gravarUpdateCpf = registroUpdateCpf;
		}
	var registroUpdateEmail = document.getElementById('updateEmail').value;
	var gravarUpdateEmail = updateEmail;
		if(registroUpdateEmail != ""){
			gravarUpdateEmail = registroUpdateEmail;
		}


	request.open('Get', url+"?gravarUpdateId="+gravarUpdateId+"&gravarUpdateNome="+gravarUpdateNome+"&gravarUpdateCpf="+gravarUpdateCpf+"&gravarUpdateEmail="+gravarUpdateEmail);

request.send();
return false;
}

//SCRIPT PARA APRESENTAR OS DADOS A SEREM DELETADOS
function Consulta_Delete(){
    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
	if(request.readyState === 4) {
		if(request.status === 200) {
			var objConsultaDelete = JSON.parse(request.responseText);		
			document.getElementById('deletarId').style.display="block";
			document.getElementById('aparece-delId').innerHTML = "<b>ID:</b> " + objConsultaDelete.delId;
			deletarId = objConsultaDelete.delId;
            document.getElementById('aparece-delNome').innerHTML = "<b>NOME:</b> " +objConsultaDelete.delNome;
			document.getElementById('aparece-delCpf').innerHTML = "<b>CPF:</b> " + objConsultaDelete.delCpf;
			document.getElementById('aparece-delEmail').innerHTML =  "<b>E-mail:</b> " + objConsultaDelete.delEmail;
		} else {
			alert('Erro: ' +  request.status + ' ' + request.statusText);
		}
	}
}
	var url = "http://localhost:8079/sistemaCadastro/bd_deleteRead.php";
	var delId = document.getElementById('delId').value;
	var delNome = document.getElementById('delNome').value;
	request.open('Get', url+"?delId="+delId+"&delNome="+delNome);
	request.send();
	return false;
}

//SCRIPT PARA DELETAR REGISTROS
deletarId ="";
function deleteId(){
	
	var request = new XMLHttpRequest();
	
		request.onreadystatechange = function() {		
			if(request.readyState === 4) {
				if(request.status === 200) {
					document.getElementById('deletarId').style.display="none";
					document.getElementById('mensagem-delete').innerHTML = "<p style='text-align: center; font-size:16px;color:blue;padding: 10px 0'><b>** Cadastro excluído! **</b></p>";
				} 
				else {
					alert('Erro: ' +  request.status + ' ' + request.statusText);
				}
			}
	}
	var url = "http://localhost:8079/sistemaCadastro/bd_delete.php";
	var deleteId = deletarId;

	request.open('Get', url+"?deleteId="+deleteId);

request.send();
return false;
}
