<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
  $dayofweek = date("w");
  //$dayofweek = date("w") + 1;
  
  switch ($dayofweek) {
    case 1 : 
      echo "It is Monday";
    break;
    case 2 : 
      echo "It is Tuesday";
    break;
    case 3 : 
      echo "It is Wednesday";
    break;
    case 4 : 
      echo "It is Thursday";
      echo "<p class=rainbow-text> It is Thursday</p>";
      //writing html in PHP. It's really that easy!
    break;
    case 5 : 
      echo "It is Friday";
    break;
    case 6 : 
      echo "It is Saturday";
    break;
    case 0 : 
      echo "It is Sunday";
    break;
  }

  
?>

</body>
</html> 