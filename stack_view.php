<?php
session_start();
if(isset($_SESSION['username']))
{;
}
else
header('location:login.php');
?>
<link rel="stylesheet" type="text/css" href="style.css"/>

<?php

include 'social.php';include 'navigator.php';
$username=$_SESSION["username"];
echo '<div id="content" class="content">';
require 'connection.php';
$sql='select * from stack_register where username="'.$username.'";';
$result=$pdo->query($sql);
$a=0;
echo "<table>";
while($row=$result->fetch())
{
echo "<tr><td>Username:</td><td>".$row[0]."</td></tr>";
echo "<tr><td>Name:</td><td>".$row[1]."</td></tr>";
echo "<tr><td>Email:</td><td>".$row[2]."</td></tr>";
echo "<tr><td>Phone:</td><td>".$row[3]."</td></tr>";
echo "<tr><td>Stack value:</td><td>".$row[4]."</td></tr>";

echo "<tr><td>Total Questions Answered:</td><td>".$row[6]."</td></tr>";
echo "<tr><td>User since:</td><td>".$row[8]."</td></tr>";
if($row[6]==0)
$a=1;




}

echo "<table><br>";
if($a==1)
echo "<a href='answer.php'>Start Answering Questions</a>";
else
echo "<a href='answer.php'>Answer Questions</a>";




?>