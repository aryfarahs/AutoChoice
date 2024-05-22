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


function trocaOlho() {
    var olho = document.getElementById("olho")
    var olhoF = document.getElementById("olhoF")
    var input = document.getElementById("senha")

    if (olho.style.display == "none") {
        olho.style.display ="block"
    } else {
        olho.style.display = "none"
    }

    if (olhoF.style.display == "block") {
        olhoF.style.display ="none"
    } else {
        olhoF.style.display = "block"
    }

    if (input.type === 'text') {
        input.type = 'password'
    } else {
        input.type = 'text'
    }


}

function trocaOlho2() {
    var olho2 = document.getElementById("olho2")
    var olhoF2 = document.getElementById("olhoF2")
    var input2 = document.getElementById("senha2")

    if (olho2.style.display == "none") {
        olho2.style.display ="block"
    } else {
        olho2.style.display = "none"
    }

    if (olhoF2.style.display == "block") {
        olhoF2.style.display ="none"
    } else {
        olhoF2.style.display = "block"
    }

    if (input2.type === 'text') {
        input2.type = 'password'
    } else {
        input2.type = 'text'
    }


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
const propulsao = document.getElementById("propulsao")
const tracao = document.getElementById("tracao")
const torque = document.getElementById("torque")

const senhaC = document.getElementById("senhaC")


// validação
form.addEventListener("submit", (event) => {
    event.preventDefault();

    // senha
    if (senhaC.value === "" || !senhaForte(senhaC.value)) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "A senha deve conter: Mínimo de 6 caracteres, 1 Letra Maiúscula, 1 Número",
          });
        return
    }



    // caso esteja tudo certo
    form.submit();
})


// funções
// senha
function senhaForte(senhaC) {
    const senhaRegex = new RegExp(
        /^(?=.*[A-Z])(?=.*\d)(?=.*[$*&@#_])[A-Za-z\d$*&@#_]{6,}(?!(?:1234|4321))$/
    )
    if(senhaRegex.test(senhaC)) {
        return true;
    } return false
}


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

