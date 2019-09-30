<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="reservation.css">
    <link rel="stylesheet" type="text/css" href="topbar.css">
    
    <title>Reservation</title>
</head>
<body>







    <div class="top-bar">
	

        <img src="images/Train2.png">
        
      
        <strong>~ WE MAKE TRAVEL EASY ~</strong>
      
      
      
      
      <div class="site-search">
        
        <form action="index.html" method="get">
          
          <input type="search" name="search-box">
            <button type="submit"></button>
      
        </form>
      
      
      
      
      </div><!-- site-search -->
      
      
      
      
      
      </div><!-- top-bar -->
      
      
      
      
      
            <div class="nav-bar">
            <img src="images/Unt.png">
              
              <div class="nav-bar-links">
                  
                  <ul>
                    <li><a href="../home-and-contact/index.html">home</a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li><a href="../regis-pay-rese/Registration.html">Register</a></li>
                    <li><a href="../website login/pro.html">Log In</a></li>
                     <li><a href="../shed - about/Shedule.html">Shedule</a></li>
                    <li><a href="../home-and-contact/contact-us.html">contact us</a></li>
                    <li><a href="../shed - about/About us.html">About us</a></li>
      <hr color="blue">
                  </ul>
      
      
              </div><!--nav-bar-links-->
      
            </div><!--nav-bar-->
      
      
      <!-----------------------------END ------Navigaion ---------bar-------------------------->
      
      

























<div class="new">
    <div id="mySidenav" class="sidenav">
        <a href="readMore.html#kan" id="kandy">Kandy</a>
        <a href="readMore.html#col" id="colombo">Colombo</a>
        <a href="readMore.html#gal" id="galle">Galle</a>
        <a href="readMore.html#mat" id="matara">Matara</a>
        <a href="readMore.html#ell" id="ella">Ella</a>
        <a href="readMore.html#jaf" id="jaffna">Jaffna</a>
      </div>
    </div>
    
  <div class="res" style="font-size: 20px;"><b>
    <h1 style="text-align: center; font-size:50px; margin-top: 0px; ">Reservation</h1>


<form method="post" action="reservation-connection.php">

    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp From:
    <select style="width: 25%; height: 40px;" >
            <option name="from" value="">Kandy</option>
            <option name="from" value="">Ella</option>
            <option name="from" value="">Matara</option>
            <option name="from" value="">Galle</option>
            <option name="from" value="">Jaf1fna</option>
            <option name="from" value="">Colombo</option>
            <option name="from" value="">Hatton</option>
            <option name="from" value="">Badulla</option>

      </select>

      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp To:
      <select style="width: 25%; height: 40px;">
              <option name="to" value="">Colombo</option>
              <option name="to" value="">Kandy</option>
              <option name="to" value="">Ella</option>
              <option name="to" value="">Matara</option>
              <option name="to" value="">Galle</option>
              <option name="to" value="">Jaffna</option>
              <option name="to" value="">Hatton</option>
              <option name="to" value="">Badulla</option></p> 

       </select>

       </form>

      <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Select the class:</h4>
      <form style="margin-left: 20%;"method="post" action="reservation-connection.php">
        <input type="radio" name="first" value="first" checked> 1st Class<br>
        <input type="radio" name="first" value="second"> 2nd Class<br>
        <input type="radio" name="first" value="third"> 3rd Class<br>  
        <input type="radio" name="first" value="special"> Special Booking<br>
      </form><br><br>

    <form method="post" action="reservation-connection.php">&nbsp&nbsp&nbsp&nbsp&nbsp
      Date:&nbsp <input type="text" name="date" id="dt" class="input" placeholder=" Date" required>&nbsp&nbsp&nbsp&nbsp&nbsp
      Month:&nbsp <input type="text" name="Month" id="mon" class="input" placeholder=" Month" required>&nbsp&nbsp&nbsp&nbsp&nbsp
      Year:&nbsp <input type="text" id="yr" name="Year" class="input" placeholder=" Year" required>
      <br><br>
      
      <center><br>Number of Seats:&nbsp<input type="text" id="st"name="seats" class="input" placeholder=" No of seats" required>
      <br><br><br>
      <button type="submit" onclick="myvalidate()" class="button" style="font-size: 18px; width:100px"> Confirm </button><br><br></center>
      </form>
    </div></b>




    <div class="btm-bar">
        <br>
        <div class="bcol1" style="color: white;">
          <p>Copyright 2019 © SL Trainline<br>All Rights Reserved</p>
        </div>
        <div class="bcol2">
          <a href="#"><img src="img/fb.jpg" width="40px" height="40px"></a>&nbsp&nbsp&nbsp
          <a href="#"><img src="img/ins.png" width="40px" height="40px"></a>&nbsp&nbsp&nbsp
          <a href="#"><img src="img/twt.png" width="40px" height="40px"></a>
        </div>
        <div class="bcol3" style="float: right;"><br>
          <img src="img/master.png" width="40px" height="30px">&nbsp&nbsp
          <img src="img/visa.jpg" width="40px" height="30px">&nbsp&nbsp
          <img src="img/american.png"width="40px" height="30px">
        </div>
        
      </div>
  
  





















    <p id="demo"></p>






</body>
</html>