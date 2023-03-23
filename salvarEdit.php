<?php
include_once('config.php');
if(isset($_POST['update'])){

    //$sql = "SELECT * FROM pecas WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();


    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $codigo=$_POST['codigo'];
    $moto=$_POST['moto'];
    $ano=$_POST['ano'];
    $cor=$_POST['cor'];
    
    $sqlUpdate = "UPDATE pecas SET nome='$nome', codigo='$codigo', moto='$moto', ano='$ano', cor='$cor'
    WHERE id=" . $_REQUEST["id"];
}



//$sqlupdate = "UPDATE pecas SET nome={$row->nome}, codigo={$codigo}, moto={$moto}, ano={$ano}, cor={$cor} 
  //      WHERE id=" . $_REQUEST["id"];
  
  
  