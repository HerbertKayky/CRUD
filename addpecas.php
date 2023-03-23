<?php
if(isset($_POST['submit'])){
    //print_r($_POST['nome']);
    //print_r($_POST['codigo']);
    //print_r($_POST['moto']);
    //print_r($_POST['ano']);
    //print_r($_POST['cor']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $moto = $_POST['moto'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];

    $res = mysqli_query($conn,"INSERT INTO pecas (nome, codigo, moto, cor, ano) 
    VALUES ('$nome', '$codigo', '$moto', '$cor', '$ano')");
}
if ($res == true) {
    echo "<script>alert('Cadastro com sucesso');</script>";
    echo "<script>location.href='listapecas.php';</script>";
} else {
    //echo "<script>alert('Cadastro inválido');</script>";
    
}







?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/addpecas.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>ADICIONAR PEÇAS</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="lista">
                <li class="itens"><a href="addpecas.php">Adicionar peças</a></li>
                <li class="itens"><a href="index.php">Início</a></li>
                <li class="itens"><a href="listapecas.php">Listar peças</a></li>
            </ul>
        </nav>
    </header>
    <div class="row">
        <form class="form" action="addpecas.php" method="POST">
        <h1>Adicionar peças</h1><br></br>
            <label for="nome" >Nome da Peça:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="codigo" >Código:</label>
            <input type="number" name="codigo" id="codigo" minlenght="4" maxlength="4" required>

            <label for="moto" >Tipo da moto:</label>
            <input type="text" name="moto" id="moto" required>

            <label for="ano" >Ano:</label>
            <input type="date" name="ano" id="ano" required>

            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor" required>

            <button type="submit" name="submit" class="btn">Enviar</button>
        </form>
    </div>
</body>

</html>