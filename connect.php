<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Data films et series" />

</head>
<body>
    <?php include("menu.php"); ?>
    <div class="descendre">
        <form action="verification.php" method="post">
        <div class="form">
      <div class="title"><img src="images/logo.png" alt="logo">
    </div>
      <a href="login.php"><div class="subtitle">Pas encore inscrit ?</div></a>
      <div class="input-container ic2">
        <input name="mailA" class="input" type="text" placeholder=" " required/>
        <div class="cut"></div>
        <label for="email" class="placeholder">Email</label>
      </div>
      <div class="input-container ic2">
        <input name="passw" class="input" type="password" placeholder=" " required/>
        <div class="cut cut-short"></div>
        <label for="pass" class="placeholder">Password</label>
      </div>
      <button type="submit" class="submit">submit</button>
      <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
    </div>
    </form>
    </div>
</body>

</html>