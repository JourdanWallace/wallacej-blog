<?php
    require_once(__DIR__ . "/../model/config.php");
    //making sure the instructions for the username and password are being followed
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
    
    if ($query->num_rows == 1) {
        $row = $query->fetch_array();
        
        if($row["password"] === crypt($password, $row["salt"])) {
            $_SESSION["authenticated"] = true;
            //the user logged in successfully 
            echo "<p>Login Successful!</p>";       
        }       
        else {
            //what's displayed if the username and password are wrong
            echo "<p>Invalid username and password</p>";
        }
     }
     else {
         echo "<p>Invalid username and password</p>";
        }
    