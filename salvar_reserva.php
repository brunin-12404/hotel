<?php
require_once "conexao.php";

$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];

$sql = "INSERT INTO reservas (cliente_id, quarto_id, data_entrada, data_saida, total)
VALUES ($id_cliente, $id_quarto, '$data_entrada', '$data_saida', 100)";

if(mysqli_query($conexao, $sql)){
    echo "<h1>Reserva Salva com Sucesso!</h1>";
}else{
    echo "<h2>Não foi possivel cadastrar sua reserva.</h2>";
    echo "<a href='ver_quartos.php'>Tente Novamente.</a>";

}


?>