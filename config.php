<?php
    $dbHost = 'db4free.net:3306';
    $dbUsername = 'volaolavo';
    $dbPassword = '2die4100';
    $dbname = 'crudteste';

    $conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbname) or die ('Erro de conexão');

    if($conn->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão bem sucedida ";
    }

?>