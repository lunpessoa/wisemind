var fase1 = document.getElementById("fase1")
var fase2 = document.getElementById("fase2")
var fase3 = document.getElementById("fase3")
var fase4 = document.getElementById("fase4")
var botao = document.getElementById("botao")
var botao2 = document.getElementById("botao2")
var botao3 = document.getElementById("botao3")
var enviar = document.getElementById("enviar")

botao.onclick = () => {
    fase1.style.display = "none"
    fase2.style.display = "block"
    botao2.style.display = "flex"
    botao3.style.display = "none"
    botao.style.display = "none"
}

botao2.onclick = () => {
    fase2.style.display = "none"
    fase3.style.display = "block"
    botao3.style.display = "flex"
    botao2.style.display = "none"
}

botao3.onclick = () => {
    fase2.style.display = "none"
    fase3.style.display = "none"
    fase4.style.display = "block"
    botao3.style.display = "none"
    enviar.style.display = "flex"
}
