<div id ="logout">
<br><center>
<?php

if(isset($_SESSION['username']))
{echo '<font color="White">'.$_SESSION["username"].'</a>,<a href="logout.php"><font color="White"> LOGOUT!</font></a>';
}
else
{echo '<a href="login.php"><font color="White">GUEST , LOGIN!</font></a>';
}
?>
</center>
</div>
<style>
#logout{

position:absolute;
top:-1%;
height:8%;
width:20%;
left:60%;
background:black;
opacity:0.7;
color:white;
border-radius:5px;



}

</style>