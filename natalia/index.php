<?php include 'koneksi.php';?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>NatBootstrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="natboostrap.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php

//$sql = "SELECT id, name, job,address FROM biodata";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
////    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. "<br>";
//        echo "Name: " . $row["name"]. "<br> ";
//        echo "job:". $row["job"]. "<br>";
//        echo "address:". $row["address"]. "<br>";
//}
//} else {
//    echo "0 results";
//}
//    
//$conn->close();
?>
            <div class="container">
                <div class="jumbotron">
                    <img src="Little-Hands-Art-and-Craft2.jpg" width="1020" height="500" padding="10 10 10 10">
<!--                    <h1 class="titleheader">Welcome to Art and Craft world</h1>-->
                    <h2><img src="redbuterfly.gif" width="200" height="80">Art is creative.... Art is fun... 
      <img src="anibutterfly21.gif" width="200" height="80"></h2>
                </div>
                <div class="header">
                    <div class="logo">
                        <!--                        <li>-->
                        <!--                            <p>-->
                        <a href=""><img src="facebook-logo.png" width=50px text-align=left></a>
                        <!--                            </p>-->
                        <!--                        </li>-->
                        <!--                        <li>-->
                        <!--                            <p>-->
                        <a href=""><img src="social_twitter_button_blue.png" width=50px></a>
                        <!--                            </p>-->
                        <!--                        </li>-->
                    </div>
                    <div class="navigasi">
                        <!--        <li>-->
                        <div class="dropdown">
                            <span>Home</span>
                            <div class="dropdown-contain">
                                <p><a href="index.php">About us</a></p>
                            </div>
                        </div>
                        <!--        </li>    -->
                        <!--        <li>-->
                        <div class="dropdown">
                            <span>Do it Yourself</span>
                            <div class="dropdown-contain">
                                <p><a hreft="">DIY Party</a></p>
                                <p><a hreft="">DIY toys</a></p>
                            </div>
                        </div>
                        <!--        </li>    -->
                        <!--        <li>-->
                        <div class="dropdown">
                            <span>Art supplies</span>
                            <div class="dropdown-contain">
                                <p><a href="ArtSupplies.php">Ribbon and Lace</a></p>
                            </div>
                        </div>
                        <!--        </li>    -->
                        <!--    </ul>-->
                        <!--    <ul class="search">-->
                        <!--    </ul>-->
                    </div>
                    <div class="search">
                        <form NAME="myform" ACTION="" METHOD=""><img src="search_icon.png" text-align=right width=40px:<br>
                            <input type="text" NAME="inputbox" value="">
                            </input>
                        </form>
                    </div>
                </div>
<!--                <div class="container">-->
                    <div class="row">
                        <div class="col-sm-4 bg-pink center">
                            <h3>Lace</h3>
                            <br></br>
                            <img src="original_crochet-metallic-lace.jpg" width="260">
                        </div>
                        <div class="col-sm-4 bg-blue center">
                            <h3>DIY Party</h3>
                            <br></br>
                            <img src="Party%20flag.jpg" width="355">
                        </div>
                        <div class="col-sm-4 bg-pink center">
                            <h3>DIY Decoration</h3>
                            <br></br>
                            <img src="craft1.jpg" width="260">
                        </div>
                    </div>
<!--                </div>-->
<!--                <div class="container">-->
                    <div class="row">
                        <div class="col-sm-4 bg-blue center">
                            <h3>Ribbon</h3>
                            <br></br>
                            <img src="Ribbon.jpg" width="260">
                        </div>
                        <div class="col-sm-4 bg-pink center">
                            <h3>DIY container</h3>
                            <br></br>
                            <img src="Craft5.jpg" width="355">
                        </div>
                        <div class="col-sm-4 bg-blue center">
                            <h3>Supplies</h3>
                            <br></br>
                            <img src="art_and_craft_supplies.jpg" width="350">
                        </div>
                    </div>
<!--                </div>-->
            </div>
    </body>

    </html>