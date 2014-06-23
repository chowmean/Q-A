<?php
session_start();
if(isset($_SESSION['username']))
{;
}
else
header('location:login.php');
?>

<?php
include 'connection.php';
$s='SELECT MAX(`question_number`) FROM `question_simple`';
$t=$pdo->query($s);
$l=$t->fetch();
$question_number=$l[0]+1;
echo $question_number;
$username=$_POST['username'];
$que=$_POST['question'];
$date=date('Y-m-d H:i:s');
try
{
$sql='insert into question_simple SET
      username = :username,
	  question=:question,
	  date=:date,
	  question_number=:question_number';
$a=$pdo->prepare($sql);
$a->bindValue(':username', $username);
$a->bindValue(':question', $que);
$a->bindValue(':date', $date);
$a->bindValue(':question_number', $question_number);
$a->execute();
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>