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
    <title>Página principal</title>
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

        * {
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
            height: 45%;
        }

        div#imagemdireita img {
            position: absolute;
            left: -15%;
            top: 30%;
            height: 40%;
            width: 43%;
            transform: scaleX(-1);
        }

        div#botao input.bt {
            position: absolute;
            left: 5.9%;
            top: 85%;
            width: 30vh;
            height: 10vh;
            background-color: lightblue;
            font-family: "Raleway", sans-serif;
            border-radius: 7px;
            border: solid 2px yellow;
            font-size: 2vh;
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
            <h3 class="">
            <a href="sair.php">&#x1F534;Sair</a>
        </ul>
        </section> 
      </nav>
      <div align="right" id="imgesquerda">
        <img src="assets/aurelionperfil.png" alt="Imagem do Aurelion Sol à direita">
      </div>
      <div align="left" id="imagemdireita">
        <img src="assets/aurelion-sol2.png" alt="Imagem do Aurelion Sol à esquerda">
      </div>
    <div align="center" id="caixa">
        <h1>História do Aurelion Sol</h1>
        <h2>o Forjador de Estrelas</h2>
        <hr>
        <p>O sol familiar deste mundo ainda se esconde atrás do horizonte. Terra bruta e não polida desenrolava-se abaixo. Montanhas contornavam em barreiras que esboçavam dedos nas terras vazias. Palácios, ou ainda, coisas que se passavam por palácios, falhavam em emergir sobre os montes mais baixos. A curvatura do planeta encontrava as estrelas com uma serenidade e graça que poucos dos habitantes abaixo presenciariam. Eles estão tão espalhados ao redor do globo e se agarram tão cegamente em qualquer tipo de entendimento que não é surpresa que eles foram conquistados e sequer compreendiam que estavam em apuros.</p>
        <p>O fulgor que juntei enquanto caminhava na direção do meu destino ilumina o mundo abaixo de mim. Punhados de vida temerosa e jubilosa juntavam-se sob ele em qualquer local fértil encontrado abaixo. Ah, como eles olhavam e apontavam enquanto eu passava sobre suas cabeças. Ouvi os nomes pelos quais eles me chamavam: profeta, cometa, monstro, deus, demônio... Tantos nomes, todos incorretos.</p>
        <p>Em uma vasta extensão do universo, senti uma pontada de magia familiar emanando do trono da civilização mais antiga entre esses selvagens. Olhe e contemple, um Disco Solar massivo está sendo construído. Os pobres trabalhadores escravos bateram suas cabeças e rasgaram suas roupas à minha presença. Seus mestres crueis me viram, um rápido raio de fogo, como um sinal de bom presságio, sem dúvida. Minha passagem será registrada em seus pictogramas em pedra, uma homenagem ao grande cometa, a bênção do deus nos céus agraciando seus trabalhos sagrados e assim por diante. O único propósito do Disco é o de afunilar a majestade do sol para os mais “renomados” destes humanóides de carne, transformando-os exatamente no que este planeta precisa: mais semi-deuses intoleráveis. mais semi-deuses intoleráveis. Este esforço sem sombra de dúvida irá sair pela culatra. Mas presumo que eles devam durar por um tempo, talvez por mil anos, antes de cair e ser suplantado por outros.</p>
        <p>O deserto abaixo some na noite atrás de mim enquanto continuo nas planícies solitárias, que dão lugar a montes marrons com amontoados de verde. O cenário pastoril revela um campo manchado de sangue e regado com a morte e moribundos. Sobreviventes se atacam com machados rústicamente talhados e gritos de guerra. Um lado está perdendo por muito. Crânios de veados jazem no topo de lanças enfiadas no solo, ao lado de soldados sofrendo. Os poucos que continuavam em pé estavam cercados por soldados montados em grandes feras desgrenhadas.</p>
        <p>Os derrotados e cercados me veem e parece que a coragem volta a correr em suas veias. Os feridos levantam-se e seguram seus machados e arcos em um esforço final que tira seus inimigos de guarda. Não fico para ver o resultado da pequena batalha porque já vi o desenrolar dessas situações milhares de vezes: Os sobreviventes farão inscrições do meu cometa nas paredes de suas cavernas. Em milhares de anos, seus descendentes colocarão minha imagem em bandeirolas e lutarão em uma batalha tediosamente similar. Apesar de todo o esforço para capturar e registrar a história, me pergunto por que eles não aprendem com os próprios erros. Essa é uma lição que até eu precisei aprender.</p>
        <p>Os deixo para perpetuarem este ciclo deprimente.</p>
        <p>Minha trajetória revela mais habitantes. Seu repertório coletivo de reações abrangem a gama mais típica: apontar, ajoelhar, sacrificar virgens em altares de pedra. Eles olham para cima e veem um cometa e nunca se perguntam sobre o que existe por trás da façada flamejante. Em vez disso, eles colocam em suas visões de mundo egocêntricas, sujando o esplendor de meu semblante. As poucas formas de vida mais avançadas–e eu usamos aquela descrição folgadamente–olham para os céus e anotam minhas coordenadas em almanaques científicos em vez de me usar como material profético. É aliviante, mas até suas noções de intelecto parecem indicar que sou um fenômeno de aparição regular que tem uma órbita também regular. Ah, os banquetes que eles conseguiriam se... Bem, não há porque chorar sobre o potencial desperdiçado de terrestres simplórios. A culpa não é completamente sua. A evolução parece encontrar dificuldades para se desenvolver neste mundo.</p>
        <p>Ainda assim, a originalidade de tais artimanhas infantis tem esgotado. As energias arrebatadoras do meu vínculo mágico me arrastaram de um planeta miserável para outro por séculos. Agora elas me trouxeram de volta a esta pedra familiar e desagradável. A estrela que inunda sua superfície com luz era uma das minhas criações mais antigas, um encontro forjado de amor e resplendor. Ah, aquele momento querido quando ela acendeu em vida com cores que apenas seu criador poderia ver. Como sinto falta de uma estrela crepitando nova energia, acalentando meu rosto e fluindo pelos meus dedos. Cada estrela concede uma energia única, preciosa e que reflete a alma de seu criador. Elas são flocos de neve cósmicos, queimando em desafio ao escuro infinito.</p>
        <p>Infelizmente, as memórias que anseio viver estão manchadas por traição. Sim, este foi o lugar onde Targon me atraiu e enganou para servir. Mas agora não é o momento de remoer erros passados. Aqueles Aspectos obsoletos querem que eu cumpra outra violação... Em seu nome, claro.</p>
        <p>E então, eu a vejo. A guerreira imbuída deste mundo está sozinha no pico de um dos menores cumes, brandindo uma lança de pedra estelar. Ela me vê através de um véu de corpo anexo, uma mera faísca se disfarçando de raio. Uma trança grossa de cabelo castanho-avermelhado cobre seu ombro, caindo sobre seu peitoral dourado que cobre sua pele pálida e cheia de sardas. Seus olhos, a única parte de seu rosto que não está coberta pelo elmo desgastado pela batalha, lampejam em um tom dissonante de vermelho.</p>
        <p>Ela se proclama Pantheon–a fúria beligerante encarnada de Targon. Ela não é a primeira deste mundo a usar o manto de Pantheon. Nem será a última.</p>
        <p>Sua capa brilhante sacode às suas costas enquanto ela levanta seu braço musculoso e faz um movimento como se estivesse puxando uma grande corrente. O puxão no meu tecido grosseiramente encantado me tira de curso, na direção da montanha onde ela está. E ela está gritando comigo.</p>
        <p>Ela grita com uma voz que retumba em minha cabeça, transmitida através dessa maldita coroa de gemas estelares. Todos os sons desaparecem quando ela invade minha mente.</p>
        <p>“Dragão!” ela diz, como se eu fosse uma fera alada fraca de chamas alaranjadas que teria sorte se conseguisse incendiar uma árvore.</p>
        <p>“Feche o portão deles!” ela ordenou, gesticulando para o fundo de uma fenda com sua pequena lança pontuda. Não preciso ver a erosão violeta de realidade circulando abaixo. Eu conseguia sentir o cheiro do miasma deteriorante que envenena este mundo antes mesmo de chegar. Em vez disso, fixei meus olhos em Pantheon. Ela espere que eu obedeça como um cão de coleira. Hoje será diferente, pois aprendi com os meus erros.</p>
        <p>“ Dragão ”, eu ronrono. “Você tem certeza de que me dar ordens com um nome tão baixo é sensato?”</p>
        <p>O aperto de Pantheon em sua lança afrouxa apenas o suficiente para que ela pudesse manusear a arma por uma fração de segundo. Ela dá um passo para trás, para longe de mim, como se a distância de um passo pudesse protegê-la de minha ira.</p>
        <p>“Feche o portão deles”, ela disse novamente, latindo mais alto como se talvez a ordem anterior não tivesse sido ouvida. Seu volume fez pouco para disfarçar o tremular de sua voz. Ela aponta sua lança na minha direção, como se uma arma tão pequena pudesse me perfurar.</p>
        <p>Essa é a primeira vez que vi um Aspecto de Targon estremecer. Ela não está acostumada com precisar me falar duas vezes.</p>
        <p>“Vou lidar com aqueles terrores medrosos em seu devido tempo, <em>querida</em> Pantheon”.</p>
        <p>“Faça como lhe ordeno, dragão”, isso Pantheon grita, “ou este mundo está perdido”.</p>
        <p>“Este mundo estava perdido no momento em que Targon se rendeu à arrogância”.</p>
        <p>Sinto Pantheon ebulindo em confusão enquanto ela tenta, com dificuldades, tenta segurar minhas correntes imateriais. Só agora ela está sentindo o que eu vim a descobrir. Targon está distraído e não sente sua magia decrescendo em nosso vínculo.</p>
        <p>Pantheon berra mais uma vez e, desta vez, não consigo resistir. O encantamento bruto ganha novamente a soberania sobre minha vontade. Volto minha atenção para a fonte da fenda, situada na bacia de um vale que já fora verdejante e que agora está cheio de miasma roxo. Sinto as perversões das Crias do Vazio passando pelo céu da realidade, enviando ondas de energia invisível passando pelo éter. Eles estilhaçaram o véu que separava o nada e a forma com sua passagem indesejada.</p>
        <p></p>
    </div>
    <div id="botao" align="left">
        <a href="principal.php"><input type="button" value="Ler a biografia do Aurelion Sol" class="bt"></a>
    </div>
</body>
</html>