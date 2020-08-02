<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
  $x = 0;

  do {
    echo "$x. hi there <br>";
    $x++;
  }
  while ($x < 5);

  echo "<br>";
  echo "<strong>now try this when x is initialised as 7</strong>";
  echo "<br>";

  $x = 7;

  do {
    echo "$x. hi there <br>";
    $x++;
  }
  while ($x < 5);

  //do while loops: the do is always executed and it carries on for however long depending on the while
  
?>

</body>
</html> 