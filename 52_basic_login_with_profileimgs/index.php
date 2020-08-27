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
  $sql = "select * from user";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $sqlImg = "select * from profileimg where userid='$id'";
      $resultImg = mysqli_query($conn, $sqlImg);
      while ($rowImg = mysqli_fetch_assoc($resultImg)) {
        echo "<div>";
          //this code needs to be worked on a little. Only show image if we're on a session (logged in), etc.
          if ($rowImg['status'] == 0) {
            echo "<img width='200' height='200' src='uploads/profile".$id.".png'>"; //fixme - how to know when its png, jpeg, jpg, etc.??
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



  if (isset($_SESSION['id'])) {
    if ($_SESSION['id'] == 1) {
      echo "You are logged in as user #1";
    }
    echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
         <input type='file' name='file'>
         <button type='submit' name='submit'>Upload</button>
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