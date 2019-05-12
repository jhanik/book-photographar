<?php
$pid=$_POST['pid'];
$date=$_POST['date'];
$username=$_POST['user'];
$password=$_POST['pass'];



$db['hostname']="localhost";
$db['username']="root";
$db['password']="";
$db['database']="photography";

$con=mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);


$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);
$result = mysqli_query($con,"SELECT photographer_id,bdate,username,password from booking where photographer_id = '$pid' and bdate = '$date'  ")
or die("Failed to query database".mysql_error());
$row= mysqli_fetch_array($result);

if ( $row['photographer_id']==$pid && $row['bdate']==$date){
?>
  <h1 style="text-align:center"> Sorry!!! The photographer is already booked on that day</h1>
  <?php
}
else{

  include_once "booking.php";


}
?>
