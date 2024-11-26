<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>halaman anggota</title>

</head>
<body>
    <h2>edit data</h2>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data1 = mysqli_query($koneksi,"SELECT * FROM tb_guru WHERE id = '$id'");
    while($d =mysqli_fetch_array($data1)){
    ?>
        <form action="update.php" method="post">
        <table>
            <tr>
                <td>Id</td>
                <td><input type="text" name="id" value="<?php echo $d['id'];?>"></td>
           </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $d['nama'];?>"></td>
           </tr>
           <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat'];?>"></td>
            </tr>
           <tr>
                <td>NIP</td>
                <td><input type="text" name="NIP" value="<?php echo $d['NIP'];?>"></td>
            </tr>
    
           <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
         <?php
             }
          ?>

        </table>
    </form>
</body>
</html>