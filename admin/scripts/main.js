import ChatMessage from "./components/TheMessageComponent.js"

(() => {
    console.log('fired');
   const socket = io();

   function setUserId(sId, message){
debugger;
vm.socketID = sId;
   }

   function appendMessage(message){
       vm.messages.push(message);
   }
   const vm = new Vue ({
    data:{
        messages:[],
        nickname: "",
        username:"",
        socketID: "",
        message:""
    },

    created: function(){
            console.log('its alive');
    },
    
    methods: {
        dispatchMessage(){
            debugger;
            socket.emit('chatmessage', {content: this.message, name: this.nickname || "anonymous"})
        }
    },
    components: {
        newmessage: ChatMessage
    }



   }).$mount("#app");
   socket.addEventListener("connected", setUserId);
   socket.addEventListener('message', appendMessage);
})();