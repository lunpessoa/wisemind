var fase1 = document.getElementById("fase1")
var fase2 = document.getElementById("fase2")
var fase3 = document.getElementById("fase3")
var fase4 = document.getElementById("fase4")
var botao = document.getElementById("botao")
var botao2 = document.getElementById("botao2")
var botao3 = document.getElementById("botao3")
var enviar = document.getElementById("enviar")

botao.onclick = () => {
    if(document.getElementById("nome").value.length < 1 || document.getElementById("sobrenome").value.length < 1
    || document.getElementById("datanasc").value.length < 10 || document.getElementById("celular").value.length < 15){
        $.post('./assets/cadastro.php', {
            tudo: true,
        }, function (data) {
            $("#note").html(data);
        });
    }else{
        fase1.style.display = "none"
        fase2.style.display = "block"
        botao2.style.display = "flex"
        botao3.style.display = "none"
        botao.style.display = "none"
    }
}
botao2.onclick = () => {
    if(document.getElementById("uf").value.length < 1 || document.getElementById("cidade").value.length < 1
    || document.getElementById("bairro").value.length < 1 || document.getElementById("numero-camp").value.length < 1
    || document.getElementById("rua").value.length < 1 || document.getElementById("cep").value.length < 1
    || document.getElementById("cpf-camp").value.length < 14){
        $.post('./assets/cadastro.php', {
            tudo: true,
        }, function (data) {
            $("#note").html(data);
        });
    }else{
        fase2.style.display = "none"
        fase3.style.display = "block"
        botao3.style.display = "flex"
        botao2.style.display = "none"
    }
    
}

botao3.onclick = () => {
    if(document.getElementById("certificado").value.length < 1 
    || document.getElementById("experiencia").value.length < 1){
        $.post('./assets/cadastro.php', {
            tudo: true,
        }, function (data) {
            $("#note").html(data);
        });
    }else{
    fase2.style.display = "none"
    fase3.style.display = "none"
    fase4.style.display = "block"
    botao3.style.display = "none"
    enviar.style.display = "flex"
    }
    
}
