<?php
include_once './consts.php';

//is this check necessary? i.e. can we force this from the page without hiting the button?
if (!isset($_POST['submit'])) {
  exit(); 
}
  
$newFileName = $_POST['submit'];
$imageTitle = $_POST['filetitle'];
$imageDesc = $_POST['filedesc'];

$file = $_FILES['file']; //print_r($file);
$fileName = $file['name'];
$fileType = $file['type'];
$fileTempName = $file['tmp_name'];
$fileError = $file['error'];
$fileSize = $file['size'];

$fileExt = explode(".", $fileName);
$fileActualExt = strtolower(end($fileExt));
//^todo combine into one; rename vars

if (!in_array($fileActualExt, $allowedFormats)) {
  echo "You need to upload a proper file type: " . implode(", ", $allowedFormats); 
  exit();
} elseif (!$fileError === 0) {
  echo "You had an error."; 
  exit();
} elseif ($fileSize > $allowedLimit) {
  echo "File is over " . $allowedLimit/1e3 . "kb";
  exit();
} elseif (empty($imageTitle) || empty($imageDesc)) {
  header("Location: ../gallery.php?upload=empty");
  exit();
}

$imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
$fileDestination = "../img/gallery/" . $imageFullName;

include_once "./dbh.php";
$sql = "select * from gallery;";
$result = executeSQL($sql);
$rowCount = mysqli_num_rows($result);
$setImageOrder = $rowCount + 1;

$sql = 
  " 
  insert into gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
  values (?, ?, ?, ?);
  ";
$bind_params = array("ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
executeSQL($sql, $bind_params);
move_uploaded_file($fileTempName, $fileDestination);
header("Location: ../gallery.php?upload=success");