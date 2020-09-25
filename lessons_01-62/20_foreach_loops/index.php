<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
  $arr = array("Bob", "Bill", "Ben");
  print_r(array_values($arr));
  echo "<br><br>";

  echo "we can also extract elements, like a `for x in MyList : ...` in python ";
  echo "<br>";
  foreach ($arr as $a) {
    echo "My name is ".$a."<br>";
  }

  
?>

</body>
</html> 