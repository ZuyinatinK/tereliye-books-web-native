<!DOCTYPE html>
<html lang="en">
<?php
    require_once('koneksi.php');
    require_once('fungsi.php');

    $id_artikel = $_GET['id'];

    $sql = "SELECT tb_artikel.tanggal, tb_artikel.judul, tb_artikel.isi,
             tb_artikel.gambar, tb_kategori.nama, tb_pengguna.namalengkap
             FROM tb_artikel, tb_kategori, tb_pengguna, tb_kontribusi 
             WHERE tb_artikel.id=tb_kontribusi.artikel 
             AND tb_kategori.id=tb_kontribusi.kategori 
             AND tb_pengguna.id=tb_kontribusi.penulis
             AND tb_kontribusi.id='$id_artikel'";

    $data_artikel = query_artikel($sql);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/weblayout.css">
    <link rel="stylesheet" href="css/rensponsive.css">
    <title>Tere Liye Books Web</title>
</head>
<body>
    <!--Bagian Navigasi-->
    <div class="navigasi">
        <h1 class="judulweb">Tere Liye Books Web</h1>
        <div class="menunavigasi">
            <ul>
                <li><a href="weblayout2.php">Home</a></li>
                <li><a href="kategori.php">Kategori</a></li>
                <li><a href="kelola/loginform.php">Login Admin</a></li>
            </ul>
        </div>
    </div>
    <!--Akhir Navigasi-->

    <!--Pembungkus halaman web-->
    <div class="pembungkus">
        <!--Bagian Header-->
        <div class="header">
        <img src="image/perpus.jpg" alt="gambar header" width="100%"
            height="auto">
        </div>        
        <!--Akhir Header-->

        <!--Bagian Konten-->
        <div class="konten">
        <?php foreach($data_artikel as $da): ?>
            <h1 class="judulartikel"> <?php echo $da ['judul'] ?> </h1>
            <p class="tanggalposting"> <?php echo $da ['tanggal'] ?></p>
            <div class="isiartikel">
            <img src= "<?php echo $da ['gambar'] ?>" 
            class = "gambarisiartikel">
                <p><?php echo $da ['isi'] ?></p>
            </div>
        </div>
        <?php endforeach?>
        <!--Bagian Akhir Konten-->

        <!--Bagian Footer-->
        <div class="footer">
            <p>Copyright &copy;2021 Tere Liye Books Web</p>
        </div>
        <!--Akhir Bagian Footer-->

    </div>
    <!--Akhir Navigasi-->
</body>
</html>