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
    <!-- My CSS -->
    <?php include 'styles/!main.style.php'; ?>
    <link rel="stylesheet" href="styles/pages/contact.css">
    
    <title> Contact US | Mayurapada CC</title>
  </head>
  <body>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Nav bar
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <?php include 'acc/header.php'; ?>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Hero Image / Title
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    
    
        <div class="page-hero">
            <img src="img/hero.jpg" class="img-fluid hero" alt="...">
            <h1 class="page-hero-title">
                Contact US
            </h1>
        </div>


<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Content
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
        <div class="about-main">
          <div class="about-title">
            <!-- <h1 class="about-title">LET'S CONTACT MAYURAPADA CC</h1> -->
          </div>
        </div>

        <div class="about-contact">
            <div class="about-content-left">
              <h1 class="about-school-name">Mayurapada Central College Narammala</h1>
              <hr class="about-white-line">
              <p class="about-school-address">
              Address :-<br>
              &nbsp Mayurapada Central college,<br>
              &nbsp Narammala.<br>
              <br>
              Phone No :-<br>
              &nbsp +94 372 249 228<br>
              </p>
              <hr class="about-white-line">
            </div>
            <div class="about-content-right">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3379808745212!2d80.20925041552599!3d7.427799314048647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3246d689aa1a9%3A0x9ed6541db36b3c91!2sMayurapada%20Central%20College!5e0!3m2!1sen!2sus!4v1650699559695!5m2!1sen!2sus" class="google-map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="contact-form">
          <div class="news-comments">
            <form action= "contact-data.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label comments-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label comments-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              </div>
              <div class="mb-3">
                <label for="Comment" class="comments-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary comments-submit">Submit</button>
            </form>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>