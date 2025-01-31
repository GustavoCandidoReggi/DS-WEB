while (cont != 0){
    var temp = Number.parseInt(window.prompt("Digite um dos numeros a seguir para fazer a converção \n 1- Converter Graus Celsius para Fahrenheit \n 2- Converter Fahrenheit para Graus Celsius"))
    var num = Number.parseInt(window.prompt("Qual a temperatura?"))
    
    if (temp == 1)
        var re = (num * 1.8) + 32
        
    else if  (temp == 2)
        var re = (num - 32) * 0.5556
    alert(re)

    var cont = Number.parseInt(window.prompt("Digite 0 para para ou aperte qualquer tecla."))
    if (cont == 0)
        break;

}