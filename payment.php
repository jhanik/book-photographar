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
  footer{
  clear: both;

  background-color:black;
  width: 1340px;
 adding:20px 15px;
  color: white;
  text-align:center;
  font-size: 50px;
}
p{
    text-align: center;
      color: black;
    font-size: 50px;
    border: 100px;
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
    <a  href="http://localhost/codes/first_page.html">Home</a>
    <a href="http://localhost/codes/admin_login.php">Admin Login</a>

    <a href= " http://localhost/codes/login.php" >User Login</a>
    <a href= " http://localhost/codes/gallery.html " >Gallery</a>
    <a class="active"  href=""> Online payment</a>

    <a href="http://localhost/codes/contact.html">Contact Us</a>
    <a href="http://localhost/codes/about.html"> About</a>
  </div>
  <p style="font-size: 30px">The fees for our wedding/birthday photographers BDT=15000/-perday</p>
<p style="font-size: 30px">The fees for our landscape photographers BDT=10000/-perday</p>
<p style="font-size: 30px">The fees for our protrait photographers BDT=12000/-perday</p>
<form  method="post"  action="addpayment.php">
  <label> customer usename :</label>
    <input type="text" id="user" name="user"  >
    <br><br>
    <level> customer password :</level><br/>
                        <input type="text" id="pass" name="pass">
            <br><br>

            <level>Payment Type: </level><br/>
               <select name="type" >
               <option value="cd">credit card</option>
               <option value="vc">Visa card</option>
               <option value="br">bkash/rocket</option>

                    <select/>
              <br><br>
          <level> Card no :</level><br/>
          <input type="text" id="card" name="card">
                  <br><br>
          <level> Bkash/Rocket no :</level><br/>
              <input type="text" id="bkash" name="bkash">
                <br><br>
                <level> Amount in BDT :</level><br/>
                    <input type="text" id="amount" name="amount">
                      <br><br>
                   <input type="submit" value="Done" >



  </body>
  </html
