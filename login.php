<?php
session_start();
include('config.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
   header('Location: index.php');
   exit(); 

}
$nome = mysqli_real_escape_string($conn. $POST['email']);
$senha = mysqli_real_escape_string($conn. $POST['senha']);

$query = "select id, email from login where email = {'email'} and senha = {'senha'}";
echo $query:exit

$result = mysqli_query($conn. $query);
$row = mysqli_num_rows($result);

if($row == 1){
   $_SESSION['email'] = $email;
   header('Location: painel.php');
   exit();
}else{
   header('Location: index.php');
   exit();
}

?>