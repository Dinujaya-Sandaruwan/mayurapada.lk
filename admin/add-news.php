<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="add.css">

    <title>ADD NEWS | Mayurapada CC</title>
  </head>
  <body>

    <div class="add-main">
        <h1 class="welcome">ADD NEWS</h1>

        <div class="add-form">
            <form action="news-data.php"  method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputNewsTitle" class="form-label">News Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" maxlength="50" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputNewsTagline" class="form-label">News Tagline</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tag"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputThumbnail" class="form-label">Thumbnail</label>
                    <input class="form-control" type="file"  id="formFile" name="thumb" accept="image/png, image/jpg, image/jpeg">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" class="form-label">Date</label>
                    <input class="form-control" type="date" id="formFile" name="date">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Upload Main Images</label>
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_1" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_2" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_3" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_4" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_5" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_6" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_7" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_8" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_9" accept="image/png, image/jpg, image/jpeg" >
                      <input class="form-control main-images" type="file"  id="formFile" name="main_image_10" accept="image/png, image/jpg, image/jpeg" >
                </div>

                <button type="submit" class="btn btn-primary news-submit">Submit</button>
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