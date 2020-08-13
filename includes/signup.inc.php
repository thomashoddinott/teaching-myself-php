<?php
include_once './dbh.inc.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//todo - write a guard statement to check on $uid before adding

$sql = "insert into users(user_first, user_last, user_email, user_uid, user_pwd)
values ('$first', '$last', '$email', '$uid', '$pwd');";
mysqli_query($conn, $sql);

header("Location: ../38_insert_to_DB_from_PHP/index.php?signup=success");
