<?php

session_start(); 
 include_once('connect.inc.php');

 if(isset($_POST['mail']) && isset($_POST['pass'])){

  $user = mysqli_real_escape_string($conn, $_POST['mail']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);


if(empty($_POST['mail']) || empty($_POST['pass'])) {
  $_SESSION['msg'] = "<h4 class='msg' style='left: 43%; color: #c04040;'>Preencha Todos os Campos</h4>";
header("Location: ../login/login.php");
} else {

$sqlSelect = "SELECT * FROM usuarios WHERE email = '$user' && senha = '$pass'"; 
 $selectQery = mysqli_query($conn, $sqlSelect);
$resultQuery = mysqli_fetch_array($selectQery);

$_SESSION['Nivel'] = $resultQuery['nivel'];

if(empty($resultQuery)){
  $_SESSION['msg'] = "<h4 class='msg' style='left: 43%; color: #c04040;'>Email ou Senha Invalido</h4>";
header("Location: ../login/login.php");
} elseif(isset($resultQuery)) {
   if($_SESSION['Nivel'] == "normal"){
    $_SESSION['logado'] = true;
   $_SESSION['Nome'] = $resultQuery['nome'];
   $_SESSION['filtro'] = $resultQuery['filtro'];
   $_SESSION['Email'] = $resultQuery['email'];
   $_SESSION['Senha'] = $resultQuery['senha'];
header("Location: ../inicio/client.php?user=true");
} elseif($_SESSION['Nivel'] == "adm") {
  $_SESSION['logado'] = true;
 $_SESSION['Nome'] = $resultQuery['nome'];
 $_SESSION['Email'] = $resultQuery['email'];
 $_SESSION['Senha'] = $resultQuery['senha'];
header("Location: ../adm/painel.php?user=true");
} else {
  $_SESSION['msg'] = "<h4 class='msg' style='left: 43%; color: #c04040;'>Erro ao Entrar</h4>";
header("Location: ../login/login.php");
}

}
}
} else {
  $_SESSION['msg'] = "<h4 class='msg' style='color: red'>Erro ao Entrar</h4>";
header("Location: ../login.php");
}

?>