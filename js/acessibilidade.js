const painel = document.getElementById("painelAcessibilidade");
const btnAcessibilidade = document.getElementById("btnAcessibilidade");

btnAcessibilidade.addEventListener("click", () => {
    painel.classList.toggle("ativo");
});


// =============================
// CONFIGURAÇÕES INICIAIS
// =============================

let tamanhoFonte = 16;
let espacoLinha = 1.5;
let espacoLetra = 0;

let contrasteAtivo = false;
let fonteAlternativa = false;


// =============================
// TEXTO +
// =============================

function aumentarTexto() {

    tamanhoFonte += 2;

    document.body.style.fontSize =
        tamanhoFonte + "px";
}


// =============================
// TEXTO -
// =============================

function diminuirTexto() {

    if (tamanhoFonte > 10) {

        tamanhoFonte -= 2;

        document.body.style.fontSize =
            tamanhoFonte + "px";
    }
}


// =============================
// ALTERAR FONTE
// =============================

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


// =============================
// ESPAÇO ENTRE LINHAS
// =============================

function maisEspacoLinha() {

    espacoLinha += 0.2;

    document.body.style.lineHeight =
        espacoLinha;
}


// =============================
// ESPAÇO ENTRE LETRAS
// =============================

function maisEspacoLetra() {

    espacoLetra += 1;

    document.body.style.letterSpacing =
        espacoLetra + "px";
}


// =============================
// ALTO CONTRASTE
// =============================

// function contrasteAlto() {

//     if (!contrasteAtivo) {

//         document.body.style.backgroundColor =
//             "black";

//         document.body.style.color =
//             "yellow";

//         contrasteAtivo = true;

//     } else {

//         document.body.style.backgroundColor =
//             "";

//         document.body.style.color =
//             "";

//         contrasteAtivo = false;
//     }
// }


// =============================
// RESTAURAR CONFIGURAÇÕES
// =============================

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