<?php 
    require_once('koneksi.php');
    require_once('fungsi.php');

    $nama = $_POST['namakategori'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO tb_kategori(nama, keterangan) VALUES ('$nama', '$keterangan')";

    $hasil = insert($sql);

    if($hasil) {
        echo "Kategori $nama berhasil disimpan...";
    }

?>