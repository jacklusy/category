<?php 
$sarver="localhost";
$userName="root";
$password="";
$dbName="crud_application";

$conn= mysqli_connect($sarver,$userName,$password,$dbName);
if(!$conn){
    die;
}else{
    echo "you are connected";
}

?>