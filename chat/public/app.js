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
var mysql = require('mysql')

//Caminhos
/*app.use(express.static(path.join(__dirname, 'public')))
app.set('views', path.join(__dirname, 'public'))
app.engine('html', require('ejs').renderFile)
app.set('view engine', 'html')*/

//Desativado para uso do php na pagina
// Importa o módulo


 

// Dados do banco de Dados
var connection = mysql.createConnection(
{
host : 'localhost',
user : 'root',
password : '',
database : 'wisemind',
}
);

// Estabelece a conexão
connection.connect();

app.use('/', (req, res) => {
    res.send('index.html')
})

//Definindo Variaveis
let sala = ''
let messages = []
var users = []
var user_total = []
var id_user 
var users_sala = []



//Conexão Socket
io.on('connection', socket => {

        if(users.length == 0){
            console.log("É zero porra")
        }
        // Substitua pelo seu comando
        var queryString = 'SELECT * FROM usuarios where id_usuario=1;';

        // Executa o comando SQL
        connection.query(queryString, function(err, usuario, fields) {
        if (err) throw err;''

        // Faz o laço para retornar os dados
        for (var i in usuario) {
        console.log('Usuario logado: ', usuario[i].Nome);
        }
        });

    //Recebendo dados usuario
    socket.on('sala', data => {
        sala = data.sala
        id_user = data.id_usuario + '-' + String(sala)


        console.log(socket.id)
        console.log('id do usuario: '+id_user)
        socket.join(sala);
        console.log('sala: '+sala)
        console.log('nome: '+data.nome_usuario)
        
        //sala
        if(users.indexOf(id_user) === -1){
            users.push(id_user)
        }
        //total
        if(user_total.indexOf(data.id_usuario) === -1){
            user_total.push(id_user)
        } 

        users_sala = users.filter((item)=>{
            var splitSala = item.split("-")
            return splitSala[1]==String(sala)
        })

        console.log('usuarios por sala ='+users_sala.length)

        var queryChatUpdate = 'UPDATE chat SET Num_Participantes = '+ users_sala.length +' where id_Chat = '+sala+';';
        connection.query(queryChatUpdate, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
          });

        console.log('tamanho user: '+users.length)
        io.to(sala).emit('usersNum', users_sala)
        socket.broadcast.to(sala).emit('usersList', users_sala)
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

        
            //users.splice(2, 1);
            if(users_sala.indexOf(id_user) !== -1){
                users_sala.splice(users_sala.indexOf(id_user), 1)
            }
            console.log("sobrou: "+users_sala.length)
            if(users.indexOf(id_user) !== -1){
                users.splice(users.indexOf(id_user), 1)
            }

            var queryChatUpdate = 'UPDATE chat SET Num_Participantes = '+ users_sala.length +' where id_Chat = '+sala+';';
            connection.query(queryChatUpdate, function (err, result) {
            if (err) throw err;
                console.log(result.affectedRows + " record(s) updated");
            });
          

        
        
        
          io.to(sala).emit('usersNum', users_sala)
          socket.broadcast.to(sala).emit('usersList', users_sala)
        
    })
})

//porta do servidor
server.listen(3001)