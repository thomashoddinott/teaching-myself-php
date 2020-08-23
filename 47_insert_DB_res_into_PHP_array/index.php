<?php
  include_once '../includes/dbh2.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  <?php
    
    $sql = "SELECT * FROM data";
    $result = mysqli_query($conn, $sql);
    $data = array();

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
        //this creates a multidimensional array
        //-> see print_r in browser
      }
    }

    //print_r($data);

    foreach ($data as $d) {
      echo $d['text']; //name of field in DB
      echo "<br>";
    }

  ?>


</body>
</html>