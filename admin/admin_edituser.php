<?php
require_once '../load.php';
confirm_logged_in();

$id = $_SESSION['user_id'];
$current_user = getSingleUser($id);

if (empty($current_user)) {
    $message = 'Failed to get user info';
}

if (isset($_POST['submit'])) {
    $data = array(
    'fname'=>trim($_POST['fname']),
    'username'=>trim($_POST['username']),
    'password'=>trim($_POST['password']),
    'email'=>trim($_POST['email']),
    'user_level'=>isCurrentUserAdminAbove()?trim($_POST['user_level']):'0',
    'id'=>$id
);

    $message = editUser($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Edit user</title>
</head>
<body>
    <h2>Edit user</h2>

    <?php echo !empty($message) ? $message:'';?>
    <?php if (!empty($current_user)): ?>
    <form action="admin_edituser.php" method="post">
<?php while ($user_info = $current_user->fetch(PDO::FETCH_ASSOC)):?>

 <label for="first_name">First Name</label>
 <input type="text" name="fname" value="<?php echo $user_info['user_fname']; ?>"  id="first_name">

 
 <label for="username">User Name</label>
 <input type="text" name="username" value="<?php echo $user_info['user_name']; ?>" id="username">

 
 <label for="password">password</label>
 <input type="text" name="password" value="<?php echo $user_info['user_pass']; ?>" id="password">

 
 <label for="email">email</label>
 <input type="email" name="email" value="<?php echo $user_info['user_email']; ?>" id="email">
 <?php if (isCurrentUserAdminAbove()): ?>
 <label for="user_level">User level</label>
 <select name="user_level" id="user_level">
 <?php $user_level_map = getUserLevelMap();
 foreach ($user_level_map as $val => $label):?>
 <option value="<?php echo $val;?>" <?php echo $val===(int)$user_info['user_level']?'selected':'';?>>
 <?php echo $label;?>
 
 </option>
 <?php endforeach; ?>
 
 </select>
<?php endif; ?>
 <button type="submit" name="submit">Update user</button>
 <?php endwhile;?>
 </form>

 <?php endif;?>

 <a href="index.php">Back to dashboard</a>
 
</body>
</html>