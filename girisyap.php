<!DOCTYPE html>
<html lang="en">

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
                            <li class="nav-item active">
                                <a class="nav-link tm-nav-link" href="#">Giriş Yap <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="ara.php">Ara</a>
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
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                form {border: 3px solid #f1f1f1;}

                input[type=text], input[type=password] {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;
                }

                button {
                    background-color: #04AA6D;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                }

                button:hover {
                    opacity: 0.8;
                }

                .cancelbtn {
                    width: auto;
                    padding: 10px 18px;
                    background-color: #f44336;
                }

                .imgcontainer {
                    text-align: center;
                    margin: 24px 0 12px 0;
                }

                img.avatar {
                    width: 40%;
                    border-radius: 50%;
                }

                .container {
                    padding: 16px;
                }

                span.psw {
                    float: right;
                    padding-top: 16px;
                }

                @media screen and (max-width: 300px) {
                    span.psw {
                        display: block;
                        float: none;
                    }
                    .cancelbtn {
                        width: 100%;
                    }
                }
            </style>
        </head>
        <body>

            <h2 style="position: absolute;left:329px;top:872px;">Giriş Yapın</h2>

            <form action="girisyap.php" method="post">
                <div class="imgcontainer">

                </div>

                <div class="container">
                    <label for="uname"><b>Ad-Soyad</b></label>
                    <input type="text" placeholder="Ad Soyad girin..." name="uname" id="uname" required>

                    <label for="psw"><b>Şifre</b></label>
                    <input type="password" placeholder="Şifre girin..." name="psw" id="psw" required>


                    <button type="submit">Giriş Yap</button>

                </div>

                <div class="container" style="background-color:#f1f1f1">



                </div>






                <?php




                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['uname']) and isset($_POST['psw']) )
                {

                    func1($_POST['uname'] and $_POST['psw']);


                }



                    /*

            
                    







                    */


                    function func1()
                    {

                        $servername = "127.0.0.1";
                        $username = "root";
                        $password="";
                        $database = "customer_list";
                        $port = 3306;
                        $con = mysqli_connect($servername,$username,$password, $database, $port);

                        $aramasonucu = $_POST['uname'];
                        $aramasonucu2 = $_POST['psw']; //kulanıcının girdiği şifre
                        $abc =  md5($aramasonucu2); //kulanıcı girdiği şifresinin md5 hali


                        $sql="SELECT * FROM customer_list WHERE ad_soyad  LIKE '%$aramasonucu%' AND  sifre = '$abc'";
                        $result=$con->query($sql);
                        //$row1=$result->fetch_assoc();

                        


                        if ($aramasonucu2 = $abc)
                        {

                            ?>
                            <html>
                            <head>
                                <style>
                                    table {
                                      border-collapse: collapse;
                                      width: 180%;
                                  }

                                  th, td {
                                      padding: 12px;
                                      text-align: left;
                                      border-bottom: 2px solid #DDD;
                                  }

                                  tr:hover {background-color: lightblue;}
                              </style>
                          </head>



                          <?php



                          if($row=$result->fetch_assoc())
                          {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>Ad ve Soyad</th>";  
                            echo "<th>Telefon</th>";
                            echo "<th>E-Posta</th>";
                            echo "<th>Cari Kart Kodu</th>";
                            echo "<th>Olusturma Tarihi</th>";
                            echo "<th>Guncelleme Tarihi</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td> $row[ad_soyad]</td>";
                            echo "<td> $row[telefon]</td>";
                            echo "<td> $row[e_posta]</td>";
                            echo "<td> $row[cari_kart_kodu]</td>";
                            echo "<td> $row[olusturma_tarihi]</td>";
                            echo "<td> $row[guncelleme_tarihi]</td>";
                            echo "</tr>";


                        }  

                        else 
                        {
                            echo "Yanlış şifre girdiniz!";
                        }  
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
                    $('#parallax-3').parallax({ imageSrc: 'img/biz-oriented-footer-2.jpg' });
                });
            </script>
        </body>
        </html>