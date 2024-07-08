<?php
$id = $_GET["id"];
$cookie_count = 20;
$cookie_name = "testimg_" . $id . "_";
$cookie_value = str_repeat('v', 3*1024);

for ($i = 1; $i <= $cookie_count; $i++) {
  setcookie($cookie_name . $i, $cookie_value, 
          [
              'expires' => time() + (86400 * 30),  // 86400 = 1 day
              'path' => '/',
//              'samesite' => 'None',
//              'secure' => true,
          ]);
}
readfile("img.png");
?>
