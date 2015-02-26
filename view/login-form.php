<?php
    //the file being accessed
    require_once(__DIR__ . "/../model/config.php");
?>
<!--Where the users log in-->
<h1>Login</h1>
<!--What is happening and where-->
<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <!--What text will go in the username box-->
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    <!--What text will go in the password box-->
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    <!--The button used to put the post on php my admin-->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>