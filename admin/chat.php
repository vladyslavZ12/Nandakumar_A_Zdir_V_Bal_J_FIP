<?php
require_once '../load.php'; 
confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat page</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main id="app">
<h2>This is where chat messages show up</h2>

<section class="messages">
<ul id="messages" v-for="message in messages">
    <newmessage :msg="message" :socketid="socketID"></newmessage>  
</ul>

</section>

<section class="message-wrapper">
    <textarea v-model="message" class="text-message"></textarea>
    <input @click.prevent="dispatchMessage" type="submit" value="send">
    </section>
    </main>
    <script src="/socket.io/socket.io.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script defer type="module" src="scripts/main.js"></script>
</body>

</html>