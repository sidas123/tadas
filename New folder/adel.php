<?php
$rel = $_POST['nameg'];
$file = "regi/$rel.txt";
if (!unlink($file))
  {
  echo ("nepaviko trinti $file <a href='onl.php'>profilis</a>");
  }
else
  {
  echo ("eiti i pagrindini puslapi<a href='onl.php'>spausk </a>");
  }
 $file = "momo/$rel.txt";
if (!unlink($file))
  {
  echo ("nepaviko trinti $file <a href='onl.php'>profilis</a>");
  }
else
  {
  echo ("eiti i pagrindini puslapi<a href='onl.php'>spausk </a>");
  } 
  
?>