<?php
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
$result = mysqli_query($con,"SELECT * from admin where username = '$username' and password = '$password' ")
or die("Failed to query database".mysql_error());
$row= mysqli_fetch_array($result);
if ( $row['username']==$username && $row['password']==$password){

  include_once 'adminview.php';
 }
else {
  ?>
  <h1 style="text-align:center"> Login Failed!!! username and password incorrect</h1>
  <?php
}

?>
