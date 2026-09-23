<?php
require_once 'conexao.php';

$id_hotel = get['id_hotel'];

$sql = "SELECT * FROM quartos WHERE hotel_id = 'id_hotel'";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Quartos </title>
</head>
<body>
    <h1>Quartos disponíveis</h1>
    <table border="1">
        <tr>
            <th>Números</th>
            <th>Tipo</th>
            <th>Preço</th>
        </tr>

        <?php
        while ($quarto = mysql_fetch_assoc($resultado)){
            <tr>
            <td>$quarto ['numero']</td>
            <td>tipo</td>
            <td>preco</td>
            </tr>
        }
?>
    </table>

    <h2>Formulário de Reserva</h2>

    <form action="" method= "POST">
        <label for="">ID do cliente:</label>
        <input type="number" name="" id="">
        <br><br>

        <label for="">ID quarto:</label>
        <input type="number" name="" id="">
        <br><br>

        <label for="">Data de Entrada (Check-in):</label>
        <input type="date" name="" id="">
        <br><br>

        <label for="">Data de Saída (Check-out):</label>
        <input type="date" name="" id="">
        <br><br>

        <button> Confirmar Reserva</button>

    </form>
</body>
</html>