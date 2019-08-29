var fase1 = document.getElementById("fase1")
var fase2 = document.getElementById("fase2")
var botao = document.getElementById("botao")
var enviar = document.getElementById("enviar")

enviar.onclick = () => {
    fase1.style.display = "none"
    fase2.style.display = "block"
    enviar.style.display = "none"
    botao.style.display = "block"
}