<?php
require_once '../load.php';
// confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sub.css">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">  
    <title>Dashboard page</title>
</head>
<body>
<section class='body2'>
     <section class='options'>
   <?php if (isCurrentUserAdminAbove()): ?>
     <h2>Welcome to admin panel, <?php echo $_SESSION['user_name'];?>!</h2>
     <section class='clickable_images'>
       <section class="redirects">
     <a href="admin_createuser.php"><img src="../images/new_user.png" class="linkimages" alt="add new user"></a>
     <h2>Create user</h2> 
    </section>
     <section class="redirects">
     <a href="admin_deleteuser.php">Delete User</a>
     <h2>Delete User</h2>
     </section>
   <?php endif;?>
   <section class="redirects">
    <a href="admin_edituser.php"><img src="../images/edit_user.png" class="linkimages"alt="edit user"></a>
    <h2>Edit User </h2>
  </section>
    <section class="redirects">
    <a href="admin_logout.php"><img src="../images/logout.png" class="linkimages" alt=""></a>
    <h2>Logout</h2>
  </section>
  </section>  
  </section>
    </section>
</body>
</html>