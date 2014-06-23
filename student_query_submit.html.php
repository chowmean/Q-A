
<?php
session_start();
if(isset($_SESSION['username']))
{;
}
else
header('location:login.php');
?>
<html>
<head>
<title>Stack</title>
</head>
<body>
<form action="student_query_submit.php" method="POST" id="queryform">
<input type="text" name="username" Placeholder="Username"><br>
<textarea cols="40" rows="5" name="question" form="queryform">
Submit your query
</textarea><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
