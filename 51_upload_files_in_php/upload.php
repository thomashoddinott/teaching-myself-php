<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt)); //end returns last element of array

  $allow = array('jpg', 'jpeg', 'png', 'pdf');
  //can this be hacked? just rename file for example?

  if (in_array($fileActualExt, $allow)) {
    if ($fileError === 0) {
      if ($fileSize < 500000) {
        $fileNameNew = uniqid('', true)."."."$fileActualExt"; //unique id based on timestamp
        //$fileDestination = 'uploads/'.$filenameNew;
        //!!! fixme ^
        $fileDestination = 'uploads/foo.file'; //HACK - this is a temp workaround so we can complete the lesson
        move_uploaded_file($fileTmpName, $fileDestination);
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