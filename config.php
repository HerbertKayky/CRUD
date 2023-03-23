<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'motopecas');

    $conn = new mysqli(HOST,USER,PASS,BASE);

    //if($conn->connect_errno){
    //    echo "erro";
    //}else{
    //    echo "conexao certa";
    //}
    ?>