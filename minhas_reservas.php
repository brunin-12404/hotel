<?php
session_start();
require_once 'conexao.php';

$sql = "SELECT reservas.id, hoteis.nome AS nome_hotel, quartos.tipo,reservas.data_entrada,reservas.data_saida,quartos.preco_diaria
FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id
JOIN hoteis ON quartos.hotel_id = hoteis.id";

$resultado = mysqli_query($conexao, $sql);

if( !isset($_SESSION['logado']) || $_SESSION['logado'] !== true ){
    header("location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>

    <style>
        .table_reserva{
            color: green;
            font-size: 20px;
        }

        .button{
    padding: 10px 20px; 
    background-color: transparent; 
    color: black; 
    border: 2px solid green; 
    padding: 10px 20px; 
    border-radius: 6px;
    cursor: pointer; 
    
        }

        .button:hover{
            background-color: green;
        }
    </style>
</head>
<body style="background-color: beige;">

    <h2 style="color: black;">MINHAS RESERVAS CONFIRMADAS</h2>
    <table border="1" class="table_reserva">
        <thead>
            <tr style="background-color: lightblue;">
        <th>Cod.Reserva</th>
        <th>Quarto</th>
        <th>Tipo do quarto</th>
        <th>Diária</th>
        <th>Data Entrada (Check-in)</th>
        <th>Data Saída (Check-out)</th>
        </tr>
        </thead>

        <?php
            while ($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>

                  <td>".$linha['id']. "</td>
                  <td>".$linha['nome_hotel']."</td>
                 <td>".$linha['tipo']. "</td>
                  <td>".$linha['preco_diaria']."</td>
                  <td>".$linha['data_saida']."</td>
                
                 </tr>";
            }
        
                ?>
                
    </table>
    <p>
        <a href="listar_hoteis.php"><button class="button">Clique aqui para novas reservas.</button></a>
    </p>
</body>
</html>