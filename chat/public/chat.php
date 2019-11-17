<?php
    include('../../assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
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
            <section class="user d-flex float-left align-items-center">
                <div class="image-user rounded-circle bg-light ml-5" style='background-image: url("../../<?php echo($con['perfil_img']); ?>")'> </div>
                <label class="user-name ml-3 mt-3 text-light font-weight-bold font-italic"><?php echo($con['Nome']);?><br><label
                        class="situacao font-weight-bold font-italic">#Online</label> </label>
                <a class="sair-btn text-decoration-none float-right text-danger" href="" id="sair"><i
                        class="fas fa-sign-out-alt"></i></a>
            </section>
            <section class="info-class position-relative float-left bg-dark float-right">
                <label class="chat-name ml-5 mt-2 text-light font-weight-bold font-italic float-left">Sala:
                    Biologia<br><label class="area-chat font-weight-bold font-italic">Área: Biológicas</label> </label>


                <div class="profissional float-right mt-2">
                    <label
                        class="user-name mr-3 mt-3 text-warning font-weight-bold font-italic text-right">Eduardo_Saul<br>

                        <label class="situacao font-weight-bold font-italic">#Online</label>

                    </label>
                    <div class="image-user rounded-circle bg-light" style="background-image: url('img/saul.jpg');">
                    </div>

                </div>

            </section>
        </section>
        <section class="corpo border-top-0">
            <section class="estudantes bg-dark float-left">
                <ul class="pt-3 pl-0">
                    <li class="list-user">
                        <a href="#" class="users text-decoration-none">
                            <div class="class-users rounded-circle bg-light ml-5"
                                style="background-image: url('img/lima.jpg');"></div>
                            <label class="user-name ml-3 mt-3 h6 font-weight-bold font-italic">Lima_Barreto <br><label
                                    class="users-situacao font-weight-bold font-italic">#Online</label> </label>
                        </a>
                    </li>
                    <li class="list-user">
                        <a href="#" class="users text-decoration-none">
                            <div class="class-users rounded-circle bg-light ml-5"
                                style="background-image: url('img/antonio.jpg');"></div>
                            <label class="user-name ml-3 mt-3 h6 font-weight-bold font-italic">Antonio_Conselheiro
                                <br><label class="users-situacao font-weight-bold font-italic">#Online</label></label>
                        </a>
                    </li>
                    <li class="list-user">
                        <a href="#" class="users text-decoration-none">
                            <div class="class-users rounded-circle bg-light ml-5"
                                style="background-image: url('img/jorge.jpg');"></div>
                            <label class="user-name ml-3 mt-3 h6 font-weight-bold font-italic">Jorge_MegaFire <br><label
                                    class="users-situacao font-weight-bold font-italic">#Online</label></label>
                        </a>
                    </li>
                </ul>
                <div class="buttons d-flex justify-content-center">
                    <a class="btn" style="color: #fff; cursor: default;" href=""><i class="fas fa-user-friends"></i>
                        <label class="font-weight-bold font-italic mb-0" style="cursor: default;"> 04/20</label></a>
                    <a class="btn text-light" href=""><i class="fas fa-ban"></i> <label
                            class="font-weight-bold font-italic mb-0" style="cursor:pointer;"> Ocupado</label></a>
                </div>
            </section>
            <section class="content-chat float-right">
                <section class="chat">
                    <div id="main-message" style="height: 100%; position:relative">
                        <div id="teste">
                            <ol id="messages">
                            </ol>

                            <div id="bottom"></div>

                        </div>

                </section>

                <section class="menssage">
                    <div class="container-fluid">
                        <hr class="bg-light">
                        <form autocomplete="off" id="chat">
                            <div class="input-group form-group">
                                <input autofocus type="text" class="form-control bg-dark text-light"
                                    placeholder="Conversar no chat.." aria-describedby="basic-addon2" name="email"
                                    style="border-color:#1f1f1f;" id="msg">
                                <div class="input-group-append">
                                    <button class="chat-btn btn bg-dark text-light" style="border: 1px solid #1f1f1f;"
                                        id="button-addon2"><i class="fas fa-paperclip"></i></button>
                                </div>
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
    var socket = io.connect("http://localhost:3001");
    //var socket = io(); //conexão
     //sala
    
    const campoMessagem = document.getElementById('msg')
    

    //Enviando a sala para o servidor - posteriormente outros dados 
    var funSala = function (salaObject) {
        var salaObject = {
        id_usuario,
        nome_usuario,
        sala
    }
        socket.emit('sala', salaObject)
    }
    funSala(sala)

    //usuario esta digitando...press
    /*campoMessagem.onkeydown = () => {
        let user = document.getElementById("user").value
        let dataObject = {
            user,
            sala
        }
        socket.emit('typing', dataObject)
    }
    //Renderizando 
    socket.on('renderTyping', function (id) {
        let typingSpace = document.getElementById('typingSpace')
        typingSpace.style.display = "block"
        typingSpace.innerHTML = `<b>${id} esta digitando</b>`

    })

    //usuario esta digitando...up
    campoMessagem.onkeyup = () => {
        socket.emit('typingUp', sala)
    }
    //Parando de renderizar
    socket.on('noRenderTyping', () => {
        setTimeout(() => {
            typingSpace.style.display = "none"
        }, 1000)
    })
    */


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
        link.setAttribute(`href`, `http://localhost/index2.php?id=${message.nome_usuario}`)
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



    document.getElementById("sair").onclick = (e) => {
        e.preventDefault()
        socket.emit('leaveUser', sala)
        window.location.href='../../index.php'
    }
    

    //Recebendo mensagens
    socket.on('receiveMessage', function (message) {
        renderMessageReceived(message)
        document.getElementById('bottom').scrollIntoView(false);

    })

    //Recebendo usuarios
    socket.on('user', function (data) {
        userList(data)
    })

    //receber usuarios conectados
    socket.on('usersList', (users)=>{
        alert('ta funcionando')
    })

    //Enviando mensagens
    document.getElementById('chat').onsubmit = function (e) {
        e.preventDefault()

        var msg = document.getElementById('msg').value

        //Dados da mensgem
        if (msg.length != 0) {
            var messageObject = {
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
			echo('<script>window.alert("Faça o login antes")
			window.location.href = "../../login.php";</script>');
		}
	
?>


</html>