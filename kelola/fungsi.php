<?php 
    function querry($sql){
        global $koneksi;
        $hasil_query = mysqli_query($koneksi, $sql);
        $data_hasil_query = array();
        while($record_hasil_query = mysqli_fetch_assoc($hasil_query)){
            $data_hasil_query[] = $record_hasil_query;    
        }
        return $data_hasil_query;
    }

    function insert($sql){
        global $koneksi;
        $hasil_query = mysqli_query($koneksi, $sql);
        return $hasil_query;
    }

    function delete($sql){
        global $koneksi;
        $hasil_query = mysqli_query($koneksi, $sql);
        return $hasil_query;
    }

    function querry_terpilih($sql){
        global $koneksi;
        $hasil_query = mysqli_query($koneksi, $sql);
        $data_hasil_query = array();
        while($record_hasil_query = mysqli_fetch_assoc($hasil_query)){
            $data_hasil_query['id'] = $record_hasil_query['id'];
            $data_hasil_query['nama'] = $record_hasil_query['nama'];
            $data_hasil_query['keterangan'] = $record_hasil_query['keterangan'];    
        }
        return $data_hasil_query;
    }

    function update($sql){
        global $koneksi;
        $hasil_query = mysqli_query($koneksi, $sql);
        return $hasil_query;
    }
?> 
