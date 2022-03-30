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

    <style>
        header.one-news {
            /* max-width: 1500px; */
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
            /* border: 3px solid white; */
            margin-top: 50px;
            }

            .row {
            display: flex;
            overflow: hidden;
            }

            .imagegroup {
            display: flex;
            width: 100%;
            }

            .imagegroup img{
            flex-shrink: 0;
            object-fit: cover;
            margin: 3px;
            }

            .imagegroup {
            animation: travel 20s ease-in-out infinite;
            }

            @keyframes travel {
            0%, 100% {
                transform: translate3d(0,0,0);
                }
            50% {
                transform: translate3d(-100%,0,0);
                }
            }
    </style>

    <title>Mayurapada CC - Mayurapada Central College Official Website </title>
  </head>
  <body>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Nav bar
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <nav class="my-nav navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mayurapada CC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mayura Life
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Administration
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Recent
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About US
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#">Contact US <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </nav>

   
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Hero Image / Title
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    
    
    <div class="post-hero">
      <img src="img/hero.jpg" class="img-fluid hero" alt="...">
      <h1 class="post-hero-title">
          විදුහල්පති තුමියගේ නික්මයාම
      </h1>
    </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Main Images
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

<header class="one-news">
  
  <div class="row small">
    <div class="imagegroup" style="animation-delay: 1s;">
       <img src="img/news/1.jpg" alt="" width = '20%'>
       <img src="img/news/2.jpg" alt="" width = '20%'>
       <img src="img/news/3.jpg" alt="" width = '20%'>
       <img src="img/news/4.jpg" alt="" width = '20%'>
       <img src="img/news/5.jpg" alt="" width = '20%'>
       <img src="img/news/6.jpg" alt="" width = '20%'>
       <img src="img/news/7.jpg" alt="" width = '20%'>
       <img src="img/news/8.jpg" alt="" width = '20%'>
       <img src="img/news/9.jpg" alt="" width = '20%'>
       <img src="img/news/10.jpg" alt="" width = '20%'>
    </div>
  </div>


</header>





<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            News Tagline
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="news-text">
      <p class="news-text">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo minus quam distinctio. Aut est omnis itaque, laboriosam numquam voluptate iste cupiditate hic, rem, amet nobis nam voluptatibus! Asperiores eaque aliquid quod. Facilis et quasi, qui rerum harum explicabo, deleniti magni iste, animi quia ea quis aperiam sit dolor vel id.
      </p>
    </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Image Gallery
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

          <div class="tz-gallery">

          <div class="row">

              <div class="col-sm-6 col-md-4">
                  <a class="lightbox" href="img/news/1.jpg">
                      <img src="img/news/1.jpg" alt="Bridge">
                  </a>
              </div>
              <div class="col-sm-6 col-md-4">
                  <a class="lightbox" href="img/news/2.jpg">
                      <img src="img/news/2.jpg" alt="Park">
                  </a>
              </div>
              <div class="col-sm-6 col-md-4">
                  <a class="lightbox" href="img/news/3.jpg">
                      <img src="img/news/3.jpg" alt="Tunnel">
                  </a>
              </div>
              <div class="col-sm-6 col-md-4">
                  <a class="lightbox" href="img/news/4.jpg">
                      <img src="img/news/4.jpg" alt="Traffic">
                  </a>
              </div>
              <div class="col-sm-6 col-md-4">
                  <a class="lightbox" href="img/news/5.jpg">
                      <img src="img/news/5.jpg" alt="Coast">
                  </a>
              </div> 
              <div class="col-sm-6 col-md-4">
                  <a class="lightbox" href="img/news/6.jpg">
                      <img src="img/news/6.jpg" alt="Rails">
                  </a>
              </div>


          </div>

          </div>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Footer
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

<!-- Footer -->
<footer class="bg-dark">
    <!-- Copyrights -->
    <div class="my-footer py-4">
      <div class="container text-center">
        <p class=" mb-0 py-2">© 2022 Mayurapada CC All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- End -->


    

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