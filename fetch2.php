<?php
//fetch2.php


$connect = mysqli_connect("localhost", "root", "", "customer_list");
$request = mysqli_real_escape_string($connect, $_POST['query']);
$query = "SELECT * FROM customer_list WHERE ad_soyad LIKE '%$request%' OR telefon  LIKE '%$request%' OR  e_posta  LIKE '%$request%' OR  cari_kart_kodu  LIKE '%$request%' OR  olusturma_tarihi  LIKE '%$request%' OR  guncelleme_tarihi  LIKE '%$request%'";

$result = mysqli_query($connect, $query);



$data = array();

if(mysqli_num_rows($result) > 0)
{

	while($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row["ad_soyad"];
		$data[] = $row["telefon"];
		$data[] = $row["e_posta"];
		$data[] = $row["cari_kart_kodu"];
		$data[] = $row["olusturma_tarihi"];
		$data[] = $row["guncelleme_tarihi"];


	}
	echo json_encode($data);
}

?>

