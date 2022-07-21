<?php
include 'koneksi.php';

$nis = $_GET['nis'];
mysqli_query($conn, "DELETE FROM angsuran WHERE nis='$nis'")or die(mysqli_error($coon));
?>
<script>
    document.location="view.php";
</script>