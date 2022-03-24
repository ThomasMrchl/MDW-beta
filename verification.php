<?php
session_start();
if(isset($_POST['mailA']) && isset($_POST['passw']))
{
    // connexion à la base de données
    $db_username = '254480';
    $db_password = 'Thomas&PierreMDW*';
    $db_name     = 'mydreamwallet_base';
    $db_host     = 'mysql-mydreamwallet.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['mailA'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars(hash('sha256',$_POST['passw'])));
    
    if($email !== ""&& $password !== "")
    {
        $requete = "SELECT * FROM User where 
              email = '".$email."' and pass = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = mysqli_num_rows($exec_requete);
        for ($j = 0; $j < $count; $j++) {
         $pseudo = $reponse["pseudo"];
         $nat = $reponse["natio"];
         echo $nat;
         echo $pseudo;
        }
        if($count==1) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['mailA'] = $email;
           $_SESSION['pseudo'] = $pseudo;
           $_SESSION['natio'] = $nat;  
           
          header("Location:home.php");
        }
        else
        {
           header('Location: connect.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: connect.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: connect.php');
}
mysqli_close($db); // fermer la connexion
?>