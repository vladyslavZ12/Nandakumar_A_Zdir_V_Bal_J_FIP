<?php


function getUserLevelMap()
{
    return array(
    '0'=>'Web Editor',
    '1'=>'Web Admin'
);
}

function getCurrentUserLevel()
{
    $user_level_map = getUserLevelMap();

    if (isset($_SESSION['user_level']) && array_key_exists($_SESSION['user_level'], $user_level_map)) {
        return $user_level_map[$_SESSION['user_level']];
    } else {
        return 'not recognized';
    }
}


function createUser($user_data)
{
    if (empty($user_data['username']) || userExists($user_data['username'])) {
        return 'Username is invalid!!';
    }

    $pdo = Database::getInstance()->getConnection();

    $create_user_query = 'INSERT INTO tbl_user(user_fname, user_name, user_pass, user_email, user_level)';
    $create_user_query .= ' VALUES(:fname, :username, :password, :email, :user_level)';
    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_result = $create_user_set->execute(
        array(
        ':fname'=>$user_data['fname'],
        ':username'=>$user_data['username'],
        ':password'=>$user_data['password'],
        ':email'=>$user_data['email'],
        ':user_level'=>$user_data['user_level'],
    )
    );

    if ($create_user_result) {
        $to = $_POST['email']; // Setting the to mail address to the one we recieved from the form
        $subject = 'Created new user'; // Setting the subject of the mail
        $message = sprintf('This email is to notify that you have successfully Created a new user. Your password is: %s.', $user_data['notEncrPassword']); // Setting the message of the mail
        $headers = 'From: donotreply@gmail.com'; // Setting the from address
        mail($to, $subject, $message, $headers);

        redirect_to('index.php');
    } else {
        return 'User not allowed';
    }
}


function getSingleUser($user_id)
{
    $pdo = Database::getInstance()->getConnection();

    $get_user_query = 'SELECT * FROM tbl_user WHERE user_id = :id';
    $get_user_set = $pdo->prepare($get_user_query);
    $result = $get_user_set->execute(
        array(
           ':id'=>$user_id
       )
    );

    if ($result && $get_user_set->rowCount()) {
        return $get_user_set;
    } else {
        return false;
    }
}


function getAllUsers()
{
    $pdo = Database::getInstance()->getConnection();

    $get_user_query = 'SELECT * FROM tbl_user';
    $users = $pdo->query($get_user_query);
    
 
    if ($users) {
        return $users;
    } else {
        return false;
    }
}

function editUser($user_data)
{
    if (empty($user_data['username']) || userExists($user_data['username'])) {
        return 'Username is invalid';
    }
    $pdo = Database::getInstance()->getConnection();

    $update_user_query = 'UPDATE tbl_user SET user_fname =:fname, user_name =:username, user_pass =:password, user_email =:email, user_level =:user_level WHERE user_id = :id';
    $update_user_set = $pdo->prepare($update_user_query);
    $update_user_result = $update_user_set->execute(
        array(
            ':fname'=> $user_data['fname'],
            ':username'=> $user_data['username'],
            ':password'=> $user_data['password'],
            ':email'=> $user_data['email'],
            ':user_level'=> $user_data['user_level'],
            ':id'=> $user_data['id'],
        )
    );

    if ($update_user_result) {
        $_SESSION['user_name'] = $user_data['fname'];
        $_SESSION['user_level'] = $user_data['user_level'];
        redirect_to('index.php');
    } else {
        return 'User not allowed';
    }
}

function isCurrentUserAdminAbove()
{
    return !empty($_SESSION['user_level']);
}

function userExists($username)
{
    $pdo = Database::getInstance()->getConnection();
    $user_exists_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_name = :username';
    $user_exists_set = $pdo->prepare($user_exists_query);
    $user_exists_result= $user_exists_set->execute(
        array(
            ':username'=>$username
        )
    );

    return !$user_exists_result || $user_exists_set->fetchColumn()>0;
}

function deleteUser($user_id)
{
    $pdo = Database::getInstance()->getConnection();
    $delete_user_query = 'DELETE FROM tbl_user WHERE user_id = :id';
    $delete_user_set = $pdo->prepare($delete_user_query);
    $delete_user_result = $delete_user_set->execute(
        array(
        ':id'=>$user_id
    )
    );

    if ($delete_user_result && $delete_user_set->rowCount()>0) {
        redirect_to('admin_deleteuser.php');
    } else {
        return false;
    }
}
