<?php include 'dbcon.php'; ?>

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $news_id = $_POST["form_id"];

    $sql = "INSERT INTO `comments`(`news_id`, `user_name`, `email`, `comment`) VALUES ('$news_id','$name','$email','$comment')";
    $conn->query($sql);

    $location = 'one-news.php?news_id=' .$news_id;
    // echo $location;

    header("Location: $location");

    
    


?>