<!DOCTYPE html>
<html lang="en">

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
<script src="js/tooplate-script.js"></script>
<script>
    $(document).ready(function () {
        $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
        $('#parallax-3').parallax({ imageSrc: 'img/biz-oriented-footer-2.jpg' });
    });
</script>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EA DEMO</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" /> <!-- https://fonts.google.com/ -->    
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
                                <a class="nav-link tm-nav-link" href="girisyap.php">Giriş Yap</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link tm-nav-link" href="ara.php">Ara <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="guncelle.php">Güncelle</a>
                            </li>
                        </ul>                        
                    </div>                        
                </nav>                    
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-7">
    <div class="row mb-6">
        <div class="col-lg-7 mb-lg-0 mb-5 pr-lg-5">
            <section class="mb-10">

            </section>
        </div>
        <!DOCTYPE html>
        <html>
        <head>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        </head>
        <body>
            <br /><br/>
            <div class="container" style="width:900px;">

                <br /><br/>
                <label>Arama Yapın</label>

                <form action="ara.php" method="POST" >

                    <input type="text" name="data" id="data" class="form-control input-lg" autocomplete="off" placeholder="Ara..." />


                </form>

            </div>
        </body>
        </html>




        <script>




            $(document).ready(function()
            {

                $('#data').typeahead({
                    source: function(query, result)
                    {
                        $.ajax(
                        {
                            url:"fetch.php",
                            method:"POST",
                            data:{query:query},
                            dataType:"json",
                            success:function(data)
                            {

                                result($.map(data, function(item)
                                {
                                    return item;

                                }));
                            }
                        })
                    }
                });

            });
        </script>


        <?php

        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['data']))
        {

            func1($_POST['data']);
        }




        function func1()
        {



            $servername = "127.0.0.1";
            $username = "root";
            $password="";
            $database = "customer_list";
            $port = 3306;


            $aramasonucu = $_POST['data'];
            $con = mysqli_connect($servername,$username,$password, $database, $port);
            $sql="SELECT * FROM customer_list WHERE ad_soyad  LIKE '%$aramasonucu%' OR  telefon  LIKE '%$aramasonucu%' OR  e_posta  LIKE '%$aramasonucu%' OR  cari_kart_kodu  LIKE '%$aramasonucu%' OR  olusturma_tarihi  LIKE '%$aramasonucu%' OR  guncelleme_tarihi  LIKE '%$aramasonucu%'";

            $result =$con->query($sql);


            ?>
            <html>
            <head>
                <style>
                    table {
                      border-collapse: collapse;
                      width: 120%;
                  }

                  th, td {
                      padding: 8px;
                      text-align: left;
                      border-bottom: 1px solid #DDD;
                  }

                  tr:hover {background-color: #D6EEEE;}
              </style>
          </head>



          <?php


          echo "<table>";
          echo "<tr>";
          echo "<th>Ad ve Soyad</th>";  
          echo "<th>Telefon</th>";
          echo "<th>E-Posta</th>";
          echo "<br>";
          echo "<th>Cari Kart Kodu</th>";
          echo "<th>Olusturma Tarihi</th>";
          echo "<th>Guncelleme Tarihi</th>";
          echo "</tr>";

          while($row=$result->fetch_assoc())
          {
            echo "<tr>";
            echo "<td> $row[ad_soyad]</td>";
            echo "<td> $row[telefon]</td>";
            echo "<td> $row[e_posta]</td>";
            echo "<td> $row[cari_kart_kodu]</td>";
            echo "<td> $row[olusturma_tarihi]</td>";
            echo "<td> $row[guncelleme_tarihi]</td>";
            echo "</tr>";


        }    


    }




    ?>




</body>
</html>

