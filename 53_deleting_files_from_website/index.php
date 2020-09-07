<?php
  session_start();
  include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php

function get_user($conn, $fixed_id) {

  $sql = "select * from user where id='$fixed_id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $sqlImg = "select * from profileimg where userid='$id'";
      $resultImg = mysqli_query($conn, $sqlImg);
      while ($rowImg = mysqli_fetch_assoc($resultImg)) {
        echo "<div>";
          if ($rowImg['status'] == 0) {
            //assume all uploaded images are jpg for sake fo this execise 
            //??? - https://www.php.net/manual/en/function.imagejpeg.php
            echo "<img width='200' height='200' src='uploads/profile".$id.".jpg'>"; //fixme - how to know when its png, jpeg, jpg, etc.??
          } else {
            echo "<img width='200' height='200' src='uploads/profiledefault.jpg'>";
          }
          echo $row['username'];
        echo "</div>";
      }
    }
  } else {
    echo "There are no users yet";
  }
}

  if (isset($_SESSION['id'])) {
    $fixed_id = 1;
    if ($_SESSION['id'] == $fixed_id) {
      echo "You are logged in as user #1";
      get_user($conn, $fixed_id);
    }
    echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
         <input type='file' name='file'>
         <button type='submit' name='submit'>Upload (jpg only for sake of exercise)</button>
         </form>
         <br/>";

    echo "<form action='deleteprofile.php' method='POST'>
         <button type='submit' name='submit'>Delete profile image</button>
         </form>";

  } else {
    echo "You are not logged in";
    echo "
      <form action='signup.php' method='POST'>
      <input type='text' name='first' placeholder='First name'>
      <input type='text' name='last' placeholder='Last name'>
      <input type='text' name='uid' placeholder='Username'>
      <input type='text' name='pwd' placeholder='Password'>
      <button type ='submit' name='submitSignup'>Sign up</button>
      </form>
    ";
  }
?>



<!-- this button logs us in as user 1 only -->
<p>Login</p> 
<form action="login.php" method="POST">
  <button type="submit" name="submitLogin">Login</button>
</form> 

<p>Logout</p>
<form action="logout.php" method="POST">
  <button type="submit" name="submitLogou">Logout</button>
</form> 

</body>
</html>