<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css"/>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

header {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
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


<h1 style="color:pink">JUST CLICK PHOTOGRAPHY</h1>
  </header>
  </div>



  <body>

  <div class="topnav">
    <a href="http://localhost/codes/first_page.html">Home</a>
    <a  class="active" href="#admin">Admin Login</a>
    <a href="http://localhost/codes/login.php">User Login</a>
    <a href= " http://localhost/codes/gallery.html " >Gallery</a>
  <a href="http://localhost/codes/payment.php"> Online Payment</a>
    <a href="http://localhost/codes/contact.html">Contact Us</a>
    <a href="http://localhost/codes/about.html"> About</a>
  </div>

<form  method="post"  action="admin.php">
<label> Username:</label>
  <input type="text" id="user" name="user" value="username"  >
  <br>
<label> password:</label>
  <input type="text" id="pass" name="pass" value="password" >
  <br><br>
  <input type="submit" value="Submit" >
</form>




  </body>

  </html>
