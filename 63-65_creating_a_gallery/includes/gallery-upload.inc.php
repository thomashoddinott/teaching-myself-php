<?php

if (isset($_POST['submit'])) {
  $newFileName = $_POST['submit'];

  if (empty($_POST['filename'])) {
    $newFileName = "gallery";
  } else {
    $newFileName = strtolower(str_replace(" ", "-", $newFileName));
  }

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

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize > 2e3) {
        //
      } else {
        echo "File is over 2e3";
      }
    } else {  
      echo "You had an error.";
      exit();
    }
  } else {
    echo "You need to upload a proper file type.";
    exit();
  }

}