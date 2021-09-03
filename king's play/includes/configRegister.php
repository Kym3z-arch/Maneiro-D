<?php

session_start();
 include_once('connect.inc.php');

$name = $_POST['name'];
  $pass = $_POST['pass'];
 $mail = $_POST['mail'];
$city = $_POST['city'];
 $title = "normal";

if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['mail']) && isset($_POST['city'])) {
  
} else {
    $_SESSION['msg'] = "<h4 class='msg' style='color: #c04040;'>Erro ao Cadastrar</h4>";
     header("location: ../registro/cadastro.php");
}


 if(empty($_POST['name']) || empty($_POST['pass']) || empty($_POST['mail']) || empty($_POST['city'])) {
    $_SESSION['msg'] = "<h4 class='msg' style='left: 43%; color: #c04040;'>Preencha Todos os Campos</h4>";
     header("location: ../registro/cadastro.php");
 } else {
   $sqlCheck = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '{$mail}'") or print mysqli_error();
    if(mysqli_num_rows($sqlCheck) > 0) {    
        $_SESSION['msg'] = "<h4 class='msg' style='left: 43%; color: #c04040;'>Email já Cadastrado</h4>";
        header("location: ../registro/cadastro.php");
    } else {
        $sqlInsert = "INSERT INTO usuarios(nome, senha, email, Cidade, nivel,Criado) VALUES ('$name', '$pass', '$mail', '$city', '$title',NOW())";
         $sqlQuery = mysqli_query($conn, $sqlInsert);

         $_SESSION['msg'] = "<h4 class='msg' style='left: 47%; color: #529c52;'>Conta Criada</h4>";
          header("location: ../registro/cadastro.php");
    }
 } 

?>