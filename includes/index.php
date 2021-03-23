<?php
    include("./config/database.php");
    include("functions.php");

    if(isset($_GET["id"])) {
        $targetID = $_GET["id"];
        $result = getSingleUser($pdo, $targetID);

        return $result;
    } else {
        $allUsers = getAllUsers($pdo);

        return $allUsers;
    }