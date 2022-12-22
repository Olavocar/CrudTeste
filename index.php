<?php

            include('config.php');

            if(isset($_POST['submit']))
    {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $query = mysqli_query($conn, "INSERT INTO login (email, senha) VALUES ('$email', '$senha')");
    }
        if($query){
        echo 'Cadastro realizado com sucesso';
        }else {
        echo 'Falha ao realizar cadastro';
        }
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
    <p>     
        <label>Email:</label>
            <input type="text" name="email">
    </p>
    <p>     
        <label>senha:</label>
            <input type="password" name="senha">
    </p>
    <p>
            <button type="submit">Entrar</button>
    </p>
    </form>
</body>
</html>