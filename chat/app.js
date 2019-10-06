
var express = require('express');
var app = express();
var path = require('path');
var server = require('http').createServer(app);
var io = require('socket.io')(server);
var port = process.env.PORT || 3001;

server.listen(port, () => {
  console.log('Server listening at port %d', port);
});

// Routing
app.use(express.static(path.join(__dirname, 'public')));


//Definindo Variaveis
let sala = ''
let messages = []
var users = []


//Conexão Socket
io.on('connection', socket => {
    console.log(socket.id)

    //Recebendo dados usuario
    socket.on('sala', data => {
        sala = data
        socket.join(sala);
        console.log(sala)

        users.push(socket.id)
        console.log(users)
    })



    //usurio clica em sair
    socket.on('leaveUser',(sala)=>{
        socket.leave(sala)
    })

    //usuario esta digitando...press
    socket.on('typing', (dados) => {
        socket.broadcast.to(dados.sala).emit('renderTyping', dados.user)
    })

    //usuario esta digitando...up
    socket.on('typingUp', (sala) => {
        socket.broadcast.to(sala).emit('noRenderTyping')
    })

    //Enviando mensagem
    socket.on('sendMessage', data => {
        console.log(data)
        messages.push(data)
        socket.broadcast.to(data.sala).emit('receiveMessage', data)
    })
})

//porta do servidor
