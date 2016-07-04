<?php
$rel = $_POST['namem'];
$file = "regi/$rel.txt";
if (!unlink($file))
  {
  echo ("nepaviko trinti $file <a href='index.php'>spausk</a>");
  }
else
  {
  echo ("eiti i pagrindini puslapi<a href='index.php'>spausk </a>");
  }
$file = "momo/$rel.txt";
if (!unlink($file))
  {
  echo ("<br>");
  }
else
  {
  echo ("<br>");
  }

?>