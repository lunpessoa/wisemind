var informacao = document.getElementById("botao-conteudo-1")
var seguranca = document.getElementById("botao-conteudo-2")
var endereco = document.getElementById("botao-conteudo-3")

var estudante = function () {

    var plano = document.getElementById("botao-conteudo-4")
    informacao.onclick = (e) => {
        e.preventDefault()
        informacao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
        document.getElementById("informacao").setAttribute('class', 'row mb-5')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
        endereco.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        seguranca.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        plano.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
    }

    seguranca.onclick = (e) => {
        e.preventDefault()
        seguranca.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
        informacao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        endereco.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        plano.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
    }

    endereco.onclick = (e) => {
        e.preventDefault()
        endereco.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5')
        informacao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        seguranca.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        plano.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
    }

    plano.onclick = (e) => {
        e.preventDefault()
        plano.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("plano").setAttribute('class', 'row mb-5 ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
        informacao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        seguranca.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        endereco.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
    }


}

var profissional = function () {

    informacao.onclick = (e) => {
        e.preventDefault()
        informacao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
        document.getElementById("informacao").setAttribute('class', 'row mb-5')
        document.getElementById("informacao-2-1").setAttribute('class', 'row mb-5')
        document.getElementById("informacao-2-2").setAttribute('class', 'row mb-5')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
        seguranca.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        endereco.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
    }

    seguranca.onclick = (e) => {
        e.preventDefault()
        seguranca.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-1-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
        informacao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        endereco.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
    }


    endereco.onclick = (e) => {
        e.preventDefault()
        endereco.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-2-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-2-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacao-reg").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("endereco").setAttribute('class', 'row mb-5')
        informacao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
        seguranca.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
    }


}