function bvm(){
    var nome = document.getElementById("name").value;
    document.getElementById("bemv").innerHTML = "Seja bem vindo(a) " + nome + "!";
}

function pa(){
    var numero = Number.parseInt("numero");
    numero = document.getElementById("num").value;
    numero = numero % 2
    if (numero == 0){
        return document.getElementById("resul").innerHTML = "O numero é par"; 
    }else{
        return document.getElementById("resul").innerHTML = "O numero é impar";   
    }
}
function convert(){
    
    let conv = document.getElementById("texto").value;
    conv = conv.toUpperCase();
    return document.getElementById("convertido").innerHTML = conv;
}
function acre(){
    var numacre = Number.parseInt(document.getElementById("convert").value);
    var acrescimo = Number.parseInt(document.getElementById("acreci").value);
    var total = Number.parseFloat("total");
    acrescimo = ((acrescimo/100)+1)*numacre
    console.log(acrescimo)
    var total = acrescimo.toFixed(2);
    return document.getElementById("comacre").innerHTML = total;
}


var contador = 0;
function cor(){
    var a = document.getElementById('area');
    a.innerHTML = "Botão clicado";
    
    if(contador == 0){
        contador = contador +1
        console.log(contador)
        a.style.backgroundColor = "black";
        a.style.color="white";
    }else if(contador == 1){
        contador= contador + 1;
        console.log(contador)
        a.style.backgroundColor = "white";
        a.style.color="black";
    }else if(contador == 2){
        contador = 0
        console.log(contador);
        a.style.backgroundColor = "red";
        a.style.color = "black"
    }
    
    
}

