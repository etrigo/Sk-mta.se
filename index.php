<!DOCTYPE html>
<html lang="sv_SE">
<head>
  <!-- Analytics -->
  

  <title>sidtitel hej</title>
  
  <!-- meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="Description" content="add some content" />
  <meta name="Keywords" content="add keywords" />

  <!-- og meta -->
  <!--<meta property="og:image" content="https://chokladbollar.nu/img/chokladbollar-nu.jpg" />-->
  <meta property="og:type" content="website" /> 
  <meta property="og:url" content="https://skamta.se/" />
  <meta property="og:title" content="add title" />
  <meta property="og:description" content="add some content" />

  <!-- links -->
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script type="text/javascript" src="script.js"></script>
  <script src="https://kit.fontawesome.com/af3582c51f.js"></script>
  
  <!--<link rel="icon" href="/img/chokladbollar-icon.ico" type="image/x-icon" />-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Montserrat&display=swap">
</head>
<body>
  <header>
    <div>
      <a href="/sk-mta.se/index.php"> <h1 class="strongHead">skämta.se</h1></a>
      <h2 class="strongGen" >skämtgeneratorn</h2>
    </div>
    <div id="headSmall">
      <svg class="headSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 30" preserveAspectRatio="none">
        <polygon id="headPolyTwo" points="25,25 100,20, 100,30" />
        <polygon id="headPolyOne" points="0,0 100,0 100,20 0,30" />
        <line class="headLine" x1="26" y1="17" x2="76" y2=14 />
      </svg>
    </div>
    <div id="headMedium">
      <svg class="headSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 25" preserveAspectRatio="none">
        <polygon id="headPolyTwo" points="25,20 100,15, 100,25" />
        <polygon id="headPolyOne" points="0,0 100,0 100,15 0,25" />
        <line class="headLine" x1="30" y1="17" x2="72" y2=14 />
      </svg>
      </div>
      <div id="headLarge">
        <svg class="headSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20" preserveAspectRatio="none">
          <polygon id="headPolyTwo" points="25,15 100,10, 100,20" />
          <polygon id="headPolyOne" points="0,0 100,0 100,10 0,20" />
          <line class="headLine" x1="35" y1="11" x2="66" y2=9 />
        </svg>
      </div>
  </header>
  <section id="mainSec">
    <!-- <div id="helloBox">
      <p>Hejsan, kul att du hittat hit. Testa generera ett skämt med knappen nedan!</p>
    </div> -->
    <div id="jokerBox" class="jokerBox">
      <p>hejsan hoppsan</p>
    <!-- <?php require 'dbconnect.php';?> -->
    </div>
    <button id="jokerButton" onclick="joker()"><h1 id="jokerButtonText">skämta</h1></button>
  </section>
  <footer>
    <section id="footerOne">
      <div id="footerShare">
        <h1 id="footerShareSite" onclick="copyFunction()">dela sajten</h1>
        <form  id="formShare">
          <input type="text" class="readUrl" id="siteUrl" name="readUrl" value="https://skamta.se/" onclick="copyFunction()" readonly />
        </form>
      </div>
      <div id="footerEnd" >
        <h4 id="footerGreeting">En sajt från en Björn</h4>
      </div>
      <div id="footerSmall">
        <svg class="footSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" preserveAspectRatio="none">
          <polygon id="footPolyTwo" points="0,0 100,25 0,25" />
          <polygon id="footPolyOne" points="0,35 100,35 100,0 0,25" />
        </svg>
      </div>
      <div id="footerMedium">      
        <svg class="footSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 25" preserveAspectRatio="none">
          <polygon id="footPolyTwo" points="0,0 100,15 0,15" />
          <polygon id="footPolyOne" points="0,25 100,25 100,0 0,15" />
        </svg>
      </div> 
      <div id="footerLarge">       
        <svg class="footSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12.5" preserveAspectRatio="none">
          <polygon id="footPolyTwo" points="0,0 100,12.5 0,12.5" />
          <polygon id="footPolyOne" points="0,12.5 100,12.5 100,0 0,7.5" />
        </svg>
      </div>   
    </section>
    <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="closeModal">&times;</span>
            <h2>Kopierad!</h2>
          </div>
          <div class="modal-body">
            <a href="https://facebook.com/" target="_blank"> <i class="fab fa-facebook-square"></i></a>
            <i class="far fa-grin-hearts"></i>
            <a href="https://twitter.com/" target="_blank"> <i class="fab fa-twitter-square"></i></a>
            <p>Dela den var du vill!</p>
          </div>
          <div class="modal-footer">
            <h2>skämta.se</h2>
          </div>
  </footer>
</body>
</html>