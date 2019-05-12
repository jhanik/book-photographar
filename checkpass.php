<?php
$username=$_POST['user'];
$password=$_POST['pass'];


$db['hostname']="localhost";
$db['username']="root";
$db['password']="";
$db['database']="photography";

$con=mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['pid']) || empty($_POST['user']) || empty($_POST['pass']) || empty($_POST['date']) || empty($_POST['venue']) || empty($_POST['city'])) {
    ?>
    <div style="width:30%;margin:0 400px;">
      <img src="block.png" alt="Success Icon"  wstyle="float:left; "/>


<h1 style="text-align:center">form is not filled properly</h1>
</div>
<?php
}
else{


$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);
$result = mysqli_query($con,"SELECT username,password from customer where username = '$username' and password = '$password' ")
or die("Failed to query database".mysql_error());
$row= mysqli_fetch_array($result);
if ( $row['username']==$username && $row['password']==$password){
include_once "overlap.php";
 }
else {
  ?>
  <h1 style="text-align:center"> Login Failed!!! username and password incorrect</h1>
  <?php
}
}
}


?>
