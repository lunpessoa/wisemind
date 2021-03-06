<?php
    include('../../assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true || isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
	$sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
	$resul=mysqli_query($conexao, $sql);
    $con=mysqli_fetch_array($resul);

    //pegar sala
    $sql_sala=('select * from chat where id_Chat = '. $_SESSION['sala'].';');
	$resul_sala=mysqli_query($conexao, $sql_sala);
    $con_sala=mysqli_fetch_array($resul_sala);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Chat</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style/chat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body class="align-items-center d-flex">
    <section class="bg-dark container-fluid fundo">
        <section class="topo">

            <section class="user d-flex float-left align-items-center p-3">
                <div class="position-relative p-0 ml-2 mr-3 image-thumb">
                    <img class="img-user" src="../../<?php echo($con['perfil_img']); ?>" alt="">
                    <div class="status-perfil"></div>
                </div>
                <label
                    class="user-name ml-1 mt-3 text-light font-weight-bold font-italic"><?php echo($con['Nome']);?><br>
                    <label class="situacao font-weight-bold font-italic">#Online</label>
                </label>
            </section>

            <section class="info-class position-relative bg-dark float-right p-3">
                <div class="row">
                    <div class="col-6">
                        <label class="ml-3 chat-name text-light font-weight-bold font-italic mb-0 font-lobster">Sala:
                            <?php echo($con_sala['nome']); ?></label><br>
                        <label class="ml-3 area-chat font-weight-bold font-italic">Área: <?php echo($con_sala['Area']);?></label>
                    </div>
                    <div class="col-6 justify-content-end align-items-center d-flex">
                        <a class="sair-btn text-decoration-none mr-3" href="" id="sair">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </div>
                </div>
            </section>
        </section>
        
        <section class="corpo border-top-0">
            <section class="estudantes bg-dark float-left">
                <ul class="pt-3 pl-0" id="list-users">

                </ul>
                <div class="buttons d-flex justify-content-center">
                    <a class="btn pb-0" style="color: #fff; cursor: default;" href="">
                        <i class="fas fa-user-friends"></i>
                        <label class="font-weight-bold font-italic mb-0" style="cursor: default;"><label
                                id="campo_num"></label>/20</label>
                    </a>
                </div>
            </section>
            <section class="content-chat float-right">
                <section class="chat">
                    <div id="main-message" style="height: 100%; position:relative">
                        <div id="teste">
                            <ol id="messages">
                            </ol>
                            <div class='font-weight-bold isTyping  ml-2 d-none' id='isTyping'></div>
                            <div id="bottom"></div>
                        </div>
                </section>

                <section class="menssage">
                    <div class="container-fluid">
                        <hr class="bg-light">
                        <form autocomplete="off" id="chat">
                            <div class="input-group form-group">
                                <input autofocus type="text" class="form-control bg-dark text-light"
                                    placeholder="Conversar no chat.." aria-describedby="basic-addon2" name="mensagem"
                                    style="border-color:#1f1f1f;" id="msg">
                                
                                <div class="input-group-append">
                                    <button class="chat-btn btn bg-dark text-light" style="border: 1px solid #1f1f1f;"
                                        id="button-addon2"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </section>
        </section>
    </section>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<!-- <script src="/socket.io/socket.io.js"></script>  -->
<script src="../node_modules/socket.io-client/dist/socket.io.js"></script>
<?php
    
    echo("<script>
        var id_usuario = ".$con['id_usuario']."
        var nome_usuario = '".$con['Nome']."'
        var sala = ".$con_sala['id_Chat']."
    </script>");
    
?>
<script>
    function renderUsers(data) {
        $.post('../../assets/chat-users.php', {
            pag: data
        }, function (data2) {
            $("#list-users").html(data2);
        });

    }

    function history() {
        $.post('../../assets/chat-users.php', {
            his: true
        }, function (data3) {
            $("#messages").html(data3);
            document.getElementById('bottom').scrollIntoView(false);
        });

    }

    function sair(id) {
        $.post('../../assets/chat-users.php', {
            sair: id
        }, function (id) {
            console.log(id)
           if(id == 1){
            window.location.href = "../../chats.php"
            
           }
        });

    }
</script>
<script>
    var socket = io.connect("http://localhost:3001", {
        'reconnection': true,
        'timeout': 1000,
        'connect_timeout': 100,
        'reconnectionDelay': 200,
        'reconnectionDelayMax': 500,
        'reconnectionAttempts': 1
    })

    //var socket = io(); //conexão
    //sala
    socket.on('connect_error', function () {
        window.location.href = "../../chats.php"
        socket.emit('desconectado')
    });

   

    socket.on('chockFull', function () {
        $.post('../../assets/redmin-sala.php', {
				note: true,
			}, function (data) {
			});
        socket.emit('desconectado')
    });

    
    
    const campoMessagem = document.getElementById('msg')

    
    //Enviando a sala para o servidor - posteriormente outros dados 
    var funSala = function (salaObject) {
        var salaObject = {
            id_usuario,
            nome_usuario,
            sala: sala
        }
        socket.emit('sala', salaObject)
    }
    funSala(sala)

    //messnagens antigas
    socket.on('history',()=> {
        history()
        

    })
    

    socket.on('apagado',()=> {
       window.location.href = "../../chats.php"

    })

    
    //Renderizando 
    socket.on('renderTyping', function (nome) {
        let teste = document.getElementById('isTyping')
        teste.setAttribute('class', 'isTyping  ml-3')
        teste.innerHTML = `${nome} está digitando...`
        document.getElementById('bottom').scrollIntoView(false);
 

    })

    socket.on('noRenderTyping', function (nome) {
       
    
        let teste = document.getElementById('isTyping')
        setTimeout(function(){
            teste.setAttribute('class', 'isTyping  ml-3 d-none')
        }, 1500);
    })

    //usuario esta digitando...up
    campoMessagem.onkeydown = (event) => {
        if(event.key != 'F5'){
        var salaObject = {
            id_usuario,
            nome_usuario,
            sala
        }
        
        socket.emit('typing',salaObject)
    }
    }
    //Parando de renderizar
    campoMessagem.onkeyup = () => {
        sala
        socket.emit('typingUp',sala)
    }
    


    //função renderizar mensagens próprias
    function renderMessage(message) {
        var chat = document.getElementById('messages')
        var li = document.createElement("li")
        li.setAttribute('class', 'd-flex justify-content-end text-break')
        var data = document.createElement("label")
        var datatxt = document.createTextNode(`${getHours()}`)
        data.setAttribute('id', 'data-self')
        data.setAttribute('class', 'float-right ml-2 mb-0')
        data.appendChild(datatxt)
        var br = document.createElement('br')
        var div = document.createElement("div")
        div.setAttribute('id', 'self')
        li.appendChild(div)
        var text = document.createTextNode(message.message)
        div.appendChild(text)
        div.appendChild(data)
        chat.appendChild(li)
    }

    //função renderizar mensagens de outros usuarios
    function renderMessageReceived(message) {
        var br = document.createElement('br')
        var chat = document.getElementById('messages')
        var li = document.createElement("li")
        var data = document.createElement("label")
        var datatxt = document.createTextNode(`${getHours()}`)
        data.appendChild(datatxt)
        data.setAttribute('id', 'data-fild')
        data.setAttribute('class', 'float-right ml-2 mb-0')
        li.setAttribute('class', 'text-break')
        var div = document.createElement("div")
        div.setAttribute('id', 'fild')
        var link = document.createElement("a")
        link.setAttribute(`href`, `../../perfil-view?us=${message.id_usuario}`)
        link.setAttribute(`targe`, `_blank`)
        link.setAttribute(`id`, `link-user`)
        link.setAttribute(`class`, `text-decoration-none float-left p-0`)
        var text = document.createTextNode(message.nome_usuario)
        var textMessage = document.createTextNode(`${message.message}`)
        link.appendChild(text)
        div.appendChild(link)
        div.appendChild(data)
        div.appendChild(br)
        div.appendChild(textMessage)
        li.appendChild(div)
        chat.appendChild(li)

    }

    function getHours() {
        var data = new Date()
        var hora = data.getHours()
        var min = data.getMinutes()
        if (min < 10) {
            min = "0" + min
        }

        var now = `${hora}:${min}`
        return now
    }

    function numUsers(num) {
        var campoNum = document.getElementById('campo_num')
        campoNum.innerHTML = num;
    }





    document.getElementById("sair").onclick = (e) => {
        e.preventDefault()
        socket.emit('leaveUser', sala)
        window.location.href = '../../chats.php'
    }

    //numero
    socket.on('usersNum', function (data) {
        //userList(data)
        numUsers(data.length)
    })


    //Recebendo mensagens
    socket.on('receiveMessage', function (message) {
        renderMessageReceived(message)
        document.getElementById('bottom').scrollIntoView(false);

    })

    //Recebendo usuarios
    socket.on('usersList', function (data) {
        renderUsers(data)
    })

    socket.on('apagar_exit', function (id) {
        sair(id)
    })

    const  apagar_usu = document.getElementById('apagar-usu')
    console.log(apagar_usu)

    function apagar(id){
        var deletegeObject = {
                id: id,
                sala: sala
            }
        socket.emit('apagar_usu', deletegeObject)
    }

    //Enviando mensagens
    document.getElementById('chat').onsubmit = function (e) {
        e.preventDefault()

        var msg = document.getElementById('msg').value

        //Dados da mensgem
        if (msg.length != 0) {
            var messageObject = {
                id_usuario: id_usuario,
                nome_usuario: nome_usuario,
                message: msg,
                sala: sala
            }

            renderMessage(messageObject)

            socket.emit('sendMessage', messageObject)
            var msg = document.getElementById('msg').value = ""
            document.getElementById('bottom').scrollIntoView(false);


        }
    }
</script>
<?php
		}else{
			$_SESSION["facaLog"]=true;
            echo('<script>window.location.href = "../../login.php";</script>');;
		}
	
?>


</html>