<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<!-- //GET passes to URL -->
<form method="GET"> 
  <input type="text" name="person">
  <button>SUBMIT</button>
</form>

<?php
  $name = !empty($_GET['person']) ? $_GET['person'] : '...';
  echo $name. " is a handsome fellow.";
?>

</body>
</html> 