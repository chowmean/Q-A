<?php
require 'connection.php';
$username=$_POST["username"];
$password=$_POST["password"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
try{
$sql='insert into stack_register SET
	username=:username,
	password=:password,
	name=:name,
	phone=:phone,
	stack_value=:value,
	email=:email,
	questions_answered=:answer_value,
	
	date=:date';
$tm=date('Y-m-d H:i:s');
$a=$pdo->prepare($sql);
$a->bindValue(':username',$username);

$a->bindValue(':name',$name);
$a->bindValue(':phone',$phone);
$a->bindValue(':value',0);
$a->bindValue(':answer_value',0);
$a->bindValue(':password',$password);
$a->bindValue(':date',$tm);
$a->bindValue(':email',$email);
$a->execute();
}
catch (PDOException $e)
{echo $e;
}
include 'social.php';
header('location:index.php');

?>

