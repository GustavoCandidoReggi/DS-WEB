//Função para validação dos dados do cliente

function validarDadosCliente(){

    if(formulario.nome.value.lenght < 3 || formulario.nome.value == ""){
        alert("Prencha o campo nome corretamente!\nVerifique se o nome possui mais que 2 caracteres");
        return false;
    }
    if(formulario.email.value == "" ||
    formulario.email.value.indexOf('@') == -1 ||
    formulario.email.value.indexOf('.') == -1
    ){
        alert("Preecha o campo com email corretamente!");
        return false;
    }
    if (formulario.observacao.value.length > 10){
        alert("Excedeu a capacidade de caracteres!\nNo momento possui "+formulario.observacao.value.length);
        return false;
    }
}
