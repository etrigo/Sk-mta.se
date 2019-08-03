<?php
  require_once 'dbconfig_skamta.php';
  try {
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $sql = "UPDATE jokes
            SET frequency = frequency + 1
            WHERE jokeID = $result";
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $row = $q->fetch();
    $result = $row['jokeID'];
      /*echo 
        "<button id='loveButton' onclick='love()'><h1 id='loveButtonText'>älska</h1></button>
        <button id='hateButton' onclick='hate()'><h1 id='hateButtonText'>hata</h1></button>
        <button id='reportButton' onclick='report()'><h1 id='reportButtonText'>rapportera</h1></button>
        <br>
        <div id='jokerBox' class='jokerBox'>
        <p id='jokerBoxText'>" . 
      nl2br(str_replace('\\n', "\n", $row['jokes']))
        . "</p>
        </div>
        <button id='jokerButton' onclick='joker()'><h1 id='jokerButtonText'>igen!!</h1></button>"; */
  } 
  catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
  }
?>
