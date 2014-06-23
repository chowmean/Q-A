<html>
<body>
<div id="navigator"><center>
<table><tr>
<td width="150"><font size="3" color="white"><a href="index.php"><b>HOME</b></a></font></td>
<td width="150"><font size="3"><a href="student_query_submit.html.php"><b>ASK</b></a></font></td>
<td width="150"><font size="3"><a href="answer.php"><b>ANSWER</b></a></font></td>
<td width="150"><font size="3"><a href="stack_view.php"><b>SEE STATS</b></a></font></td>
<td width="150"><font size="3"><a href="chat.php"><b>CHAT ROOM</b></a></font></td>
<td width="150"><font size="3"><a href="#"><b>CONTACT US</b></a></font></td>
</tr>
</table>
</center>

</div>


<div id="ranking"><u><center><b>
LARGEST STACK HOLDERS</b></center></u><center><br><br>
<?php $a=1;
include 'connection.php';
$sql="select username,stack_value from stack_register order by stack_value desc";
$result=$pdo->query($sql);
while($row=$result->fetch() )
{if($a<=10)
	{echo $a.". ".$row[0]."    ".$row[1]."<br>";
	$a++;}
else
	break;
}

?>

</center>

</div>

<div id="comment"><center><b><u>
RECENTS COMMENTS</b></u><br><br>

<?php $a=1;
include 'connection.php';
$sql="select * from comments order by date desc";
$result=$pdo->query($sql);
while($row=$result->fetch() )
{if($a<=5)
	{echo $row[0]." says    ".$row[1]."<br>at ".$row[2]."<br>";
	$a++;}
else
	break;
}

?>
</center>
</div>
<style>
#navigator{
background:orange;
background-image:url("...png");
position:absolute;
top:15%;
left:0%;
width:100%;
height:5%;
border-radius:10px;
color:white;
}


#ranking
{
background:#cc9900;
background-image:url("...png");
position:absolute;
top:30%;color:black;
left:02%;
width:18%;
height:60%;
border-radius:10px;

}


#footer
{
background:orange;
background-image:url("...png");
position:fixed;
bottom:0%;color:black;
left:0%;
width:100%;
height:5%;



}
</style>


<div id="footer"><center><font size='2'>copyright@stack.company.org</font></center></div>
</body>
</html>
<?php include 'logout_done.php';