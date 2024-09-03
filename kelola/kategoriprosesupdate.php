<?php 
    require_once('koneksi.php');
    require_once('fungsi.php');

    $id = $_POST['idupdate'];
    $nama = $_POST['namakategoriupdate'];
    $keterangan = $_POST['keteranganupdate'];

    $sql = "UPDATE tb_kategori SET nama='$nama', keterangan='$keterangan' 
    WHERE id=$id";

    $hasil = update($sql);

    if($hasil) {
        echo "Kategori dengan ID=$id telah terupdate...";
    }
?>