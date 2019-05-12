<?php


 include_once "connection.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['adrs']) || empty($_POST['City']) || empty($_POST['country'])) {
     ?>
     <div style="width:30%;margin:0 400px;">
       <img src="block.png" alt="Success Icon"  wstyle="float:left; "/>
<h1 style="text-align:center">form is not filled properly</h1>
</div>
<?php
}
else{

  $sql="INSERT INTO photographer
  (First_name,Last_name,Email_id,Phone_no,Experience,Gender,Type)
  values('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['exp']."','".$_POST['gender']."','".$_POST['type']."');";
  $sql1="INSERT INTO plocation
  (Address,City,postalcode,Country)
  values('".$_POST['adrs']."','".$_POST['City']."','".$_POST['zip']."'  ,'".$_POST['country']."');";
  $data = mysqli_query($con,$sql) or die("Failed to query database".mysql_error());
    $data1 = mysqli_query($con,$sql1) or die("Failed to query database".mysql_error());

    if($data && $data){
?>
<div style="width:30%;margin:0 auto;">
  <img src="success.png" alt="Success Icon"  wstyle="float:left; "/>
  <h2 style="text-align:center">photographer Added Successfully</h2>
</div>
<?php
}

else {

  echo " Error"  . $sql . "<br>" . mysqli_error($con);
}
}
}

 ?>
