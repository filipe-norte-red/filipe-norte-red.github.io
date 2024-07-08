<!DOCTYPE html>
<html>

<head>
<title>
Cookie Abuse: 
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
$id = $_GET["id"];

$cookie_count = 20;
$cookie_name = "test_" . $id . "_";
$cookie_value = str_repeat('v', 3*1024);

for ($i = 1; $i <= $cookie_count; $i++) {
  setcookie($cookie_name . $i, $cookie_value, 
          [
              'expires' => time() + (86400 * 30),  // 86400 = 1 day
              'path' => '/',
//              'domain' => 'testdomain' . $id . '.com',
              'samesite' => 'None',
              'secure' => true,
          ]);
}
?>

</body>
</html>


