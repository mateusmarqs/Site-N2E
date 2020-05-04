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