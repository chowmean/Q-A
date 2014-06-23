<link rel="stylesheet" type="text/css" href="style.css"/>
<?php include'social.php';
include 'navigator.php';
?>
<?php
session_start();
include 'social.php';include 'navigator.php';
echo '<div id="content" class="content"><center>';

require 'connection.php';
$sql='select * from question_simple order by date desc';
$result=$pdo->query($sql);
$b=1;
echo "<font size='6'><u>RECENT QUESTIONS<br><br></u></font>";
while($row=$result->fetch())
{
echo "<table><tr><td><b><u>Question ".$b."</u></b>: </td><td>".$row[1]."</td></tr>";
echo "<tr><td><b><u>Asked by : </u></b></td><td>".$row[0]."</td></tr></table>";
$sql='select answer,username_answer,date from answer_simple where question_number="'.$b.'" order by date desc;';
$result1=$pdo->query($sql);
while($row1=$result1->fetch())
{
echo "<br><b>Answer</b>: ".$row1[0];
echo "<br>Answered by <u>".$row1[1]."</u>";
echo "<br>on ".$row1[2]."<br><br><br>";
} 

$b=$b+1; 

echo "<hr>";

}?>