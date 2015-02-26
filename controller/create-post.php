<?php
    //this is the file being accessed
    require_once(__DIR__ . "/../model/config.php");
    //making sure the instructions for the title and post are being followed
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //telling what will be saved in php my admin
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

    if($query){
        //The title and posts were successfully updated into the blog
        echo "<p>Successfully inserted post: $title</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    