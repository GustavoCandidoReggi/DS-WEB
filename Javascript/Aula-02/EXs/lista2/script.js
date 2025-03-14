function idd(){
    var idade = document.getElementById("idade").value;
    idade = Number.parseInt(idade);
    console.log(idade);
    if (idade <18){
        return document.getElementById("suaidd").innerHTML = "Você é menor de idade!";
    }else{
        return document.getElementById("suaidd").innerHTML = "Você é maior de idade!"
    }
}
function nega(){
    var num = document.getElementById("num").value;
    num = Number.parseFloat(num);
    console.log(num);
    if (num <0){
        return document.getElementById("elee").innerHTML = "O numero é negativo"
    }else if(num > 0){
        return document.getElementById("elee").innerHTML = "O numero é positivo"
    }else{
        return document.getElementById("elee").innerHTML = "O numero é zero"
    }
}
function veri(){
    var usuario = document.getElementById("usuario").value;
    var senha = document.getElementById("senha").value
    console.log(usuario)
    if (usuario == "admin" && senha == "12345"){
        return document.getElementById("log").innerHTML = "Login feito com sucesso"
    }else{
        return document.getElementById("log").innerHTML = "Erro ao fazer login"
    }
}
function opera(){
    var num1 = document.getElementById("num1").value;
    var num2 = document.getElementById("num2").value;
    var op = document.getElementById("opera").value;
    if(op == soma){
        return document.getElementById("log").innerHTML = "Soma"
    }
}