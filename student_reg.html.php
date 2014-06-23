<?php session_start();
if(!isset($_SESSION['username']))
{
header('student_index.html.php');
}
?>
<html>
<head>
<title>Stack</title>
</head>
<body><div id="content" class="content"><center>
<form action="student_reg.php" method="POST"><br>
<input type="text" name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="text" name="firstname" placeholder="Firstname"><br><br>
<input type="text" name="lastname" placeholder="Lastname"><br><br>
<input type="text" name="email" placeholder="email"><br><br>
<input type="text" name="mobile" placeholder="mobile"><br><br>
<input type="submit" value="submit" name="submit">
</form></center></div>
</body>
</html>
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php include 'social.php';?>