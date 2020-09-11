<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
  </head>
  <body>
    <?php
      $string = "My name is Thomas; Thomas is my name.";

      echo preg_match("/Thomas/", $string);
      echo preg_match("/./", $string); //any character
      echo preg_match("/(a)/", $string); //individual characters  
      echo preg_match("/(a|i)/", $string); //more characters (pipe = OR) 
      echo preg_match("/[az]/", $string); //characters within range
      echo preg_match("/[^abc]/", $string); //characters not within range
      echo preg_match("/[a-zA-Z]/", $string); //range (what's the diff with [az] ???)
      echo preg_match("/[0-9]/", $string);
      echo "</br></br>";

      preg_match_all("/T.*my/", $string, $array); 
      //start - match all from 'T'
      //end at 'my'
      print_r($array);
      echo "</br></br>";
      

      //https://www.w3schools.com/php/php_regex.asp is your friend
      
      //some more...

      //little hard to follow, but search for non-digit characters of at least length 3 ??? (spaces included?)
      preg_match_all("/\D{3}/", $string, $array);
      print_r($array);
      echo "</br></br>";

      //non whitespace characters
      preg_match_all("/\S{3}/", $string, $array);
      print_r($array);
      echo "</br></br>";

      //check we start with 'M'
      echo preg_match("/^M/", $string);
      echo "</br></br>";

      //check we end with fullstop '.'
      echo preg_match("/.$/", $string);
      echo "</br></br>";

      //combine them both...
      //little confusing with . being a metacharacter for regex and . a fullstop in our sentence but hey
      echo preg_match("/^M.*.$/", $string);
      echo "</br></br>";  

      // REGEX is consistent across programming languages
      // so learning it here will help you in your next language.
      // https://regexr.com/ and sites like it are great playgrounds
      // to learn regex 
      
    ?>
  </body>
</html>