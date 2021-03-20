const express = require('express');
const path = require('path');
const messenger = require('socket.io')();   
const app = express();
app.use(express.static("public"));
const port = process.env.port || 5050;
app.get("/", (req,res) => {
res.sendFile(path.join(__dirname,"index.php"));
});

const server = app.listen(port,() => {
console.log(`App running ${port}`);
}); 


app.get("/chat", (req,res) => {
    res.sendFile(path.join(__dirname,"chat.php"));
    });
    
    messenger.attach(server);

    messenger.on('connection', (socket)=>{
        console.log(`a user connected: ${socket.id}`);
        socket.emit('connected', {sId: `${socket.id}`, message:'new connection'});

        socket.on('chatmessage', function(msg){
            console.log(msg);
            messenger.emit('message',{id: socket.id, message:msg});
        });

        socket.on('disconnect', ()=> {
            console.log('a user disconnected');
        })

      
    });

