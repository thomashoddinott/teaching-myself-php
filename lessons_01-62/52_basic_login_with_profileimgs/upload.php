<?php

session_start();
include_once 'dbh.php';
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt)); //end returns last element of array

  $allow = array('jpg', 'jpeg', 'png');
  //can this be hacked? just rename file for example?

  if (in_array($fileActualExt, $allow)) {
    if ($fileError === 0) {
      if ($fileSize < 500000) {
        $fileNameNew = "profile".$id.".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew; 
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "update profileimg 
                set status = 0
                where userid = '$id'; 
        ";
        $result = mysqli_query($conn, $sql);

        
        header("Location: index.php?uploadsuccess");
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo "There was an error uploading your file!";
    }
  } else {
    "Can't let you do that, Star Fox!";
  }

}