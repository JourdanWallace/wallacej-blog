<?php
    //the file being accessed
    require_once(__DIR__ . "/../model/config.php");
    //making sure the instructions for the email, username, and password are being followed
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    //the unique and random id for the encryptd password 
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
    //encrypted password
    $hashedPassword = crypt($password, $salt);
    
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            //what you will need to input to be logged in
            . "email = '$email',"
            . "username = '$username',"
            . "password= '$hashedPassword'," 
           //the encryption
            . "salt = '$salt'");
    
    if($query){
        //the username was correct and the person is no logged in
        echo "Successfully created user: $username";
    }
    else {
        //tells if the session has no error
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }