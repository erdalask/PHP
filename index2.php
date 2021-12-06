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





        eklerken resim de eklenenecek -tamam
        listede resim gözükecek-tamam
        resimler klasörüne kaydedilecek-tamam
        resim boyutu 1000x1000-tamam




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
                            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="dark-blue-text"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="girisyap.php">Giriş Yap</a>
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
            <section class="col-lg-6 mb-lg-0 mb-5">
                <div class="tm-intro">

                    <head>
                        <style> 
                            input[type=text] {
                              width: 100%;
                              padding: 12px 20px;
                              margin: 8px 0;
                              box-sizing: border-box;
                              border: 1px solid #555;
                              outline: none;
                          }

                          input[type=text]:focus {
                              background-color: lightblue;
                          }

                          input[type=number] {
                              width: 100%;
                              padding: 12px 20px;
                              margin: 8px 0;
                              box-sizing: border-box;
                              border: 1px solid #555;
                              outline: none;
                          }

                          input[type=number]:focus {
                              background-color: lightcoral;
                          }


                          input[type=mail] {
                              width: 100%;
                              padding: 12px 20px;
                              margin: 8px 0;
                              box-sizing: border-box;
                              border: 1px solid #555;
                              outline: none;
                          }

                          input[type=mail]:focus {
                              background-color: lightblue;
                          }


                          input[type=date] {
                              width: 100%;
                              padding: 12px 20px;
                              margin: 8px 0;
                              box-sizing: border-box;
                              border: 1px solid #555;
                              outline: none;
                          }

                          input[type=date]:focus {
                              background-color: lightblue;
                          }
                      </style>



                  </head>
                  <form action="index2.php" method="POST">


                    Ad Soyad <input type="text"  name="name" placeholder="Adınızı giriniz:" >

                    <br>  <br>

                    Telefon <input type="number" name="tel" placeholder="Telefon giriniz:">

                    <br> <br>

                    E-Posta <input type="mail" name="mail" placeholder="E-Posta giriniz:">

                    <br> <br>

                    Cari Kart Kodu <input type="number" name="cck" placeholder="Cari Kart Kodunuzu girin:">

                    <br> <br>

                    Olusturma Tarihi <input type="date" name="createdate" >

                    <br> <br>

                    Şifre <input type="password" name="sifre" >

                    <br> <br>

                    Fotoğraf <input type="file" id="foto" name="foto" accept="foto/*">
                    <br> <br> <br>

                    <input type="submit" class="button" value="Ekle" name="aa" >

                    <input type="submit" class="button" value="Listele" name="bb">



                    <!--    <input type="submit" class="button" value="Sil" name="sil">  -->



                </form>

                <form action="guncelle.php" method="POST">

                    <br>  <br>




                </form>





                <?php



            //$homepage = file_get_contents("https://devoduyo.oduyo.com.tr/oduyo_bin.php");
            // echo $homepage;













                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['aa']))
                {
                    func();
                }
                elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['bb']))
                {

                    func2();
                }
                elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sil']))
                {

                    func3();
                }





                function func()
                {
                    if ($_POST) 
                    {

                        $a=$_POST['name'];
                        $b=$_POST['tel'];
                        $c=$_POST['mail'];
                        $d=$_POST['cck'];
                        $e=$_POST['createdate'];
                        $g=$_POST['sifre'];
                        $j=$_POST['foto'];

                        $h=md5($g);

                        $f=date("Y/m/d/h/i/sa");

                        $servername = "127.0.0.1";
                        $username = "root";
                        $password="";
                        $database = "customer_list";
                        $port = 3306;

                        $con = mysqli_connect($servername,$username,$password, $database, $port);



                        if (!$con) {
                            die ("Connection failed: " . mysqli_connect_error());
                        }
    //var_dump($con);

                        $sql = "INSERT INTO customer_list (ad_soyad,telefon,e_posta,cari_kart_kodu,olusturma_tarihi,guncelleme_tarihi,sifre,foto) VALUES('$a','$b','$c','$d','$e','$f','$h','$j')";

    //var_dump($sql);

                        if (mysqli_query($con,$sql))
                        {
                            echo "baglandi";
                            echo "<br>";
                            echo "<br>";

                        }

                        else
                        {
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }




                    }    
                }




                function func2()
                {

                    $servername = "127.0.0.1";
                    $username = "root";
                    $password="";
                    $database = "customer_list";
                    $port = 3306;
                    $con = mysqli_connect($servername,$username,$password, $database, $port);

                    $sql = "SELECT ad_soyad,id,telefon,e_posta,cari_kart_kodu,olusturma_tarihi,guncelleme_tarihi,foto FROM customer_list";


                    $result =$con->query($sql);




                    ?>
                    <html>
                    <head>
                        <style>
                            table {
                              border-collapse: collapse;
                              width: 100%;
                          }

                          th, td {
                              padding: 8px;
                              text-align: left;
                              border-bottom: 1px solid #DDD;
                          }

                          tr:hover {background-color: darkred;}
                      </style>
                  </head>



                  <?php




                  echo "<table>";
                  echo "<tr>";
                  echo "<th>Ad ve Soyad</th>";  
                  echo "<th>Telefon</th>";
                  echo "<th>E-Posta</th>";
                  echo "<th>Cari Kart Kodu</th>";
                  echo "<th>Olusturma Tarihi</th>";
                  echo "<th>Guncelleme Tarihi</th>";
                  echo "<th>İslemler</th>";
                  echo "<th>Fotoğraf</th>";
                  echo "</tr>";








                  $count=0;

                  while($row = $result->fetch_assoc()) 
                  {   




                    if ($count%2==0)
                    {

                        $tdStyle='background-color:grey;';

                        echo "<tr>";
                        echo "<td style=\"$tdStyle\">".$row['ad_soyad']."</td>";
                        echo "<td style=\"$tdStyle\">".$row['telefon']."</td>";
                        echo "<td style=\"$tdStyle\">".$row['e_posta']."</td>";
                        echo "<td style=\"$tdStyle\">".$row['cari_kart_kodu']."</td>";
                        echo "<td style=\"$tdStyle\">".$row['olusturma_tarihi']."</td>";
                        echo "<td style=\"$tdStyle\">".$row['guncelleme_tarihi']."</td>";
                        echo "<td style=\"$tdStyle\"> <a href ='guncelle.php?cariid=".$row['id']."'> Güncelle </a> </td>" ;
                        echo "<td style=\"$tdStyle\"> <img src = ".$row['foto']." width=200 height=200 ></td>";
                        echo "</tr>";





                    }



                    elseif($count%2==1)
                    {   




                        echo "<tr>";
                        echo "<td> $row[ad_soyad]</td>";
                        echo "<td> $row[telefon]</td>";
                        echo "<td> $row[e_posta]</td>";
                        echo "<td> $row[cari_kart_kodu]</td>";
                        echo "<td> $row[olusturma_tarihi]</td>";
                        echo "<td> $row[guncelleme_tarihi]</td>";
                        echo "<td style=\"$tdStyle\"> <a href ='guncelle.php?cariid=".$row['id']."'> Güncelle </a> </td>" ;
                        echo "<td><img src = $row[foto] width=200 height=200 /> </td>";
                        echo "</tr>";




                    }


                    echo "<br>";
        // echo "<td>". $row["ad_soyad"]."</td>";

                    $count++;
                }


                echo "</table>";








                mysqli_close($con);

            }






/*

    function func3()
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

            $con = mysqli_connect($servername,$username,$password, $database, $port);



            $sql = "DELETE FROM customer_list WHERE id=0000000123";


                mysqli_close($con);

}}
*/









?>





<?php

$json_url = "https://devoduyo.oduyo.com.tr/oduyo_bin.php";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
  }

  #myInput {
      background-image: url('/css/searchicon.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
  }

  #myTable {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 18px;
  }

  #myTable th, #myTable td {
      text-align: left;
      padding: 12px;
  }

  #myTable tr {
      border-bottom: 1px solid #ddd;
  }

  #myTable tr.header, #myTable tr:hover {
      background-color: #f1f1f1;
  }
</style>
</head>
<body>

   <input type="text" id="myInput" placeholder="Ara.." title="arama yapın" autocomplete="off"/>

   <table id="myTable">
      <thead>
        <tr>
          <th>Id</th>
          <th><pre></pre></th>
          <th>Bin</th>
          <th><pre></pre></th>
          <th>Tür</th>
          <th><pre></pre></th>
          <th>Banka Adı</th>
          <th><pre></pre></th>
          <th>Type</th>
          <th><pre></pre></th>
          <th>Ad</th>
          <th><pre></pre></th>
          <th>Oluşturma Tarihi</th>
          <th><pre></pre></th>
          <th>Değiştirme Tarihi</th>
      </tr>
  </thead>
</tbody>





<?php

foreach($data as $record) 
{




    echo "<tr>";
    echo "<td>" .$record["id"]. "<td>";
    echo "<td>" .$record["bin"]. "<td>";
    echo "<td>" .$record["tur"]. "<td>";
    echo "<td>" .$record["banka_adi"]. "<td>";
    echo "<td>" .$record["type"]. "<td>";
    echo "<td>" .$record["name"]. "<td>";
    echo "<td>" .$record["created_at"]. "<td>";
    echo "<td>" .$record["updated_at"]. "<td>";
    echo "</tr>";

}



echo "</table>";


?>

<script>

  window.addEventListener("load", () => 
  {
      document.getElementById("myInput").addEventListener("input", e =>
      {
        const filter = e.target.value.toUpperCase()
        document.querySelectorAll("#myTable tbody tr")
        .forEach(row =>
        {
            console.log(filter, row.cells[0].textContent, row.cells[2].textContent, row.cells[4].textContent, row.cells[6].textContent, row.cells[8].textContent, row.cells[10].textContent)

            row.hidden = filter && !row.cells[0].textContent.toUpperCase().includes(filter)  && !row.cells[2].textContent.toUpperCase().includes(filter) && !row.cells[4].textContent.toUpperCase().includes(filter) && !row.cells[6].textContent.toUpperCase().includes(filter) && !row.cells[8].textContent.toUpperCase().includes(filter) && !row.cells[10].textContent.toUpperCase().includes(filter)
        })
    })
  })
</script>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
<script src="js/tooplate-script.js"></script>
<script>
    $(document).ready(function () {
        $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
        $('#parallax-2').parallax({ imageSrc: 'img/biz-oriented-footer.jpg' });
    });
</script>

</body>

</html>