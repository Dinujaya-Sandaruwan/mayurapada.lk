
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

    <title>Mayurapada CC - Mayurapada Central College Official Website </title>
  </head>
  <body>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Nav bar
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <?php include 'acc/header.php'; ?>

   
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Hero Image / Title
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    
    
    <div class="post-hero">
      <img src="img/hero.jpg" class="img-fluid hero" alt="...">
      <h1 class="post-hero-title">
        <?php
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo $row["news_title"];
              }
            } else {
              echo "0 results";
            }
          ?>
      </h1>
    </div>


<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Main Images
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

<header class="one-news">

<div class="row small">
    <div class="imagegroup" style="animation-delay: 1s;">
      <?php
      $result = $conn->query($sql);
       if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo'     <img src="add/' . $row["main_image_1"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_2"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_3"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_4"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_5"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_6"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_7"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_8"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_9"] . ' " alt="" width = "20%">';
            echo'     <img src="add/' . $row["main_image_10"] . ' " alt="" width = "20%">';
          }
        } else {
          echo "0 results";
        }

      ?>
    </div>
  </div>

</header>
    



<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            News Tagline
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="news-text">
      <p class="news-text">
        <?php
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo $row["news_tag"];
            }
          } else {
            echo "0 results";
          }
        ?>
      </p>
    </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Image Gallery
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

  <div class="tz-gallery">

    <div class="row">
      <?php
        $get_images = "SELECT * FROM `images` WHERE news_id = $news_id";
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


<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Comments
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->


  <div class="news-comments">
    <form action= "comment-data.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label comments-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label comments-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      </div>
      <div class="mb-3">
        <label for="Comment" class="comments-label">Comment</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
      </div>
      <?php echo'<input type="hidden" value="'. $news_id .'" name="form_id">' ?>
      <button type="submit" class="btn btn-primary comments-submit">Submit</button>
    </form>
  </div>

  <div class="news-comments show-comments">
    <div class="one-comment">
         <div class="user-avater-div">
           <img src="img/me.jpg" alt="" class="comment-user-avater">
         </div>
         <div class="user-comment-div">
           <h1 class="comment-user-name admin-user">Dinujaya Sandaruwan</h1>
           <h1 class="user-comment">This is a very valuable work. I wish you continued success in this endeavor</h1>
         </div>
    </div>

    
    <?php
        $get_comments = "SELECT * FROM comments WHERE news_id = $news_id";
        // echo"$news_id";
        $comments = $conn->query($get_comments);
        if ($comments->num_rows > 0) {
          // output data of each row
          while($row = $comments->fetch_assoc()) {
            echo'<div class="one-comment">';
            echo'      <div class="user-avater-div">';
            echo'        <img src="img/user_avetar.png" alt="" class="comment-user-avater">';
            echo'      </div>';
            echo'      <div class="user-comment-div">';
            echo'        <h1 class="comment-user-name ">'. $row['user_name'] .'</h1>';
            echo'        <h1 class="user-comment">'. $row['comment'] .'</h1>';
            echo'      </div>';
            echo'</div>';
          }
        } else {
          // echo "0 results";
        }      
    ?>

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