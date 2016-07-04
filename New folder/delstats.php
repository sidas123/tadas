<?php
$rel = $_POST['namem'];
$file = "regi/$rel";
if (!unlink($file))
  {
  echo ("nepaviko trinti $file <a href='mysolhelp.php'>spausk</a>");
  }
else
  {
  echo ("<a href='mysolhelp.php'>spausk </a>");
  }
$file = "momo/$rel";
if (!unlink($file))
  {
  echo ("<br>");
  }
else
  {
  echo ("<br>");
  }

?>