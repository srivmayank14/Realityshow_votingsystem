<html>
    <body>
    <link rel="stylesheet" href="./rlstyle.css">
    <div>
        <div class="topnav">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/SET_India_logo.svg/414px-SET_India_logo.svg.png" width="80" height="80" alt="Sony-logo">
        <div>
        <a href="login.php">LOGIN</a>
		<a href="index.php">HOME&nbsp;&nbsp;</a>
		</div>
      </div>
      <marquee class="marque" width="100%" direction="left" height="25px">
        VOTE NOW! THE VOTING LINES ARE OPEN ONLY TILL <b>14TH AUGUST 9:00PM</b>! MAKE YOUR FAVOURITE CONTESTANT WIN BY <b>CLICKING ON LOGIN</b>!
         </marquee>

<?php
      session_start();
      $name=$_GET['t1'];
      $contact=$_GET['t2'];
      $age=$_GET['t3'];
      $city=$_GET['t4'];
      $pass=$_GET['t5'];
      $_SESSION['contact']=$contact;
      $file = fopen("details.txt", "a+");
      $s=fread($file, filesize("details.txt"));
      $pos=strpos($s,$contact);
      if(!$pos){
      $text = $name."::".$contact."::".$age."::".$city."::".$pass."::user::\r\n";
      fwrite($file, $text);
      fclose($file);
      echo "<h2>Your data has been submitted</h2>";
      header("Location:user.php");
    }
  else{
    ?>
    <center>
      <?php
    echo "<center><br><br><br><br><br><h2>Sorry! You have already registered!<br><br>Please Login to Vote your Favourite Contestant! </h2></center>";
    ?>
    </center>
    <?php
  }
  ?>
  </body>
  </html>
