<?php 
include 'koneksi.php';

$nis = $_POST['nis'];
$nama =$_POST['nama'];
$jkursus=$_POST['jkursus'];
$biaya=$_POST['biaya'];
$jml=$_POST['jml'];

$angsuran = $biaya/$jml;
$pot= $biaya*5/100;
$ttbyr= $biaya-$pot;

$query = "INSERT INTO angsuran VALUES ('$nis','$nama','$jkursus','$biaya','$jml','$angsuran','$pot','$ttbyr')"; 
    mysqli_query($conn,$query);
?>
<script>
alert('Data Berhasil dimasukkan ke database');
document.location.href="view.php";    
</script>
