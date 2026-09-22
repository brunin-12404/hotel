<?php
require_once "conexao.php";

$hotel_id = $_POST['hotel_id'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco = $_POST['preco'];

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria, disponivel)
VALUES ($hotel_id, $numero_quarto, '$tipo_quarto', '$preco', 1)";

if(mysqli_query($conexao, $sql)){
    echo '<h2 style="color: black; text-align: center;"> QUARTO CRIADO COM SUCESSO! <h2/> <br><br>';
    echo '<a href="cadastrar_quartos.html"> <button style="color: black; background-color: gray;"> <b>VOLTAR</b> </button> </a> <br><br>';
    echo '<a href="logout_hotel.php"> <button style="color: black; background-color: gray"> <b>SAIR</b> </button> </a>';
}
else{
    echo '<h2> style="color: blue; text-align: center; Erro de cadastro no quarto.<h2/> <br>';
}
?>