<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<h1 style="text-align:center">Photographers List</h1>



<?php
include_once 'connection.php';



$sql=" SELECT pid,First_name,Last_name,Email_id,Phone_no,Experience,Gender,City,Type  FROM photographer,plocation where pid=lid";

$records=mysqli_query($con,$sql);
//$photographer = $records->fetch_assoc();

?>
<html>
<body>
<table>

 <tr>
<th>Photographer ID</th>
<th>Photographer Name</th>
<th>Email Id</th>
<th>Phone No</th>
<th>Experience</th>
<th>Gender</th>
<th>City</>
<th>Type</th>
</tr>

  <?php
  		while($photographer=mysqli_fetch_assoc($records)){
?>
<tr>

<td><?php echo $photographer['pid']?></td>
<td><?php echo $photographer['First_name']. ' ' .$photographer['Last_name']?></td>
<td><?php echo $photographer['Email_id']?></td>
<td><?php echo $photographer['Phone_no']?></td>
<td><?php echo $photographer['Experience']?></td>
<td><?php echo $photographer['Gender']?></td>
<td><?php echo $photographer['City']?></td>
<td><?php echo $photographer['Type']?></td>
</tr>
<?php

}
?>
</table>

</body>
</html>
