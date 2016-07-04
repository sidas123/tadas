<meta charset='uft-8'>
<?php

include("mysql.php");
mysqli_close($conn);

echo"
 <link rel='stylesheet' type='text/css' href='css/you.css' /> 
<table class='stats' width='150' border='1'>";
$dd = opendir("regi");
while(($er = readdir($dd)) !== false){
$money = 0;
	if($er != '.' && $er != '..')
if(file_exists("momo/$er")){
	$money = file_get_contents("momo/$er");		
	$gr = file_get_contents("gruop/$er");
		$th = file_get_contents("regi/$er");
	$dukh = explode("|", $th);
}
if($money == ""){}else{
	echo "<tr><td>$er</td><td><form action='delstats.php' method='post' ><input type='hidden' value='$er' name='namem'>
<input type='submit' value='trinti'>
</form></td>
<td> $money&nbsp;&nbsp;<img class='cp'src='coins.gif'>&nbsp; </td><td>grupe: $gr</td>
<td>gmail: $dukh[2]</td>
</tr>";}
}
echo"</table>";
?>