var criado = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        // $('#element').toast('hide')
        // $('#element').toast('dispose')
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('CADASTRO')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-green text-light')
        var text = document.createTextNode('Perfil criado com sucesso!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var facaLog = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        // $('#element').toast('hide')
        // $('#element').toast('dispose')
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('LOGIN')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-red text-light')
        var text = document.createTextNode('Faça login antes!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var email = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        // $('#element').toast('hide')
        // $('#element').toast('dispose')
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('CADASTRO')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-red text-light')
        var text = document.createTextNode('Email já cadastrado!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var senhas = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('SENHAS')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-red text-light')
        var text = document.createTextNode('Senhas não conferem')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var logado = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('LOGIN')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-green text-light')
        var text = document.createTextNode('Logado com sucesso!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var erroLog = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('LOGIN')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-red text-light')
        var text = document.createTextNode('Usuario ou senha não conferem!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var alterado = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('PERFIL')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-green text-light')
        var text = document.createTextNode('alterado com suceso!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var erroAlterado = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('PERFIL')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-red text-light')
        var text = document.createTextNode('Erro ao alterar!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}

var assinatura = function(){
    $(document).ready(function () {
        $('.toast').toast('show');
        var header = document.getElementById("header")
        var strong = document.createElement('strong')
        strong.setAttribute('class','mr-5 text-light')
        var cabecalho = document.createTextNode('ASSINATURA')
        strong.appendChild(cabecalho)
        header.appendChild(strong)
        var mae = document.getElementById('toast')
        var div = document.createElement('div')
        div.setAttribute('class','toast-body toast-red text-light')
        var text = document.createTextNode('Faça a assinatura do nosso plano!')
        div.appendChild(text)
        mae.appendChild(div)

    })
}
