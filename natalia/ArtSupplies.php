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
    <img src="Little-Hands-Art-and-Craft.jpg" width="1020" height="250" padding="10 10 10 10" </img>
      <h6 class="landing-header">Welcome to Art and Craft world <url img src="anibutterfly21.gif" width="200" height="100"></url></h6>
    <h2>World of creative and fun!!</h2> 
  </div>
<div class="header">
    <ul class="logo">
        <li>
            <p><a href=""><img src="facebook-logo.png" width=50px text-align=left></a></p></li>
        <li>
            <p><a href=""><img src="social_twitter_button_blue.png"width=50px></a></p>
        </li>
    </ul>
    <ul class="navigasi">
        <li>
        <div class="dropdown">
            <span>Home</span>
            <div class="dropdown-contain">
            <p><a href="index.php">About us</a></p>
            </div>
        </div>
        <li>
        <div class="dropdown">    
            <span>Do it Yourself</span>
            <div class="dropdown-contain">
            <p><a hreft="">DIY Party</a></p>
            <p><a hreft="">DIY toys</a>
            </div>
        <li>
            <div class="dropdown">    
            <span>Art supplies</span>
            <div class="dropdown-contain">
            <p><a href="ArtSupplies.php">Ribbon and Lace</a></p>
            </div>
         </li>    
    </ul>
</div>
  <div class="container" >
      
    </div>      
      <div class="row">         
          <div class="col-sm-3 bg-green center">
                  <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> Japanese Ribbon </INPUT><BR></BR>
              <img src="Japanese_Ribbon_YUZEN_red_1_634506889826882595_1.JPG"width="250" height="200">
         <INPUT TYPE="button" NAME="button" Value="Choose" 
onClick="testButton(this.form)"> 
          </INPUT> 
        </div>      

    <div class="col-sm-3 bg-orange center">
      <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> Plastic Ribbon </INPUT><BR></BR>
              <img src="Tie-ribbon-candy-boxes-arranged-wedding-wedding-balloon-ribbons-plastic-font-b-packaging-b-font-supplies.jpg" width="250" height="200">
     <INPUT TYPE="button" NAME="button" Value="Choose" onClick="testButton(this.form)"> 
          </INPUT>
    </div>
    <div class="col-sm-3 bg-green center">
        <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> Fabric Ribbon </INPUT><BR></BR>
              <img src="tape-dekorasi-pita-kain-aneka-motif.jpg" width="250" height="200">
         <INPUT TYPE="button" NAME="button" Value="Choose" 
onClick="testButton(this.form)"> 
          </INPUT>
    </div>
    <div class="col-sm-3 bg-orange center">
        <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> Organdy Ribbon </INPUT><BR></BR>
              <img src="Organdy.jpg" width="250" height="200">
         <INPUT TYPE="button" NAME="button" Value="Choose" 
onClick="testButton(this.form)"> 
          </INPUT>
    </div> 
  </div>
</div>
<div class="container" >
          
      <div class="row">         
          <div class="col-sm-3 bg-orange center">
        <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> Ribbon Lace </INPUT><BR></BR>
              <img src="ribbon%20lace.jpg" width="250" height="200">
         <INPUT TYPE="button" NAME="button" Value="Choose" 
onClick="testButton(this.form)"> 
          </INPUT>
    </div>   
         <div class="col-sm-3 bg-green center">
        <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> Lace Hair Ribbon </INPUT><BR></BR>
              <img src="lace-hair-ribbon.jpg" width="250" height="200">
         <INPUT TYPE="button" NAME="button" Value="Choose" 
onClick="testButton(this.form)"> 
          </INPUT>
    </div>
        <div class="col-sm-3 bg-orange center">
        <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> White Lace </INPUT><BR></BR>
              <img src="white-lace.jpg" width="250" height="200">
         <INPUT TYPE="button" NAME="button" Value="Choose" 
onClick="testButton(this.form)"> 
          </INPUT>
    </div> 
         <div class="col-sm-3 bg-green center">
        <INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick=0> Black Lace  </INPUT><BR></BR>
              <img src="black%20lace.jpg" width="250" height="200">
         <INPUT TYPE="button" NAME="button" Value="Choose" 
onClick="testButton(this.form)"> 
          </INPUT>
    </div>  
    </div>
   </div>
  </div>
 </div>  
</div>
</body>
</html>
