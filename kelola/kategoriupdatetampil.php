<?php 
    require_once('koneksi.php');
    require_once('fungsi.php');

    $id = $_POST['idkategori'];

    $sql = "SELECT id, nama, keterangan FROM tb_kategori WHERE id=$id";

    $data_kategori_terpilih = querry_terpilih($sql);

    echo json_encode($data_kategori_terpilih);

?>