<?php 
// save articles in database;
$url = "localhost";
$user = "root";
$pass = "";
$dbname = "weblog";

$conne = mysqli_connect($url,$user,$pass,$dbname);

if($conne){
    session_start();
    $user_id = $_SESSION["id"];
    $title =  $_POST["title"];
    $textarea = $_POST["textarea"];
    $file = $_FILES["file"];

    move_uploaded_file($file["tmp_name"] , "../controlers/post_images" . $file["name"]);
    $path = "http://localhost/phpproject/weblog/controlers/post_images/" . $file["name"];

    $query = "INSERT INTO posts (title, post_img , article , user_id) VALUES ('$title','$path','$textarea' , '$user_id')";
    $query_result = mysqli_query($conne,$query);
    if($query_result){
        header('location:post_user.php');
    }else{
        echo "problem";
    }
}