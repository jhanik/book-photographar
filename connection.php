<?php

$db['hostname']="localhost";
$db['username']="root";
$db['password']="";
$db['database']="photography";

$con=mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
if(mysqli_connect_error())
{
  echo "Failed to connect to MySql:".mysqli_connect_error();
}

 ?>
