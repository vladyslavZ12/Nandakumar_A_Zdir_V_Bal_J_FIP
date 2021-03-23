<?php
require_once '../load.php'; 
confirm_logged_in();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">  
    <title>Dashboard page</title>
</head>
<body>
<section class='body'>
     <section class='options'>
   <?php if(isCurrentUserAdminAbove()): ?>
     <a href="admin_createuser.php"><img src="../images/new_user.png" alt="add new user"></a>
     <a href="admin_deleteuser.php">Delete User</a>
   <?php endif;?>
   <a href="chat.php"><img src="../images/chat.png" alt="chat"></a>
    <a href="admin_edituser.php"><img src="../images/edit_user.png" alt="edit user"></a>
    <a href="admin_logout.php"><img src="../images/logout.png" alt=""></a>
    </section>
    </section>
</body>
</html>