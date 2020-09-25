<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
  $s = "Hi Thomas";
  echo $s. "<br>";
  
  // trying out some built-in php functions
  echo "length: ". strlen($s). "<br>";
  echo "word count: ". str_word_count($s). "<br>";
  echo "reversed: ". strrev($s). "<br>";

  $x = "Thomas";
  echo "Search for '". $x. "': ==> (starts at position) ". strpos($s, "Thomas"). "<br>";

  $r = "Simon";
  echo "Replace string ". $r. " in '". $s. "': ==> ". str_replace($x, $r, $s);
?>

</body>
</html> 