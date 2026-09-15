<?php
require_once "conexao.php";

$hotel = $_POST['nome_hotel'];
$cidade = $_POST['cidade'];
$estrelas = $_POST['estrelas'];

$sql = "INSERT INTO clientes (hotel, cidade, estrelas)
VALUES ('$hotel', '$cidade', $estrelas)";

if(mysqli_query($conexao, $sql)){
}
else{
}
?>