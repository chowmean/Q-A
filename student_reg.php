<?php session_start();
if(!isset($_SESSION['username']))
{
header('student_index.html.php');
}
?>
<?php
include 'connection.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$date=date('Y-m-d H:i:s');
try
{
$sql='insert into student_information SET
      username = :username,
	  password=:password,
	  firstname=:firstname,
	  lastname=:lastname,
	  email=:email,
	  mobile=:mobile,
	  date=:date';
$a=$pdo->prepare($sql);
$a->bindValue(':username', $username);
$a->bindValue(':password', $password);
$a->bindValue(':firstname', $firstname);
$a->bindValue(':lastname', $lastname);
$a->bindValue(':email', $email);
$a->bindValue(':mobile', $mobile);
$a->bindValue(':date', $date);
$a->execute();
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>