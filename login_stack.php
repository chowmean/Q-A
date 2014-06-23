<?php
require 'connection.php';
include 'social.php';
$username=$_POST["username"];
$password=$_POST["password"];
$sql='select password from stack_register where username="'.$username.'";';
$result=$pdo->query($sql);
while($row=$result->fetch())
{
if($password==$row[0])
{
session_start();
$_SESSION["username"]=$row[0];


header('location:stack_view.php');
break;
}
else
{
echo "<script>alert('wrong password')</script>";
header('location:index.php');


}
header('location:index.php');

}


{



}


?>
<link rel="stylesheet" type="text/css" href="style.css"/>