<?php




$db['hostname']="localhost";
$db['username']="root";
$db['password']="";
$db['database']="photography";
$id=$_POST['id'];

$con=mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);

$result = mysqli_query($con,"DELETE from photographer where pid = '$id' ")
or die("Failed to query database".mysql_error());
$result2 = mysqli_query($con,"DELETE from plocation where lid = '$id' ")
or die("Failed to query database".mysql_error());
if($result && $result2){
?>
<div style="width:30%;margin:0 auto;">
<img src="success.png" alt="Success Icon"  wstyle="float:left; "/>
<h1 style="text-align:center"> DELETED Successfully</h1>
</div>
<?php
}

else {

echo "not deleted";
}



?>
