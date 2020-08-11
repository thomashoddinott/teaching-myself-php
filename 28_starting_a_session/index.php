<!--
In the last episode we discussed the global session variable.
Now we're going to see how to actually 'create' a session in PHP.

e.g. 
- When we want the website to remember we're logged in.
-->

<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<!-- nav -->
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php
  $_SESSION['username'] = 'thomashoddinott'; 
  echo $_SESSION['username'];

  if (!isset($_SESSION['username'])) {
    echo " — You are not logged in!";
  } else {
    echo " — You are logged in!";
  }
?>

</body>
</html> 