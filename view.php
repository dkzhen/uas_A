<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <style>
        .flex {
            width: auto;
            background-color: blue;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            cursor: pointer;
            color: red;

        }

        .flex h1 {
            display: flex;
            flex-direction: row;
            margin-left: 20px;
            padding-left: 500px;
            padding-right: 500px;
        }
        .delete {
            text-decoration: none;
            color: blue;
        }
        .delete:hover{
            color:red;
        }
    </style>
</head>

<body>
    <table bgcolor="salmon" align="center" border=1 cellpadding="20" cellspacing="5">
        <tr>
            <td colspan="10" class="flex" <font face="times new roman" size="3"><a href="input.php">+ Tambah Data</a>
                <h1>
                    <font face="times new roman" size="5" color="white">Daftar Nilai Mahasiswa</font>
                </h1>
            </td>
        </tr>
        <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kursus</th>
            <th>Biaya Kursus</th>
            <th>Jumlah Angsuran</th>
            <th>Nilai Angsuran</th>
            <th>Potongan 5%</th>
            <th>Total Bayar</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM angsuran");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $no++ . "." ?></td>
                <td><?= $data['nis']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['jkursus']; ?></td>
                <td><?= "Rp.".$data['biaya']; ?></td>
                <td><?= $data['jml']." "."Bulan"; ?></td>
                <td><?= "Rp.".$data['angsuran']; ?></td>
                <td><?= "Rp.".$data['pot']; ?></td>
                <td><?= "Rp.".$data['ttbyr']; ?></td>
                <td><a class="delete" href="delete.php?nis=<?= $data['nis']; ?>">delete</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>