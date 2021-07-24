<!DOCTYPE html>
<html>
    <body>
<?php 
    $db= mysqli_connect('localhost','root','','test');
    if(isset($_POST['booking'])){
        $name=$db->real_escape_string($_POST['name']);
        $pickup=$db->real_escape_string($_POST['pickup']);
        $drop=$db->real_escape_string($_POST['dest']);
        $mobno=$db->real_escape_string($_POST['num']);
       /* if ($result = mysqli_query($db, "SELECT id from addtaxi where availability='Yes' LIMIT 1")) {
           
            if(mysqli_num_rows($result))
            {
                $upd = mysqli_query($db, "UPDATE addtaxi SET availability='No' where id='$result'");
                echo "Taxi has been successfully booked!!!";
            }else{
                echo "OOPS! No available cabs right now! Try again Later!";
            }
    }*/
    $sql = "SELECT * from addtaxi where availability='Yes' LIMIT 1";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
 $row = $result->fetch_assoc();
 echo nl2br("<b>Taxi has been successfully booked!!!.\n Your Driver Details: ");
   echo  "<br>"." Taxi no:</b> " . $row['taxino']."<br>". " <b>Driver name: </b>" . $row['drivername']."<br>"."<b> Contact: </b>" . $row['mobno']. "<br>";
   echo nl2br("<b>Taxi will be arrived shortly!Please Wait! .\n <a href='webpage.php'>Click here</a> for redirecting into Login page!.");
 $upd = mysqli_query($db, "UPDATE addtaxi SET availability='No' where id='$row[id]'");
 
  }
else {
    echo nl2br("<b>OOPS! No available cabs right now! Try again Later! .\n <a href='userhomepage.php'>Try Again</a>");
}
    }

    ?>
    
    </body>
    </html>    