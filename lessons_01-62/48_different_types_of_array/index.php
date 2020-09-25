<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  <?php
    
    //indexed arrays
    $data = array("Bill", "Ted", "Sam");
    print_r($data);

    echo "<br><br>";
    //associative arrays
    $data = 
      array(
        "first" => "Bill",
        "second" => "Ted",
        "third" => "Sam"
      );
    print_r($data);

    echo "<br><br>";
    //multidimensional arrays
    $data = array(array("Thomas", "Hoddinott"), "Simon", "Mark");
    print_r($data);

  ?>


</body>
</html>