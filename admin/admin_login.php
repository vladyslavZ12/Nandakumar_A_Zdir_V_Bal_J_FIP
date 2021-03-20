<?php 
require_once '../load.php';
$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_SESSION['user_id'])){
    redirect_to('index.php');
}

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!empty($username) && !empty($password)){
        $result = login($username, $password, $ip);
        $message = $result;
    }
    else {
        $message ='';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="main.css">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"></head>
<body>
<?php echo !empty($message)?$message:''; ?>
    <form action="admin_login.php" method="post">
    <label for="username"></label>
    <input type="text" name="username" placeholder="username">
    <br><br>
    <label for="password"></label>
    <input id="password" type="password" name="password" placeholder="password">
    <br><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>