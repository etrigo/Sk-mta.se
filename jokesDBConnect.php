<?php
  header('Content-type: text/html; charset=UTF-8');
  require_once 'dbconfig.php';

  try {
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = 'SELECT jokeID, jokes, frequency
            FROM jokes
            ORDER BY RAND()
            Limit 57';
    
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
  }
?>