<?php
  $_SESSION['username'] = "Admin"; //pretend we've logged in, etc.
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <main>
      <section>
        <div>
          <h1>Gallery</h1>
          <div>
            <?php
            echo '<h3> You are logged in as: '.$_SESSION['username'].'</h3>';

            include_once './includes/dbh.php';
            $sql = "select * from gallery order by orderGallery desc";
            $result = executeSQL($sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo '
              <div class="gallery">
                <a href="img/gallery/'.$row["imgFullNameGallery"].'">
                  <img src="img/gallery/'.$row["imgFullNameGallery"].'" width="600" height="400">
                </a>
                <h3>'.$row["titleGallery"].'</h3>
                <p><i>'.$row["descGallery"].'</i></p>
              </div>
              ';
            }
            ?>  
          </div>

          <?php
          if (isset($_SESSION['username'])) {
            include_once './includes/consts.php';
            echo
              '
              <div class="footer">
              <br>
              <h3>
                Upload an image
                <i> 
                  — max: '.$allowedLimit/1e3.'kb
                  — formats: '.implode(", ", $allowedFormats).'
                </i>  
              </h3>
                <form action="includes/gallery-upload.php" method="post" enctype="multipart/form-data">
                  <input type="text" name="filetitle" placeholder="Image title">
                  <input type="text" name="filedesc" placeholder="Image description">
                  <input type="file" name="file">
                  <button type="submit" name="submit">Upload</button>
                </form>
              <br>
              </div>
              ';
          }
          ?>
        </div> 
      </section>
    </main>
  </body>
</html> 