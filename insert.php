<?php 
include 'koneksi.php';

$nis = $_POST['nis'];
$nama =$_POST['nama'];
$jenisKursus=$_POST['jenisKursus'];
$biayaKursus =$_POST['biayaKursus'];
$jumlahAngsuran=$_POST['jumlahAngsuran'];

$nilaiAngsuran = $biayaKursus/$jumlahAngsuran;
$potongan = $biayaKursus*5/100;
$totalBayar = $biayaKursus-$potongan;

$query = "INSERT INTO angsuran VALUES ('$nis','$nama','$jenisKursus','$biayaKursus','$jumlahAngsuran','$nilaiAngsuran','$potongan','$totalBayar')"; 
    mysqli_query($conn,$query);
?>
<script>
alert('Data Berhasil dimasukkan ke database');
document.location.href="view.php";    
</script>