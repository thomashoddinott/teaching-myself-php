<!DOCTYPE html>
<html>
<head>
<title>Lesson 46</title>
</head>
<body>
  <?php
    
    $data = array();

    //ways to insert data into array in PHP

    $data[] = "Thomas";
    $data[] = "99";
    //and so on!
    echo $data[0] . "<br><br>";

    //print out whole array
    print_r($data);

    //or use array_push() to insert data
    echo "<br><br>"; 

    $foo = array();
    array_push($foo, "Bill");
    array_push($foo, "and Ted");
    print_r($foo);

    //or...
    echo "<br><br>";
    $foo = array();
    array_push($foo, "Bill", "and Ted");
    //array_push($foo, "and Ted");
    print_r($foo);

  ?>


</body>
</html>