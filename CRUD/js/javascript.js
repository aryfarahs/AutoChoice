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

// validando FORM
const form = document.getElementById("form")
const categoria = document.getElementById("categoria")
const marca = document.getElementById("marca")
const modelo = document.getElementById("modelo")