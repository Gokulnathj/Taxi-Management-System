<?php include('server.php'); 
    if(empty($_SESSION['username'])){
        header('location: webpage.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style1.css">
</head>
    <body>
    <div class="header">
            <h2>HOME PAGE</h2>
        </div>
        <div class="content">
            <?php if(isset($_SESSION['success'])): ?>
                <div class="error success">
                    <h3>
                        <?php
            echo $_SESSION['success'];
            unset($_SESSION['success'])
                ?>
                </h3>
                <?php endif ?>
                <?php if(isset($_SESSION['username'])): ?>
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <?php echo " <p><a href='userhomepage.php'><b>Click here</a> to book a taxi!</b></p>"; ?>
               <p><a href="index.php?logout='1'" style="color: red; ">Logout</a></p>
                <?php endif ?>
        </div>
    </body>
</html>