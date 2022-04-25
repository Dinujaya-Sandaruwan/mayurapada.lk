<?php include '../dbcon.php'; ?>

<?php

    $news_id = $_POST["news_id"];

    if (isset($_FILES['image'])) {

        // echo "<pre>";
        // print_r($_FILES['thumb']);
        // echo "</pre>";

        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];

        if ($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $new_img_name = uniqid($news_id . "_", true).'.'.$img_ex_lc;
            $img_upload_path = 'gallery/'.$new_img_name;
            // echo"$img_upload_path";
            move_uploaded_file($tmp_name, $img_upload_path);

        }}

    $sql = "INSERT INTO `images`(`news_id`, `image_url`) VALUES ('$news_id','$img_upload_path')";
    $conn->query($sql);

    $cookie_name = "news_id";
    $cookie_value = "$news_id";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    header("Location: add-images.php"); 

?>