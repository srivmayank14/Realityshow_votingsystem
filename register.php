<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="./rlstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="topnav">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/SET_India_logo.svg/414px-SET_India_logo.svg.png" width="80" height="80" alt="Sony-logo">
        <div>
        <a href="login.php">LOGIN</a>
		<a href="index.php">HOME &nbsp;&nbsp;</a>
		</div>
      </div>
      <marquee class="marque" width="100%" direction="left" height="25px">
        VOTE NOW! THE VOTING LINES ARE OPEN ONLY TILL <b>14TH AUGUST 9:00PM</b>! MAKE YOUR FAVOURITE PARTICIPANT WIN BY REGISTERING YOURSELF!
         </marquee>
  <form action="abc.php" method="get">
  <center>
    <h3 class="text-warning text-center pt-5">REGISTER HERE</h3>
    </center>
    <label>
      <input type="text" class="input" name="t1" placeholder="ENTER YOUR NAME" required/>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>

    <label>
        <input type="tel" class="input" name="t2" pattern="[6789][0-9]{9}"  placeholder="ENTER YOUR CONTACT NO." required/>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>

    <label>
        <select class="input" name="t3" placeholder="SELECT YOUR AGE GROUP" required/>
		<option value="">SELECT YOUR AGE GROUP</option>
		<option value="15-20">15-20</option>
		<option value="21-30">21-30</option>
		<option value="31-40">31-40</option>
		<option value="41-50">41-50</option>
		<option value="51-60">51-60</option>
		<option value=">60">>60</option>
		</select>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>

    <label>
      <input type="text" class="input" name="t4" placeholder="ENTER YOUR CITY" required/>
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>

    <label>
      <input type="password" class="input" name="t5" placeholder="ENTER YOUR PASSWORD" required/>
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <button type="submit" value="submit">REGISTER</button>
  </form>
</div>
 </body>
</html>