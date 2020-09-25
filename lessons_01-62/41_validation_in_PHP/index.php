<?php
  include_once '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
</head>
<body>

  <h2>Signup</h2>
  <!-- //use a post method as we're handling sensitive data (pwds, etc.) -->
  <form action="../includes/signup3.inc.php" method="POST"> 
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br><br>
    <button type="submit" name="submit">Sign up</button>
    <br><br>
  </form>

  <?php
    $data = "Admin";

    //Using prepared statements — much safer
    $sql = "select * from users where user_uid=?;";
    $stmt = mysqli_stmt_init($conn);

    //guard
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL statement failed";
    } else {
      echo "<b>Here are the users matching: </b>" . $data . "<br><br>";
      //bind params to placeholder
      mysqli_stmt_bind_param($stmt, "s", $data); //s = string; i = int, ...
      // mysqli_stmt_bind_param($stmt, "ss", $data, $data2); // and so on...

      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
    
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['user_uid'] . "<br>";
      }
    }
   
  ?>
  
</body>
</html>