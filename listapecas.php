<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/listapecas.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>LISTA DE PEÇAS</title>
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
    <h1>Lista de Peças</h1>
    <main class="main-table">
        <table>
            <tr>
                <th>#</th>
                <th>Nome peça</th>
                <th>Código</th>
                <th>Tipo Moto</th>
                <th>Ano</th>
                <th>Cor</th>
                <th colspan="2">Ações</th></tr>
            <tr>
                <?php 
                include("config.php");
                $consult = "SELECT * FROM pecas";
                $res = $conn->query($consult);
                $qtd = $res->num_rows;

                while ($row = $res->fetch_object()) {
                echo "<td>$row->id</td>";
                echo "<td>$row->nome</td>";
                echo "<td>$row->codigo</td>";
                echo "<td>$row->moto</td>";
                echo "<td>$row->ano</td>";
                echo "<td>$row->cor</td>";
                echo "<td><a href='editar.php?id=$row->id'</a>
                        <button>EDITAR</button></td>";
                echo "<td>
                        <button>EXCLUIR</button></td>
                </tr>";
                }
                ?>
        </table>
    </main>
</body>

</html>