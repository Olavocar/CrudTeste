<?php
session_start();
include('config.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
   header('Location: index.php');
   exit(); 
}

$nome = mysqli_real_escape_string($conn, $POST['email']);
$senha = mysqli_real_escape_string($conn, $POST['senha']);

$query = "select email from login where email = '{$email}' and senha = md5 ('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
   $_SESSION['email'] = $email;
   header('Location: painel.php');
   exit();
}else{
   $_SESSION['nao_autenicado'] = true;
   header('Location: index.php');
   exit();
}

?>