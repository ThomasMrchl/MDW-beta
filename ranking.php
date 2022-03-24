<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/styleranking.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Data films et series" />

</head>
<body>
    <?php include("menu.php"); ?>


    <div class="container">
  <table class="responsive-table">
    <thead>
      <tr>
        <th scope="col">Ranking Mondial</th>
        <th scope="col">Nationalité</th></th>
        <th scope="col">Valeur Wallet</th>
        <th scope="col">Q BTC</th>
        <th scope="col">Q ETH</th>
        <th scope="col">Q BNB</th>
        <th scope="col">Q SOL</th>
        <th scope="col">Q LINK</th>
        <th scope="col">Q DOT</th>
        <th scope="col">Q ADA</th>
        <th scope="col">Q XRP</th>
        <th scope="col">Q AVAX</th>
        <th scope="col">Q LUNA</th>
      </tr>
    </thead>
    <tbody>

    <?php

    // connexion à la base de données
    $db_username = '254480';
    $db_password = 'Thomas&PierreMDW*';
    $db_name     = 'mydreamwallet_base';
    $db_host     = 'mysql-mydreamwallet.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    $requete = "SELECT * FROM User ORDER BY id; ";
    $exec_requete = mysqli_query($db,$requete);
    $reponse      = mysqli_fetch_array($exec_requete);
    $count = mysqli_num_rows($exec_requete);
    for ($j = 0; $j < $count-1; $j++) {
      $ligne = mysqli_fetch_array($exec_requete);
      $pseudo = $ligne["pseudo"];
      $nat = $ligne["natio"];
    echo"<tr>
    <td data-title='rang'>".$pseudo."</td>
    <td data-title='Nationalité'>".$nat."</td>
    <td data-title='Valeur'>$</td>
    <td data-title='QBTC'>Q</td>
    <td data-title='QETH'>Q</td>
    <td data-title='QBNB'>Q</td>
    <td data-title='QSOL'>Q</td>
    <td data-title='QLINK'>Q</td>
    <td data-title='QDOT'>Q</td>
    <td data-title='QADA'>Q</td>
    <td data-title='QXRP'>Q</td>
    <td data-title='QAVAX'>Q</td>
    <td data-title='ALUNA'>Q</td>
    </tr>";
    }




    ?>
    </tbody>
  </table>
</div>
</body>

</html>