<?php
//now with validation

  if (isset($_POST['submit'])) {
    //include_once 'dbh.inc.php';
    //^ don't need atm as we're focusing on validaiton/error handling

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //do your prepared statement, etc.

    //guard statement
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
      header('Location: ' . $_SERVER['HTTP_REFERER'] . '?signup=empty');
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?signup=invalidemail');
      } else {
        echo "**Signs up the user";
      }
    } 

  } else {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?signup=error');
  }



// //mysqli_real_escape_string is the way we can secure our SQL execution from injection attack
// $first = mysqli_real_escape_string($conn, $_POST['first']);
// $last = mysqli_real_escape_string($conn, $_POST['last']);
// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $uid = mysqli_real_escape_string($conn, $_POST['uid']);
// $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

// //prepared statements are the prefered way (according to this guy) to do database transactions from PHP

// $sql = "insert into users(user_first, user_last, user_email, user_uid, user_pwd)
// values (?, ?, ?, ?, ?);";
// $stmt = mysqli_stmt_init($conn);
// if (!mysqli_stmt_prepare($stmt, $sql)) {
//   echo "SQL error";
// } else {
//   mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
//   mysqli_stmt_execute($stmt);
// }

//this will do for now
// if (!strpos($_SERVER['HTTP_REFERER'], "?signup=success")) {
//   header('Location: ' . $_SERVER['HTTP_REFERER'] . "?signup=success");
// } else {
//   header('Location: ' . $_SERVER['HTTP_REFERER']);
// }