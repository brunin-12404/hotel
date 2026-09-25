<?php
require_once "conexao.php";

$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];

$sql = "INSERT INTO quartos (cliente_id, quarto_id, data_entrada, data_saida)
VALUES ($id_cliente, $id_quarto, '$data_entrada', '$data_saida')";

if(mysqli_query($conexao, $sql)){

}
else{

}


?>