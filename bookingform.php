<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css"/>
<style>

header {
    padding: 1em;
    color: pink;
    background-color: green;
    clear: left;
    text-align: center;
  }
  </style>
</head>
<body>
  <div>
  <header>


  <h1 style="text-align:center">Photographer Booking</h1>
</header>
<form  method="post"  action="checkpass.php">
<label>photographer id :</label>
  <input type="text" id="pid" name="pid"  >
  <br>
    <label>usename :</label>
      <input type="text" id="user" name="user"  >
      <br><br>
      <level> password :</level><br/>
                          <input type="text" id="pass" name="pass">
              <br><br>

      <label> Booking Date:</label>
    <input type="date" id= "date" name="date">
        <br><br>

          <label> Venue/Address:</label>

            <input type="text" id="venue" name="venue"  >

            <br><br>
            <label> City:</label>
              <input type="text" id="city" name="city"  >
              <br><br>

                 <br><br>
                 <input type="submit" value="book" >







</body>

</html>
