var nomes = [];
var decricoes = [];

function adds(){
    var nome = document.getElementById("nome");
    var nome = nome.value.trim();
    var descri = document.getElementById("descri");
    var descri = descri.value.trim();
    if (nome !== "" && descri !== ""){

        var cartao = document.createElement("div");
        cartao.textContent = "";

        var titulo = document.createElement("h3");
        titulo.textContent = nome;
        cartao.appendChild(titulo);

        var paragrafo = document.createElement("p");
        paragrafo.textContent = descri;
        cartao.appendChild(paragrafo);


        


        var divCartao = document.getElementById("cartoes");
        divCartao.appendChild(cartao);
    }
    
}
var princi = document.getElementById("princi");
