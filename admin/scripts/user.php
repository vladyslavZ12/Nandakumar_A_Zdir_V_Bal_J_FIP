<?php


function getUserLevelMap(){
return array(
    '0'=>'Web Editor',
    '1'=>'Web Admin'
);
}

function getCurrentUserLevel(){
    $user_level_map = getUserLevelMap();

    if(isset($_SESSION['user_level']) && array_key_exists($_SESSION['user_level'], $user_level_map)){
return $user_level_map[$_SESSION['user_level']];
    }

    else{
        return 'not recognized';
    }

}


function createUser($user_data){

$pdo = Database::getInstance()->getConnection();

$create_user_query = 'INSERT INTO tbl_user(user_fname, user_name, user_pass, user_email, user_level)';
$create_user_query.= ' VALUES(:fname, :username, :password, :email, :user_level)';
$create_user_set = $pdo->prepare($create_user_query);
$create_user_result = $create_user_set->execute(

    array(
':fname'=>$user_data['fname'],
':username'=>$user_data['username'],
':email'=>$user_data['email'],
':password'=>$user_data['password'],
':user_level'=>$user_data['user_level'],
    )

    );

if($create_user_result){
    redirect_to('index.php');
}
else{
    return 'User not allowed';
}

}
