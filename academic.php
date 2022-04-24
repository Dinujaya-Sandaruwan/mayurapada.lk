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
    <link rel="stylesheet" href="styles/pages/academic.css">

    <style>
      /* Style the tab */
      .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
          display:flex;
          justify-content:center;
          font-family: 'Roboto', sans-serif;;
          font-weight: 700;
          flex-wrap: wrap;
          
        }
        
        /* Style the buttons inside the tab */
        .tab button {
          background-color: inherit;
          /* float: ; */
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          transition: 0.3s;
          font-size: 17px;
        }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }
        
        /* Create an active/current tablink class */
        .tab button.active {
          background-color: #ccc;
        }
        
        /* Style the tab content */
        .tabcontent {
          display: none;
          padding: 20px;
          border: 1px solid #ccc;
          border-top: none;
        }
    </style>
    
    <title> Academic | Mayurapada CC</title>
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
                Academic
            </h1>
        </div>


<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            6 - 9 Sub
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

        <div class="container">
          <h1 class="academic-6-9-title">GRADE 6-11 SUBJECTS</h1>
          <div class="row">
            <div class="col">
              <ul>
                <li class="subjects">Mathematics</li>
                <li class="subjects">Science</li>
                <li class="subjects">Tamil</li>
                <li class="subjects">Geography</li>
                <li class="subjects">Art</li>
                <li class="subjects">Sinhala Literature</li>
                <li class="subjects">Agriculture & Food Technologies</li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li class="subjects" >Sinhala Language & Literature</li>
                <li class="subjects" >Citizenship Education</li>
                <li class="subjects" >History</li>
                <li class="subjects" >Music (oriental)</li>
                <li class="subjects" >Dancing</li>
                <li class="subjects" >Drama & Theatre</li>
                <li class="subjects" >Home Economics</li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li class="subjects" >English Language</li>
                <li class="subjects" >Buddhism</li>
                <li class="subjects" >Business & Accounting</li>
                <li class="subjects" >Music (western)</li>
                <li class="subjects" >English Literature</li>
                <li class="subjects" >Information & Communication Technology</li>
                <li class="subjects" >Health & Physical Education</li>
              </ul>
            </div>
          </div>
          <h1 class="academic-6-9-title">ADVANCE LEVEL SECTIONS & SUBJECTS</h1>
          <div class="streams">
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'Science')">Science Stream</button>
              <button class="tablinks" onclick="openCity(event, 'Art')">Art Stream</button>
              <button class="tablinks" onclick="openCity(event, 'Commerce')">Commerce Stream</button>
              <button class="tablinks" onclick="openCity(event, 'Technology')">Technology Stream</button>
            </div>

            <div id="Science" class="tabcontent">
              <table class="table table-dark ">
                <thead>
                <tbody>
                  <tr> 
                    <td class="al-subjects">Physics</td>
                    <td class="al-subjects">Chemistry</td>
                    <td class="al-subjects">Biology</td>
                  </tr>
                  <tr>
                    <td lass="al-subjects">Combined Maths</td>
                    <td lass="al-subjects">Agriculture</td>
                    <td lass="al-subjects">General English</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div id="Art" class="tabcontent">
                <table class="table table-dark">
                  <thead>
                  <tbody>
                    <tr> 
                      <td class="al-subjects">Home Economics</td>
                      <td class="al-subjects">Logic</td>
                      <td class="al-subjects">Sinhala</td>
                    </tr>
                    <tr>
                      <td lass="al-subjects">Political Science</td>
                      <td lass="al-subjects">Dancing</td>
                      <td lass="al-subjects">History</td>
                    </tr>
                    <tr>
                      <td lass="al-subjects">Geography</td>
                      <td lass="al-subjects">Music (western / oriental)</td>
                      <td lass="al-subjects">Art</td>
                    </tr>
                    <tr>
                      <td lass="al-subjects">Japanese</td>
                      <td lass="al-subjects">Buddhist Civilisation</td>
                      <td lass="al-subjects">French</td>
                    </tr>
                    <tr>
                      <td lass="al-subjects">English</td>
                      <td lass="al-subjects">General English</td>
                      <td lass="al-subjects">Drama & Theatre</td>
                    </tr>
                  </tbody>
                </table>
            </div>

            <div id="Commerce" class="tabcontent">
                <table class="table table-dark">
                  <thead>
                  <tbody>
                    <tr> 
                      <td class="al-subjects">Business Studies</td>
                      <td class="al-subjects">Accounting</td>
                      <td class="al-subjects">Economics</td>
                    </tr>
                    <tr>
                      <td lass="al-subjects">Business Statistics	</td>
                      <td lass="al-subjects">ICT</td>
                      <td lass="al-subjects"> - </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div id="Technology" class="tabcontent">
                <table class="table table-dark">
                  <thead>
                  <tbody>
                    <tr> 
                      <td class="al-subjects">Engineering Technology</td>
                      <td class="al-subjects">Bio System Technology</td>
                      <td class="al-subjects">Science</td>
                    </tr>
                    <tr>
                      <td lass="al-subjects">ICT</td>
                      <td lass="al-subjects">Geography</td>
                      <td lass="al-subjects">agricultural science</td>
                    </tr>
                  </tbody>
                </table>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

      <script>
          function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
          }
      </script>
  </body>
</html>