<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="add.css">

    <title>ADD Images | Mayurapada CC</title>
  </head>
  <body>

    <div class="main">
        <h1 class="welcome">ADD IMAGES</h1>

        <div class="add-form">
            <form action="image-data.php"  method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputNewsTitle" class="form-label">News ID</label>
                    <?php if(isset($_COOKIE['news_id'])) { 
                      $cookie_news_id  = $_COOKIE['news_id'];  
                      } 
                    ?>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" maxlength="50" name="news_id" <?php echo 'value ="' . $cookie_news_id . '"' ?>>
                </div>
                <div class="mb-3">
                    <label for="exampleInputThumbnail" class="form-label">Add Image</label>
                    <input class="form-control" type="file"  id="formFile" name="image" accept="image/png, image/jpg, image/jpeg">
                </div>
                <button type="submit" class="btn btn-primary news-submit">Add Image</button>
              </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>