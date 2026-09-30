<?php
require_once 'conexao.php';

$sql = "SELECT reservas.id, clientes.nome AS nome_clientes, clientes.telefone,quartos.numero, reservas.data_entrada, reservas.data_saida
FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id
JOIN clientes ON reservas.cliente_id = clientes.id
WHERE quartos.hotel_id = 1";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quartos Reservados </title>

    <style>
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
    <h2>Painel de Reserva dos Quartos</h2>
    <table border="1" style="font-size:28px">
        <tr style="background-color: lightblue;">
            <th>Cód. Reserva</th>
            <th>Quarto</th>
            <th>Hóspede</th>
            <th>Telefone</th>
            <th>Data de Entrada</th>
            <th>Data de Saída</th>
        </tr>
        <?php
        while($linha = mysqli_fetch_assoc($resultado)){
            echo 
            "<tr>
                <td>".$linha['id']."</td>
                <td>".$linha['numero']."</td>
                <td>".$linha['nome_clientes']."</td>
                <td>".$linha['telefone']."</td>
                <td>".$linha['data_entrada']."</td>
                <td>".$linha['data_saida']."</td>
            </tr>";
        }
?>
    </table>
    <br>
        <a href="cadastrar_quartos.html"> <button class="button">Clique aqui para cadastrar novos quartos</button></a>
        <br><br>
        <a href="logout_hotel.php"><button class="button">Sair do sistema  </button></a>
</body>
</html>