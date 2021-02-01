<?php
session_start();
include("login.php");
$userprofile=$_SESSION['user_name'];
$query1="select * from registration Where user='$userprofile'";
$data=mysqli_query($con,$query1);
$result=mysqli_fetch_assoc($data);

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="icon.jpg" type="image/x-icon">
<TITLE>Akashconsaltancy</TITLE>



  <div class="heading">
<div class="head1">
<h1>Akash Consaltancy</h1>
<img id="user1" src="<?php echo $result[user];?>.jpg">
<h3 ><?php echo $result['fristname']." ".$result['lastname'];  ?></h3>
<h2>Rented acomodation Consaltant</h2>

</div>
</div>
</head>
<body>
<div class="menubar">
<div class="menu">
  <a id="home" href="index.html">Home</a>
  <a id="home" href="explore.html">Explore</a>
  <a id="home" href="contact.html">Contact Us</a>
  <a id="home" href="about.html">About</a>

</div>

</div>
<div class="middle">
    <div class="homeleft">
      <img id="background" src="home.jpg">
    </div>
    <div class="homeright">
      <center>
        <p id="h4" >
      Family turns a building into a home!<br>
        Explore your dreams to get perfect home ready!
      </p>
      <div class="signup">



        <a id="home" href="explore.html"> Click Here!</a>
        <br>
        <br>
        <br>
        <br>
        <br>
      <p >
        Welcome  <?php echo $result['fristname']." ".$result['lastname'];  ?>
      </p>


      </div>

    </div><br>
</div>
  <div class="bottom">
   <p>  2003 - 2019 Akash Resources Ltd.All rights reserved.Terms & Conditions | Privacy Policy |
      GDPR Statement Web design & development by Akash.
    All content are copyright act 2001.We will assisst you in geting the favourable
     rented accomodation.
  </p>
 </div>


</body>
</html>
