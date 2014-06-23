<?php  
try
{
$pdo = new PDO('mysql:host=localhost; dbname=stack', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch(PDOExcetion $e)
{
echo $e->getMessage();
exit();
}
?>