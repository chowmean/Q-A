<?php
session_start();
if(isset($_SESSION['username']))
{;
}
else
header('location:login.php');
?>
<html>
<body>
<?php require 'connection.php';
include 'social.php';


?>







</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>