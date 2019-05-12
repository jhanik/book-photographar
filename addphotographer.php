<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css"/>
<style>

header {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
  }



p{
    text-align: center;
      color: black;
    font-size: 50px;
    border: 100px;
}

.center_div {
    border: 1px solid gray;
    margin-left: auto;
    margin-right: auto;
    width: 85%;
    background-color: #d0f0f6;
    text-align: left;
    padding: 120px;
}
  .topnav {
    overflow: hidden;
    background-color: #333;
  }

  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .topnav a.active {
      background-color: #4CAF50;
      color: white;
  }
  </style>
</head>
<body>
  <div>
  <header>


  <h1>WELCOME TO ADMIN</h1>
</header>
</div>



<body>

<div class="topnav">
  <a  href="http://localhost/codes/adminview.php">Home</a>
  <a class="active" href="http://localhost/codes/addphotographer.php">Add Photographers</a>
<a href="http://localhost/codes/delete.php">Delete Photographers</a>
  <a href="http://localhost/codes/bookingtable.php">View Request</a>
    <a href="http://localhost/codes/admin_login.php">Log out</a>

</div>


<form  method="post"  action="addedphotographer.php">
<label>First Name :</label>
  <input type="text" id="fname" name="fname"  >
  <br>
<label> Last Name:</label>
  <input type="text" id="lname" name="lname"  >
  <br><br>
  <label>Email Id :</label>
    <input type="text" id="email" name="email"  >
    <br>
  <label> Phone no:</label>
    <input type="text" id="phone" name="phone"  >
    <br><br>
    <label>Experience :</label>
      <input type="text" id="exp" name="exp"  >
      <br><br>
      <level> Gender :</level><br/>
                          <input type="radio" name="gender" value="Male" checked="checked" />Male &nbsp;
                          <input type="radio" name="gender" value="Female"  />Female &nbsp;
                          <br><br>
      <label> Address:</label>
        <input type="text" id="adrs" name="adrs"  >
        <br><br>
        <label> City:</label>
          <input type="text" id="city" name="City"  >

          <br><br>
          <label> Zip/postal code:</label>
            <input type="text" id="zip" name="zip"  >

            <br><br>
            <label> Country:</label>
              <input type="text" id="country" name="country"  >
              <br><br>
              <level>Photographer Type: </level><br/>
                 <select name="type" >
                 <option value="Landscape">Landscape</option>
                 <option value="Protrait">Protrait</option>
                 <option value="Wedding/Birthday/others">Wedding/Birthday/others</option>



                 <select/>
                 <br><br>
                 <input type="submit" value="Submit" >
            </body>

            </html>
