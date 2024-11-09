<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title>Document</title>
</head>
<body>
  
  <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action='update_task.php' method='POST' class='form border p-2 my-5'>
                  <?php
                      $username='root';
                      $password='';
                      $database=new PDO('mysql:host=localhost;dbname=todo_app;',$username,$password);
                      $id=$_GET['id'];
                      $select=$database->prepare("SELECT * FROM tasks2 WHERE id=$id");
                      $select->execute();
                      while($sel=$select->fetchObject()){
                        echo "
                          <input type='text' name='title' value=' $sel->title' class='form-control my-3 border border-success' placeholder='add new todo'>
                          <input type='submit' value='Save' name='save' class='form-control btn btn-primary my-3 ' placeholder='add new todo'>
                          <input type='hidden' value='$sel->id ' name='id' class='form-control btn btn-primary my-3 ' placeholder='add new todo'>
                          ";
                        }
                  ?>
                </form>
            </div>
        </div>
  </div>
</body>
</html>