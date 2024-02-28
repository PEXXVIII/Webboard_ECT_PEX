<?php
session_start();
$cate=$_POST['category'];
$top=$_POST['topic'];
$comm=$_POST['comment'];
$user=$_SESSION['user'];
$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="INSERT INTO post (title, content, post_date, act_id, user_id)
VALUES ('$top','$comm',NOW(),'$cate','$user')";
$conn->exec($sql1);
$conn=null;
header("Location: login.php");
die();


?>