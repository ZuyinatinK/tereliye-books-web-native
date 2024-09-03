<?php 

    session_start();

    require_once('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM tb_pengguna WHERE sapaan='$username' AND password='$password'";

    $hasil_query = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($hasil_query) > 0) {
        $data_pengguna = mysqli_fetch_assoc($hasil_query);
        $_SESSION['user'] = $data_pengguna['sapaan'];
        $_SESSION['pass'] = $data_pengguna['password'];

        echo "berhasil";
    } else{
        echo "gagal";
    }
    
?>