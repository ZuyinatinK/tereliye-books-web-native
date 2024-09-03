<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once('koneksi.php');
        require_once('fungsi.php');

        $sql = "SELECT id, nama, keterangan FROM tb_kategori";

        $data_kategori = querry($sql);
    ?>

    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php 
            $nomor_urut = 1;
            foreach($data_kategori as $item_kategori):
        ?>
        <tr>
           <td><?php echo $nomor_urut;?></td>
           <td><?php echo $item_kategori['nama'];?></td>
           <td><?php echo $item_kategori['keterangan'];?></td>
           <td>
               <button type="button" id="<?php echo $item_kategori['id']?>" 
               class="w3-button w3-green perbarui update">Update</button>
               <button type="button" id="<?php echo $item_kategori['id']?>" 
               class="w3-button w3-red hapus delete">Delete</button>
           </td>
        </tr>
        <?php 
            $nomor_urut++;
            endforeach;
        ?>
    </table>

    <!-- membuat form modal untuk update kategori -->
    <div id="formupdatekategori" class="w3-modal">
        <div class="w3-modal-content">
            <!-- header -->
            <div class="w3-container w3-aqua">
                <span onclick="document.getElementById('formupdatekategori').style.display='none'" 
                class="w3-button w3-display-topright w3-red">&times;</span>
                <h4 class="w3-center">Update Kategori</h4>
            </div>
            <!-- form -->
            <div style="font-size: 12px;" class="w3-container">
                <form id="formkategoriupdate" method="POST">
                    <label for="idupdate">ID Kategori</label>
                    <input type="text" readonly id="idupdate" name="idupdate" 
                    class="w3-input w3-border w3-margin-bottom w3-light-grey w3-text-red idupdate">

                    <label for="namaketegoriupdate">Nama Kategori</label>
                    <input type="text" id="namakategoriupdate" name="namakategoriupdate" 
                    class="w3-input w3-border w3-margin-bottom namakategoriupdate"
                    placeholder="Masukkan nama kategori...">

                    <label for="keteranganupdate">Keterangan</label>
                    <input type="text" id="keteranganupdate" name="keteranganupdate" 
                    class="w3-input w3-border w3-margin-bottom keteranganupdate"
                    placeholder="Masukkan keterangan...">
                </form>
            </div>
            <!-- button -->
            <div style="font-size: 12px;" class="w3-container w3-border-top w3-light-grey w3-padding">
                <span class="w3-right">
                    <button type="button" id="buttonupdate" 
                    class="w3-button w3-green buttonupdate">Update</button>
                    <button type="button" id="batalupdate" 
                    class="w3-button w3-red">Batal</button>
                </span>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
                //script untuk menghapus record atau baris kategori
                $('.delete').click(function(){
                $dataid = $(this).attr('id');
                $konfirmasi = confirm('Apakah Anda yakin data kategori terpilih akan terhapus permanen?');
                if($konfirmasi) {
                    $.ajax({
                    type: 'POST',
                    url: 'kategorihapus.php',
                    data: {idkategori:$dataid},
                    cache: false,
                    success: function(response){
                        $('#tampilkategori').load('kategoritampil.php');
                        window.alert(response);
                    }
                });
                }
            });

            // script untuk menampilkan form dan mengisi form dengan data yang akan diupdate
            $('.update').click(function(){
                $idkategoriupdate = $(this).attr('id');
                $('#formupdatekategori').show();
                $.ajax({
                    type: 'POST',
                    url: 'kategoriupdatetampil.php',
                    data: {idkategori:$idkategoriupdate},
                    dataType: 'JSON',
                    cache: false,
                    success: function(response){
                        $('#idupdate').val(response.id);
                        $('#namakategoriupdate').val(response.nama);
                        $('#keteranganupdate').val(response.keterangan);
                    }
                });
            });

            // script proses update kategori ketika buttonupdate diklik
            $('#buttonupdate').click(function(){
                var datakategoriupdate = $('#formkategoriupdate').serialize();
                $.ajax({
                    type: 'POST',
                    url: 'kategoriprosesupdate.php',
                    data: datakategoriupdate,
                    cache: false,
                    success: function(response){
                        $('#tampilkategori').load('kategoritampil.php');
                        window.alert(response);
                    }
                });
            });

            // script menutup form dengan tombol batal
            $('#batalupdate').click(function(){
                $('#formupdatekategori').hide();
            });
        });
    </script>
</body>
</html>