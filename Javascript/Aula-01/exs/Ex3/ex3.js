while (cont != 0){   
    var numero1 = Number.parseInt(window.prompt("Digite o primeiro numero"))
    var numero2 = Number.parseInt(window.prompt("Digite o segundo numero"))
    var op = Number.parseInt(window.prompt("Escolha a uma operação: \n 1- Adição \n 2- Subtração \n 3- Multiplicação \n 4- Divisão"))

    if (op == 1 )
        alert(numero1 + numero2)
    else if (op == 2 )
        alert(numero1 - numero2)
    else if (op == 3)
        alert(numero1 * numero2)
    else if (op == 4)
        alert(nuemro1 / numero2)
    else if (cont == 0 )
        break;
    var cont = Number.parseInt(window.prompt("Digite 0 para para ou aperte qualquer tecla."))
}