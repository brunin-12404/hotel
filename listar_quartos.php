<?php
require_once 'conexao.php';

$sql = "SELECT * FROM quartos";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Quartos</title>

    <style>
        .tables_quartos{
            color:black;
            font-size: 30px;
            background-color: white;
            margin: 0% 0% 0% 10%;
        }
    </style>
</head>
<body style="background-color: gray;">
    <h2>Lista de Quartos Cadastrados</h2>
    <table border="1" class="tables_quartos">
        <thead>
            <tr>ID</tr>
            <tr>Número</tr>
            <tr>Tipo</tr>
            <tr>Preço</tr>
        </thead>

        <?php
        if (mysqli_num_rows($resultado) > 0){
            while ($quarto = mysqli_fetch_assoc($resultado)){
                echo "<tr>";

                echo "<td>". $quarto['hotel_id']. "</td>";
                echo "<td>". $quarto['numero']. "</td>";
                echo "<td>". $quarto['tipo']. "</td>";
                echo "<td>". $quarto['preco_diaria']. "</td>";
                
                echo "<?td>";
                ?>
                <?php
            }
        } else{
            echo "<tr><td> Nenhum quarto cadastrado. </td></tr>";
        }
        ?>
    </table>

    <p>
        <a href="cadastrar_quartos.html">Cadastrar novo quarto</a>
        <a href="logout_hotel.php">Voltar (Sair)</a>
    </p>
</body>
</html>