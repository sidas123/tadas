<meta charset="uft-8">
<?php 
$namem = $_POST['gsg'];
$pass = $_POST['gsggt'];
$ip = $_SERVER['REMOTE_ADDR'];
$gsg;
$gsggt;

$kol = fileatime("regi/$namem.txt");
if(file_exists("regi/$namem.txt")){
	$th = file_get_contents("regi/$namem.txt");
	$dukh = explode("|", $th);
	if($dukh[1] == $pass){
		$homepage = file_get_contents("momo/$namem.txt");
		$gr = file_get_contents("gruop/$namem.txt");
		echo"
		<html>
		<head><meta charset='uft-8'>

<title>real life city</title> 
 <link rel='stylesheet' type='text/css' href='sty.css' /> 
 <link rel='stylesheet' type='text/css' href='css/cst.css' /> 
 
 </head>

<body>
<div class='ressed'>
		<b>labas $namem</b>| tavo ip: $ip | $homepage&nbsp;&nbsp;<img class='cp'src='coins.gif'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|tavo grupe: $gr |<a class='alink' href='index.php'>atsijunkti</a>
		</div>
<div class='sfs'></div>
<div class='op'>real life city</div>
<ul class='gh'><form action='onl.php' class='gg' method='post'><input type='hidden' value='$namem' name='gsg'><input type='hidden' value='$pass' name='gsggt'><input class='aaasss'type='submit' value='pradinis' >
</form>
  <li class='hh'><form class='gg'action='profilis.php' method='post'><input type='hidden' value='$namem' name='gsg'><input type='hidden' value='$pass' name='gsggt'><input class='intte' type='submit' value='profilis' >
</form>
</li>
  <li class='hhh'><form class='ggg'action='mem.php' method='post'><input type='hidden' value='$namem' name='gsg'><input type='hidden' value='$pass' name='gsggt'><input class='intte' type='submit' value='nariu listas' >
</form</li>
</ul>

";

echo"
 
<table class='jugogo' width='150' border='1'>";
echo "<tr><td>nick</td><td> pinigai&nbsp;&nbsp;<img src='coins.gif'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>grupe</td></tr>";
$dd = opendir("regi");
while(($er = readdir($dd)) !== false){
$money = 0;
	if($er != '.' && $er != '..')
if(file_exists("momo/$er")){
	$money = file_get_contents("momo/$er");		
	$gr = file_get_contents("gruop/$er");
}
if($money == ""){}else{
	echo "<tr><td>$er</td>
<td> $money&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>grupe: $gr</td></tr>";
}
}
echo"</table>";



echo"




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
</html>
		
		";
		

		if(file_exists("admin/$namem.txt")){
		echo"	
		<div class='adm'>
		<b>admin panel</b>
	<br>
<a href='a.php' class='aas'>open</a>
		</div>
";	
}
		
	}else{
			echo"kur tu lendi<a href='index.php'>pagrindinis</a>";
		
	}
	
	
}else{

}


?>