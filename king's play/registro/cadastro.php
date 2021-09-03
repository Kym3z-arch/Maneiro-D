<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,300&display=swap');
  </style>
   <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
 <link rel="stylesheet" href="css/global.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King's Play | Cadastro</title>
</head>

   <body>


     <div class="container">

      <div class="navegation" id="nav">
        <img src="img/menu-regular.png" alt="menuIcon" id="menuIc" width="35">
        <div class="menuOptions" id="options">
        <br><br>
         <a href="#home"><img src="img/home-solid.png" alt="homeIc" width="26" class="home">
        <label class="title">Inicio</label></a>
        <br><br>
        <a href="#home"><img src="img/log-in-circle-solid.png" alt="homeIc" width="26" class="home">
          <label class="title">Entar</label></a>        <br><br>
          <a href="#home"><img src="img/ok.png" alt="homeIc" width="26" class="home">
            <label class="title">Criar</label></a>
       </div>
      </div>
      <div class="container-register">
<div id="efCont">
          <h2 class="title-register"><i>Cadastro :</i></h2>
<center>
  <?php

   if(isset($_SESSION['msg'])) {
     echo $_SESSION['msg'];
      unset($_SESSION['msg']);
   }

  ?>
  <form action="../includes/configRegister.php" id="form" method="post">
    <div class="positionForm">
            <label class="userIcons"><img src="img/user-solid.png" alt=""></label><input type="text" class="infoUser" name="name" placeholder="Nome">
            <br><br>
            <label class="userIcons"><img src="img/check-shield-solid.png" alt=""></label><input type="password" name="pass" class="infoUser" placeholder="Senha" maxlength="16">
            <br><br>
            <label class="userIcons"><img src="img/at-regular.png" alt=""></label><input type="email" class="infoUser" name="mail" id="emailCheck" placeholder="Email" onkeydown="validation()">
            <span id="check"></span>
            <br><br>
            <label class="userIcons"><img src="img/city-solid.png" alt=""></label><input type="text" name="city" class="infoUser cityText" placeholder="Cidade">
            <br><br>
            <button type="submit" class="Register"><img src="img/ok.png" class="userAdd">
              <h4 class="registerShow">Cadastrar</h4></button>
              <h5 class="loginAccount">Ja possui uma conta ? <a href="#">Entrar</a></h5>
    </div>
  </form>
</div>
</center>   

  </div>
</div>

 <script src="js/main.js"></script>

  </body>

</html>