<?php
  $conn = new mysqli("localhost", "root", "", "ifc");
  date_default_timezone_set("Asia/Jakarta");
  echo date("l")." ";
  echo date("d-m-Y") . " ";
  echo date("h:i:s");
?>
