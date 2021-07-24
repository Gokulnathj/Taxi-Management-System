<?php include ('server.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGNUP PAGE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div class="header">
    <form method="post" action="signup.php">
       
    <div class="input-group">
    <?php include('errors.php'); ?>
    <br><h2>SIGNUP</h2><br><hr>
        <label><b>Username</b></label>
        <input type="text" name="username" placeholder="Enter your username"value="<?php echo $username; ?>">
        <label><b>Emailid</b></label>
        <input type="text" name="mailid" placeholder="Enter your email" value="<?php echo $email; ?>">
        <label><b>Password</b></label>
        <input type="password" name="pass1" placeholder="Enter your password">
        <label><b>Confirm Password</b></label>
        <input type="password" name="pass2" placeholder="Enter your password again"><br>
        <br><button type="submit" name="signup" class="btn">Signup</button>
        <p>
        Already registered?<a href="webpage.php">Signin</a>
    </p>
</div> 
    </form>
</div>
    </body>
</html>