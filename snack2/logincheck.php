<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
<?php

if (isset($_GET['name'],$_GET['mail'],$_GET['age'])) {
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  
  if (strlen($name) > 3 && strpos($mail, '@') == true && strpos($mail, '.') == true && is_numeric($age)) {
    echo "Login successful";
  } else {
    echo "Access denied";
  }
} 
else {
  echo "Please insert all your data";
}

?>

</body>
</html>