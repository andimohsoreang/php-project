<?php

$tglpemesanan = $_POST['tgl_pemesanan'];
$namalengkap = $_POST['nama_lgkp'];
$noidentitas = $_POST['identitas'];
$tipekamar = $_POST['tipe_kamar'];
$durasitinggal = $_POST['wktu_menginap'];
$deluxe = 300000;
$superior = 650000;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php



            echo "Tanggal Pemesanan Kamar Anda : &nbsp". $tglpemesanan."<br><br>";
            echo "Nama Lengkap Anda            :". $namalengkap."<br><br>";
            echo "Nomor Identitas Anda         :".$noidentitas."<br><br>";
            echo "Tipe Kamar yang anda pilih   :".$tipekamar."<br><br>";
            echo "Durasi Anda Menginap adalah  :".$durasitinggal ."Malam <br><br>";
            echo "Total Bayar :";
            if($tipekamar == "Deluxe"){
                $total_biaya = $deluxe * $durasitinggal;
                echo "Rp. &nbsp".$total_biaya;
            }elseif($tipekamar ==    "Superior"){
               $total_biaya = $superior * $durasitinggal;
                echo "Rp. &nbsp".$total_biaya;
            };
            
                

        ?>
