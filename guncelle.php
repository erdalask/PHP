<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EA DEMO</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" /> <!-- https://fonts.google.com/ -->    
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-business-oriented.css" rel="stylesheet" />
</head>
<!--

TemplateMo 549 Business Oriented

https://templatemo.com/tm-549-business-oriented

-->
<body>
    <div id="parallax-1" class="parallax-window" data-parallax="scroll" data-image-src="img/biz-oriented-header.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tm-logo">
                        <i class="fas fa-industry fa-5x mr-5"></i>
                        <span class="text-uppercase tm-logo-text">EA Ödüyo Demo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-nav-container-outer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                            data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="dark-blue-text"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">                            
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="index2.php">Ana Sayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="girisyap.php">Giriş yap</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="ara.php">Ara</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="guncelle.php">Güncelle <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

        Ana Sayfa

    </title>
</head>
<body>

    <?php

            //ara.php sayfası oluştur orada yazdığın sonuca göre sonuç listele



    $servername = "127.0.0.1";
    $username = "root";
    $password="";
    $database = "customer_list";
    $port = 3306;


    $con = mysqli_connect($servername,$username,$password, $database, $port);

    
    $sql = "SELECT ad_soyad,telefon,e_posta,cari_kart_kodu,olusturma_tarihi,guncelleme_tarihi FROM customer_list WHERE id='$_GET[cariid]'";
    $result =$con->query($sql);
    $row = $result->fetch_assoc();



    ?>
    


    <form action="guncelle.php" method="POST" autocomplete="on">


        Ad Soyad <input  type="text" name="name" value="<?php echo $row['ad_soyad']?>">

        <br>  <br>

        Telefon <input type="number" name="tel" value="<?php echo $row['telefon']?>">

        <br> <br>

        E-Posta <input type="mail" name="mail" value="<?php echo $row['e_posta']?>">

        <br> <br>

        Cari Kart Kodu <input type="number" name="cck" value="<?php echo $row['cari_kart_kodu']?>">

        <br> <br>

        Olusturma Tarihi <input type="date" name="createdate" value="<?php echo $row['olusturma_tarihi']?>">


        <br>  <br>

        <input type="submit" style="position: absolute;left:349px;top:1087px; class="button value="Güncelle" name="bc"> 

        
        

        
    </form>


  
    <?php






    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['bc']))
    {
        funcc();
    }
    
    
    







    function funcc() // güncelle functionu
    {


        if ($_POST) 
        {
            $a=$_POST['name'];
            $b=$_POST['tel'];
            $c=$_POST['mail'];
            $d=$_POST['cck'];
            $e=$_POST['createdate'];
            $f=date("Y/m/d/h/i/sa");
             

            
            $servername = "127.0.0.1";
            $username = "root";
            $password="";
            $database = "customer_list";
            $port = 3306;
            $con1 = mysqli_connect($servername,$username,$password, $database, $port);
            

 $sql1 = "UPDATE customer_list SET ad_soyad ='$a',telefon ='$b',e_posta ='$c',cari_kart_kodu ='$d',olusturma_tarihi ='$e',guncelleme_tarihi ='$f' WHERE ad_soyad LIKE '%$a%' OR  telefon  LIKE '%$b%' OR  e_posta  LIKE '%$c%' OR cari_kart_kodu  LIKE '%$d%' ";
            
             $result1 =$con1->query($sql1);
            

        }



        



    }







    ?>

    


</body>
</html>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
        });
    </script>
</body>
</html>