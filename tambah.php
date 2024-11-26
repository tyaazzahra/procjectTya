<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>form tambah buku</title>

</head>
<body>
    <br/>
    <a href="tambah.php">TAMBAH DATA</a>
    <br/>
    <h3>input data baru</h3>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Id</td>
                <td><input type="text" name="id"></td>
           </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
           </tr>
           <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
           <tr>
                <td>NIP</td>
                <td><input type="text" name="NIP"></td>
            </tr>
           <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>




