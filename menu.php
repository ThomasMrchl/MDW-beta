<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">

    <script language="Javascript" >
        var msg1 = "-   My Dream Wallet - Start investing in crypto virtualy   -";
        var speed=120;
        function ScrollTitle() {
        document.title=msg1;
        msg1=msg1.substring(1,msg1.length)+msg1.charAt(0);
        setTimeout("ScrollTitle()",speed);
        }
        ScrollTitle();
    </script>
</head>
<body>
        <div class="topnav">
            <a class="partielogo" href="home.php"><img src="logo.png" alt="logo"></a>
            <a href="crypto.php">Crypto</a>
            <a href="ranking.php">Ranking</a>
            <a href="contact.php">Contact us</a>
            <div class="topnav-right">
            <a href="#search">My Wallet</a>
            <a class="active" href="connect.php">Login</a>
            </div>
        </div>
        
</body>
</html>