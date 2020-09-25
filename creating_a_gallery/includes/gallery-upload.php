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
$fileExt = strtolower(end($fileExt));
//needs to be a multi-liner - see: https://vijayasankarn.wordpress.com/2017/08/28/php-only-variables-should-be-passed-by-reference/

//validation - quick and dirty
//all the errors should be listed, not just one by one, etc.
if (!in_array($fileExt, $allowedImgFormats)) {
  echo "You need to upload a proper file type: " . implode(", ", $allowedImgFormats); 
  exit();
} elseif ($fileSize > $allowedImgSize) {
  echo "File is over " . $allowedImgSize/1e3 . "kb"; 
  exit();
} elseif (empty($imageTitle)) {
  echo "No image title"; 
  exit();
} elseif (empty($imageDesc)) {
  echo "no image description"; 
  exit();
} elseif (!$fileError === 0) {
  echo "You had an error."; 
  exit();
}

$imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileExt;
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