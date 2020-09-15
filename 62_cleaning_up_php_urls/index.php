<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description.
    This will often show up in search engine results."> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
  </head>
  <body>
    <?php

      //http://mmtuts.net/article.php?id=23&name=HelloWorld&Time=1234567
      //^ a url like this is very typical with php

      //can we tidy it up???

      $articleId = $_GET['id'];
      $artcileName = $_GET['name'];

      echo "Article ID is: " . $articleId;
      echo "<br>";
      echo "Article name is: " . $artcileName;
    ?>

    
  </body>
</html>