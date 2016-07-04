<body><?php
$ggh = $_POST['gsg'];
$psp = $_POST['gsggt'];

if($ggh =="" or $psp == ""){
		echo"buvo klaidu &nbsp;<a href='iplog.php'>spausk</a>";
	}else{
			if(file_exists("gruop/$ggh.txt")){
$aaa = fopen("gruop/$ggh.txt","r");
$pspj = $psp;
fclose($aaa);
$atidaryti = fopen("gruop/$ggh.txt","w");
fwrite($atidaryti,"$pspj");
	fclose($atidaryti);
echo" &nbsp;<a href='iplog.php'>spausk</a>";
}else{
		echo"buvo klaidu &nbsp;<a href='iplog.php'>spausk</a>";
	}}
?>
</body>