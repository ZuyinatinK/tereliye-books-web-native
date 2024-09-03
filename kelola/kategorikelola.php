<?php 
    session_start();
    if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])){
        header('location: loginform.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/styletabel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Kategori Kelola</title>
</head>
<body>
    <div class="wadah">
        <button type="button" onclick="document.getElementById('formtambahkategori').style.display='block'" 
        class="buttonkategoribaru">Kategori Baru</button>

        <a href="loguotaksi.php" style="margin-top: 23px;" class="w3-text-red w3 w3-right">[Logout]</a>

        <div id="tampilkategori">
        
        </div>
    </div>

    <!-- membuat form modal untuk membuat kategori baru -->
    <div id="formtambahkategori" class="w3-modal">
        <div class="w3-modal-content">
            <!-- header -->
            <div class="w3-container w3-aqua">
                <span onclick="document.getElementById('formtambahkategori').style.display='none'" 
                class="w3-button w3-display-topright w3-red">&times;</span>
                <h4 class="w3-center">Tambah Kategori</h4>
            </div>
            <!-- form -->
            <div style="font-size: 12px;" class="w3-container">
                <form id="formkategori" method="POST">
                    <label for="namaketegori">Nama Kategori</label>
                    <input type="text" id="namakategori" name="namakategori" class="w3-input w3-border w3-margin-bottom namakategori"
                    placeholder="Masukkan nama kategori...">

                    <label for="keterangan">Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="w3-input w3-border w3-margin-bottom keterangan"
                    placeholder="Masukkan keterangan...">
                </form>
            </div>
            <!-- button -->
            <div style="font-size: 12px;" class="w3-container w3-border-top w3-light-grey w3-padding">
                <span class="w3-right">
                    <button type="button" id="simpan" class="w3-button w3-green">Simpan</button>
                    <button type="button" id="batal" class="w3-button w3-red">Batal</button>
                </span>
            </div>
        </div>
    </div>

    <script>
        //script untuk menampilkan tabel kategori
        $(document).ready(function(){
            //script untuk menampilkan tabel kategori
            $('#tampilkategori').load('kategoritampil.php');

            //script untuk penyimpanan data kategori baru
            $('#simpan').click(function(){
                $datakategori = $('#formkategori').serialize();
                $.ajax({
                    type: 'POST',
                    url: 'kategoriinsert.php',
                    data: $datakategori,
                    cache: false,
                    success: function(response){
                        document.getElementById('namakategori').value="";
                        document.getElementById('keterangan').value="";
                        $('#tampilkategori').load('kategoritampil.php');
                        window.alert(response);
                    }
                });
            });

            //script untuk membatalkan tambah kategori
            $('#batal').click(function(){
                document.getElementById('namakategori').value="";
                document.getElementById('keterangan').value="";
                document.getElementById('formtambahkategori').style.display='none';
            });

        });
    </script>
</body>
</html>