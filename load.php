<?php
 define('ABSPATH', __DIR__);
 define('ADMIN_PATH', ABSPATH.'/admin');
 define('ADMIN_SCRIPT_PATH', ADMIN_PATH.'/scripts');


   // ini_set('display_errors', 1);
   

   session_start();
require_once ABSPATH.'/config/database.php';
require_once ADMIN_SCRIPT_PATH.'/functions.php';
require_once ADMIN_SCRIPT_PATH.'/login.php';
require_once ADMIN_SCRIPT_PATH.'/user.php';


// if (isset($_SESSION['loginCount'])) // Check if the session is started and login count is stored 
// {
//    $_SESSION['loginCount']++; //increases the number everytime tried to login
//    if ($_SESSION['loginCount'] > 3) //checks if the number of tries is more than 3
//    {
//      redirect_to('exit.php'); //redirects to another warining page
//      exit;
//    }
// } else {
//    $_SESSION['loginCount'] = 1; //if its successful login the count is 1
// }