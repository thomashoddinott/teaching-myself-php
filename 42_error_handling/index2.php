<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <h2>Signup</h2>
    <!-- //use a post method as we're handling sensitive data (pwds, etc.) -->
    <form action="../includes/signup4.inc.php" method="POST"> 
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
      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if (strpos($fullUrl, "signup=empty")) {
        echo "<p class='error'>You did not fill in all the fields!</p>";
        exit();
      }
      elseif (strpos($fullUrl, "signup=char")) {
        echo "<p class='error'>You used invalid characters in first and or last name!</p>";
        exit();
      }
      elseif (strpos($fullUrl, "signup=email")) {
        echo "<p class='error'>You used an invalid email!</p>";
        exit();
      }
      elseif (strpos($fullUrl, "signup=success")) {
        echo "<p class='success'>You have signed up!</p>";
        exit();
      }
    ?>

  </body>
</html>