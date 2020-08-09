<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<?php
  /*
  $_COOKIE --- less secure, stored locally, can be hacked, don't use to store sensitive data
  //lives locally on your PC for a given time limit (30 days, etc.)
  
  $_SESSION --- more secure, keep sensitive stuff here
  //lives for the duration of time on website/app, destoryed afterwards
  */
  
  //create a new cookie
  setcookie("my_first_cookie", "Hello, World!", time() + 24*60**2);
  echo $_COOKIE['my_first_cookie'];

  //create a new session
  $_SESSION['name'] = '12'; //e.g. userID on a DB
  
?>

</body>
</html> 