<?php
header("Access-Control-Allow-Origin: *");
header("HTTP/1.1 301 Moved Permanently");
header("Cache-Control: no-store, no-cache, max-age=0, must-revalidate, proxy-revalidate");
header("Location: https://filipe-norte-red.github.io/test/wildcard-cors/target.php");
//header("Location: http://192.168.1.75:8001/wildcard-cors/target.php");
?>
