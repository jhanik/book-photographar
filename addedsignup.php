<?php


 include_once "connection.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['lname']) || empty($_POST['user']) || empty($_POST['phone']) || empty($_POST['pass']) || empty($_POST['adrs']) || empty($_POST['City']) || empty($_POST['country'])) {
     ?>
     <div style="width:30%;margin:0 400px;">
       <img src="block.png" alt="Success Icon"  wstyle="float:left; "/>


<h1 style="text-align:center">form is not filled properly</h1>
</div>
<?php
}
else{

  $sql="INSERT INTO customer
  (First_name,Last_name,username,password,Email,phone)
  values('".$_POST['fname']."','".$_POST['lname']."','".$_POST['user']."','".$_POST['pass']."','".$_POST['email']."','".$_POST['phone']."');";
  $sql1="INSERT INTO clocation
  (Address,City,postalcode,Country)
  values('".$_POST['adrs']."','".$_POST['City']."','".$_POST['zip']."' ,'".$_POST['country']."');";



  $data = mysqli_query($con,$sql) or die("Failed to query database".mysql_error());
    $data1 = mysqli_query($con,$sql1) or die("Failed to query database".mysql_error());


    if($data && $data1){
?>
<div style="width:30%;margin:0 auto;">
  <img src="success.png" alt="Success Icon"  wstyle="float:left; "/>
  <h1 style="text-align:center">Successful</h1>
</div>
<?php
}

else {

  echo " Error"  . $sql . "<br>" . mysqli_error($con);
}
}
}


 ?>
