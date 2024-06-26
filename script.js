// FUNÇÕES CADASTRO

function validarCamposCadastro(event) {
    const option = document.getElementById('id_tipo_usuario').value;

    if (option === "0") {
        alert('Selecione um tipo de usuário!');

        event.preventDefault();

        return false;
    }

    return true;
}

function retornarCamposCadastro(event){
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;
    const option = document.getElementById('id_tipo_usuario').value;

    document.getElementById("nome").value = nome;
    document.getElementById("email").value = email;
    document.getElementById("senha").value = senha;
    document.getElementById("option").selected = option;

    event.preventDefault();

    return true;
}
