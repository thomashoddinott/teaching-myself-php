<?php
  $_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
  </head>
  <body>

without css this is gonna look bad!

    <main>
      <section class="gallery-links">
        <div class="wrapper">
          <h2>Gallery</h2>
          
          <div class="gallery-container">
            <a href="#">
              <div></div>
              <h3>h3 Title</h3>
              <p>Paragraph</p>
            </a>
            <a href="#">
              <div></div>
              <h3>h3 Title</h3>
              <p>Paragraph</p>
            </a>
            <a href="#">
              <div></div>
              <h3>h3 Title</h3>
              <p>Paragraph</p>
            </a>
            <a href="#">
              <div></div>
              <h3>h3 Title</h3>
              <p>Paragraph</p>
            </a>
            <a href="#">
              <div></div>
              <h3>h3 Title</h3>
              <p>Paragraph</p>
            </a>
          </div>

        <?php
        if (isset($_SESSION['username'])) {
          echo
            '<div class="gallery-upload">
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name">
                <input type="text" name="filetitle" placeholder="Image title">
                <input type="text" name="filedesc" placeholder="Image description">
                <input type="file" name="file">
                <button type="submit" name="submit">Upload</button>
              </form>
            </div>';
        }
        ?>


        </div> 
      </section>
    </main>
  </body>
</html> 