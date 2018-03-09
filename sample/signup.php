<?php
include 'dbh.php';
$user_id=$_POST['user_id'];
$user_first=$_POST['user_first'];
$user_last=$_POST['user_last'];
$user_email=$_POST['user_email'];
$user_pwd=$_POST['user_pwd'];

$sql ="INSERT INTO users(user_id,user_first,user_last,user_email,user_pwd)
VALUES($user_id,'$user_first','$user_last','$user_email','$user_pwd')";
$result = mysqli_query($conn, $sql);
header("Location:index.php");
?>
