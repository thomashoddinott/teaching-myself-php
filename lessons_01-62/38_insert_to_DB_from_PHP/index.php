<?php
  include_once '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
</head>
<body>

<!-- //use a post method as we're handling sensitive data (pwds, etc.) -->
<form action="../includes/signup.inc.php" method="POST"> 
  <input type="text" name="first" placeholder="Firstname">
  <br>
  <input type="text" name="last" placeholder="Lastname">
  <br>
  <input type="text" name="email" placeholder="E-mail">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign up</button>
</form>

  <?php
    $sql = "select * from users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      echo "Here are the users we have: " . "<br><br>";

      $i = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        echo $i . ". " . $row['user_uid'] . "<br>";
        $i++;
      }
    }
   
  ?>
  
</body>
</html>