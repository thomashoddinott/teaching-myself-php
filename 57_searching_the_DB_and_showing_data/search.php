<?php
  include 'dbh.php';
?>

<h1>Search page</h1>

<div class='article-container'>
<?php
  if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    
    //doing this over and over, should we make a function???
    $sql = "
      select * from article 
      where a_title like '%$search%'
        or a_text like '%$search%'
        or a_author like '%$search%'
        or a_date like '%$search%'
      ";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
      echo "<h2>$queryResult match(es) found</h2>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'>
          <div class='article-box'>
            <h3>".$row['a_title']."</h3>
            <p>".$row['a_text']."</p>
            <p>".$row['a_date']."</p>
            <p>".$row['a_author']."</p>
          </div>
        </a>
      ";
      }
    } else {
      echo "No matches";
    }
  } 
?>
</div>