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
charset : 'utf8mb4'

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

function retira_acentos(str) 
{

    com_acento = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝŔÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿŕ";

sem_acento = "AAAAAAACEEEEIIIIDNOOOOOOUUUUYRsBaaaaaaaceeeeiiiionoooooouuuuybyr";
    novastr="";
    for(i=0; i<str.length; i++) {
        troca=false;
        for (a=0; a<com_acento.length; a++) {
            if (str.substr(i,1)==com_acento.substr(a,1)) {
                novastr+=sem_acento.substr(a,1);
                troca=true;
                break;
            }
        }
        if (troca==false) {
            novastr+=str.substr(i,1);
        }
    }
    return novastr;
}    

var nsp = io.of('/chats');
nsp.on('connection', function(socket) {
   console.log('someone connected');
   
   socket.on('apagarSala',(sala)=>{
        io.of('/').to(sala).emit('apagado');
        var queryChatUpdate = 'DELETE FROM chat WHERE id_Chat = '+sala+';';
        connection.query(queryChatUpdate, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
          });
          var queryChatUpdate = 'DELETE FROM mensagens WHERE id_sala = '+sala+';';
        connection.query(queryChatUpdate, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
          });
    })
});


//Conexão Socket
io.on('connection', socket => {
    socket.emit('history');

    //Recebendo dados usuario
    socket.on('sala', data => {
        sala = data.sala
        socket.info = data.id_usuario
        socket.sala = data.sala
        socket.user = data.id_usuario + "-" + socket.sala
        console.log(socket.user)
        console.log('id do usuario: '+id_user)
        socket.join(sala);
        var clients = io.sockets.adapter.rooms[sala]
        console.log(io.sockets.adapter.rooms[sala])
        console.log(clients)
        console.log('numero usuarios: '+clients.length+' da sala = '+socket.sala)
        console.log('sala: '+sala)
        console.log('nome: '+data.nome_usuario)
        
        //sala
        if(users.indexOf(socket.user) === -1){
            users.push(socket.user)
        }
        //total
        if(user_total.indexOf(data.id_usuario) === -1){
            user_total.push(id_user)
        }

        users_sala = users.filter((item)=>{
            let con = item.split("-")
            if(con[1]==socket.sala){
                return con
            }
        })
        if(clients.length>20){
            socket.to(socket.sala).emit('chockFull');
        }

        console.log(users_sala)


        console.log('usuarios por sala ='+users_sala)

        var queryChatUpdate = 'UPDATE chat SET Num_Participantes = '+ clients.length +' where id_Chat = '+socket.sala+';';
        connection.query(queryChatUpdate, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
          });

        console.log('tamanho user: '+users.length)
        io.to(socket.sala).emit('usersNum', clients)
        io.to(socket.sala).emit('usersList', users_sala)
        
    })



    //usuario clica em sair
    socket.on('leaveUser',(sala)=>{
        socket.leave(sala)
    })

    //usuario esta digitando...press
    socket.on('typing', (data) => {
        socket.broadcast.to(data.sala).emit('renderTyping', data.nome_usuario)
    })

    //usuario esta digitando...up
    socket.on('typingUp', (sala) => {
        socket.broadcast.to(sala).emit('noRenderTyping')
    })

    //pegar hora de envio
    function getHours() {
        var data = new Date()
        var hora = data.getHours()
        hora = hora-3;
        var min = data.getMinutes()
        if (min < 10) {
            min = "0" + min
        }

        var now = `${hora}:${min}:00`
        return now
    }

    //Enviando mensagem
    socket.on('sendMessage', data => {
        
        var queryMessage = 'insert into mensagens (mensagem, hora_envio, id_usuario, id_sala) values ("'+retira_acentos(data.message)+'", "'+getHours()+'",'+data.id_usuario+','+data.sala+');';
             connection.query(queryMessage, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
          });
        console.log(data)
        messages.push(data)
        socket.broadcast.to(sala).emit('receiveMessage', data)
    })

    socket.on('apagar_usu', id => {
        console.log(id)
        socket.broadcast.to(id.sala).emit('apagar_exit',id.id)
    })

    socket.on('disconnect', ()=>{


        socket.leave(socket.rooms);

        if(users.indexOf(socket.user) !== -1){
            users.splice(users.indexOf(socket.user),1)
        }

        if(users_sala.indexOf(socket.user) !== -1){
            users_sala.splice(users_sala.indexOf(socket.user),1)
        }

        clients = io.sockets.adapter.rooms[socket.sala]

        if(clients==undefined){
            users_sala = []

        }else if(clients.length ==1 ){
            users_sala = []
        }else{

        

        users_sala = users_sala.filter((item)=>{
            let con = item.split("-")
                
            if(item!=socket.user && socket.sala!=undefined && socket.user!=undefined && con[1]==socket.sala){
                return item
            }
        })
        }
        console.log(users_sala)

        

       

        console.log(clients)
        if(clients!=undefined && socket.sala!=undefined){

            

            console.log(clients)
            console.log('sobrou numero usuarios: '+clients.length+' da sala = '+socket.sala)

            io.to(socket.sala).emit('usersNum', clients)
            var queryChatUpdate = 'UPDATE chat SET Num_Participantes = '+ clients.length +' where id_Chat = '+socket.sala+';';
            connection.query(queryChatUpdate, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
            });
            
        }else if(socket.sala!=undefined){
            console.log('cabo')
            var queryChatUpdate = 'UPDATE chat SET Num_Participantes = '+ 0 +' where id_Chat = '+socket.sala+';';
             connection.query(queryChatUpdate, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
          });
        }
        
          socket.broadcast.to(sala).emit('usersList', users_sala)
        
    })
})

//porta do servidor
server.listen(3001)