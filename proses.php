<?php
$tanggal = date("y-m-d");
$nama = $_POST['nama_pengirim'];
$no = $_POST['no_pengirim'];
$name = $_POST['nama_penerima'];
$nop = $_POST['no_penerima'];
$alamat = $_POST['alamat'];
$jarak = $_POST['jarak'];
$total = $_POST['jarak']*5000;

$myFiles = fopen("data.txt", "a");
fputs($myFiles, "Tanggal:$tanggal,\n");
fputs($myFiles, "Nama Pengirim:$nama,\n");
fputs($myFiles, "No Pengirim:$no,\n");
fputs($myFiles, "Nama Penerima:$name,\n");
fputs($myFiles, "No Penerima:$nop,\n");
fputs($myFiles, "Alamat:$alamat,\n");
fputs($myFiles, "Jarak:$jarak(KM),\n");
fputs($myFiles, "Total:$total|\n");
fclose($myFiles);

echo "Data Sudah Masuk";
?>