function validar(){
var nome = form1.nome.value;
var email = form1.email.value;
var mensagem=form1.mensagem.value;

if (nome == "") {
alert('Preencha o campo com seu nome');
form1.nome.focus();
return false;
}

if (nome.length < 5) {
alert('Digite seu nome completo');
form1.nome.focus();
return false;
}

if (mensagem == "") {
alert('Escreva uma mensagem');
form1.nome.focus();
return false;
}

if (email == "") {
alert('Preencha o campo com seu email');
form1.email.focus();
return false;
}

}
