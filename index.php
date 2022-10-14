<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="icon" href="./assets/icon.png">
    <title>Home Aurelion</title>
    <style type="text/css">
    nav{
      display: flex;
      align-items: baseline;
      position: relative;
      background:#020d3f;
    }
    h3{
      font-size: x-large;
      margin-left: 30px;
    }
    ul{
      display: flex;
      align-items: baseline;
    }
    .direita{
      position: absolute;
      right: 3%;
    }

    .conteudo{
      position:relative;
      display:flex;
      background:orange;
      color:white;
      background-image: url("./assets/background1.gif");
    }
    .conteudo-1{
      
      width: 50%;
      color:white;
    }

    .conteudo-2{
      position: relative;
      width: 50%;
      color:white;
      background-image: url("./assets/aurelion-sol2.png");
      height: 500px;
      background-repeat: no-repeat;
      background-size: 119% ;
    }

    .primeira{
      text-align: center;
      width: 33.3%;
      align-items: center;
      background-color: green;
    }
    .segunda{
      text-align: center;
      width: 33.3%;
      align-items: center;
      background-color: crimson;
    }
    .terceira{
      text-align: center;
      width: 33.3%;
      align-items: center;
      background-color: blue;
    }
    /*Add o */
    @keyframes fade-in {
    from { opacity: 0 }
      to   { opacity: 1 }
    }

    img {
      opacity: 0;
      animation: fade-in 2s normal forwards ease-in-out;
      animation-play-state: paused
    }

    body.loaded img {
      animation-play-state: running
    }

    body.loaded img:nth-child(2){ animation-delay: 1s }
    body.loaded img:nth-child(3){ animation-delay: 2s }
    body.loaded img:nth-child(4){ animation-delay: 3s }
    img.balao{
      position: absolute;
      top:-10%;
    }
    .msg-inicio{
      margin-top: 100px;
      text-align: center;
      display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: xx-large;
      font-family: 'Raleway', sans-serif;
    }

    .btn-inicio{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width:200px;
      height: 60px;
      color:#fff;
      font-size: xx-large;
      font-family: 'Raleway', sans-serif;
      border: #000,solid  ;
      border-radius: 8px;
      background-image:  linear-gradient(blue,white);
    }
    </style>
    <script type="text/javascript" src="">
      document.addEventListener('DOMContentLoaded', function(){
      document.querySelector('body')
          .classList
          .add('loaded');
});
    </script>
</head>
<body class="loaded"> 
      <nav class="bar">
        <ul class="">
          <h2 class="Home">
            <a href="index.php">
              <span>🏠Home Page</span>
            </a>
          </h2>
        </ul>
         <section class="direita"> 
          <ul class="right">
              <h3 class="">
                <a href="login.php">👤Login   </a>
              </h3>
              <h3 class="">
                <a href="cad.php">  📝Cadastro</a>
              </h3>
          </ul>
         </section> 
      </nav>

      <section class="conteudo">

        <section class="conteudo-1">
            <h3 class="msg-inicio">
              Clique no botao para <br>iniciarmos a jornada
            </h3>
            <a href="principal.php">
              <button class="btn-inicio" type="button">Iniciar</button>
            </a>
          </section>
        <section class="conteudo-2">
        
        <img class="balao" src='./assets/balao.png' width="300px"><!--
        <img class="aurelion" src='./assets/aurelion-sol2.png' width="1000px">-->
        </section>

      </section>
      
      <section class="rodape">
        <section class="primeira">
            <h1 class="">
              primeira
            </h1>
        </section>
        <section class="segunda">
            <h1 class="">
              segunda
            </h1>
        </section>
        <section class="terceira">
            <h1 class="">
            terceira
            </h1>
        </section>
      </section>
      <audio src="" ></audio>
</body>
</html>