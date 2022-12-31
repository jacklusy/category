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

<lable>Email :</lable><br>
<input type="text" name="email"><br>
<lable>Password :</lable><br>
<input type="text" name="password"><br>
<button  type="submit">Login</button>


</form>
<?php 

if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['email'])&&isset($_POST['password'])){
    //Take Data From Web Form
    $email=$_POST['email'];
    $password=$_POST['password'];
//get the Data from database (Read)
    $sql="SELECT * From users";  
   $result= $conn->query($sql);
   $data=$result->fetch_assoc();
   print_r($data['user_name']);
//    $userName=$data['user_name'];
// echo "Welcome $userName";
// $id=$data['id'];
// echo "<a href='edit.php?id=$id'>Edit</a>";
}


?>
</body>
</html>