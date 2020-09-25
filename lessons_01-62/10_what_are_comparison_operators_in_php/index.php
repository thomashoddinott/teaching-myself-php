<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
  
  //a function
  function compare($x, $y) {
    if ($x == $y) { //== doesn't care about data type
      return "True!";
    }
    else {
      return "False!";
    }
  }

  function compare2($x, $y) {
    if ($x === $y) { //=== cares about data type
      return "True!";
    }
    else {
      return "False!";
    }
  }

  echo compare(10, 10);
  echo "<br>".compare("10", 10); //doesn't care
  echo "<br>". compare(5, 10);

  echo "<br>".compare2("10", 10); //cares
  echo "<br>". compare2(10, 10);
  
?>

</body>
</html> 