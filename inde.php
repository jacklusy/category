<?php 
require("config_1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
</head>
<body><br>
    <form method="POST">
<lable>Name :</lable><br>
<input type="text" name="name"><br>
<lable>Email :</lable><br>
<input type="text" name="email"><br>
<lable>Password :</lable><br>
<input type="text" name="password"><br>
<button  type="submit">Sign Up</button>


</form>
<?php 

if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['name'])
&&isset($_POST['email'])&&isset($_POST['password'])){
    //Take Data From Web Form
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
//Insert the Data to database (Creat)
    $sql="INSERT INTO users(id,user_name,email,password)
    VALUES (NULL,'$name','$email','$password')";  
    $conn->query($sql);
    header("location:read.php");
}


?>
</body>
</html>