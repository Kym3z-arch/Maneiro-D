<!-- <?php
   session_start();

   if(!isset($_SESSION['logado'])) {
    $_SESSION['msg'] = "<h4 class='msg' style='color: red'>Preencha Todos os Campos</h4>";
  header("Location: ../login/login.php");
}

 if($_SESSION['filtro'] == "falta") {
   $_SESSION['msg'] = "<h4>Oasdas</h4>";
 }
?> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,300&display=swap');
  </style>
<link rel="stylesheet" href="css/clientStyle.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>King's Play</title>
</head>

  <body>
  
 <div class="container">


  <div id="conteudo">

    <div class="containerVideoBg">
    <div class="videoBg">
       <video class="video-Slide" src="bgVideo/video.mp4" autoplay muted loop></video>
    </div>
    <h1 class="title">Play K</h1>
     <center><h1 class="boas-vindas">Olá, Seja Bem-Vindo</h1>
    <br><h2 class="boas-vindas">
      <?php echo $_SESSION['Nome']; ?></h2>
  
     <button class="btnAjust"><a href="#cards" class="hrefJust">Ajustar Filtro</a></button>
    
  </center>
  
    <div id="itensOptions">
      
    <a href="#" class="itens itens-center"><h4>Inicio</h4></a>
    <a href="#" class="itens itens-center"><h4>Categorias</h4></a>
    <a href="#" class="itens itens-center"><h4>Seu Conteudo</h4></a>
    <a href="#" class="itens itens-center"><h4>Conta</h4></a>
 
  </div>

    <img src="img/menu-regular.png" alt="menuIc" id="menuBtn">
  
  
  </div>

  <div class="container">

<div class="containerBox">

 <div class="card" id="cards">
   <div class="circle">
     <h2>Filmes</h2>
   </div>
   <div class="content">
    <p>Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
     <a href="#">Selecionar</a>
   </div>
 </div>

 <div class="card">
  <div class="circle">
    <h2>Séries</h2>
  </div>
  <div class="content">
   <p>Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="#">Selecionar</a>
  </div>
</div>

<div class="card">
  <div class="circle">
    <h2>Reportagem</h2>
  </div>
  <div class="content">
   <p>Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="#">Selecionar</a>
  </div>
</div>

 </div>



</div>

  
</div>

<script src="js/app.js"></script>

  </body>

</html>