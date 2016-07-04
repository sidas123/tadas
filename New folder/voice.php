<meta charset="uft-8">

<?php

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
<ul class='gha'>
  <li class='hh'><a class='gg' href='index.php'>pradzia</a></li>
  <li class='hhk'><a class='gg'href='registracija.php'>registracija</a></li>
  <li class='hhkk'><a class='gg'href='voice.php'>discord</a></li>
</ul>
<div class='jj'>
<form action='onl.php' id='signInForm'method='post'>
  nick:  <input type='text'id='userName' name='gsg'><br>
  password:  <input type='password' name='gsggt'><br>
  <input type='submit' id='signInButt'value='login'>

</form>

</div>

<iframe class='vsf' src='https://discordapp.com/widget?id=193492932605509632&theme=dark' width='350' height='500' allowtransparency='true' frameborder='0'></iframe>

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

?>