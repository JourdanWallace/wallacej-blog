<?php
//the files being accessed
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //kill this users page
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>
<nav>
    <ul>
        <!--the name of the link-->
        <li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
    </ul>
</nav>