<?php 
session_start();
ob_start(); 
require 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `phone`) VALUES ('','$name','$email','$num')");
$query_run = mysqli_query($con, $query);



if($query)
{
    $_SESSION['status'] =" Pagamento concluido !";
    header('location: index.php');
}
else
{
    echo "error";
}



?>