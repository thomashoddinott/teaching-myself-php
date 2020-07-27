<meta charset="UTF-8">
<title>Title</title>
</head>

<!-- //my attempt - using all I've learnt up to now and Google-->
<body>

<form method="post">
    <input type="submit" name="1" id="1" value="1" /><br/>
    <input type="submit" name="2" id="2" value="2" /><br/>
    <input type="submit" name="3" id="3" value="3" /><br/>
    <input type="submit" name="4" id="4" value="4" /><br/>
    <input type="submit" name="5" id="5" value="5" /><br/>
    <input type="submit" name="6" id="6" value="6" /><br/>
    <input type="submit" name="7" id="7" value="7" /><br/>
    <input type="submit" name="8" id="8" value="8" /><br/>
    <input type="submit" name="9" id="9" value="9" /><br/>

    <input type="submit" name="plus" id="plus" value="plus" /><br/>
    <input type="submit" name="minus" id="minus" value="minus" /><br/>
    <input type="submit" name="equals" id="equals" value="equal" /><br/>
</form>

<?php

function testfun($a)
{
   echo "Your clicked: ". $a;
}

for ($x = 0; $x <= 9; $x++){
  if(array_key_exists($x,$_POST)){
    testfun($x);
  }
}

//use if, elif, else to handle: plus, minus, equals
//don't worry about validation
//number +/- number +/- number (in local memory)

//bonus - small text box with content of equation 

?>

</body>
</html> 