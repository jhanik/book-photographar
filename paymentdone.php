<?php


 include_once "connection.php";


  $sql="INSERT INTO payment
  (cusername,cpassword,type,cardno,bkashno,amount)
  values('".$_POST['user']."','".$_POST['pass']."','".$_POST['type']."','".$_POST['card']."','".$_POST['bkash']."','".$_POST['amount']."');";



  $data = mysqli_query($con,$sql) or die("Failed to query database".mysql_error());



    if($data){
?>
<div style="width:30%;margin:0 auto;">
  <img src="success.png" alt="Success Icon"  wstyle="float:left; "/>
  <h1 style="text-align:center"> Payment Done</h1>
</div>
<?php
}

else {

  echo " Error"  . $sql . "<br>" . mysqli_error($con);
}


 ?>
