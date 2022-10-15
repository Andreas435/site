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
    <title>História do Aurelion Sol</title>
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
            height: 130vh;
            width: 45vh;
        }

        div#imgdireita img {
            position: absolute;
            left: -15%;
            top: 30%;
            height: 130vh;
            width: 83vh;
            transform: scaleX(-1);
        }

        div#botao input.bt {
            position: absolute;
            left: 5.9%;
            top: 95%;
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
            top: 97%;
            right: 7.5%;
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
                <a href="painelAdm.php">  🔑Painel</a>
              </h3>'; } ?>
            <h3 class="">
            <a href="sair.php">&#x1F534;Sair</a>
        </ul>
        </section> 
      </nav>
      <div align="right" id="imgesquerda">
        <img src="assets/aurelionperfil.png" alt="Imagem do Aurelion Sol à direita">
      </div>
      <div align="left" id="imgdireita">
        <img src="assets/aurelion-sol2.png" alt="Imagem do Aurelion Sol à esquerda">
      </div>
    <div align="center" id="caixa">
        <h1>História do Aurelion Sol,</h1>
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
        <p>Eles são atraídos para mim, aquelas abominações de vários olhos. Eles desejam me devorar, a maior de suas ameaças. Dos confins da minha mente, conjurei uma imagem das fornalhas solares que acendi, antes do confinamento injusto de minhas vontades, que incendiou os corações das estrelas. Eu disparo raios de fogo estelar puro e incinerei ondas e ondas de terrores rangentes, levando eles a bater em retirada em sua infinidade oblíqua. Cascas em combustão chovem dos céus. Estou um pouco surpreso de que elas não tenham desintegrado completamente, mas as Crias do Vazio não sabem como as coisas funcionam neste universo.</p>
        <p>Uma doença pulsante paira no ar. Do epicentro da corrupção, senti uma vontade... faminta e indomável e muito distante da irracionalidade típica cuja qual estou acostumado vindo das aberrações das Crias do Vazio. A ferida pulsante na realidade abre e fecha, distorcendo e mudando tudo o que toca. Seja lá o que for que exista do outro lado, está rindo.</p>
        <p>Pantheon grita outra ordem para mim, mas ignoro suas palavras. Essa fissura anômala no universo me encanta. Essa não é a primeira do tipo com a qual eu tive que lidar, mas esta parece diferente e não consigo deixar de admirar a maravilhosa e terrível manipulação de barreiras entre os reinos. Poucos seres conseguem compreender suas complexidades, quem dirá possuir a fulgorosa magnitude de poder necessária para rasgar o tecido da existência. No meu coração, conheço uma ferida tão requintada que não poderia ser orquestrada por criaturas rastejantes. Não. Existe mais por trás dessa instrusão. Eu tremo perante o pensamento do tipo de entidade que é capaz de criar um vale tão volátil. Não preciso das ordens ladradas por Pantheon para me dizer o que fazer a seguir; sua coleção de ordens sempre foi de uma imaginação um tanto quanto limitada de qualquer maneira. Ela quer que eu arremesse uma estrela no vale, como se isso fosse simplesmente cauterizar a erosão inter-dimensional e tudo acabar.</p>
        <p>Esses semi-deuses obtusos são meus captores?</p>
        <p>Tudo bem. Ao menos eles não estão tão errados em sua “lógica” ao pensar que algumas maravilhas cósmicas remediariam este problema. Vou fazer o papel do servo obediente só mais um pouco.</p>
        <p>Gosto do que farei a seguir, parcialmente porque eles se lembrarão disso, parcialmente porque é bom liberar um pouco do antigo poder, mas em maior parte porque eu quero lembrar que qualquer inteligência que controla esta incursão do Vazio que ninguém ri de mim em meu plano existencial.</p>
        <p>Os elementos base na atmosfera vêm para me ajudar, acumulando-se em uma anomalia de plasma. A poeira estelar crescente detona ao meu comando implícito. O resultado é uma réplica anã de uma das minhas glórias majestosas, queimando nos confins do espaço. No fim das contas, eu não posso colocar uma estrela completa neste mundo frágil.</p>
        <p>A jovem estrela com seu brilho reluzente voa das minhas mãos. Ela se juntou a duas irmãs, sempre ao meu lado. Elas moveram-se inconstantemente ao meu redor em um balé radiante, seus núcleos quentes estavam devorando as nuvens de poeira e matéria que eu trouxe na nossa direção. Nos tornamos uma tempestade de estrelas, o céu da noite encarnado, um giro enlouquecedor de fogo estelar. Eu conjuro redemoinhos de poeira estelar incandescente, exalando um calor tão puro e denso que faz desmoronar bem pouquinho a aura deste mundo, marcando para sempre a curvatura do planeta. Piras de fogo estelar saíam do centro do vale. A gravidade derrete em ondas de cor que a maioria dos olhos jamais seria capaz de enxergar. Minhas estrelas deformam matéria enquanto mais combustível alimenta seus núcleos, fazendo com que elas brilhem e queimem mais. Todo o espetáculo é de tirar o fôlego, uma cascata de luz cegante e calor incandescente, tão quente que por um momento, novos espectros nascem. Minha espinha coça um pouco de tão boa que é a sensação.</p>
        <p>Árvores se quebram. Rios evaporam. As paredes da montanha do vale são destruídas em avalanches cheias de fumaça. Os trabalhadores incansáveis que estão construindo o Disco Solar, os soldados tomando o desfiladeiro, os observadores de estrelas, os adoradores, os aterrorizados, os profetas dos dias finais, os sem esperança, os reis em ascensão... Todos aqueles que viram o cometa com olhos egoístas presenciaram a supernova como um amanhecer precoce. Por todos os cantos deste globo digno de pena, meu brilho transformou a noite mais escura em um dia cegante. Quais ficções eles conjurarão para explicar este fenômeno?</p>
        <p>Até mesmo meus mestres targonianos raramente presenciaram tal exibição de meu poder. Certamente, nenhum mundo terrestre já ostentou cicatrizes tão severas quanto as deixadas naquele vale que já fora verdejante. Quando terminei, nada restava.</p>
        <p>Nem mesmo esta encarnação de Pantheon. Não posso dizer que sentirei falta dela ou de sua gritaria irracional.</p>
        <p>No resultado brilhante de meu massacre, as montanhas caíram nos escombros fundidos que agora fluíam pelo vale. Esta é a cicatriz que eu deixei neste mundo. Um surto de dor maldita passa pelo meu corpo, saindo daquela coroa infernal. Estou prestes a pagar pelos meus atos.</p>
        <p>Minha cabeça estala e meus olhos bebem da visão amarga de uma estrela morrendo. Meu coração se fecha. Minha mente vacila. Um sentimento arrebatador de desespero ricochetea na minha alma, emanando de uma tristeza profunda e imediata, como a compreensão pulsante de que você perdeu algo precioso e que sabe que é sua culpa.</p>
        <p>Algumas formas de vida curiosas que conheci muito tempo atrás um dia me perguntaram como era possível para mim lembrar de cada estrela que já criei. Se eles pudessem ao menos sentir como é criar uma estrela, eles entenderiam a irrelevância fulminante dessa pergunta. É assim que eu sei quando uma das minhas queridas deixa de existir, ejetando jatos de energia e, com eles, substância do meu próprio espírito. Vejo sua morte acontecendo nos céus acima. Ela brilha mais forte por uma última vez em um piroclasto que momentaneamente afoga seus irmãos e irmãs. Meu coração se estilhaça enquanto os céus são reduzidos em uma retribuição brutal por voltar meu poder em alguém de Targon.</p>
        <p>Um sol é o preço por um único Pantheon. Este é o custo da minha ira desenfreada. Esse é o tipo de feitiçaria grosseira com a qual eu tenho que lidar.</p>
        <p>Em segundos, eles recuperaram controle das minhas rédeas e me chamaram para uma nova tarefa. Em nenhum outro mundo eu exibi tal liberdade, não importa quão fugaz fosse. O que importava era que eu havia aprendido com meus erros. Um pouco de mim está livre agora e, com o tempo, voltarei a este mundo, tocarei este poço misterioso de energia e reti rarei o resto das minhas amarras.</p>
        <p>Eu entro em sintonia com aquela essência de guerra, desfigurando e contorcendo com receptáculos de carne espalhados pelo cosmos. Ele não estava feliz por perder seu avatar mortal neste mundo. Um novo hospedeiro já fora escolhido para se transformar na próxima iteração de Pantheon – um soldado dos Rakkor, uma tribo que está junto à base da montanha targoniana, segregando seu poder como cracas. Um dia, conhecerei esta nova encarnação de Pantheon. Talvez ele consiga encontrar uma nova arma e abandone aquela lança ridícula. Sinto a família celestial de Pantheon, espalhada pelo cosmos. Em uma única instância, toda sua atenção é focada neste mundo, onde um de seus Aspectos foi vaporizado por sua própria arma. Sua confusão mistura-se com um desespero crescente enquanto eles lutam entre si para recuperar seu controle sobre mim. Como eu queria poder ver seus rostos.</p>
        <p>Enquanto me lanço da gravidade deste mundo, essa Runeterra, sinto uma emoção que nunca senti de Targon antes.</p>
        <p>Temor.</p>
    </div>
    <div id="botao" align="left">
        <a href="principal.php"><input type="button" value="Ler a biografia do Aurelion Sol" class="bt"></a>
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
    <a rel="external" target="_blank" href="https://universe.leagueoflegends.com/pt_BR/story/aurelionsol-color-story/" id="link">Site oficial do LoL</a>
</body>
</html>