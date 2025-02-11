window.document.write(window.document.URL)

var p1 = window.document.getElementsByTagName('p')[0]
document.getElementById("quarto-paragrafo").innertHTML = p1.innertText;

document.getElementById("teste").innerHTML = "Hello World"

var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello world";

document.querySelector("p").style.backgroundColor = "red"
document.querySelector("p#paragrafo").style.backgroundColor = "blue"

var paragrafo = document.querySelector('p').style
paragrafo.backgroundColor = "red";
paragrafo.color = "white;"

function alertaDeClique(){
    alert("Você clicoou no botão");
}

function calcular(){
    var num1 = document.getElementById("numero1").value;
    var num2 = document.getElementById("numero2").value;

    //convertendo numeros
    console.log(typeof num1)
    var num1 = Number.parseInt(num1);
    var num2 = Number.parseInt(num2);
    console.log(typeof num1)

    var resultado = num1 + num2;
    console.log(typeof resultado)
    document.getElementById("resul").innerHTML = "Resultado: " + resultado;




    
}


