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
  <!DOCTYPE html>
  <html lang="sv_SE">
      <head>
          <title>PHP MySQL Query Data Demo</title>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet">
          <meta charset="UTF-8" />
      </head>
      <body>
          <div id="container">
              <h1>Employees</h1>
              <table class="table table-bordered table-condensed">
                  <thead>
                      <tr>
                          <th>JokeID</th>
                          <th>Jokes</th>
                          <th>FREQUENCY</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php while ($row = $q->fetch()): ?>
                          <tr>
                              <td><?php echo htmlspecialchars($row['jokeID']); ?></td>
                              <td><?php echo htmlspecialchars($row['jokes']); ?></td>
                              <td><?php echo htmlspecialchars($row['frequency']); ?></td>
                          </tr>
                      <?php endwhile; ?>
                  </tbody>
              </table>
      </body>
  </div>
  </html>