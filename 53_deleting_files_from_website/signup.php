<?php
include_once 'dbh.php';

//??? - how to do that thing he does around 35:40
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "insert into user (first, last, username, password)
        values ('$first', '$last', '$uid', '$pwd')
";
mysqli_query($conn, $sql);

$sql = "select * from user 
        where username = '$uid' and first = '$first'
";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $userid = $row['id'];
    $sql = "insert into profileimg (userid, status)
            values ('$userid', 1)
    ";
    mysqli_query($conn, $sql);
    header("Location: index.php");
  }
} else {
  echo "You have an error!";
}