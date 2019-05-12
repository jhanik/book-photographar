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

<h1 style="text-align:center">Booking List</h1>



<?php
include_once 'connection.php';



$sql=" SELECT C.First_name as cf,C.Last_name as cl,C.Email,C.phone,P.pid,P.First_name as pf,P.Last_name as pl,B.venue,B.bdate, B.city FROM booking as B , photographer as P , customer as C where B.photographer_id=P.pid and B.password=C.password  ";


$records=mysqli_query($con,$sql);


?>
<html>
<body>
<table>

 <tr>
   <th>Customer name</th>
   <th>Customer email</th>
    <th>Customer phone</th>
  <th>Selected photographer id</th>
  <th>Selected photographer name</th>
 <th>function venue/adress</th>
<th>booking date</th>
<th>City</th>
</tr>

  <?php
  		while($booking =mysqli_fetch_assoc($records)){
?>
<tr>
<td><?php echo $booking['cf']. ' ' .$booking['cl']?></td>
<td><?php echo $booking['Email']?></td>
<td><?php echo $booking['phone']?></td>
<td><?php echo $booking['pid']?></td>
<td><?php echo $booking['pf']. ' ' .$booking['pl']?></td>
<td><?php echo $booking['venue']?></td>
<td><?php echo $booking['bdate']?></td>
<td><?php echo $booking['city']?></td>

</tr>
<?php

}
?>
</table>

</body>
</html>
