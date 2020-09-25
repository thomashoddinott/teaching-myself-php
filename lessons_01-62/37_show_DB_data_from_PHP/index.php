<?php
  include_once '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
</head>
<body>

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