<?php

$username='root';
$password='';
$database=new PDO('mysql:host=localhost;dbname=todo_app;',$username,$password);

  $id=$_POST['id'];
  $title=$_POST['title'];
  $update=$database->prepare("UPDATE `tasks2` SET `title`='$title' WHERE `id` = $id");
  $update->execute();
  header("location:index.php");




?>