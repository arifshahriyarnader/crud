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
                    <a class="btn btn-info" href="insert.php">New Student</a>
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <thead>
                             <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                       <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                 <th><?php echo $row['id'] ?></th>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['age'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td>
                                    <a class="btn btn-info" href="show.php?id=<?php echo $row['id']; ?>">View</a>
                                    <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" onclick="return confirm('Are You Sure')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                             <?php } ?>
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
