<html>
    <body>
    <link rel="stylesheet" href="./rlstyle.css">
    <div>
        <div class="topnav">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/SET_India_logo.svg/414px-SET_India_logo.svg.png" width="80" height="80" alt="Sony-logo">
        <div>
        <a href="register.php">REGISTER</a>
		<a href="index.php">HOME&nbsp;&nbsp;</a>
		</div>
      </div>
      <marquee class="marque" width="100%" direction="left" height="25px">
        VOTE NOW! THE VOTING LINES ARE OPEN ONLY TILL <b>14TH AUGUST 9:00PM</b>! MAKE YOUR FAVOURITE CONTESTANT WIN BY <b>CLICKING ON REGISTER</b>!
         </marquee>
<?php
session_start();
$contact=$_POST['t1'];
$password=$_POST['t3'];
$flag=0;
$file = fopen("details.txt", 'r');
while(!feof($file))
  {
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),6,null);
  if ($str_arr[1]==$contact and $str_arr[4]==$password){ 
    $_SESSION['contact']=$contact;
    if($str_arr[5]=="user")   
    header("Location:user.php");
    else{
      header("Location:admin.php");
    }  
		$flag=1;
	  	break;
	}//end if 
  }//end while
fclose($file);
if ($flag==0)
	echo "<center><br><br><br><br><br><h2>Sorry! You have not registered!<br><br>Please Register Yourself to Vote your Favourite Contestant! </h2></center>";
?>
</body>
</html>