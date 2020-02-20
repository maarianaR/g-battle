function validaNome(){

	var f1 = document.getElementById("frm");
	
	if (f1.nome.value == ""){
	
		document.getElementById('lb1').innerHTML="Campo Obrigatório !";
		f1.nome.focus();
		return false;
	
	}else if (f1.nome.value.length < 2){
	
		document.getElementById('lb1').innerHTML="Nome inválido !";
		f1.nome.focus();
		return false;
	
	}else {
		
		document.getElementById('lb1').innerHTML="*";
		return true;
	
	}
}

function validaSobrenome(){

	var f2 = document.getElementById("frm");
	
	if (f2.sobrenome.value == ""){
	
		document.getElementById('lb2').innerHTML="Campo Obrigatório !";
		f2.sobrenome.focus();
		return false;
	
	}else if (f2.sobrenome.value.length < 2){
	
		document.getElementById('lb2').innerHTML="Sobrenome inválido !";
		f2.sobrenome.focus();
		return false;
	
	}else {
	
		document.getElementById('lb2').innerHTML="*";
		return true;
	
	}
}


function validaData(){

	var f3 = document.getElementById("frm");
	
	var pdrData = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/([1][9][0-9][0-9]|2[0][01][0-9])$/;
	
		if(f3.nascimento.value == ""){
		
			document.getElementById('lb3').innerHTML="Campo Obrigatório !";
			f3.nascimento.focus();
			return false;
		
		}else if(pdrData.test(f3.nascimento.value)){
			
			document.getElementById('lb3').innerHTML="*";
			return true;
		
		}else{
			
			document.getElementById('lb3').innerHTML="Digite a data no formato DD/MM/AAAA";
			f3.nascimento.focus();
			return false;
	
		}
}

function validaEmail() {

	var f4 = document.getElementById("frm");
	
	/*pdrEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;*/
	pdrEmail = /^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.][A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/;

	if(f4.email.value == ""){
	
		document.getElementById('lb4').innerHTML="Campo Obrigatório !";
		f4.email.focus();
		return false;
	
	}else if(pdrEmail.test(f4.email.value)){
		
		document.getElementById('lb4').innerHTML="*";
		return true;
	
	}else{
		
		document.getElementById('lb4').innerHTML="Email inválido!";
		f4.email.focus();
		return false;
	
	}
}

function validaCPF(){

	var f5 = document.getElementById("frm");
	
	var pdrCPF = /^(\d\d\d)(\d\d\d)(\d\d\d)(\d\d)$/;
	
	var pdrCPF2 = /^(\d\d\d)\.(\d\d\d)\.(\d\d\d)\-(\d\d)$/; 

	if(f5.cpf.value == ""){
	
		document.getElementById('lb5').innerHTML="Campo Obrigatório !";
		f5.cpf.focus();
		return false;
	
	}else if (pdrCPF.test(f5.cpf.value) || pdrCPF2.test(f5.cpf.value)){
	
		cpf_fomatado = f5.cpf.value.replace(pdrCPF, "$1.$2.$3-$4");
		f5.cpf.value = cpf_fomatado;
		document.getElementById('lb5').innerHTML="*";
		return true;
		
	}else{
	
		document.getElementById('lb5').innerHTML="CPF inválido !";
		f5.cpf.focus();
		return false;
		
	
	}

}

function validaRua(){

	var f6 = document.getElementById("frm");
	
		if (f6.rua.value.length < 1){
	
			document.getElementById('lb6').innerHTML="Campo Obrigatório !";
			f6.rua.focus();
			return false;
		
			
	
	}else if(f6.rua.value.length < 4){
		
				document.getElementById('lb6').innerHTML="Rua inválida !";
				f6.rua.focus();
				return false;
		
	}else{
	
		document.getElementById('lb6').innerHTML="*";
		return true;
	
	}

}

function validaCEP(){

	var f7 = document.getElementById("frm");
	
	pdrCEP = /^(\d\d)(\d\d\d)(\d\d\d)$/;
	pdrCEP2 = /^(\d\d)\.(\d\d\d)\-(\d\d\d)$/;
	
	if(pdrCEP.test(f7.cep.value) || pdrCEP2.test(f7.cep.value)){
	
		cep_formatado = f7.cep.value.replace(pdrCEP,"$1.$2-$3");
		f7.cep.value = cep_formatado;
		document.getElementById('lb7').innerHTML="*";
		return true;
		
	}else if(f7.cep.value.length < 1){
		
			document.getElementById('lb7').innerHTML="Campo Obrigatório !";
			f7.cep.focus();
			return false;
		
	}else{
	
		document.getElementById('lb7').innerHTML="CEP inválido !";
		f7.cep.focus();
		return false;
	
	}
}

function validaNum(){

	var f8 = document.getElementById("frm");
	var pdrNum = /^(\d{1,5})|(0[1-9])|(\w{10}\s?)$/;
	
	var n = parseInt(f8.num.value);
	
	if (n < 1){
	
		document.getElementById('lb8').innerHTML="Número inválido !";
		f8.num.focus();
		return false;
	
	}else if(f8.num.value == ""){
		
		document.getElementById('lb8').innerHTML="Campo Obrigatório !";
		f8.num.focus();
		return false;
		
	}else if (pdrNum.test(f8.num.value)){
	
		document.getElementById('lb8').innerHTML="*";
		return true;
		
	}
}

function validaCom(){

	var f9 = document.getElementById("frm");
	
	pdrCom = /^(\w+)|(\w+\s+)$/;
	
	if(f9.com.value != ""){
		if(pdrCom.test(f9.com.value)){
	
			document.getElementById('lb9').innerHTML="";
			return true;
	
		}else{
	
		document.getElementById('lb9').innerHTML="Complemento inválido !";
		f9.com.focus();
		return false;
		
		}
	}
}

function validaBairro(){

	f10 = document.getElementById("frm");
	
	pdrBairro = /^(\w+)|(\w+\s+)$/;
	
	if(f10.bairro.value == ""){
	
		document.getElementById('lb10').innerHTML="Campo Obrigatório !";
		f10.bairro.focus();
		return false;
	
	}else if (f10.bairro.value.length < 3){
	
		document.getElementById('lb10').innerHTML="Bairro inválido !";
		f10.bairro.focus();
		return false;
		
	}else if(pdrBairro.test(f10.bairro.value)){
	
		document.getElementById('lb10').innerHTML="*";
		return true;
	
	}
}

function validaCidade(){

	f11 = document.getElementById("frm");
	
	pdrCidade = /^(\w+)|(\w+\s+)$/;
	
	if(f11.cidade.value == ""){
	
		document.getElementById('lb11').innerHTML="Campo Obrigatório !";
		f11.cidade.focus();
		return false;
	
	}else if (f11.cidade.value.length < 2){
	
		document.getElementById('lb11').innerHTML="Cidade inválida !";
		f11.cidade.focus();
		return false;
		
	}else if(pdrCidade.test(f11.cidade.value)){
	
		document.getElementById('lb11').innerHTML="*";
		return true;
	
	}

}

function validaUF(){
	f12 = document.getElementById("frm");
	pdrUF = /^\D{2}$/;
	
	if(f12.uf.value == ""){
	
		document.getElementById('lb12').innerHTML="Campo Obrigatório !";
		f12.uf.focus();
		return false;
	
	}else if(f12.uf.value.length < 2){
	
		document.getElementById('lb12').innerHTML="UF inválido !";
		f12.uf.focus();
		return false;
	
	}else if(pdrUF.test(f12.uf.value)){
	
		document.getElementById('lb12').innerHTML="*";
		return true;
	
	}

}

function validaLogin(){

	f14 = document.getElementById("frm");

	if(f14.email2.value == "") {

      	  document.getElementById('lbl1').innerHTML="Campo Obrigatório !";
	  f14.email2.focus();
	  return false;
	  	
	}else if(f14.email2.value != f14.email.value){

	  document.getElementById('lbl1').innerHTML="Email inválido !";
      	  f14.email2.focus();
	  return false;
	  
	}else {

	  document.getElementById('lbl1').innerHTML="*";
	  return true;

	}

}

function validaLogin2(){

	f15 = document.getElementById("frm");
	
	if(f15.loginSenha.value == ""){

       	  document.getElementById('lbl2').innerHTML="*";
	  f15.loginSenha.focus();
	  return false;

	}else if(f15.loginSenha.value.length < 4){

	  document.getElementById('lbl2').innerHTML="Muito fraca";

	}else if((f15.loginSenha.value.length > 3)&&(f15.loginSenha.value.length < 6)){

	  document.getElementById('lbl2').innerHTML="Fraca";
	  	
	}else if((f15.loginSenha.value.length > 6)&&(f15.loginSenha.value.length < 10)){

	  document.getElementById('lbl2').innerHTML="Forte";

	}else if(f15.loginSenha.value.length > 10){

	  document.getElementById('lbl2').innerHTML="Muito forte";

	}
}

function validaEnvio(){

	f13 = document.getElementById("frm");
	
	if ((f13.nome.value == "")|(f13.sobrenome.value == "")|(f13.nascimento.value == "")|(f13.email.value == "")|(f13.cpf.value == "")|(f13.rua.value == "")|(f13.cep.value == "")|(f13.num.value == "")|(f13.bairro.value == "")|(f13.cidade.value == "")|(f13.uf.value == "")|(f13.emil2.value == ""))
	{
	
       	        document.getElementById('lb0').innerHTML="Preencha os campos Obrigatórios !";
		f13.nome.focus();
		
	
	}else{
		
		return true;
	
	}
	
}