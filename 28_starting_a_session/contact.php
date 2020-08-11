<?php
  session_start(); //allows us to access session from another page
  //instead of rewriting this on every page, we can write our header as a php file as include it all our pages
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php
  echo $_SESSION['username'];
?>

</body>
</html> 