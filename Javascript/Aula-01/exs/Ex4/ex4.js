while (cont != 0){
    var numero1 = Number.parseInt(window.prompt("Digite o numero: "))
    var re = numero1 ** 3
    
    alert(re)

    
    var cont = Number.parseInt(window.prompt("Digite 0 para para ou aperte qualquer tecla."))
    if (cont == 1)
        break;
}
