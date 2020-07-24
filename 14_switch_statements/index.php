<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
  $x = 10;

  //switch is similar to an if statement but we're not testing a condition before executing some code
  //in a switch we just do something based on a predefined condition.
  switch ($x) {
    case 1:
      echo "The answer is 1";
    break;
    case 2:
      echo "The answer is 2";
    break;
    case 3:
      echo "The answer is 3";
    break;
    case 4:
      echo "The answer is 4";
    break;
    default:
      echo "There is no answer";
  }

  
?>

</body>
</html> 