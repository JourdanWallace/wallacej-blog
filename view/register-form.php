<?php
    //the file being accessed
    require_once(__DIR__ . "/../model/config.php");
?>
<!--Where the users register-->
<h1>Register!</h1>
<!---->
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <!--What text will go in the username box-->
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email" />
    </div>
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
    <!--The button submitting your registration info-->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>