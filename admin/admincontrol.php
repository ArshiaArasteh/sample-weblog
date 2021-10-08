<?php
if($_POST["adminlogin"] == "adminlogin"){
    adminlogin();
}

function adminlogin(){

$url = "localhost";
$user = "root";
$pass = "";
$dbname = "weblog";

$conne = mysqli_connect($url,$user,$pass,$dbname);

if($conne){
    $username = $_POST["name"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE name = '$username' AND mobile = '$password' AND is_admin = 1";

    $query_result = mysqli_query($conne,$query);
    if(mysqli_num_rows($query_result) > 0){
        header("location:user.php");
    }
}
}

if ($_GET["req"] == "accept") {
    $url = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "weblog";
    
    $conne = mysqli_connect($url,$user,$pass,$dbname);
    $id = $_GET["id"];
    if($conne){
        $query_update = "UPDATE posts SET status = 1 WHERE id = '$id'";
        $query_result = mysqli_query($conne,$query_update);
        if ($query_result) {
            
            header("location:../front_end/index.php");
        }
    }

}else if ($_GET["req"] == "deny") {

    $url = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "weblog";
    
    $conne = mysqli_connect($url,$user,$pass,$dbname);
    $id = $_GET["id"];
    if($conne){
        $query_update = "UPDATE posts SET `status` = -1 WHERE id = '$id'";
        $query_result = mysqli_query($conne,$query_update);
        if($query_result){
            header("location:../front_end/index.php");
        }
    }
}