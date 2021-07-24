<?php include ('adminserver.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            ADMIN PAGE
        </title>
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
            right: 150px;
            margin: 20px;
            max-width: 500px;
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
        .butt{
            background: #4caf50;
            color: #fff;
            padding: 13px 20px;
            font-size: 16px;
            font-weight: bold;
            width:100%;
            border: none;
        }
        .butt:hover{
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
        <form action="adminserver.php" method="POST">
           
            <div class="data">
            <h2>ADD TAXI</h2><hr>
            <label><b>Taxi no: </b></label>
            <input type="text" name="taxino" placeholder="Enter The Taxi no"required><br>
            <label><b>Driver name: </b></label>
            <input type="text" name="dname" placeholder="Enter the driver name"required><br>
            <label><b>Driver Mobile Number: </b></label>
            <input type="number" name="num" placeholder="Enter driver mobile no"required><br>
            <label><b>Availability : </b></label> 
        	<select name="avail" id="availability">  
                <option   value="1">Available</option> 
                 <option value="2">Not Available</option> </select><br><br>
             <button type="submit" class="butt" name="taxireg"><b>Submit</b></button><br> 
             <a href="changeavailability.php" ><b>Click here</b></a> to change availability status!
            </div>
        </form>
    </div>
    </body>
</html>