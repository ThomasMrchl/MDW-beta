<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Data films et series" />
</head>
<body>
    <?php include("menu.php");
    $valeur  = "New_utilisateur";
    $valeur2 = "mail";
    $valeur3 = "nationalité";
    $nu="";
    if (isset ($_SESSION['pseudo'])){
        $nu = $_SESSION['pseudo'];
        $ni = $_SESSION['mailA'];
        $na = $_SESSION['natio'];
    }

    if ($nu == null) {
    $output1 = $valeur;
    $output2 = $valeur2;
    $output3 = $valeur3;
    } else {
    $output1 = $nu;
    $output2 = $ni;
    $output3 = $na;
    }
    ?>
    
    <div class="titre">
        <h1>Découvrez le monde<br> des Cryptomonnaies <?php echo $output1;?>! </h1>
        
        <p>Vérifier votre email : <?php echo $output2; ?></p>
        <p>Premier portefeuille virtuel de cryptomonnaies au monde!<p>
        <p style="color:white;"> Vous êtes <?php echo $output3; ?> !</p>
        <button class="button-9" role="button" href="login.php" onclick="self.location.href='login.php'">S'inscrire !</button>
    </div>
    
</body>

</html>