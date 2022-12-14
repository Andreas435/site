<?php
    session_start();
    if (empty($_SESSION['id'])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografia do Aurelion Sol</title>
    <link rel="icon" href="./assets/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            position: relative;
            background-image: url("./assets/background1.gif");
            background-size: 100%;
        }

        nav {
            display: flex;
            align-items: baseline;
            position: relative;

            background:#020d3f;
        }

        h3 {
            font-size: x-large;
            margin-left: 30px;
        }

        ul {
            display: flex;
            align-items: baseline;
        }


        .direita {
            position: absolute;
            right: 3%;
        }

        nav.bar a {
            text-decoration: none;
            color: white;
        
        }
        
        div#caixa {
            background-color: #0768DE;
            color: white;
            margin-top: 9vh;
            text-align: justify;
            margin-left: 55vh;
            margin-right: 55vh;
            border-radius: 5px;
            border: solid 2px yellow;
            padding: 3vh;
        }

        *{
            font-family: 'Raleway', sans-serif;
        }

        hr {
            color: yellow;
        }

        h1 {
            font-size: 5vh;
            text-align: center;
        }

        div#caixa h2 {
            font-size: 3vh;
            margin-top: -3vh;
            text-align: center;
        }

        div#imgesquerda img{
            position: absolute;
            right: 0%;
            top: 30%;
            height: 70vh;
        }

        div#imagemdireita img {
            position: absolute;
            left: -15%;
            top: 30%;
            height: 60vh;
            width: 85vh;
            transform: scaleX(-1);
        }

        div#botao input.bt {
            position: absolute;
            right: 5.9%;
            top: 85%;
            width: 30vh;
            height: 10vh;
            background-color: lightblue;
            font-family: "Raleway", sans-serif;
            border-radius: 7px;
            border: solid 2px yellow;
            font-size: 2vh;
        }

        a#link {
            position: absolute;
            font-size: 3vh;
            color: white;
            top: 95%;
            left: 6.5%;
        }
    </style>
</head>
<body>
<body class="loaded"> 
    <nav class="bar">
    <ul class="">
        <h2 class="Home">
        <a href="index.php">
            <span>&#x1F3E0;Home Page</span>
        </a>
        </h2>
    </ul>
        <section class="direita"> 
        <ul class="right">
        <?php if( $_SESSION["cargo"]== "adm"){ 
                echo '
              <h3 class="">
                <a href="painelAdm.php">  ????Painel</a>
              </h3>'; } ?>
            <h3 class="">
            <a href="sair.php">&#x1F534;Sair</a>
        </ul>
        </section> 
      </nav>
      <div align="right" id="imgesquerda">
        <img src="assets/aurelionperfil.png" alt="Imagem do Aurelion Sol ?? direita">
      </div>
      <div align="left" id="imagemdireita">
        <img src="assets/aurelion-sol2.png" alt="Imagem do Aurelion Sol ?? esquerda">
      </div>
    <div align="center" id="caixa">
        <h1>Biografia do Aurelion Sol,</h1>
        <h2>o Forjador de Estrelas</h2>
        <hr>
        <p>O surgimento de um cometa no c??u noturno ?? sinal de transtorno e mal-estar. Diante da presen??a de t??o tem??veis press??gios, novos imp??rios surgiam, velhas culturas ru??am e at?? mesmo as estrelas podiam desaparecer do firmamento...</p>
        <p>Por??m, a verdade pode ser ainda mais inquietante.</p>
        <p>A toda-poderosa criatura conhecida como Aurelion Sol j?? era imemorial antes mesmo do surgimento dos mortais em Runeterra. Nascido durante o primeiro sopro da cria????o, ele e seus semelhantes vagavam pelo imenso vazio de um intocado reino celestial, buscando pintar sobre essa tela de caos incalcul??vel, repleta de maravilhas cujos espectros cintilantes certamente podiam trazer j??bilo e deleite a todos que as testemunhassem.</p>
        <p>Enquanto vagava, Aurelion Sol ocasionalmente encontrava algum de seus iguais. Os Aspectos eternos eram seres impass??veis e indiferentes, contribu??am pouco para a pr??pria exist??ncia e se contentavam em projetar filosofias egoc??ntricas sobre a natureza da cria????o.</p>
        <p>Em uma de suas viagens, ele foi banhado pela luz de um sol bastante comum que havia criado h?? eras, e ent??o descobriu algo. Um mundo. Novos reinos.</p>
        <p>Ele n??o tinha no????o de quem havia criado tal mundo ou o porqu??, mas sabia que n??o era de sua autoria.</p>
        <p>Os Aspectos, que pareciam estranhamente interessados naquele mundo, suplicaram que ele se aproximasse. L??, havia vida, bem como magia. As civiliza????es que ali surgiam imploravam por ensinamentos de entidades superiores. Sentindo-se adorado por esse novo p??blico em raz??o de sua suprema majestade, Aurelion Sol desceu para desfrutar dos cortejos que as criaturas o proporcionavam, tomando a forma de um terr??vel e gigantesco drag??o das estrelas.</p>
        <p>Os min??sculos habitantes da insignificante terra de Targon deram a ele tal nome em homenagem ?? luz dourada do sol que ele mesmo havia presenteado. Os Aspectos ordenaram aos humanos que trouxessem uma oferenda apropriada ?? gra??a que Aurelion Sol os havia concedido. Os mortais subiram ao topo da montanha mais alta e ofertaram a ele uma coroa espl??ndida, forjada com magia h??bil e cautelosa, gravada com padr??es inimagin??veis do reino celestial.</p>
        <p>No momento em que ela tocou a testa de Aurelion Sol, ele soube que aquilo n??o era um presente.</p>
        <p>O artefato amaldi??oado fixou-se em sua cabe??a com uma for??a inimagin??vel, tornando-se imposs??vel de remover. O drag??o podia sentir seu conhecimento do sol e suas cria????es sendo roubados e analisados pelas intelig??ncias infinitamente inferiores ?? sua. O maior agravante foi que o poder da coroa o lan??ou de volta aos c??us, impedindo-o de se aproximar daquele mundo novamente.</p>
        <p>Sem ter escolha, ele foi for??ado a assistir aos trai??oeiros Aspectos de Targon ordenando aos humanos que constru??ssem um grande disco brilhante. Com esse objeto, eles canalizaram os poderes celestiais de Aurelion Sol para ascender como deuses-guerreiros destinados a algum conflito desconhecido que aparentemente ainda estava por vir.</p>
        <p>Enfurecido, ele podia vislumbrar outras estrelas esmorecendo no firmamento pela falta de cuidado e preserva????o enquanto tentava, sem sucesso, se livrar do controle da coroa. Era ele o criador daquelas luzes no universo! Por que, ent??o, deveria permanecer ali, acorrentado pelos Aspectos e seus servos inferiores? Ele rugiu de alegria quando o Disco Solar falhou... no entanto, um segundo disco, ainda mais forte, logo surgiu para substituir o primeiro. Por fim, conformado com seu destino, viu que os deuses-guerreiros aniquilavam seus rivais, depois barulhentas criaturas da mais pura escurid??o, e ent??o uns aos outros.</p>
        <p>Logo, t??o r??pido quanto o piscar de olhos de um drag??o estelar, o mundo estava infestado de uma sucess??o de cat??strofes m??gicas. Aurelion Sol sabia que Targon e seus malditos Aspectos finalmente estavam indefesos. Enquanto voltava serpenteando, percebeu que a magia que o prendia estava enfraquecendo. Flocos dourados come??aram a cair de sua coroa, cruzando os c??us como cometas.</p>
        <p>Movido pela tentadora promessa de liberdade e vingan??a, Aurelion Sol agora espreita Runeterra com uma eterna f??ria fervilhante. Certamente ser?? aqui, sobre este mundo, que o equil??brio c??smico pender?? a seu favor uma vez mais, e o universo testemunhar?? o destino daqueles que ousaram roubar o poder de um forjador de estrelas.</p>
    </div>
    <audio id="myAudio" >
  <source src="assets/music2.mp3"  type="audio/mpeg">
</audio>
<script>
   navigator.mediaDevices.getUserMedia({ audio: true }).then(function (stream) {
        var x = document.getElementById("myAudio"); 
        x.play();
         // stop microphone stream acquired by getUserMedia
         stream.getTracks().forEach(function (track) { track.stop(); });
     });
     var gfg = document.getElementById("myAudio");
      gfg.volume = 0.70;
   
</script>
    <div id="botao" align="right">
        <a href="principaldois.php"><input type="button" value="Ler a hist??ria do Aurelion Sol" class="bt"></a>
    </div>
    <a rel="external" target="_blank" href="https://universe.leagueoflegends.com/pt_BR/story/champion/aurelionsol/" id="link">Site oficial do LoL</a>
</body>
</html>