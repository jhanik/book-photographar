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
  <a  href="http://localhost/codes/addphotographer.php">Add Photographers</a>
<a class="active" href="">Delete Photographers</a>
  <a href="http://localhost/codes/bookingtable.php">View Request</a>
    <a href="http://localhost/codes/admin_login.php">Log out</a>

</div>

<form  method="post"  action="deletedphotographer.php">
<label>Photographer Id:</label>
  <input type="text" id="id" name="id"  >
  <br>

  <input type="submit" value="Delete" >
</body>

</html>
