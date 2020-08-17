<?php
//todo - write a guard statement to check on $uid before adding

include_once './dbh.inc.php';

// at the moment we're vulnerable to SQL injection
// we need to make sure that SQL code can't be entered into our form and executed
// e.g. someone trying `DROP table users`, etc.

//mysqli_real_escape_string is the way we can secure our SQL execution from injection attack
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//prepared statements are the prefered way (according to this guy) to do database transactions from PHP

$sql = "insert into users(user_first, user_last, user_email, user_uid, user_pwd)
values (?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL error";
} else {
  mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
  mysqli_stmt_execute($stmt);
}

//this will do for now
if (!strpos($_SERVER['HTTP_REFERER'], "?signup=success")) {
  header('Location: ' . $_SERVER['HTTP_REFERER'] . "?signup=success");
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}