// This file simply writes the config to panelroot/config/config.php

<?php
  $version = $_POST["version"];
  $mysql_path = $_POST["mysql_path"];



  if ($key != '' && $color != '') {
    $f = fopen('/config/config.php', 'w') or die("Panel is in wrong folder or got copied wrong");
    fwrite($f, '<?php $version=' .Panel Installer Version: $version . ';$mysql_path=' .MySQL_DB:  $mysql_path . ';?>');
    fclose($f);
  } else {
