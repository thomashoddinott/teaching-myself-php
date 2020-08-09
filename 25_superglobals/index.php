<meta charset="UTF-8">
<title>Title</title>
</head>

<body>
  
<?php
  /*
  SUPERGLOBALS
  $GLOBALS
  $_POST
  $_GET
  $_COOKIE
  $_SESSION
  */

  $x = 5; //inside global scope
  
  function foo() {
    $y = 10; //inside local scope

    //how to get at $x inside foo(), without passing it in: foo($x)
    //we can do -->
    echo $GLOBALS['x'];
    //this is sometimes useful
    //however you should probably be passing the variable into the fn
  }

  foo();

  
?>

</body>
</html> 