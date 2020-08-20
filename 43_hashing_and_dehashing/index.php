<!DOCTYPE html>
<html>
<head>
  <title>Lesson 43</title>
</head>
<body>
  
<?php
  echo "<strong>Hashing sensitive data:</strong><br><br>";
  
  $pwd = "test123";
  echo "unhashed pwd: " . $pwd . "<br>";
  echo "^ never store me in the DB<br><br>";

  $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
  //simples!
  echo "hashed pwd: " . $hashed_pwd . "<br>";
  echo "^ store this guy in the DB!";

  echo "<br><br><strong>Dehashing sensitive data (e.g. login system): </strong><br><br>";

  function pwd_check($x, $hashed_pwd) {
    if (password_verify($x, $hashed_pwd)) {
      //dologin(), etc...
      return "pwd match!";
    } else {
      return "nope!";
    }
  } 

  echo pwd_check("pwd123", $hashed_pwd);
  echo "<br><br>";
  echo pwd_check($pwd, $hashed_pwd);
  

?>

</body>
</html>