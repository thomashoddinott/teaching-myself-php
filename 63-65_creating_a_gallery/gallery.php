<?php
  $_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <main>
      <section class="gallery-links">
        <div class="wrapper">
          <h2>Gallery</h2>
          
          <div class="gallery-container">
          <?php
          include_once './includes/dbh.inc.php';
          $sql = "select * from gallery order by orderGallery desc";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL failed";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
              echo '
              <div class="gallery">
                <a target="_blank" href="img/gallery/'.$row["imgFullNameGallery"].'">
                  <img src="img/gallery/'.$row["imgFullNameGallery"].'" width="600" height="400">
                </a>
                <h3>'.$row["titleGallery"].'</h3>
                <p><i>'.$row["descGallery"].'</i></p>
              </div>
              ';
            }
          }
          ?>  
          </div>

        <?php
        if (isset($_SESSION['username'])) {
          echo
            '
            <div class="footer">
            <br>
            <h3>Upload an image</h3>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filetitle" placeholder="Image title">
                <input type="text" name="filedesc" placeholder="Image description">
                <input type="file" name="file">
                <button type="submit" name="submit">Upload</button>
              </form>
            </div>
            ';
        }
        ?>


        </div> 
      </section>
    </main>
  </body>
</html> 