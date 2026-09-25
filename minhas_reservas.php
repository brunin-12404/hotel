<?php
require_once 'conexao.php';

$sql = "SELECT reservas.id, quartos.numero_quarto, quartos.tipo, quartos.preco, reservas.data_entrada, reservas.data_saida FROM reservas JOIN quartos ON reservas.id_quarto = quartos.id WHERE reservas.id_cliente = '$id_cliente'";
$resultado = mysqli_query($conexao, $sql);

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
        }
    </style>
</head>
<body style="background-color: beige;">

    <h2 style="color: black;">Reserva do Quarto</h2>
    <table border="1" class="table_reserva">
        <thead>
            <tr>
        <th>ID Cliente</th>
        <th>ID Quarto</th>
        <th>Data de Entrada</th>
        <th>Data de Saída</th>
        <th>Total</th>
        </tr>
        </thead>

        <?php
        if (mysqli_num_rows($resultado) > 0){
            while ($reserva = mysqli_fetch_assoc($resultado)){
                echo "<tr>";

                echo "<td>". $reserva['cliente_id']. "</td>";
                echo "<td>". $reserva['quarto_id']. "</td>";
                echo "<td>". $reserva['data_entrada']. "</td>";
                echo "<td>". $reserva['data_saida']. "</td>";
                
                echo "<?td>";
            }
        }
        else{
            echo "<tr><td><h2> Nenhuma Reserva Encontrada. </h2></tr></td>";
        }
                ?>
                
    </table>
    <p>
        <a href="listar_hoteis.php">Voltar a Lista de Hoteis.</a>
    </p>
</body>
</html>