<?php
include_once("../includes/connect.inc.php");


$sqlCheck = "SELECT * FROM usuarios";
 $result = mysqli_query($conn, $sqlCheck);

 while($row_usuario = mysqli_fetch_assoc($result)){
    echo "<br><div class='containerStatus'>";
    echo "<div class='position'>ID: " . $row_usuario['id'] . "<br>";
    echo "Nome: " . $row_usuario['nome'] . "<br>";
    echo "Email: " . $row_usuario['email'] . "<br>";
    echo "Senha: " . $row_usuario['senha'] . "<br>";
    echo "Data de Criação: " . $row_usuario['Criado'] . "<br><hr>";
}

?>