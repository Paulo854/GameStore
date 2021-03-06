<?php
include("conecta.php");

?>
<!DOCTYPE html>	
<html>
 <head>
<meta charset="UTF-8">
  <title>Games Stores</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="shortcut icon" type="image/x-icon" href="/TCC/img/logo2.png">
 <script src="https://www.google.com/recaptcha/api.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XT46QMBJSN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XT46QMBJSN');
</script>
    <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LdQ6ikaAAAAADDzobdHcMcyxMcPLfnJIUWPiKV0', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
<script language="JavaScript">
    function protegercodigo() {
    if (event.button==2||event.button==3){
        alert('Codigo protegido!');}
    }
    document.onmousedown=protegercodigo
</script>
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("TCC/telainicial.jpg");
  min-height: 90%;
}
</style>
 </head>
<body>
   <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="/__/firebase/7.23.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="/__/firebase/7.23.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="/__/firebase/7.23.0/firebase-auth.js"></script>

  <script src="/__/firebase/7.23.0/firebase-firestore.js"></script>
   <!-- Previously loaded Firebase SDKs -->

  <!-- Initialize Firebase -->
  <script src="/__/firebase/init.js"></script>
 
   <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="/__/firebase/8.1.1/firebase-app.js"></script>

  <!-- Add the Performance Monitoring library -->
  <script src="/__/firebase/8.1.1/firebase-performance.js"></script>
 
   <!-- Previously loaded Firebase SDKs -->

  <!-- Initialize Firebase -->
  <script src="/__/firebase/init.js"></script>

  <!-- Initialize Performance Monitoring and get a reference to the service -->
  <script>
    var perf = firebase.performance();
    // ...
  </script>
 
 <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyAlxoSt80bLHWlVctCzPSToMnzCpOoNOqo",
    authDomain: "games-store-cf302.firebaseapp.com",
    projectId: "games-store-cf302",
    storageBucket: "games-store-cf302.appspot.com",
    messagingSenderId: "491511659985",
    appId: "1:491511659985:web:0089a31df557cbcbc6b4f0",
    measurementId: "G-SQ6XVRRSJ3"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
            .withAppKey('c3RvcmVib3Q6Y2M2ODNmYjAtNDczZC00Mjc4LWEzMzEtOWQyYzgxMDliNDk2')
            .withButton({"color":"#3906d2","icon":""})
            .withCustomCommonUrl('https://chat.blip.ai/')
            .build();
        }
    })();
</script>
<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#compras" class="w3-bar-item w3-button">Consoles</a>
    <a href="#Sobre" class="w3-bar-item w3-button">Sobre nos</a>
    <a href="/créditos/creditos.html" class="w3-bar-item w3-button">Créditos</a>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Todos os direitos reservados a Paulo Victor 2020</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">Games<br>STORES</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>Loja de Jogos</b></span>
    <p><a href="#compras" class="w3-button w3-xxlarge w3-black">Vamos as compras!!</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="compras">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Consoles da Semana</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Consoles</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Jogos</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Controles</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Sony PlayStation 4</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/TCC/produtops4/ps4.html">R$2.199,99
</a></span></h1>
      <p class="w3-text-grey">Uns dos melhores Consoles atualmente</p>
      <hr>
   
      <h1><b>Xbox One X</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/TCC/produtoxbox/xbox.html">R$3.198,00 </a></span></h1>
      <p class="w3-text-grey">Atualmente ele se encontra em primeiro lugar na lista de consoles mais potentes</p>
      <hr>
      
      <h1><b>Nintendo Switch</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/TCC/produtonintendo/nintendo.html">R$1.999,99</a> </span></h1>
      <p class="w3-text-grey"> o híbrido da gigante japonesa</p>
      <hr>

      <h1><b>Sony PlayStation 5</b> <span class="w3-tag w3-grey w3-round">Novo!</span><span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/TCC/ps5/teste.html">R$4.459,99</a></span></h1>
      <p class="w3-text-grey">Uma nova evolução de Consoles</p>
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Game Fortnite - Pacotão Fogo Sombrio</b> <span class="w3-tag w3-grey w3-round">Popular!</span> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$200,00 </a></span></h1>
      <p class="w3-text-grey">Em Fortnite, os jogadores se enfrentam e competem para ser o último sobrevivente em um jogador vs jogador de 100 jogadores em um espaço onde podem construir bases</p>
      <hr>
   
      <h1><b>Mortal Kombat 11</b> <span class="w3-tag w3-grey w3-round">PROMOÇÃO RELÂMPAGO!</span> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$115,00</a></span></h1>
      <p class="w3-text-grey">Aftermath conta com uma história cinematográfica que envolve confiança e enganação. Liu Kang Deus do Fogo, o guardião do tempo e protetor do Plano Terreno, busca proteger o ...</p>
      <hr>
      
      <h1><b>Red Dead Redemption 2 Ultimate Edition</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$789,99 </a></span></h1>
      <p class="w3-text-grey">América, 1899. O fim da era do oeste selvagem começou quando os homens da lei caçam as últimas gangues criminosas remanescentes. Aqueles que não se renderem ou sucumbirem serão </p>
      <hr>

      <h1><b>Grand Theft Auto V</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$157,00 </a></span></h1>
      <p class="w3-text-grey">DESCRIÇÃO Vivencie o jogo em mundo aberto aclamado pela crítica da Rockstar Games, Grand Theft Auto V. Quando um malandro de rua, um ladrão de bancos aposentado e um psicopata ...</p>
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Controle de Xbox X</b> <span class="w3-tag w3-grey w3-round">Um dos melhores</span><span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$489,79 </a></span></h1>
      <p class="w3-text-grey">Controle sem Fio - XBOX ONE Os direcionais redesenhados e o novo</p>
      <hr>
   
      <h1><b>Controle Dualsense PlayStation 5</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$425,99 </a></span></h1>
      <p class="w3-text-grey">Descubra uma experiência de jogos mais profunda</p>
      <hr>
      
      <h1><b>Controle Sony Dualshock 4 PS4</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$189,99 </a></span></h1>
      <p class="w3-text-grey">O DUALSHOCK 4 apresenta inovações que proporcionam experiências de jogos</p>
      <hr>
      
      <h1><b>Controle Sem Fio Xbox One Branco</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> <a href="/construção/construção.html">R$400,99 </a></span></h1>
      <p class="w3-text-grey">O controle sem fio para Xbox One, da Microsoft</p>
    </div><br>

  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="Sobre">
  <div class="w3-content">  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Sobre nos</h1>
    <p>Olá seja bem-vindo ao nosso site contamos com diversos produtos de qualidade, Prezamos pela sua segurança na hora de sua compra por isso todos os seus dados são mantidos em sigilo.</p>
    <p><strong></strong> </p>
    <p></p>
    <h1><b></b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p></p>
        <p></p>
        <p></p>
      </div>
      <div class="w3-col s6">
        <p></p>
        <p></p>
        <p></p>
      </div>
    </div>
    
  </div>
</div>

<!-- Image of location/map -->
<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Fale com Conosco</h1>
    <p>Olá Seja bem vindo ao nosso site este é nosso canal de ajuda qualquer duvida que você tiver mande uma mensagem para nossa equipe</p>
    <p><span class="w3-tag">ATEÇÃO!</span> Este Canal só podera ser ultilizado para perguntas relevantes não ultilizer de maneira errada.</p>
    <p class="w3-xxlarge"><strong>Formulário</strong> Prencha todos os campos:</p>
    <form action="email.php" method="post">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" id="nome" required name="name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="email" id="email" placeholder="Qual seu E-mail" required name="email" maxlength="70"></p>

     <p><input class="w3-input w3-padding-16 w3-border" type="text" id="assunto" placeholder="Coloque o assunto" required name="subject"></p>
   

      <p><input class="w3-input w3-padding-16 w3-border" type="text" id="Mensagem" placeholder="mensagem" required name="mensage"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit" name="sendemail">ENVIAR</button></p>
    </form>
  </div>  
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Criado por Paulo Victor <a href="#" title="E-mail" target="_blank" class="w3-hover-text-green">2020</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>
</body>
</html>
?>
