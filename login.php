<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/styleconnect.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Simulation Trading CryptoMonnaie" />

</head>
<body>
    <?php include("menu.php"); ?>
    <div class="descendre">
      
    <form action="verif.php" method="post">
        <div class="form">
      <div class="title"><img src="images/logo.png" alt="logo"></div>
      <a href="connect.php"><div class="subtitle">Déjà inscrit ?</div></a>
      <div class="input-container ic1">
        <input name="firstname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Name</label>
      </div>
      <div class="input-container ic2">
        <input name="email2" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="email" class="placeholder">Email</label>
      </div>
      <div class="input-container ic2">
        <input name="passw2" class="input" type="password" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Password</label>
      </div>
      <div class="input-container ic2">
        <input name="origin" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="origin" class="placeholder">Nationalité</label>
      </div>
      <input type="submit" name="submit" value="Submit" class="submit"/>
    </div>
</form>
    </div>
    
  
</body>

</html>