<body><?php
$ggh = $_POST['gsg'];
$psp = $_POST['gsggt'];
if($ggh =="" or $psp == ""){
		echo"buvo klaidu &nbsp;<a href='iplog.php'>spausk</a>";
	}else{
			if(file_exists("momo/$ggh.txt")){
$aaa = fopen("momo/$ggh.txt","r");
$pspj = $aaa+$psp;
fclose($aaa);
$atidaryti = fopen("momo/$ggh.txt","w");
fwrite($atidaryti,"$pspj");
	fclose($atidaryti);
echo" &nbsp;<a href='iplog.php'>spausk</a>";
}else{
		echo"buvo klaidu &nbsp;<a href='iplog.php'>spausk</a>";
	}}
?>
</body>