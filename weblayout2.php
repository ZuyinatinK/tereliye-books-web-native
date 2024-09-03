<!DOCTYPE html>
<html lang="en">

<?php
    require_once('koneksi.php');
    require_once('fungsi.php');
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
<?php
    //script query
    $sql = "SELECT tb_artikel.tanggal, tb_artikel.judul, tb_artikel.isi,
             tb_artikel.gambar, tb_kategori.nama, tb_pengguna.namalengkap, tb_kontribusi.id 
             FROM tb_artikel, tb_kategori, tb_pengguna, tb_kontribusi 
             WHERE tb_artikel.id=tb_kontribusi.artikel AND tb_kategori.id=tb_kontribusi.kategori 
             AND tb_pengguna.id=tb_kontribusi.penulis";

    $data_artikel = query_artikel($sql);
?>
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
            <img src="image/header.jpg" alt="gambar header" width="100%"
            height="auto">
        </div>
        <!--Akhir Header-->

        <!--Bagian Konten-->
        <div class="konten clearfix">

            <!--Bagian Kiri-->
            <div class="kiri">
                <?php foreach($data_artikel as $da): ?>
                <div class="potonganartikel">
                    <h1 class="judulartikel"> <?php echo $da ['judul'] ?> </h1>
                    <p class="tanggalposting"> <?php echo $da ['tanggal'] ?> </p>
                    <div class="isiartikel">
                        <img src= "<?php echo $da ['gambar'] ?>" 
                        class = "gambarisiartikel">
                        <p> <?php echo potong_artikel ($da ['isi'], 650) . "..."?> </p>
                    </div>

                    <div class="next">
                        <a href="weblayout.php?id=<?php echo
                        $da['id'] ?>" class="tombolselanjutnya">Selanjutnya</a>
                        </div>
                </div>
                    <?php endforeach?>
            </div>
                
            <!--Akhir Bagian Kiri-->

            <!--Bagian Kanan-->
            <div class="kanan">
                <div class="tentangkami">
                    <h1 class="judulsidebar">Tentang Kami</h1>
                    <p class="isisidebar">
                        <img src="image/ZUY.jpeg" class="gambartentangkami"> Hi! Zuyinatin Khofifah is my name. I have been actively writing about light and fun things since college.
                                I am an introverted, inquiring person, who loves reading. Reading is something I really liked since elementary school.
                                The book genres I love the most are fantasy fiction, fairy tales, and memoirs. How about you? 
                    </p>

                </div>

                <div class="artikelpopuler">
                    <h1 class="judulsidebar">Tentang Tere Liye</h1>
                    <p class="jorij"><br><i>“Bekerja keras dan selalu merasa cukup, mencintai, berbuat baik dan selalu berbagi,
                            senantiasa bersyukur serta berterima kasih, maka Ia percaya bahwa kebahagiaan itu sudah berada di genggaman kita”.</i></p>

                </div>
            </div>
            <!--Akhir Bagian Kanan-->


        </div>
        <!--Bagian Akhir Konten-->

        <!--Bagian Footer-->
        <div class="footer">
            <p>Copyright &copy;2021 Tere Liye Books Web</p>
        </div>
        <!--Akhir Bagian Footer-->

    </div>
    <!--Akhir Pembungkus-->
</body>

</html>