<?php
  $username='root';
  $password='';
  $database=new PDO('mysql:host=localhost;dbname=todo_app;',$username,$password);

  $id=$_GET['id'];
  $delete=$database->prepare("DELETE FROM `tasks2` WHERE `id` = '$id' ");
  $delete->execute();
  header('location:index.php');

?>