<?php
  require_once 'dbconfig_skamta.php';
  try {
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $sql = "SELECT jokeID, jokes, frequency
            FROM jokes
            ORDER BY RAND()
            Limit 1";

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $row = $q->fetch();
    
      echo nl2br(str_replace('\\n', "\n", $row['jokes']));
    
    
    $result = $row['jokeID'];
    $sqlup = "UPDATE jokes
              SET frequency = frequency + 1
              WHERE jokeID = $result";

    $q = $pdo->query($sqlup);
    $q->setFetchMode(PDO::FETCH_ASSOC);    
        
  } 
  catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
  }
?>
