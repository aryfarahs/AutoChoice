function openPopUp() {
    document.getElementById("personalPage").style.display = "none"
    document.getElementById("overlay").style.display = "flex";
    document.getElementById("footer").style.marginTop = "200px"
}

function closePopUp() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("personalPage").style.display ="flex";
    document.getElementById("footer").style.marginTop = "5%"
}

// VALIDANDO FORM
// variáveis
const form = document.getElementById("form")
const categoria = document.getElementById("categoria")
const marca = document.getElementById("marca")
const modelo = document.getElementById("modelo")
const motor = document.getElementById("motor")
const potencia = document.getElementById("potencia")
const qntLugares = document.getElementById("qntLugares")
const ano = document.getElementById("ano")
const faixaPreco = document.getElementById("faixaPreco")
const consumoEstrada = document.getElementById("consumoEstrada")
const consumoCidade = document.getElementById("consumoCidade")
const qntAirbags = document.getElementById("qntAirbags")
const nts = document.getElementById("notaTesteSegurança")
const transmissao = document.getElementById("transmissao")
const portaMalas = document.getElementById("portaMalas")
const altura = document.getElementById("altura")
const largura = document.getElementById("largura")
const comprimento = document.getElementById("comprimento")
const zeroACem = document.getElementById("zeroACem")
const propulsao = document.getElementById(propulsao)
const tracao = document.getElementById("tracao")
const torque = document.getElementById("torque")


// validação
form.addEventListener("submit", (event) => {
    event.preventDefault();







    // caso esteja tudo certo
    form.submit();
})


// funções
// categoria, modelo
function formatUpper(categoria) {
    const up = categoria.value.toUpperCase();
    categoria.value = up
    return categoria.value
}

// potencia
function formatPotencia(potencia) {
    const potRegex = new RegExp(
        /^[0-9]+$/ + "cv"
    )
    if (potRegex.test(potencia)) {
        return true;
    } return false;
}

// lugares
function formatLugares(lugares) {
    const lugRegex = new RegExp(
        /^[0-9]+$/ + "lugares"
    )
    if (lugRegex.test(lugares)) {
        return true;
    } return false;
}

// ano
function formatAno(ano) {
    const anoRegex = new RegExp(
        /^\d{4}$/ + "lugares"
    )
    if (anoRegex.test(ano)) {
        return true;
    } return false;
}

// preço
function formatPreco(preco) {
    const precoRegex = new RegExp(
        'R$' + /^\d{3}(\.\d{3})/ 
    )
}

