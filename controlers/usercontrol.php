<?php
if($_POST["register"] == "register"){
    register_user();
}else if ($_POST["login"] == "login"){
    login_user();
}

function register_user(){
$url = "localhost";
$user = "root";
$pass = "";
$dbname = "weblog";

$conne = mysqli_connect($url,$user,$pass,$dbname);

if($conne){
    $name = $_POST["name"];
    $img = $_FILES["img"];
    $mobile = $_POST["mobile"];
    
    move_uploaded_file($img["tmp_name"] , "saveimages/" . $img["name"]);
    $path = "http://localhost/phpproject/weblog/controlers/saveimages/" . $img["name"];

    $query = "INSERT INTO users (name , img , mobile) VALUES ('$name','$path','$mobile')";
    $query_result = mysqli_query($conne,$query);

    if($query_result){
        header('location:login.html');
    }
}
}

function login_user(){
$url = "localhost";
$user = "root";
$pass = "";
$dbname = "weblog";

$conne = mysqli_connect($url,$user,$pass,$dbname);

if($conne){
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];

    $query = "SELECT * FROM users WHERE name = '$name' AND mobile = '$mobile'";
    $query_result = mysqli_query($conne,$query);

    if(mysqli_num_rows($query_result) > 0){
        session_start();
        header("location:../users/post_user.php");
        $id = mysqli_fetch_all($query_result);
        $_SESSION["id"] = $id[0][0];
       
    }
}
}