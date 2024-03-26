<?php

$nama = "Nadia Nur Ismalia";
$kota = "Purwokerto";
$umur = 20;
$sd = "SDN 1 Bantarwuni";
$smp = "SMPN 6 Purwokerto";
$sma = "SMAN 4 Purwokerto";
$universitas = "Universitas Amikom Purwokerto";
$prodi = "Informatika";
$semester = 6;
$email = "nadianurismalia@gmail.com";
$nohp = "089625911362";
$instagram = "@_nadiani";


$hobi = array("Menonton Film", "Membaca Novel", "Memasak");
$makananFavorit = array("Bakso", "Seblak");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodataku</title>
</head>
<body bgcolor="lightgrey">
  <h1 align="center">
    <marquee behavior="" direction="right" scrolldelay="100">
      HALLO WELCOME TO MY BIODATA
    </marquee>
  </h1>
  <p align="justify">
    Perkenalkan nama saya <?php echo $nama; ?> saya berasal dari kota <?php echo $kota; ?> yaitu salah satu 
    kota yang berada di Jawa Tengah. Saya saat ini sedang berkuliah di <?php echo $universitas; ?> 
    Program Studi <?php echo $prodi; ?> yang sedang memasuki semester <?php echo $semester; ?>. Saat ini umur saya <?php echo $umur; ?> tahun, semoga sehat selalu dan diberikan umur panjang hehe.
    Berikut dibawah ini adalah beberapa informasi terkait diri saya.
  </p>
  <fieldset>
    <legend>
      <font size="5" color="brown" face="calibri">
        Tentangku
      </font>
    </legend>
    <ol type="A">
      <li>Kontak Pribadi</li>
      <ul type="circle">
        <li> Email : <?php echo $email; ?></li>
        <li> No HP : <?php echo $nohp; ?></li>
        <li> Instagram : <?php echo $instagram; ?></li>
      </ul>
      <li>Pendidikan</li>
      <ul type="square">
        <li><?php echo $sd; ?></li>
        <li><?php echo $smp; ?></li>
        <li><?php echo $sma; ?></li>
        <li><?php echo $universitas; ?></li>
      </ul>
      <li>Hobby</li>
      <ul type="disc">
        <?php
        foreach ($hobi as $item) {
          echo "<li>$item</li>";
        }
        ?>
      </ul>
      <li>Makanan Kesukaan</li>
      <ul>
        <?php
        foreach ($makananFavorit as $item) {
          echo "<li>$item</li>";
        }
        ?>
      </ul>
    </ol>
  </fieldset>
  <marquee behavior="" direction="right" scrolldelay="100">
    <h1 align="center">
      THANK YOU AND SEE YOU
    </h1>
  </marquee>
</body>
</html>