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
echo '<div id="content" class="content"><center>';
$username=$_SESSION["username"];
require 'connection.php';
$sql='select * from question_simple order by date desc';
$result=$pdo->query($sql);
$b=1;
echo "<font size='6'><u>RECENT QUESTIONS<br><br></u></font>";
while($row=$result->fetch())
{
echo "<table><tr><td><b><u>Question ".$b."</u></b>: </td><td>".$row[1]."</td></tr>";
echo "<tr><td><b><u>Asked by : </u></b></td><td>".$row[0]."</td></tr></table>";
echo "<form action='save_answer.php?question_number=".$row[3]."' method='POST'><textarea name='answer' row='8' column='1000' ></textarea>
<input type='submit' class='button' name='Answer' value='Answer'></form>";
$b=$b+1; 



}?></center></div>