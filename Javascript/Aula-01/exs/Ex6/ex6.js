var cap = Number.parseInt(window.prompt("Qual o capital inicial?"))
var por = Number.parseInt(window.prompt("Qual a porcentagem de acréscimo?"))
var temp = Number.parseInt(window.prompt("Quanto tempo?"))

var mon = cap * ((por/100)+1 )**temp
var m = mon.toFixed(2)
alert(m)