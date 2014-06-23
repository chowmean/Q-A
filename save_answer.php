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
include 'social.php';include'navigator.php';
session_start();
echo '<div id="content" class="content">';
$username=$_SESSION["username"];
$question_number=$_GET["question_number"];
$answer=$_POST["answer"];
require 'connection.php';
$tm=date('Y-m-d H:i:s');
$sql='insert into answer_simple values ( "'.$question_number.'","'.$username.'","'.$answer.'","'.$tm.'",0)';
try
{$result=$pdo->exec($sql);
header('location:answer.php');
}
catch(PDOException $e)
{echo "you have already answered this question <br> <br><u><a href='answer.php'>Go back</a></u>";
}