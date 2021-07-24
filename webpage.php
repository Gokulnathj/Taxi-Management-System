<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>DBMS PROJECT</title>
<style>
    body,html{
    height: 100%;
    font-family: cursive;
    margin: 0;
    padding: 0;
    background-color:greenyellow;
}
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}/*
h2{
    font-size: 2em;
    margin: 0;
    padding: 5px;
    color:black;
    text-align: center;
}*/
h1{
    text-align: center;
}
.wrap{
    background:url("car1.jpg");
    min-height: 720px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.container{
    position: absolute;
    right: 350px;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background: #fff;
    border-radius: 10px;
}
input[type=text],input[type=password]{
    width: 100%;
    padding: 13px;
    margin: 5px 0 22px 0;
    border: none;
    /* padding: 5px 10px; */
    background: #f1f1f1;
    font-size: 15px;
    border: 1px solid gray;
    border-radius: 5px;
}
.btn{
    background: #4caf50;
    color: #fff;
    padding: 13px 20px;
    font-size: 16px;
    font-weight: bold;
    width:100%;
    border: none;
}
.btn:hover{
    background: #333;
}
a{
    text-decoration: none;
    font-size: 14px;
}
a:hover{
    text-decoration: underline;
}
.error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}
</style>
    </head>
    <body>
        
        <div class="wrap">
      
            <form action="webpage.php" method="post">
                <div class="container">
                <?php include('errors.php'); ?>
                    <h1>LOGIN</h1><hr>
                    <label for="uname"><b>Username</b></label>
                    <input type="text" id="uname" name="username"placeholder="Enter your username"required>
                    <label for="pwd"><b>Password</b></label>
                    <input type="password"name="pass1"id="pwd"placeholder="Enter your password"required>
         
                    <button type="submit" class="btn"name="login">Login</button><br>
                    <a href="#">Forgot password?</a><br>
                    Don't have account?<a href="signup.php" ><b>Signup</b></a>
                </div>
            </form>
        </div>
    </body>
    
</html>