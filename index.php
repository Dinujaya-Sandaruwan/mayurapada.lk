
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
    <link rel="stylesheet" href="index.css">

    <title>Mayurapada CC - Mayurapada Central College Official Website </title>
  </head>
  <body>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Nav bar
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <?php include 'acc/header.php'; ?>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            hero Image
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
      <img src="img/test.jpg" alt="" class="hero">

      <div class="dekma-mehewara">
        <div class="dekma">
          <h1 class="dekma-title">අපගේ දැක්ම</h1>
          <h1 class="dekma-text">විද්‍යා දදාති විනයං</h1> <br>
        </div>
        <div class="mehewara">
          <h1 class="dekma-title">අපගේ මෙහෙවර</h1>
          <h1 class="dekma-text">ප්‍රශස්ත අද්‍යාපනයක් තුලින් විශිෂ්ට දරුවෙක්</h1>
        </div>
      </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            LMS
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->   

      <div class="mayura-lms">
        <div class="lms-img">
          <img src="img/lms-img.jpg" alt="" class="lms-img">
        </div>
        <div class="lms-text">
          <h1 class="lms-title">Mayurapada LMS</h1>
          <h1 class="lms-tag">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas tempora laborum fuga non iure voluptatem temporibus aut, magni laudantium illo rerum eaque exercitationem. Placeat odit aliquid similique in accusantium quasi iure! Magni dolorum, omnis libero recusandae voluptate corrupti impedit expedita veritatis tenetur, doloribus obcaecati cupiditate, accusantium odit eos labore ratione!</h1>
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