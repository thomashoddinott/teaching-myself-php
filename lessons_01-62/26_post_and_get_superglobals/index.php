<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
    echo $_POST['name']; //use superglobal
    //will error before button press
?>

<form method="POST"> 
  <input type="hidden" name="name" value="Thomas">
  <button type="submit">PRESS ME!</button>
</form>

</body>
</html> 