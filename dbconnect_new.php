<?php
  require_once '../../dbconfig/dbconfig_skamta.php';
  try {
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $sql = "SELECT jokeID, jokes, frequency
            FROM jokes
            ORDER BY RAND()
            Limit 1";
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $q->fetch()):
        $result = $row['jokeID'];
        echo htmlspecialchars($row['jokes']);
        echo $result;
        $sqla = "UPDATE jokes SET frequency = frequency + 1 WHERE jokeID = $result";
    endwhile;
  } 
  catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
  }
?>

