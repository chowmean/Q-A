<?php 
$name=$_POST["name"];
$comment=$_POST["comment"];
$tm=date('Y-m-d H:i:s');
include 'connection.php';
$sql="insert into comments values ('".$name."','".$comment."','".$tm."'); ";
$pdo->exec($sql);
header('location:chat.php');



?>