<meta charset="uft-8">
<?php
$ggh = $_POST['jot'];
$psp = $_POST['troll'];
$ggol = $_POST['etg'];
$ggh = preg_replace("[^A-Za-z0-9]","", $ggh);
if($ggh =="" or $psp == "" or $ggol == ""){
		echo"<html>
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
<div class='joked'>
butina  visus laukelius užpilditi</div>
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
</html> ";
}else{
	if(file_exists("regi/$ggh.txt")){

	echo"jau toks vartotojas egzistuoja";
}else{
	if($ggh =="" or $psp == "" or $ggol == ""){
		echo"butina užpilditi visus laukelius <a href='registracija.php'>bandyk dar kart</a>";
	}else{		
	$gg = fopen("gruop/$ggh.txt","w");
	fwrite($gg,"naujokas");
	fclose($gg);
	$atidaryti = fopen("regi/$ggh.txt","w");
	fwrite($atidaryti,"$ggh|$psp|$ggol|".time()."");
	fclose($atidaryti);
	$sen_reik = file_get_contents("status/Statistika.txt"); 
	$nau_reik = $sen_reik + 1;
	$atidaryti = fopen("status/Statistika.txt","w");
		fwrite($atidaryti,"$nau_reik");
		fclose($atidaryti);
		$money= 500;
	$atidaryti = fopen("momo/$ggh.txt","w");
	fwrite($atidaryti,"$money");
	fclose($atidaryti);
echo"<html>
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
<div class='jokede'>
dabar gali prisijunkti</div>
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
</html> ";
}}}
?>