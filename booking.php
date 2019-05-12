<?php


 include_once "connection.php";


  $sql="INSERT INTO booking
  (photographer_id,username,password,bdate,venue,city)
  values('".$_POST['pid']."','".$_POST['user']."','".$_POST['pass']."','".$_POST['date']."','".$_POST['venue']."','".$_POST['city']."');";



  $data = mysqli_query($con,$sql) or die("Failed to query database".mysql_error());



    if($data){
?>
<div style="width:30%;margin:0 auto;">
  <img src="success.png" alt="Success Icon"  wstyle="float:left; "/>
  <h1 style="text-align:center"> Booking Successful</h1>
</div>
<?php
}

else {

  echo " Error"  . $sql . "<br>" . mysqli_error($con);
}


 ?>
