var informacao = document.getElementById("botao-conteudo-1")
var seguranca = document.getElementById("botao-conteudo-2")
var endereco = document.getElementById("botao-conteudo-3")

var estudante = function () {

    var plano = document.getElementById("botao-conteudo-4")
        informacao.onclick = (e) => {
            e.preventDefault()
            document.getElementById("informacao").setAttribute('class', 'row mb-5')
            document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5')
            document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5')
            document.getElementById("informacao-reg").setAttribute('class', 'row mb-5')
            document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
            document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
            document.getElementById("plano").setAttribute('class', 'row mb-5 d-none')
            document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    seguranca.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    endereco.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5')
    }

    plano.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5')
        document.getElementById("plano").setAttribute('class', 'row mb-5 ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }


}

var profissional = function () {

    informacao.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5')
            document.getElementById("informacao-2-1").setAttribute('class', 'row mb-5')
            document.getElementById("informacao-2-2").setAttribute('class', 'row mb-5')
            document.getElementById("informacao-reg").setAttribute('class', 'row mb-5')
            document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
            document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
            document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    seguranca.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-2-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-2-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    endereco.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-2-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-2-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("endereco").setAttribute('class', 'row mb-5')
    }


}