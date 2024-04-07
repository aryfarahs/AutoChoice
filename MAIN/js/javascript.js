function openPopUp() {
    document.getElementById("personalPage").style.display = "none"
    document.getElementById("overlay").style.display = "flex";
}

function closePopUp() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("personalPage").style.display ="flex";
}