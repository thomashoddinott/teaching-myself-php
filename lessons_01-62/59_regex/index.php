<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
  </head>
  <body>
    <?php
      $string = "My name is Thomas. Thomas is my name.";

      //preg_match can only say if there are 1 or more matches
      if (preg_match("/Thomas/", $string, $array)) {
        print_r($array); 
      }
      echo "</br>";

      //preg_match_all lists all occurances
      if (preg_match_all("/Thomas/", $string, $array)) {
        print_r($array); 
      } 
      echo "</br>";

      //you can do more complex stuff like a search within a search
      if (preg_match_all("/(Thom)as/", $string, $array)) {
        print_r($array); 
      } 
      echo "</br>";

      //replace matching text
      $string2 = preg_replace("/Thomas/", "Daniel", $string);
      echo $string2;
    ?>
  </body>
</html>