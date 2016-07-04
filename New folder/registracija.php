<?php

if(4 == 1){
	
	
}else{
echo"
<html>
<head>
<title>real life city</title>
<meta charset='uft-8'>
 <link rel='stylesheet' type='text/css' href='sty.css' /> 

</head>
<body>
<div class='sfs'></div>
<div class='op'>real life city</div>
<ul class='gh'>
  <li class='hh'><a class='gg' href='index.php'>pradzia</a></li>
  <li class='hh'><a class='gg'href='registracija.php'>registracija</a></li>
</ul>
<div class='jj'>
<form  action='reg.php' method='post'>
 nick:<input type='text' name='jot'>
  <br>
 password:<input type='passord' name='troll'><br>
 gmail:<input type='text' name='etg'><br>
  <input type='submit' value='register'>
</form>
</div>
<div class='stats'>Statistika<br>
prisiregistravusiu:".file_get_contents("status/Statistika.txt")."
" ;
session_start();
if(isset ($_SESSION['perziuros']))
{
	$_SESSION['perziuros'] += 1;
	
	
}else{
	$_SESSION['perziuros'] = 1;
	
}


echo"<meta charset='uft-8'><br> tu atsidares puslapi :"; 
echo $_SESSION['perziuros'];
echo"
kart.<br>


</div>
</body>
</html>";
}

?>