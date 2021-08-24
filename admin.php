<html>
<head>
<meta charset="UTF-8">
<title>Admin</title>
		<link rel="stylesheet" href="uastyle.css"/>
	</head>
	<body>
		<div>
		<div class="topnav">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/SET_India_logo.svg/414px-SET_India_logo.svg.png" width="80" height="80" alt="Sony-logo">
		<a href="session.php">LOGOUT</a>
	    </div>
        </div>
<?php
$date1 = new DateTime("2021-08-14");
$date2 = new DateTime(date("Y-m-d"));

if ($date2 > $date1)
{
?>

          
		
			<div class="column">
			<div class="circular--landscape">
			<img src="https://www.allaboutgoodlife.com/wp-content/uploads/2021/02/All-About-The-Indian-Idol-Contestant-PAWANDEEP-RAJAN-768x432.jpg" 
			alt="Pawandeep Rajan">
			</div>
			<center>
			<h4>PAWANDEEP RAJAN</h4>
			</center>
<?php
$file=fopen("1.txt", 'r');
echo "<center><h4>Total Votes:<br>".fread($file, filesize("1.txt"))."</h4></center>";
fclose($file);
?>
            </div>
			
			<div class="column">
			<div class="circular--landscape">
			<img src="https://assets.telegraphindia.com/telegraph/2021/May/1619985137_karuna.jpg" 
			alt="Aruneeta kanjilal">
			</div>
			<center>
			<h4>ARUNEETA KANJILAL</h4>
			</center>
<?php
$file=fopen("2.txt", 'r');
echo "<center><h4>Total Votes:<br>".fread($file, filesize("2.txt"))."</h4></center>";
fclose($file);
?>
			</div>
		
			
			<div class="column">
			<div class="circular--landscape">
			<img src="https://fashionchandigarh.com/wp-content/uploads/2020/12/Sayli-Kamble.bmp"
			alt="Sayli Kamble">
			</div>
			<center>
			<h4>SAYLI KAMBLE</h4>
			</center>
			
<?php
$file=fopen("3.txt", 'r');
echo "<center><h4>Total Votes:<br>".fread($file, filesize("3.txt"))."</h4></center>";
fclose($file);
?>
			</div>
			
			<div class="column">
			<div class="circular--landscape">
			<img src="https://origin-staticv2.sonyliv.com/landscape_thumb/clip09_set_indianidol_ep06_Landscape_Thumb.jpg"
			alt="Nihal Tauro">
			</div>
			<center>
			<h4>NIHAL TAURO</h4>
			</center>
			
<?php
$file=fopen("4.txt", 'r');
echo "<center><h4>Total Votes:<br>".fread($file, filesize("4.txt"))."</h4></center>";
fclose($file);
?>
			</div>

			
			<div class="column">
			<div class="circular--landscape">
			<img src="https://origin-staticv2.sonyliv.com/landscape_thumb/clip_bts_set_indianidol_shanmukhpriya_ep08_Landscape_Thumb_NEW.jpg"
			alt="shanmukhapriya">
			</div>
			<center>
			<h4>SHANMUKHA PRIYA</h4>
			</center>
			
<?php
$file=fopen("5.txt", 'r');
echo "<center><h4>Total Votes:<br>".fread($file, filesize("5.txt"))."</h4></center>";
fclose($file);
?>
			</div>
			
			
			<div class="column">
			<div class="circular--landscape">
			<img src="https://origin-staticv2.sonyliv.com/landscape_thumb/clip_bts_set_indianidol_danish_ep41_Landscape_Thumb.jpg"
			alt="Danish">
			</div>
			<center>
			<h4>DANISH<br>ALI</h4>
			</center>
			
<?php
$file=fopen("6.txt", 'r');
echo "<center><h4>Total Votes:<br>".fread($file, filesize("6.txt"))."</h4></center>";
fclose($file);
?>
			</div>
		</form>
<?php
}
else{
echo "<center><br><br><br><br><br><h2>You need to wait till 15-Aug-2021 <br><br> to see the votes of the contestants!</h2><center>";
}
?>
	</body>
</html>

            