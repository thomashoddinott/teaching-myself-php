<?php
$servername = "localhost";
$username = "root";
$password = "";
//^ standard XAMMP defaults

$dbname = "galleryexample";
$conn = mysqli_connect($servername, $username, $password, $dbname);

function executeSQL ($sql, $bind_params='') {
  global $conn; 
  //^ best practice? --- better than creating a new connection each time if we fed this in as a param?

  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL failed";
    return false;
  }

  if ($bind_params) {
    mysqli_stmt_bind_param($stmt, $bind_params[0], $bind_params[1], $bind_params[2], $bind_params[3], $bind_params[4]);
  }
  mysqli_stmt_execute($stmt); 
  //^ should be a check for errors here?
  $res = mysqli_stmt_get_result($stmt);
  return $res;
}