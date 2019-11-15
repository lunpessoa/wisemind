var estudante = function () {
    var informacao = document.getElementById("btn-informacao")
    var seguranca = document.getElementById("btn-seguranca")
    var endereco = document.getElementById("btn-endereco")

    var plano = document.getElementById("btn-plano")
    informacao.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5')
        document.getElementById("informacoes-1").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    seguranca.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacoes-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca").setAttribute('class', 'row mb-5 ')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    endereco.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacoes-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("plano").setAttribute('class', 'row mb-5 d-none ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5')
    }

    plano.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacoes-1").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("plano").setAttribute('class', 'row mb-5 ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }


}

var profissional = function () {
    var informacao = document.getElementById("btn-informacao")
    var seguranca = document.getElementById("btn-seguranca")
    var endereco = document.getElementById("btn-endereco")

    informacao.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5')
        document.getElementById("informacoes-2").setAttribute('class', 'row mb-5')
        document.getElementById("seguranca").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    seguranca.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacoes-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca").setAttribute('class', 'row mb-5 ')
        document.getElementById("endereco").setAttribute('class', 'row mb-5 d-none')
    }

    endereco.onclick = (e) => {
        e.preventDefault()
        document.getElementById("informacao").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("informacoes-2").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("seguranca").setAttribute('class', 'row mb-5 d-none')
        document.getElementById("endereco").setAttribute('class', 'row mb-5')
    }


}