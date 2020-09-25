<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
  </head>
  <body>
    <?php

      //quick and dirty function
      //uniqueness not guaranteed!
      //don't use to generate a uid, for example.
      function generateKeyBasic() {
        $keyLength = 8;
        $str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
        //^ wait... didn't we just learn regex to do this for us???

        $randStr = substr(str_shuffle($str), 0, $keyLength);
        return $randStr;
      }
      //echo generateKeyBasic();

      function generateKeyBetter() {
        $randStr = uniqid();
        $randStr = uniqid('joebloggs'); //can add a prefix
        $randStr = uniqid('joebloggs', true); //more entropy = true; more unique
        return $randStr;
      }
      //echo generateKeyBetter();

      $conn = mysqli_connect("localhost", "root", "", "php62");

      //something tells me if would be better to do this as a stored SQL procedure
      function checkKeys($conn, $randStr) {
        $sql = "select * from keystring";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['keystringKey'] == $randStr) {
            $keyExists = true;
            break;
          } else {
            $keyExists = false;
          }
        }
        return $keyExists;
      }

      function generateKey($conn) {
        $keyLength = 1; //just for testing
        $str = "abcdefg"; //just for testing
        $randStr = substr(str_shuffle($str), 0, $keyLength);

        $checkKey = checkKeys($conn, $randStr);
        while ($checkKey == true) {
          $randStr = substr(str_shuffle($str), 0, $keyLength);
          $checkKey = checkKeys($conn, $randStr);
        }
        return $randStr;
      }

      //out of $str = "abcdefg" we'll never get any of the values already in the DB
      echo generateKey($conn);
    ?>
  </body>
</html>