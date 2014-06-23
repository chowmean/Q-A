<?php
include 'connection.php';

            $user=$_POST['username'];
			$pass=md5($_POST['password']);
			try{
            $query = $pdo->prepare("SELECT password FROM student_information WHERE username = :user");
			$query->bindValue(':user', $user);
			$query->execute();
			while($data = $query->fetch()){
			$pwd = $data['password'];			
			if(strcmp($pwd,$pass)==0)
			{session_start();
			$_SESSION['username']=$user;
			header('location:student_view.html.php');
			break;
			}
			else
			{
			header('location:index.php');
			}
			}}
			catch(PDOException $e)
			{
			echo $e->getMessage();
			}
			?>