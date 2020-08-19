<?php

  function redirect_me($s, $resendData) {
    $x = explode('?signup=', $_SERVER['HTTP_REFERER']); //https://stackoverflow.com/a/18257288
    return 'Location: ' . $x[0] . '?signup=' . $s . $resendData;
  }

  if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //I feel like there should be a library that does all this for you...?
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
      //^ check if we have empty fields
      header(redirect_me('empty',''));
      exit();
    } else {
      //check if we have invalid characters in name fields
      if (!preg_match("/[a-zA-Z]*$/", $first) || !preg_match("/[a-zA-Z]*$/", $last)) {  
        //!!! - ^ double check what we're doing here
        header(redirect_me('char',''));
        exit();
      } else {
        //check whether email is valid 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header(redirect_me('email','&first='.$first.'&last='.$last.'&uid='.$uid.''));
          exit();
        } else {
          //You've done it!
          //fn_run_sql_code()
          header(redirect_me('success',''));
          exit();
        }
      }
    } 
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