<?php
Session_start;
include 'dbh.php';
$user_email=$_POST['user_email'];
$user_pwd=$_POST['user_pwd'];

$sql = "SELECT * FROM users WHERE user_email='$user_email' AND user_pwd='$user_pwd'";
$result = $conn->query($sql);

if(!$row = mysqli_fetch_assoc($result))
{
echo "Your username or password is incorrect";
}
else
{
echo "you have been logged in";
}
//header("Location:index.php");
?>
