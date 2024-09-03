<?php 
    require_once('koneksi.php');
    require_once('fungsi.php');

    $id = $_POST['idkategori'];

    $sql = "DELETE FROM tb_kategori WHERE id=$id";

    $hasil = delete($sql);

    if($hasil) {
        echo "kategori berhasil dihapus...";
    }
?>