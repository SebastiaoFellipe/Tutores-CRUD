function ValidaCampo(){
	nomecompleto = document.form.nomecompleto.value;
	matricula = document.form.matricula.value;
	email = document.form.email.value;
	numerotelefone = document.form.numerotelefone.value;
	senha = document.form.senha.value;

    if (nomecompleto == "" || nomecompleto.indexOf("  ") != -1) {
		window.alert("Preencha o campo nome");
		document.form.nomecompleto.focus();
		return false;
	}
    if (matricula == "" || matricula.indexOf("  ") != -1 || matricula.length != 14) {
		window.alert("Preencha o campo matricula corretamente");
		document.form.matricula.focus();
		return false;
	}
    if (email == "" || email.lenght < 8 || 
		email.indexOf(" ") != -1 || 
		email.indexOf("..") != -1 || 
		email.indexOf("@.") != -1 || 
		email.indexOf(".@") != -1 || 
		email.indexOf("@") < 2 || 
		email.indexOf(".") == -1 || 
		email.indexOf("@") != email.lastIndexOf("@") || 
		email.indexOf(".") != email.lastIndexOf(".")) {
		window.alert("Este não parece ser um e-mail válido");
		document.form.email.focus();
		return false;
	}
    if (numerotelefone == "" || numerotelefone.indexOf("  ") != -1 || numerotelefone.length < 11) {
		window.alert("Preencha o campo numero de telefone corretamente");
		document.form.numerotelefone.focus();
		return false;
	}
    if (isNaN(numerotelefone)) {
		window.alert("Preencha o campo numero de telefone com números");
		document.form.numerotelefone.value;
		return false;
	}
    if (senha == "" || senha.indexOf("  ") != -1 || senha.length < 8 || senha.length > 20) {
		window.alert("Preencha o campo senha corretamente");
		document.form.senha.focus();
		return false;
	}
}