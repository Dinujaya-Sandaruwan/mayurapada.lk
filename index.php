
<?php include 'dbcon.php'; 
        if (isset($_GET["news_id"])){
          $news_id = $_GET["news_id"];
          $sql = "SELECT * FROM `news` WHERE news_id = $news_id;";
        }
        else {
          $sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 1";
        }
        
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="styles/image-effect/fluid-gallery.css">
    <!-- My CSS -->
    <?php include 'styles/!main.style.php'; ?>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index-media.css">

    <title>Mayurapada CC - Mayurapada Central College Official Website </title>
  </head>
  <body>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Nav bar
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <?php include 'acc/header.php'; ?>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Hero Image
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

      <div class="home-hero">
        <img src="img/hero.jpg" alt="" class="hero-image">
        <h1 class="main-title fade-up">MAYURAPADA CENTRAL COLLEGE <br> NARAMMALA</h1>
      </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Dekma - Mehewara
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <div class="dekma-mehewara">
          <div class="dekma">
            <h1 class="dekma">Our Vision</h1>
            <p class="dekma">Vidya Dadathi Vinayan</p>
          </div>
          <div class="mehewara">
            <h1 class="mehewara">Our Mission</h1>
            <p class="mehewara">A great child with an optimal education</p>
          </div>
        </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Sample News
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->   
        <div class="sample-news-all">
          <h1 class="sample-news-title">Latest News</h1>
          <div class="sample-news">
          <?php
              include 'dbcon.php';
                  $sql = "SELECT * FROM `news` LIMIT 4;";
                  // echo"$news_id";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo'<!-- One Card -->';
                      echo'<div class="card">';
                      echo'  <img src="add/' . $row['news_thumb'] . '" class="card-img-top" alt="...">';
                      echo'  <div class="card-body">';
                      echo'    <h5 class="card-title">' . $row['news_title'] . '</h5>';
                      $short_iag = substr($row['news_tag'], 0, 70);
                      echo'    <p class="card-text">'. $short_iag .' ....</p>';
                      echo'    <a href="one-news.php?news_id='. $row['news_id'] . '" class="btn btn-primary">View More</a>';
                      echo'  </div>';
                      echo'</div> ';
                    }
                  } else {
                    echo "0 results";
                  }      
              ?>
        </div>
        </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            News Latter
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <div class="news-letter">
          <!-- <h1 class="news-letter-title"> Welcome to Our Newsletter</h1> -->
            <form class="news-letter-form" action="">
              <input type="text" class="news-letter-input" placeholder="Welcome to Our Newsletter">
              <button class="news-letter-submit">Submit</button>
            </form>
        </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Sample Gallery
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <div class="memories">
          <h1 class="memory-title">Latest Memories</h1>
          <div class="memory-images">
          <div class="tz-gallery">

            <div class="row">
              <?php
                $get_images = "SELECT * FROM `images` LIMIT 8 ;";
                // echo"$news_id";
                $images = $conn->query($get_images);
                if ($images->num_rows > 0) {
                  // output data of each row
                  while($row = $images->fetch_assoc()) {
                    echo '<div class="col-sm-8 col-md-3">';
                    echo '    <a class="lightbox" href="add/' . $row["image_url"] . '">';
                    echo '        <img src="add/' . $row["image_url"] . '" alt="Bridge">';
                    echo '    </a>';
                    echo '</div>';
                  }
                } else {
                  echo "0 results";
                }      
              ?>
            </div>

            </div>
          </div>
        </div>


<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Footer
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

  <?php include 'acc/footer.php'; ?>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
    baguetteBox.run('.tz-gallery');
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>