<?php
  $username='root';
  $password='';
  $database=new PDO('mysql:host=localhost;dbname=todo_app;',$username,$password);

  $title=$_POST['title'];
  $insert=$database->prepare("INSERT INTO tasks2 (title)VALUES (:title)");
  $insert->bindParam("title",$title);
  $insert->execute();
  header('location:index.php');


?>