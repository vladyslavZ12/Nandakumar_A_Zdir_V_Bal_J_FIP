<?php
require_once '../load.php';

confirm_logged_in(true);

$password = passwordGenerator();
$hashPassword = password_hash($password, PASSWORD_DEFAULT, ['cost' => 6]);

echo $hashPassword;

if (isset($_POST['submit'])) {
    $data = array(
        'fname'=>trim($_POST['fname']),
        'username'=>trim($_POST['username']),
        'email'=>trim($_POST['email']),
        'password'=>$hashPassword,
        'notEncrPassword'=>$password,
        'user_level'=>trim($_POST['user_level'])
 );
    $message = createUser($data);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
      <link rel="stylesheet" href="main.css">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
<h2>Create User</h2>
<?php echo !empty($message)?$message:''; ?>
<form action="admin_createuser.php" method="post">
<label>First Name</label>
<input type="text" name="fname" value="" id="first_name">


<label for="username">UserName</label>
<input type="text" name="username" value="" id="username">


<label for="email">Email</label>
<input type="email" name="email" value="" id="email">


<label for="user_level">User Level</label>
<select name="user_level" id="user_level">
<?php $user_level_map = getUserLevelMap();
foreach ($user_level_map as $val => $label):?>

<option value="<?php echo $val;?>"><?php echo $label; ?></option>
<?php endforeach;?>
</select>

<button type="submit" name="submit" >Create</button>

</form>

<a href="index.php">Back to dashboard</a>

</body>
</html>
