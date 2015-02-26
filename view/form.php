<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //kill this users page and send them back to the index
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>
 <!--This is where your blog is created-->
<h1>Create Blog Post</h1>
<!--Telling what is happening and the path it  is taking-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <!--The title of the post-->
    <div>  
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
    <!--Where to write the post-->
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    <!--How to put the post onto the blog-->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>