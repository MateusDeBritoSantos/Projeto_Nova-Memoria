const painel = document.getElementById("painelAcessibilidade");
const btnAcessibilidade = document.getElementById("btnAcessibilidade");

btnAcessibilidade.addEventListener("click", () => {
    painel.classList.toggle("ativo");
});



// configurações iniciais


let tamanhoFonte = 16;
let espacoLinha = 1.5;
let espacoLetra = 0;

let contrasteAtivo = false;
let fonteAlternativa = false;



// texto marior


function aumentarTexto() {

    tamanhoFonte += 2;

    document.body.style.fontSize =
        tamanhoFonte + "px";
}



// texto menor


function diminuirTexto() {

    if (tamanhoFonte > 10) {

        tamanhoFonte -= 2;

        document.body.style.fontSize =
            tamanhoFonte + "px";
    }
}



// fontes


let indiceFonte = 0;

const fontes = [
    "Arial, sans-serif",
    "Verdana, sans-serif",
    "Tahoma, sans-serif",
    "Trebuchet MS, sans-serif"
];

function trocarFonte() {

    indiceFonte++;

    if (indiceFonte >= fontes.length) {
        indiceFonte = 0;
    }

    document.body.style.fontFamily =
        fontes[indiceFonte];
}



// espaco entre linhas


function maisEspacoLinha() {

    espacoLinha += 0.2;

    document.body.style.lineHeight =
        espacoLinha;
}



// esoaço entre as letras


function maisEspacoLetra() {

    espacoLetra += 1;

    document.body.style.letterSpacing =
        espacoLetra + "px";
}





// voltar ao padrão


function resetarAcessibilidade() {

    tamanhoFonte = 16;
    espacoLinha = 1.5;
    espacoLetra = 0;

    document.body.style.fontSize = "";
    document.body.style.fontFamily = "";
    document.body.style.lineHeight = "";
    document.body.style.letterSpacing = "";

    document.body.style.backgroundColor = "";
    document.body.style.color = "";

    contrasteAtivo = false;
    fonteAlternativa = false;
}