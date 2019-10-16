<?php 

      $conn=mysqli_connect("localhost","root","","crud");
      $sql= "SELECT * FROM `students` ";
      $result= mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Project</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="header_sec">
                        <h1>Crud Project</h1>
                        <p>A sample project to perform CRUD operations using plain files and PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a class="btn btn-info" href="index.php">Student List</a>
                </div>
                <div class="col-md-9">
                   <h2>Add New Students</h2>
                   <div class="form_grp">
                   <form action="store.php" method="POST">
                        <div class="form-group">
                            <label for="Name">Name:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Student Name">
                            
                        </div>
                        <div class="form-group">
                            <label for="Age">Age:</label>
                            <input type="nubmer" class="form-control" id="age" aria-describedby="emailHelp" name="age" placeholder="Student Age">
                            
                        </div>
                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Student Email">
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
