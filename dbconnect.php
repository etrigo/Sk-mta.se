<?php
  require_once '../../dbconfig/dbconfig_skamta.php';
  try {
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $sql = 'SELECT jokes FROM jokes WHERE jokeID = 59;';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $q->fetch()):
        echo nl2br($row['jokes']);
    endwhile;
  } 
  catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
  }
?>
