<?php

if(!empty($_GET['id'])){


include_once('config.php');

$sql = "SELECT * FROM pecas WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

if($res->num_rows>0){

}else{
    header('location: index.php');
}

}
//$resultado = mysqli_query($conn, $sql); 
//$row= mysqli_fetch_assoc($resultado);



//$sqlupdate = "UPDATE pecas SET nome={$row->nome}, codigo={$codigo}, moto={$moto}, ano={$ano}, cor={$cor} 
  //      WHERE id=" . $_REQUEST["id"];



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/addpecas.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>EDITAR PEÇAS</title>
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
        <form class="form" action="listapecas.php" method="POST">
            <h1>Editar peças cadastradas</h1><br></br>
            <label for="nome">Nome da Peça:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row->nome; ?>" required>

            <label for="codigo">Código:</label>
            <input type="number" name="codigo" id="codigo" minlenght="4" maxlength="4" value="<?php echo $row->codigo; ?>" required>

            <label for="moto">Tipo da moto:</label>
            <input type="text" name="moto" id="moto" value="<?php echo $row->moto ?>" required>

            <label for="ano">Ano:</label>
            <input type="date" name="ano" id="ano" value="<?php echo $row->ano ?>" required>

            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor" value="<?php echo $row->cor ?>" required>

            <input type="hidden" name="id" value="<?php echo $row->id?>">

            <button type="submit" name="update" class="btn">Enviar</button>
        </form>
    </div>
</body>

</html>