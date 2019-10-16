<?php
$id= $_GET['id'];
$name = $_POST['name'];
 $age = $_POST['age'];
 $email = $_POST['email'];

 $conn=mysqli_connect("localhost","root","","crud");
 $sql= "UPDATE students SET name='$name', age='$age', email='$email' WHERE id = $id";
 if(mysqli_query($conn,$sql)){
     header("location: show.php?id=" . $id);
 }
 else{
     echo "Not Inserted";
 }