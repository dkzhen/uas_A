<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <style>
        body {
            background-color: bisque;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        button {
            color: red;
            background-color: aquamarine;
            margin: 0px;
            padding: 5px;
            border-radius: 10px;
        }

        button:hover {
            cursor: pointer;
            background-color: azure;
            color: blue;
        }

        a,
        .view {
            background-color: transparent;
            margin-right: 10px;
            text-decoration: none;
            color: red;
        }

        a,
        .view:hover {
            color: blue;
        }

        .kuning {
            background-color: yellow;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <form action="insert.php" method="POST">
        <table border="0" cellpadding="20" cellspacing="5" align="center" bgcolor="salmon">
            <tr>
                <td colspan="3" bgcolor="blue" align="center">
                    <font face="times new roman" size="5" color="white">Form Input Nilai Mahasiswa</font>
                </td>
            </tr>
            <tr>
                <td>Nis</td>
                <td>:</td>
                <td><input type="text" name="nis" maxlength="11" size="40" required="required" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" maxlength="40" size="40" /></td>
            </tr>
            <tr>
                <td>Jenis Kursus</td>
                <td>:</td>
                <td><input type="text" name="jenisKursus" maxlength="40" size="40" /></td>
            </tr>
            <tr>
                <td>Biaya Kursus</td>
                <td>:</td>
                <td><input type="text" name="biayaKursus" size="40" placeholder="Rp." /></td>
            </tr>
            <tr>
                <td>Jumlah Angsuran</td>
                <td>:</td>
                <td><select name="jumlahAngsuran">
                        <option>Pilih Angsuran</option>
                        <option value="3">3 Bulan</option>
                        <option value="6">6 Bulan</option>
                        <option value="12">12 Bulan</option>
                    </select></td>
            </tr>
            <tr class="kuning" bgcolor="yellow">
                <td align="right" colspan="3"><a class="view" href="view.php">Lihat Data</a>
                    <button type="submit" name="submit">Simpan</button>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
    </form>
</body>

</html>