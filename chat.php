<?php include 'social.php';?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<div id="comment2"><center><b><u>
RECENTS COMMENTS</b></u><br><br>
<table>
<?php $a=1;
include 'connection.php';
$sql="select * from comments order by date desc";
$result=$pdo->query($sql);
while($row=$result->fetch() )
{if($a<=10)
	{echo "<tr><td><li>".$row[0]." says</td><td>    ".$row[1]."</td><td>at ".$row[2]."</td></tr>";
	$a++;}
else
	break;
}

?></table>
<form action="comment.php" method="POST">
<input type="text" name="name" placeholder="Name"><br><textarea name="comment" placeholder = "Comment here"></textarea><br>
<input type="submit" value="Comment">

</form>
