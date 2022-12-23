<?php
session_start();
include ('verifica-email.php');
?>

<h2><?php echo $_SESSION['email'];?></h2>
<h2><a href="logout.php">Sair</a></h2>
