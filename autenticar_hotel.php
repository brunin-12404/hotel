<?php
require_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM hoteis WHERE email = '$email' and senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);
echo mysqli_num_rows($resultado);
if(mysqli_num_rows($resultado) > 0){
    header("Location: cadastar_quarto.php");
    exit();
}else{
    echo "<br> <br> Seu e-mail e senha não existem. ";
    echo '<a href="login_hotel.html">Clique aqui para tentar novamente</a>';
}

?>