<!DOCTYPE html>
<html>

<head>
<title>Cookie Abuse: 
<?php
echo $_SERVER['HTTP_HOST'];
?>
</title>
</head>

<body bgcolor="white">
<h1>
Cookie Abuse: 
<?php
echo $_SERVER['HTTP_HOST'];

if(!isset($_COOKIE["test_10"])) {
    echo " - Cookies NOT set";
} else {
    echo " - Cookies set";
}
?>
</h1>

<?php
$iframe_count = 5;
$cookie_count = 10;
$cookie_name = "test_";
$cookie_value = str_repeat('v', 3*1024);

for ($i = 1; $i <= $cookie_count; $i++) {
  setcookie($cookie_name . $i, $cookie_value, 
          [
              'expires' => time() + (86400 * 30),  // 86400 = 1 day
              'path' => '/',
              'samesite' => 'None',
//              'secure' => true,
          ]);
}
for ($i = 1; $i <= $iframe_count; $i++) {
echo '<iframe src="https://testdomain' . $i . '.com:8000/iframe.php?id=' . $i . '" height="100" width="100%" title="iFrame '. $i . '"></iframe>';
}
?>
<!--
<img src="http://testdomain1.com:8000/img.php?id=1"></img>
<img src="http://testdomain2.com:8000/img.php?id=2"></img>
<img src="http://testdomain3.com:8000/img.php?id=3"></img>
<img src="http://testdomain4.com:8000/img.php?id=4"></img>
<img src="http://testdomain5.com:8000/img.php?id=5"></img>
-->
</body>
</html>

