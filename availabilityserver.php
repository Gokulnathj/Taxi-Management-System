<!DOCTYPE html>
<html>
    <body>
<?php 
 $db= mysqli_connect('localhost','root','','test');
 if(isset($_POST['taxiavail'])){
     $taxiname=$db->real_escape_string($_POST['taxinum']);
     if($_POST['avail']=="1")
     {
         $status="Yes";
     }
     else{
         $status="No";
     }
     $sql = "UPDATE addtaxi SET availability='$status' WHERE taxino=$taxiname";
     if($db->query($sql)===TRUE){
        echo nl2br("<b>UPDATED SUCCESSFULLY.\n <a href='changeavailability.php'>Change Again</a>"."<br>");
        echo "<a href='webpage.php'>click here</a> for redirecting into login page!";
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

}
?>
</body>
</html>