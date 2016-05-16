<?php //include 'connection.php';?>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tengah Abadi</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/dyah.css" rel="stylesheet">
    
    </head>
<body>
<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "codingmum";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//
//$sql = "SELECT id, name, job, address FROM biodata";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. "<br>";
//        echo "name: " . $row["name"]. "<br>";
//        echo "job: " . $row["job"]. "<br>";
//        echo "address: " . $row["address"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
//$conn->close();
?>
    
<!--     Start Header    -->
<div class="container bg-header" id="navigation">
    <div class="row">
    <nav class="nav col-sm-12">
        <div class="dropdown">
        <span>TERAS</span>
        </div>
        <p></p>
        <div class="dropdown">
        <span>PENGHUNI</span>
            <div class="dropdown-content">
            <p><a href="hewan.html">KUCING</a></p>
            <p><a href="tanaman.html">TANAMAN</a></p>
            </div>
        </div>
        <p></p>
        <div class="dropdown">
        <span>DAPUR</span>
            <div class="dropdown-content">
            <p><a href="kesukaan.html">KESUKAAN</a></p>
            <p><a href="resep.html">RESEP</a></p>
            </div>   
        </div>
        <p></p>
        <div class="dropdown">
        <span>KOLEKSI</span>
            <div class="dropdown-content">
            <p><a href="buku.html">BUKU</a></p>
            <p><a href="jualan.html">JUALAN</a></p>
            </div>   
        </div>
    
    </nav>
    
    <h1 class="col-sm-12">HALAMAN TENGAH ABADI</h1>
</div>

</div>
<!--    End Header-->

<!--   Start Isi-->    
<div class="container" id="main-content">
    <div class="row intro">
        <div class="col-sm-12 bg-main">
        
            <div class="scroll-left">
            <p>SELAMAT DATANG DI HALAMAN TENGAH ABADI. TEMPAT BELAJAR, BERMAIN DAN BERBAGI. MULAI DARI MEMASAK, BERKEBUN SAMPAI MAIN AIR. SILAHKAN MASUK!</p>
              
        </div>
           
        <div class="col-xl-1 middle-content">
        <p class="center">
            <ul class="top">  
        <li>
            <a href="https://www.instagram.com/lestaridy/">
            <img src="image/Instagram.png"></a>
            
        </li>
        <li>
            <a href="https://twitter.com/lestaridy">
                <img src="image/Twitter.png"></a> 
        </li>            
        <li>
            <a href="http://facebook.com/paramitadyah">
            <img src="image/Facebook%20(1).png"></a>
        </li>           
            </ul>
                
        </div>
        </div>
    </div>
    
    <div class="row product">
        <div class="col-xs-4 penghuni-content">        
        </div>
        
        <div class="col-xs-4 dapur-content"> 
        </div>   
         
        <div class="col-xs-4 koleksi-content"> 
        </div>
        
    </div>
    <div class="row product">
        <div class="col-xs-4 bg-pinggir">
            <p>
               Grumpy deskripsi pake more
            </p>   
        </div>
        <div class="col-xs-4 bg-tengah">
            <p> ini deskripsi dapur 
            </p>
        </div>    
        <div class="col-xs-4 bg-pinggir">
            <p> ini deskripsi juga</p>
        </div>
        
    </div>
</div>

<!--    End Isi-->
    
<!--    Start footer-->
<div class="container bg-hijau">Ini calon footer</div>
<!--    End footer-->
    
<!--    start JavaScript-->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<!--    End JavaScript-->
    
</body>
</html>
