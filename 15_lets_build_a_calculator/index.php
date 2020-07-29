<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<form>

  <input type="text" name="num1" placeholder="Number 1">
  <input type="text" name="num2" placeholder="Number 2">

  <select name="operator">
    <option>None</option> 
    <!-- ^ don't like this -->
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
  </select>
  <br>
  <br>
  <button type = "submit" name="submit" value="submit">Calculate</button>
  <!-- n.b. what happens at this stage when you press submit -->
  <!-- http://localhost/teaching-myself-php/15_lets_build_a_calculator/index2.php?num1=5&num2=10&operator=Add&submit=submit -->

</form>

<p>The answer is: </p>
<?php

  if (isset($_GET['submit'])) {
    $res1 = $_GET['num1'];
    $res2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
      case "None": //not a fan - see above
        echo "error - please select an operator";
      break;
      case "Add": 
        echo $res1 + $res2;
      break;
      case "Subtract": 
        echo $res1 - $res2;
      break;
      case "Multiply": 
        echo $res1 * $res2;
      break;
      case "Divide": 
        echo $res1 / $res2;
      break;
    }
  }

?>

</body>
</html> 