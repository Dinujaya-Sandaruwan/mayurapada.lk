<?php include '../dbcon.php'; ?>

<?php
$title = $_POST["title"];
$tag = $_POST["tag"];
$date = $_POST["date"];

// echo $title;

// Add to News List
$add_to_news_list = "INSERT INTO `news_list`(`news_title`) VALUES ('$title')";
$conn->query($add_to_news_list);

$get_news_id = "SELECT `news_id`, `news_title` FROM `news_list` ORDER BY `news_id` DESC LIMIT 1;";
$news_id = $conn->query($get_news_id);

if ($news_id->num_rows > 0) {
    // output data of each row
    while($row = $news_id->fetch_assoc()) {
    //   echo "id: " . $row["news_id"];
      $got_news_id = $row["news_id"];
    }
  }


// Add to News
// Add Thumbnail
if (isset($_FILES['thumb'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $img_name = $_FILES['thumb']['name'];
	$img_size = $_FILES['thumb']['size'];
	$tmp_name = $_FILES['thumb']['tmp_name'];
	$error = $_FILES['thumb']['error'];

    if ($error === 0){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid($got_news_id . "_", true).'.'.$img_ex_lc;
        $img_upload_path = 'thumb/'.$new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($tmp_name, $img_upload_path);

        echo"Thumbnail :- " . $img_upload_path;
    }}

    echo "<br>";

// Add main Images

// Image 01
if (isset($_FILES['main_image_1'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_1_img_name = $_FILES['main_image_1']['name'];
	$main_image_1_img_size = $_FILES['main_image_1']['size'];
	$main_image_1_tmp_name = $_FILES['main_image_1']['tmp_name'];
	$main_image_1_error = $_FILES['main_image_1']['error'];

    if ($main_image_1_error === 0){
        $main_image_1_img_ex = pathinfo($main_image_1_img_name, PATHINFO_EXTENSION);
        $main_image_1_img_ex_lc = strtolower($main_image_1_img_ex);
        $main_image_1_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_1_img_ex_lc;
        $main_image_1_img_upload_path = 'upload_img/'.$main_image_1_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_1_tmp_name, $main_image_1_img_upload_path);

        echo"main_image_1 :- " . $main_image_1_img_upload_path;
    }}

    echo "<br>";

// Image 02
if (isset($_FILES['main_image_2'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_2_img_name = $_FILES['main_image_2']['name'];
	$main_image_2_img_size = $_FILES['main_image_2']['size'];
	$main_image_2_tmp_name = $_FILES['main_image_2']['tmp_name'];
	$main_image_2_error = $_FILES['main_image_2']['error'];

    if ($main_image_2_error === 0){
        $main_image_2_img_ex = pathinfo($main_image_2_img_name, PATHINFO_EXTENSION);
        $main_image_2_img_ex_lc = strtolower($main_image_2_img_ex);
        $main_image_2_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_2_img_ex_lc;
        $main_image_2_img_upload_path = 'upload_img/'.$main_image_2_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_2_tmp_name, $main_image_2_img_upload_path);

        echo"main_image_2 :- " . $main_image_2_img_upload_path;
    }}

    echo "<br>";

    // Image 03
if (isset($_FILES['main_image_3'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_3_img_name = $_FILES['main_image_3']['name'];
	$main_image_3_img_size = $_FILES['main_image_3']['size'];
	$main_image_3_tmp_name = $_FILES['main_image_3']['tmp_name'];
	$main_image_3_error = $_FILES['main_image_3']['error'];

    if ($main_image_3_error === 0){
        $main_image_3_img_ex = pathinfo($main_image_3_img_name, PATHINFO_EXTENSION);
        $main_image_3_img_ex_lc = strtolower($main_image_3_img_ex);
        $main_image_3_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_3_img_ex_lc;
        $main_image_3_img_upload_path = 'upload_img/'.$main_image_3_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_3_tmp_name, $main_image_3_img_upload_path);

        echo"main_image_3 :- " . $main_image_3_img_upload_path;
    }}
   
    echo "<br>";

    // Image 04
if (isset($_FILES['main_image_4'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_4_img_name = $_FILES['main_image_4']['name'];
	$main_image_4_img_size = $_FILES['main_image_4']['size'];
	$main_image_4_tmp_name = $_FILES['main_image_4']['tmp_name'];
	$main_image_4_error = $_FILES['main_image_4']['error'];

    if ($main_image_4_error === 0){
        $main_image_4_img_ex = pathinfo($main_image_4_img_name, PATHINFO_EXTENSION);
        $main_image_4_img_ex_lc = strtolower($main_image_4_img_ex);
        $main_image_4_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_4_img_ex_lc;
        $main_image_4_img_upload_path = 'upload_img/'.$main_image_4_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_4_tmp_name, $main_image_4_img_upload_path);

        echo"main_image_4 :- " . $main_image_4_img_upload_path;
    }}

    echo "<br>";

    // Image 05
if (isset($_FILES['main_image_5'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_5_img_name = $_FILES['main_image_5']['name'];
	$main_image_5_img_size = $_FILES['main_image_5']['size'];
	$main_image_5_tmp_name = $_FILES['main_image_5']['tmp_name'];
	$main_image_5_error = $_FILES['main_image_5']['error'];

    if ($main_image_5_error === 0){
        $main_image_5_img_ex = pathinfo($main_image_5_img_name, PATHINFO_EXTENSION);
        $main_image_5_img_ex_lc = strtolower($main_image_5_img_ex);
        $main_image_5_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_5_img_ex_lc;
        $main_image_5_img_upload_path = 'upload_img/'.$main_image_5_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_5_tmp_name, $main_image_5_img_upload_path);

        echo"main_image_5 :- " . $main_image_5_img_upload_path;
    }}

    echo "<br>";


    // Image 06
if (isset($_FILES['main_image_6'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_6_img_name = $_FILES['main_image_6']['name'];
	$main_image_6_img_size = $_FILES['main_image_6']['size'];
	$main_image_6_tmp_name = $_FILES['main_image_6']['tmp_name'];
	$main_image_6_error = $_FILES['main_image_6']['error'];

    if ($main_image_6_error === 0){
        $main_image_6_img_ex = pathinfo($main_image_6_img_name, PATHINFO_EXTENSION);
        $main_image_6_img_ex_lc = strtolower($main_image_6_img_ex);
        $main_image_6_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_6_img_ex_lc;
        $main_image_6_img_upload_path = 'upload_img/'.$main_image_6_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_6_tmp_name, $main_image_6_img_upload_path);

        echo"main_image_6 :- " . $main_image_6_img_upload_path;
    }}

    echo "<br>";


    // Image 07
if (isset($_FILES['main_image_7'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_7_img_name = $_FILES['main_image_7']['name'];
	$main_image_7_img_size = $_FILES['main_image_7']['size'];
	$main_image_7_tmp_name = $_FILES['main_image_7']['tmp_name'];
	$main_image_7_error = $_FILES['main_image_7']['error'];

    if ($main_image_7_error === 0){
        $main_image_7_img_ex = pathinfo($main_image_7_img_name, PATHINFO_EXTENSION);
        $main_image_7_img_ex_lc = strtolower($main_image_7_img_ex);
        $main_image_7_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_7_img_ex_lc;
        $main_image_7_img_upload_path = 'upload_img/'.$main_image_7_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_7_tmp_name, $main_image_7_img_upload_path);

        echo"main_image_7 :- " . $main_image_7_img_upload_path;
    }}

    echo "<br>";

    // Image 08
if (isset($_FILES['main_image_8'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_8_img_name = $_FILES['main_image_8']['name'];
	$main_image_8_img_size = $_FILES['main_image_8']['size'];
	$main_image_8_tmp_name = $_FILES['main_image_8']['tmp_name'];
	$main_image_8_error = $_FILES['main_image_8']['error'];

    if ($main_image_8_error === 0){
        $main_image_8_img_ex = pathinfo($main_image_8_img_name, PATHINFO_EXTENSION);
        $main_image_8_img_ex_lc = strtolower($main_image_8_img_ex);
        $main_image_8_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_8_img_ex_lc;
        $main_image_8_img_upload_path = 'upload_img/'.$main_image_8_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_8_tmp_name, $main_image_8_img_upload_path);

        echo"main_image_8 :- " . $main_image_8_img_upload_path;
    }}

    echo "<br>";


    // Image 09
if (isset($_FILES['main_image_9'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_9_img_name = $_FILES['main_image_9']['name'];
	$main_image_9_img_size = $_FILES['main_image_9']['size'];
	$main_image_9_tmp_name = $_FILES['main_image_9']['tmp_name'];
	$main_image_9_error = $_FILES['main_image_9']['error'];

    if ($main_image_9_error === 0){
        $main_image_9_img_ex = pathinfo($main_image_9_img_name, PATHINFO_EXTENSION);
        $main_image_9_img_ex_lc = strtolower($main_image_9_img_ex);
        $main_image_9_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_9_img_ex_lc;
        $main_image_9_img_upload_path = 'upload_img/'.$main_image_9_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_9_tmp_name, $main_image_9_img_upload_path);

        echo"main_image_9 :- " . $main_image_9_img_upload_path;
    }}

    echo "<br>";


    // Image 10
if (isset($_FILES['main_image_10'])) {

	// echo "<pre>";
	// print_r($_FILES['thumb']);
	// echo "</pre>";

    $main_image_10_img_name = $_FILES['main_image_10']['name'];
	$main_image_10_img_size = $_FILES['main_image_10']['size'];
	$main_image_10_tmp_name = $_FILES['main_image_10']['tmp_name'];
	$main_image_10_error = $_FILES['main_image_10']['error'];

    if ($main_image_10_error === 0){
        $main_image_10_img_ex = pathinfo($main_image_10_img_name, PATHINFO_EXTENSION);
        $main_image_10_img_ex_lc = strtolower($main_image_10_img_ex);
        $main_image_10_new_img_name = uniqid($got_news_id . "_", true).'.'.$main_image_10_img_ex_lc;
        $main_image_10_img_upload_path = 'upload_img/'.$main_image_10_new_img_name;
        // echo"$img_upload_path";
        move_uploaded_file($main_image_10_tmp_name, $main_image_10_img_upload_path);

        echo"main_image_10 :- " . $main_image_10_img_upload_path;
    }}

    echo "<br>";
    echo "<br>";

    echo "Title - " . $title;
    echo "<br>";
    echo "Tag - " . $tag;
    echo "<br>";
    echo "Date - " . $date;
    echo "<br>";

    $sql = "INSERT INTO `news`(`news_title`, `news_tag`, `news_thumb`, `date`, `main_image_1`, `main_image_2`, `main_image_3`, `main_image_4`, `main_image_5`, `main_image_6`, `main_image_7`, `main_image_8`, `main_image_9`, `main_image_10`, `news_id`) 
    VALUES ('$title','$tag','$img_upload_path','$date','$main_image_1_img_upload_path','$main_image_2_img_upload_path','$main_image_3_img_upload_path','$main_image_4_img_upload_path','$main_image_5_img_upload_path','$main_image_6_img_upload_path','$main_image_7_img_upload_path','$main_image_8_img_upload_path','$main_image_9_img_upload_path','$main_image_10_img_upload_path','$got_news_id')";
    $conn->query($sql);

    
    $cookie_name = "news_id";
    $cookie_value = "$got_news_id";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    header("Location: add-images.php");

?>