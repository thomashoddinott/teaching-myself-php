<?php
session_start();
include_once 'dbh.php';
$session_id = $_SESSION['id'];

$filename = "uploads/profile".$session_id."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
// print_r($fileext);
$fileactualext = $fileext[1];

$file = "uploads/profile".$session_id.".".$fileactualext;

//unlink deletes the file
if (!unlink($file)) { 
  echo "File not deleted!";
} else {
  echo "File deleted!";
}

$sql = "
        UPDATE profileimg 
        SET status=1 
        where userid='$session_id';
        ";
mysqli_query($conn, $sql);

header("Location: index.php?deletesuccess");
