<html>
    <head>
        <title>Vote</title>
        <link rel="stylesheet" href="uastyle.css">
    </head>
    <body>
		 <div>
        <div class="topnav">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/SET_India_logo.svg/414px-SET_India_logo.svg.png" width="80" height="80" alt="Sony-logo">
        <a href="session.php">LOGOUT</a>
        </div>
      <marquee class="marque" width="100%" direction="left" height="25px">
        VOTE NOW! THE VOTING LINES ARE OPEN ONLY TILL <b>14TH AUGUST 9:00PM</b>! MAKE YOUR FAVOURITE PARTICIPANT WIN BY <b>CLICKING ON THEIR NAME</b>!
         </marquee>
        </div>
		<?php
		session_start();
        $date1 = new DateTime("2021-08-14");//Date Declared
        $date2 = new DateTime(date("Y-m-d"));//Today's date
  
        // Compare the dates
        if($_SESSION['contact']){
        if ($date2 <= $date1)
	    {
		$contact=$_SESSION['contact'];
        $f=fopen('voted.txt',"r");
        $s=fread($f, filesize("voted.txt"));
        $pos=strpos($s,$contact);
        if(!$pos){
		?>
        <center>
        <h1><i>VOTE FOR YOUR FAVOURITE SINGER</i></h1>
        </center>
		<form action="vote.php" method="POST">
			<input type="hidden" name="vote" value="1.txt">
        <div class="column">

			<div class="circular--landscape">
			<img src="https://www.allaboutgoodlife.com/wp-content/uploads/2021/02/All-About-The-Indian-Idol-Contestant-PAWANDEEP-RAJAN-768x432.jpg" 
			alt="Pawandeep Rajan">
			</div>
			<center>
			<button type="submit"  value="vote">PAWANDEEP RAJAN</button>
			</center>
			</div>
		</form>
		<form action="vote.php" method="POST">
			<input type="hidden" name="vote" value="2.txt">
			<div class="column">
			<div class="circular--landscape">
			<img src="https://assets.telegraphindia.com/telegraph/2021/May/1619985137_karuna.jpg" 
			alt="Aruneeta kanjilal">
			</div>
			<center>
			<button type="submit"  value="vote">ARUNEETA KANJILAL</button>
			</center>
			</div>
		</form>
		
		<form action="vote.php" method="POST">
			<input type="hidden" name="vote" value="3.txt">	
			<div class="column">
			<div class="circular--landscape">
			<img src="https://fashionchandigarh.com/wp-content/uploads/2020/12/Sayli-Kamble.bmp"
			alt="Sayli Kamble">
			</div>
			<center>
			<button type="submit"  value="vote">SAYLI KAMBLE</button>
			</center>
			</div>
		</form>
		<form action="vote.php" method="POST">
			<input type="hidden" name="vote" value="4.txt">
			
			<div class="column">
			<div class="circular--landscape">
			<img src="https://origin-staticv2.sonyliv.com/landscape_thumb/clip09_set_indianidol_ep06_Landscape_Thumb.jpg"
			alt="Nihal Tauro">
			</div>
			<center>
			<button type="submit"  value="vote">NIHAL TAURO</button>
			</center>
			</div>
		</form>

		<form action="vote.php" method="POST">
			<input type="hidden" name="vote" value="5.txt">
			<div class="column">
			<div class="circular--landscape">
			<img src="https://origin-staticv2.sonyliv.com/landscape_thumb/clip_bts_set_indianidol_shanmukhpriya_ep08_Landscape_Thumb_NEW.jpg"
			alt="shanmukhapriya">
			</div>
			<center>
			<button type="submit"  value="vote">SHANMUKHA PRIYA</button>
			</center>
			</div>
		</form>
		<form action="vote.php" method="POST">
			<input type="hidden" name="vote" value="6.txt">
			
			<div class="column">
			<div class="circular--landscape">
			<img src="https://origin-staticv2.sonyliv.com/landscape_thumb/clip_bts_set_indianidol_danish_ep41_Landscape_Thumb.jpg"
			alt="Danish">
			</div>
			<center>
			<button type="submit"  value="vote">DANISH ALI</button>
			</center>
			</div>
			</form>
			<br>
			<br>
			<br>
			<?php
		    }
			else{
				header("Location:alreadyvoted.php");
			}
		}
		else{
			header("Location:votingclose.php");
		}
               }
                else{
                    
                header("Location:index.php");
                }
                        
			?>
    </body>
    </html>