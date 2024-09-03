<?php
    function query_artikel($sql) {
        global $koneksi;
        $hasil_query = mysqli_query($koneksi, $sql);
        $articles = array();
        while($data_artikel = mysqli_fetch_assoc($hasil_query)){
            $articles[] = $data_artikel;
        }
        return $articles;
    }

    function potong_artikel($teks, $jml_karakter){
        while($teks[$jml_karakter-1] != " "){
            --$jml_karakter;
        }
        return substr($teks, 0, $jml_karakter);
    }
?>