<!DOCTYPE html>
<html>
    <body>
<?php 
    $db= mysqli_connect('localhost','root','','test');
    if(isset($_POST['taxireg'])){
        $taxiname=$db->real_escape_string($_POST['taxino']);
        $drivername=$db->real_escape_string($_POST['dname']);
        $mobno=$db->real_escape_string($_POST['num']);
      //  $status=$db->real_escape_string($_POST['avail']);
        if($_POST['avail']=="1")
        {
            $status="Yes";
        }
        else{
            $status="No";
        }
        $sql = "INSERT INTO addtaxi (taxino,drivername,mobno,availability) VALUES('$taxiname','$drivername','$mobno','$status')";
        if($db->query($sql)===TRUE){
            echo nl2br("<b>TAXI ADDED SUCCESSFULLY<b>.\n <a href='adminhomepage.php'>Click here</a> to add once again!.");
            echo nl2br(" .\n <a href='webpage.php'>Click here</a> for redirecting into Login page!.");
        }
        else{
            echo "Error: ".$sql."<br>".$db->error;
        }
       
       
    }
        
?>
   
</body>
</html>