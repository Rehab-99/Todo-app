<?php
    $username='root';
    $password='';
    $database=new PDO('mysql:host=localhost;dbname=todo_app;',$username,$password);
    $select=$database->prepare("SELECT * FROM tasks2");
    $select->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
    <style>
        table{
            text-align: center;
        }
        .btn-info {
            margin-right: 20px;
        }
        .btn-danger{
            margin-left: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1 style="text-align: center; ">To Do List</h1>
                <form action="migration.php" method="POST" class="form border p-2 my-5">
                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Add" name="add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $username='root';
                            $password='';
                            $database=new PDO('mysql:host=localhost;dbname=todo_app;',$username,$password);
                            $select=$database->prepare("SELECT * FROM tasks2");
                            $select->execute();
                            while($sel=$select->fetchObject()){
                                echo 
                                "<tr>
                                    <td>$sel->id</td>
                                    <td>$sel->title</td>
                                    <td>
                                        <a href='update.php? id=$sel->id' class='btn btn-info'><i class='fa-solid fa-edit'></i> </a>
                                        <a href='delete.php? id=$sel->id' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i> </a>
                                    </td>
                                </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>

