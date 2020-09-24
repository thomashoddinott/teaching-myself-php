<?php

if (isset($_POST['submit'])) {
  $newFileName = $_POST['submit'];

  $imageTitle = $_POST['filetitle'];
  $imageDesc = $_POST['filedesc'];

  $file = $_FILES['file'];
  //print_r($file);

  $fileName = $file['name'];
  $fileType = $file['type'];
  $fileTempName = $file['tmp_name'];
  $fileError = $file['error'];
  $fileSize = $file['size'];

  $fileExt = explode(".", $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array("jpg", "jpeg", "png");

  //todo - give these a test in the debugger 
  //- give everything a test by restarting table and adding back logos
  if (!in_array($fileActualExt, $allowed)) {
    echo "You need to upload a proper file type.";
    exit();
  }
  if (!$fileError === 0) {
    echo "You had an error."; 
    exit();
  }
  if ($fileSize > 2e6) {
    echo "File is over 2e6";
    exit();
  } 

  $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
  $fileDestination = "../img/gallery/" . $imageFullName;

  include_once "./dbh.inc.php";

  if (empty($imageTitle) || empty($imageDesc)) {
    header("Location: ../gallery.php?upload=empty");
    exit();
  } else {
    $sql = "select * from gallery;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL query failed";
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $rowCount = mysqli_num_rows($result);
      $setImageOrder = $rowCount + 1;

      $sql = 
        " 
        insert into gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
        values (?, ?, ?, ?);
        ";
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL query failed";
      } else {
        mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
        mysqli_stmt_execute($stmt);
        move_uploaded_file($fileTempName, $fileDestination);
        header("Location: ../gallery.php?upload=success");
      }
    }
  }
}