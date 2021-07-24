<?php include('bookingserver.php'); ?>
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
    }
    h2{
        font-size: 2em;
        margin: 0;
        padding: 5px;
        color:black;
        text-align: center;
    }
    h1{
        text-align: center;
    }
    .picture{
        background:url("car1.jpg");
        min-height: 720px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .data{
        position: absolute;
        right: 350px;
        margin: 20px;
        max-width: 800px;
        padding: 16px;
        background: #fff;
        border-radius: 10px;
    }
    input[type=text],input[type=number]{
        width: 100%;
        padding: 13px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        font-size: 15px;
        border: 1px solid gray;
    border-radius: 5px;
    }
    .button{
        background: #4caf50;
        color: #fff;
        padding: 13px 20px;
        font-size: 16px;
        font-weight: bold;
        width:100%;
        border: none;
    }
    .button:hover{
        background: #333;
    }
    a{
        text-decoration: none;
        font-size: 14px;
    }
    a:hover{
        text-decoration: underline;
    }
    </style>
    </head>
    <body>
        <div class="picture">
        <form action="bookingserver.php" method="post">
            <div class="data">
                <h2>Ola Cabs</h2><hr>
                <label><b>Name:</b></label><br> 
                <input type="text" name="name" placeholder="Enter your Full name"required><br>
           <label><b>Pickup Location:</b></label><br> 
            <input type="text" name="pickup" placeholder="Enter your pickup location"required><br>
             <label><b>Destination:</b></label><br> 
            <input type="text" name="dest" placeholder="Enter your drop location"required><br>
            <label><b>Mobile Number:</b></label><br>
            <input type="number" name="num" placeholder="Enter your mobile no"required><br>
            <button type="submit" class="button"name="booking">Submit</button><br><br>
            </div>
        </form>
        </div>
    </body>
</html>