
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
        
            $sql = "SELECT kategori.judul, kategori.halaman, kategori.genre  FROM kategori";
            $data_kategori = query_artikel($sql);
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
        <img src="image/perpus.jpg" alt="gambar header" width="100%"
            height="auto">
        </div>        
        <!--Akhir Header-->

            <div class="konten clearfix">
                <div>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Halaman</th>
                            <th>Genre</th>
                        </tr>
                        <?php 
                            $nomor_urut = 1;
                            foreach($data_kategori as $item_kategori):
                        ?>
                        <tr>
                            <td><?php echo $nomor_urut;?></td>
                            <td><?php echo $item_kategori['judul'];?></td>
                            <td><?php echo $item_kategori['halaman'];?></td>
                            <td><?php echo $item_kategori['genre'];?></td>
                        </tr>
                        <?php 
                            $nomor_urut++;
                            endforeach;
                        ?>
                    </table>
                </div>
            </div>
            <div class="footer">
                <p>Copyright &copy;2021 Tere Liye Books Web</p>
            </div>
        </div>
    </body>
</html>