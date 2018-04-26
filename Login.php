<!DOCTYPE html>

<html>
<head>
	<title>Hotelsng PHP Website </title>
<link rel="stylesheet" href="./mycss.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
</head>
<body>

	<header>
		<h1> <br> <br> <img src="./images/hotelsnglogo.png" alt="Hotelsng Logo" style="width:280px;height:100px;"</h1>
		
<h3>

</h3>

	</header>


<form method="post" action="index.html">
<div class="box">
<h1>User Login</h1>
<p>
</div><img src="./images/ic_person_outline_black_24dp_2x.png" alt="help" style="width:25px;height:24px;">Username</br><input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" /></br>
  
<img src="./images/ic_lock_outline_black_24dp_2x.png" alt="help" style="width:25px;height:24px;">Password</br><input type="password" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  </p>
  
</div> 
  
</form>

<div class="box"> 
<p>
<a href="#"><div class="btn">Sign In</div></a>

<a href="#"><div id="btn2"><img src="./images/ic_help_outline_black_24dp_2x.png" alt="help" style="width:25px;height:24px;"></div></a> 
 </p>
 
<p>Forgot your password? <u style="color:#00000;">Click Here!</u></p>
<?php

echo "Date:  ". date("d/m/Y") . "<br>";
echo "Time:  " . date("h:i a");
?>
</div>
</body>

</html>