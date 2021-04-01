<?php

function redirect_to($location=null)
{
    if ($location!=null) {
        header('Location:'.$location);
        exit;
    }
}

function passwordGenerator()
{ // Generating the password for the newly created user
    $all_possible_alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; // setting alphanumericals for the system to go through
    $password = array(); // password is an array so the system can set the password as more than 1 character
    $alphabetsLen = strlen($all_possible_alphabet);
    for ($i = 0; $i < 5; $i++) { // For loop, so that the system can execute it 6 times (length of the password)
        $pass_var = rand(0, $alphabetsLen); // pass_var is an variable which has random function to the length of alphanumericals so that it chooses random character from alphanumericals everytime the loop runs
        $password[] = $all_possible_alphabet[$pass_var]; //password is stored
    }
    return implode($password);
}

function verifyPassword($password_entered, $password_stored)
{
    if (password_verify($password_entered, $password_stored)) {
        return true;
    } else {
        return false;
    }
}
