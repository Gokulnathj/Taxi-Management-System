<?php
session_start();
$username="";
$email="";
$errors=array();
$db= mysqli_connect('localhost','root','','test');
if(isset($_POST['signup']))
{
    $username=$db->real_escape_string($_POST['username']);
    $email=$db->real_escape_string($_POST['mailid']);
    $pass1=$db->real_escape_string($_POST['pass1']);
    $pass2=$db->real_escape_string($_POST['pass2']);
    if(empty($username)){
        array_push($errors,"username is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($pass1)){
        array_push($errors,"password is required");
    }
    if($pass1!=$pass2){
        array_push($errors,"The two passwords do not match");
    }

    if(count($errors)==0){
        $pass1=md5($pass2);
        $sql = "INSERT INTO users (username,email, password) VALUES('$username','$email','$pass1')";
     mysqli_query($db,$sql);
    
    $_SESSION['username']=$username;
    $_SESSION['success']="You are now logged in!";
    header('location: index.php');
    }
}
if(isset($_POST['login']))
{
    if($_POST['username']=='admin'&& $_POST['pass1']=='admingokul'){
        header( 'Location: adminhomepage.php');
    }else{
    $username=$db->real_escape_string($_POST['username']);
    $password=$db->real_escape_string($_POST['pass1']);
    
    if(empty($username)){
        array_push($errors,"username is required");
    }
    if(empty($password)){
        array_push($errors,"password is required");
    }
    if(count($errors)==0){
        $password=md5($password);
        $query= "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username']=$username;
    $_SESSION['success']="You are now logged in!";
    header('location: index.php');
        }
        else{
            array_push($errors,"Wrong username/password combination");
       // echo "<b>Wrong username/password combination";
       // echo nl2br("")
        }
    }
}}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: webpage.php');
}

?>