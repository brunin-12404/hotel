<?php
require_once 'conexao.php';

$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$id_hotel'";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de Quartos </title>

    <style>
        .button_ver_quartos{
    padding: 10px 20px; 
    background-color: transparent; 
    color: black; 
    border: 2px solid green; 
    padding: 10px 20px; 
    border-radius: 6px;
    cursor: pointer; 
    width: 100%;
}
        .button_ver_quartos:hover{
            background-color: green;
}

        .form_container{
     background-color: #00ffff;
     width: 400px;
     margin: 30px auto;
     padding: 20px 30px 30px 30px;
     border-radius: 8px;
     box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
}

        .caixa_respostas{
     border-radius: 25px;
     box-sizing: border-box;
     padding: 8px;
     width: 100%;
     border: 1px black;
     cursor: pointer;
}

        .ver_quartos{
            margin: 0% 0% 0% 10%;
            font-size: 30px;
            background-color: white;
            margin: 0% 0% 0% 34%;
}


    </style>
</head>
<body style="background-color: darkorange;">
    <h1 style="text-align: center; border 1px solid; background-color: black; color: white;">Quartos disponíveis no Hotel Selecionado</h1>

    <table border="1" class="ver_quartos">
        <tr>
            <th>Número</th>
            <th>Tipo</th>
            <th>Preço Da Diária</th>
        </tr>
    <?php
    while($quarto = mysqli_fetch_assoc($resultado)){
        echo "<tr>
             <td>".$quarto['numero']."</td>
             <td>".$quarto['tipo']."</td>
             <td>".$quarto['preco_diaria']."</td>
        </tr>";
    }

?>
     </table>
    
     <div class="form_container">
    <h2>Preencha Para Reserva um Quarto</h2>

    <form action="salvar_reserva.php" method= "POST">
        <label for="id_cliente">ID do cliente:</label>
        <input type="number" name="id_cliente" id="id_cliente" class="caixa_respostas">
        <br><br>

        <label for="id_quarto">ID quarto:</label>
        <input type="number" name="id_quarto" id="id_quarto" class="caixa_respostas">
        <br><br>

        <label for="">Data de Entrada (Check-in):</label>
        <input type="date" name="data_entrada" id="data_entrada" class="caixa_respostas">
        <br><br>

        <label for="">Data de Saída (Check-out):</label>
        <input type="date" name="data_saida" id="data_saida" class="caixa_respostas">
        <br><br>

        <button class="button_ver_quartos"> <b>CONFIRMAR RESERVA</b></button>

    </form>
   </div>
</body>
</html>