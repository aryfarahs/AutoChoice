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