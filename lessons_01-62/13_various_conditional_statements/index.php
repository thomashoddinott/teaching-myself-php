<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<strong>enter a integer between 1 and 10:</strong>
<form method="GET"> 
  <input type="text" name="input">
  <button>SUBMIT</button>
</form>

<?php
    function foo($x) {
      if ($x == 0) { 
        return; //guard statement
      } elseif ($x >= 1 && $x <= 9) { 
        return $x." is between 1 and 9";
      } else {
        return $x." is equal to 10!"; 
        }
      } //nice and easy!

    $input = (int)!empty($_GET['input']) ? $_GET['input'] : 0;
    echo "<b>did you know...</b> <br>";
    echo foo($input)
 
?>

</body>
</html> 