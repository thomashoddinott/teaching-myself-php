<?php
$path = "uploads/cat*";
$fileinfo = glob($path);

//deviated from yt vid here — I think this way is neater and makes more sense than what was done in the tutorial
if (count($fileinfo) == 0) {
  header("Location: index.php?nocatsfound");
} else {
  for ($x = 0; $x < count($fileinfo); $x++) {
    unlink($fileinfo[$x]);
  }
  header("Location: index.php?deletesuccess");
}