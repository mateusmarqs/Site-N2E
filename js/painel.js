//====Slide Menu====//
function cadastrar_open() {
    var button = document.getElementById('form-cadastrar');
    document.getElementById('form-remover').style.display = 'none';
    button.style.display = 'inherit';
    document. getElementById('cadastrar').setAttribute('onclick', 'cadastrar_close()');
}

function cadastrar_close() {
    var button = document.getElementById('form-cadastrar');
    document.getElementById('form-remover').style.display = 'none';
    button.style.display = 'none';
    document. getElementById('cadastrar').setAttribute('onclick', 'cadastrar_open()');
}

function remover_open() {
    var button = document.getElementById('form-remover');
    document.getElementById('form-cadastrar').style.display = 'none';
    button.style.display = 'inherit';
    document. getElementById('remover').setAttribute('onclick', 'remover_close()');
}

function remover_close() {
    var button = document.getElementById('form-remover');
    document.getElementById('form-cadastrar').style.display = 'none';
    button.style.display = 'none';
    document. getElementById('remover').setAttribute('onclick', 'remover_open()');
}

function validar() {
    var username = form_cadastrar.username.value;
    var senha = form_cadastrar.senha.value;
    var rep_senha = form_cadastrar.rep_senha.value;

    if (username == "") {
        alert('Preencha o campo com seu nome');
        form_cadastrar.username.focus();
        return false;
    }
    if (senha != rep_senha)  {
        alert('Senhas diferentes');
        form_cadastrar.senha.focus();
        return false;
    }
}