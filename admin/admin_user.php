<?php
require_once '../load.php';

confirm_logged_in();

if(isset($_POST['submit'])) {
    $data = array(
        'fname'=>trim($_POST['fname']),
        'username'=>trim($_POST['username']),
        'email'=>trim($_POST['email']),
        'password'=>trim($_POST['password']),
        'user_level'=>trim($_POST['user_level']),

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
<form action="admin_user.php" method="post">
<label>First Name</label>
<input type="text" name="fname" value="" id="first_name">


<label for="username">UserName</label>
<input type="text" name="username" value="" id="username">


<label for="email">Email</label>
<input type="email" name="email" value="" id="email">


<label for="password">Password</label>
<input type="text" name="password" value="" id="password">


<label for="user_level">User Level</label>
<select name="user_level" id="user_level">
<?php $user_level_map = getUserLevelMap();
foreach($user_level_map as $val => $label):?>

<option value="<?php echo $val;?>"><?php echo $label; ?></option>
<?php endforeach;?>
</select>

<button type="submit" name="submit" >Create</button>

<?php // Sending out mail to the user 

if(isset($_POST['submit'])){ //Check if the form is submitted
$to = $_POST['email']; // Setting the to mail address to the one we recieved from the form
$subject = 'Created new user'; // Setting the subject of the mail
$message = 'This email is to notify that you have successfully Created a new user'; // Setting the message of the mail
$headers = 'From: donotreply@gmail.com'; // Setting the from address
mail($to, $subject, $message, $headers); //Sending out the mail

function passwordGenerator() { // Generating the password for the newly created user
    $all_possible_alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; // setting alphanumericals for the system to go through 
    $password = array(); // password is an array so the system can set the password as more than 1 character
    $alphabetsLen = strlen($all_possible_alphabet); 
    for ($i = 0; $i < 5; $i++) { // For loop, so that the system can execute it 6 times (length of the password) 
        $pass_var = rand(0, $alphabetsLen); // pass_var is an variable which has random function to the length of alphanumericals so that it chooses random character from alphanumericals everytime the loop runs
        $password[] = $all_possible_alphabet[$pass_var]; //password is stored 
    } 
}
}
?>

</form>
</body>
</html>