<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
  //some basic data types in php
  //php is said to be weakly typed or untyped - similar to Python

  //string
  $s = "The quick brown fox jumps over the brown lazy dog.";
  echo $s;

  //or with single quotes 
  $s = 'The quick brown fox jumps over the brown lazy dog.';
  echo "<br>".$s;

  //integer
  $x = 20;
  echo "<br>".$x;

  //float
  $x = 20.222;
  echo "<br>".$x;

  //boolean
  $t = true; // = 1
  echo "<br>".$t;

  $f = false; // = ???
  echo "<br>".$f;

  //array
  $arr = array("The", "Three", "Amigos");
  echo "<br>".$arr['0']; echo " ".$arr['1']; echo " ".$arr['2'];
  echo "<br>"; //??? - better way to linebreak?
  print_r(array_values($arr)); //??? - better way to do this???

?>

</body>
</html> 