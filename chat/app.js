
/*var express = require('express');
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

*/

//Teste diferentes caminhos

const express = require('express')
const path = require('path')
const app = express()
const server = require('http').createServer(app)
const io = require('socket.io')(server)

//Caminhos
/*app.use(express.static(path.join(__dirname, 'public')))
app.set('views', path.join(__dirname, 'public'))
app.engine('html', require('ejs').renderFile)
app.set('view engine', 'html')*/

//Desativado para uso do php na pagina

app.use('/', (req, res) => {
    res.send('index.html')
})

//Definindo Variaveis
let sala = ''
let messages = []
var users = []


//Conexão Socket
io.on('connection', socket => {
    

    //Recebendo dados usuario
    socket.on('sala', data => {
        sala = data.sala
        socket.id = data.id_usuario
        console.log(socket.id)
        socket.join(sala);
        console.log(sala)
        console.log(data.nome_usuario)
        users.push(socket.id)
        console.log(users)
        console.log(users.length)
        socket.broadcast.to(sala).emit('usersList', users)
    })



    //usuario clica em sair
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
        socket.broadcast.to(sala).emit('receiveMessage', data)
    })

    socket.on('disconnect', ()=>{
        
    })
})

//porta do servidor
server.listen(3001)