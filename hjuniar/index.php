<!DOCTYPE html>
<?php include 'connection.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DompetHandmade</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>

<body>
    <div class="biggest-container">

        <div class="judulweb">
            <a href="home">
                <img src="images/logodompet.png" width="400">
            </a>

        </div>

        <div class="nav">
            <ul class="menu">
                <li>
                    <div class="dropdown">
                        <span><a href="wallets.html">wallets</a></span>
                        <div class="dropdown-content">
                            <p><a href="longwallet">Long Wallet</a></p>
                            <p><a href="cardwallet">Card Wallet</a></p>
                            <p><a href="keywallet">Key Wallet</a></p>
                            <p><a href="bifoldwallet">Bifold Wallet</a></p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="dropdown">
                        <span><a href="bags.html">bags</a></span>
                        <div class="dropdown-content">
                            <p><a href="totebag">Tote Bag</a></p>
                            <p><a href="slingbag">Sling Bag</a></p>
                            <p><a href="backpack">Backpack</a></p>
                            <p><a href="messangerbag">Messanger Bag</a></p>
                        </div>
                    </div>
                </li>


                <li><a href="pouch.html">pouch</a></li>

                <li>
                    <div class="dropdown">
                        <span><a href="mixedleather.html">mixed leather</a></span>
                        <div class="dropdown-content">
                            <p><a href="newlongwallet">New Long Wallet</a></p>
                            <p><a href="newbifoldwallet.html">New Bifold Wallet</a></p>
                            <p><a href="newkeywallet">New Key Wallet</a></p>
                        </div>
                    </div>
                </li>


                <li><a href="others">others</a></li>
                <li><a href="sale">sale</a></li>
                <li><a href="contact">contact</a></li>

            </ul>
        </div>

        <div class="blockitem">
            <span><?php echo "create your own mighty wallet" ?></span>
        </div>

        <div class="hero">
            <div class="description-box">
                <h3><?php echo "try our (new) mixed leather" ?></h3>
                <p>
                    <?php echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione sit fugiat facere dicta inventore voluptatem nemo cum rem." ?>
                </p>
                <ul class="links-hero">
                    <li><a href="#">shop now</a></li>
                </ul>
            </div>
            <img src="images/herotas1.png" alt="">
        </div>

        <div class="main">
            <h2><?php echo "create for her . create for you" ?></h2>

            <div class="container">
                <div class="column4">
                    <img src="images/dompetibuanak.jpg" width="230">
                    <h3><a href=""><?php echo "Long Wallet" ?></a></h3>


                </div>

                <div class="column4">
                    <img src="images/dompetkartu.jpg" width="230">
                    <h3><a href=""><?php echo "Card Wallet" ?></a></h3>

                </div>

                <div class="column4">
                    <img src="images/dompetkunci.jpg" width="230">
                    <h3><a href=""><?php echo "Key Wallet" ?></a></h3>

                </div>

                <div class="column4">
                    <img src="images/dompetlong.jpg" width="230">
                    <h3><a href=""><?php echo "Long Wallet Ivana" ?></a></h3>

                </div>
                <div style="clear: both;"></div>


            </div>

            <div class="hero">
                <div class="description-box-left">
                    <h3><?php echo "ready stock leather bag" ?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione sit fugiat facere dicta inventore voluptatem nemo cum rem.</p>
                    <ul class="links-hero">
                        <li><a href="#">shop now</a></li>
                    </ul>
                </div>
                <img src="images/bag-hero.png" alt="" </div>
            </div>

            <footer>
                
                <div class="footer-container">

                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>

                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>                      
                    </span>

                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook-square fa-stack-1x fa-inverse"></i>                 
                    </span>
                </div>
                
                <div class="copyright">
                    Copyright © 2016 dompethandmade
                </div>
            </footer>

</body>

</html>