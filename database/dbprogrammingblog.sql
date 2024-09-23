-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 04:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `dbprogrammingblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
    `judul` varchar(200) NOT NULL,
    `halaman` varchar(5) NOT NULL,
    `genre` varchar(300) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO
    `kategori` (`judul`, `halaman`, `genre`)
VALUES (
        'Nebula',
        '376',
        'Sains Fiksi'
    ),
    (
        'About Love',
        '128',
        'Romance'
    ),
    ('Rindu', '544', 'Sejarah'),
    (
        'Negeri Di Ujung Tanduk',
        '360',
        'Politik'
    ),
    (
        'Si Anak Kuat',
        '397',
        'Keluarga'
    ),
    ('Pulang', '406', 'Keluarga'),
    (
        'Earth',
        '368',
        'Fiksi, Petualangan'
    ),
    (
        'Ayahku Bukan Pembohong',
        '308',
        'Keluarga'
    );

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
    `id` int(11) NOT NULL,
    `tanggal` varchar(50) NOT NULL,
    `judul` varchar(200) NOT NULL,
    `isi` text NOT NULL,
    `gambar` varchar(200) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO
    `tb_artikel` (
        `id`,
        `tanggal`,
        `judul`,
        `isi`,
        `gambar`
    )
VALUES (
        1,
        'Senin, 16 Mei 2021',
        'Biografi Penulis Buku Legendaris Tere Liye',
        'Siapa yang sudah pernah membaca karya Tere Liye? Bagi sahabat yang sudah pernah baca baik sekali atau mungkin beberapa kali mambaca dari karya Tere Liye pasti akan memberikan komentar yang sama dengan saya “Bagus Banget” hehe. Nama “Tere Liye” merupakan nama pena seorang penulis berbakat tanah air. Tere Liye sendiri di ambil dari bahasa India dan memiliki arti untukmu.\r\n Meskipun Tere Liye bisa di anggap salah satu penulis yang telah banyak menelurkan karya-karya best seller. \r\n Tapi kalau anda mencari biodata atau biografi Tere Liye, Rasanya kita akan menemukan sedikit karena hampir tidak ada informasi mengenai kehidupannya serta keluarganya. Coba saja anda cek sendiri dalam novel karya Tere Liye terus lihat di bagian belakang \"tentang penulis\" di novelnya, maka tidak ada yang bisa kita temukan informasi mengenai tere liye. Berbeda dari penulis-penulis yang lain, Tere Liye memang sepertinya tidak ingin di publikasikan ke umum terkait kehidupan pribadinya. Mungkin itu cara yang ia pilih, hanya berusaha memberikan karya terbaik dengan tulus dan sederhana. Namun, dalam postingan kali ini saya akan coba sedikit berbagi terkait biografi Tere Liye. Semoga bisa menjadi referensi tambahan bagi rekan-rekan yang sedang mencari informasinya.  Tere Liye lahir dan tumbuh dewasa di pedalaman Sumatera. Ia lahir pada tanggal 21 mei 1979. Tere Liye menikah \r\n                        dengan Ny.Riski Amelia dan di karunia seorang putra bernama Abdullah Pasai. Seperti di sebutkan di atas, Tere Liye \r\n                        tumbuh di Sumatera Pedalaman. Ia berasal dari keluarga sederhana yang orang tuanya berprofesi sebagai petani biasa. \r\n                        Anak ke enam dari tujuh bersaudara ini sampai saat ini telah menghasilkan 14 karya. Bahkan beberapa di antaranya \r\n                        telah di angkat ke layar lebar. Berdasarkan email yang di jadikan sarana komunikasi dengan para penggemarnya yaitu \r\n                        darwisdarwis@yahoo.com. Bisa di simpulkan sederhana bahwa namanya adalah Darwis. <br> <br>',
        'image/Darwinn.jpg'
    ),
    (
        2,
        'Selasa, 17 Mei 2021',
        'Novel \"Moon\" Tere Liye',
        '<p>Buku Novel Bulan karya Tere Liye ini merupakan buku kedua dari serial novel Bumi.\r\n                        Jika di novel Bumi menceritakan petualangan di klan Bulan, maka novel Bulan ini\r\n                        menceritakan petualangan di klan Matahari.Masih tentang kisah petualangan tiga\r\n                        remaja tangguh Raib, Seli, dan Ali. Namun kali ini ada tambahan tokoh yakni ILY\r\n                        dan tokoh lainnya. Ily merupakan putra sulung dari Ilo, ily lulusan akademi klan\r\n                        bulan dengan postur tubuh gagah dan sangat disiplin. Wajahnya amat tampan, dengan\r\n                        bola mata hitam. Ily murah senyum dan dalam senyumnya itu ada lesung pipi yang\r\n                        membuat ily terlihat manis. Awalnya, kedatangan Av, miss selena, Raib, Seli, Ali,\r\n                        dan Ily hanya untuk mencari sekutu dalam menjaga perdamaian dunia antar klan serta\r\n                        menjaga agar si Tanpa Mahkota tetap di tempatnya, yakni penjara bayangan di bawah\r\n                        bayangan. Namun, ketua konsil klan matahari, Fala-tara-tana IV justru memanfaatkan\r\n                        mereka untuk menambah kekuatan sang ketua. Yakni dengan mengikutsertakan Raib,\r\n                        Seli, Ali, dan Ily dalam kompetisi mencari bunga matahari yang pertama mekar pada\r\n                        hari ke 10 sejak kompetisi itu di mulai. Keluar dari portal, mereka langsung\r\n                        di sambut sorak sorai para penonton di tribun. Mereka datang percis saat pembukaan\r\n                        acara festival bunga matahari. <br><br> Buku ini berisi cerita tentang Seli, \r\n                        seorang pelajar SMA kelas 10 yang berusia 15 tahun. Sama seperti remaja lainnya, \r\n                        Seli memiliki keluarga yang menyenangkan. Seli juga suka pergi ke gerai makanan cepat saji, \r\n                        mendengarkan lagu-lagu populer, serta menonton serial drama dan film. \r\n                        Namun, ada satu rahasia yang selalu disembunyikan oleh Seli sejak ia kecil.\r\n                        Rahasia tersebut adalah ia bisa mengeluarkan petir dari tangannya. Ternyata, selama ini\r\n                        bumi yang ditinggali Seli bukanlah dunia tempat dia berasal. Hal ini menjelaskan asal kekuatannya.\r\n                        <br><br> Raib, Seli, Ali, dan Ily mengikuti kompetisi dengan\r\n                        mengunggangi Harimau putih dari pegunungaan salju, Hadiah dari Mala tara tana II.\r\n                        Di tengah lapangan istana ilios, saat petir menghantam api unggun, sembilan\r\n                        kontingen lain berderap meninggalkaan lapangan istana besama hewan yang di\r\n                        tungganginya menerobos gerbang-gerbang yang ada. Raib dan rombongan menuju utara,\r\n                        mengikuti arahan Ily. Petualangan mereka di klan matahari di mulai. Memasuki hutan lebat,\r\n                        singgah di ternak lebah milik hana, melintasi padang perdu berduri, memasuki hutan,\r\n                        melawan gorila, menghindari burung pemakan daging, melintasi lereng pegunungan berkabut,\r\n                        menyebrangi danau, tiba di perkampungan danau teluk jauh, bertemu mela-tara-nata II.\r\n                        Melawan monster danau teluk jauh, lolos dari air bah yang tumpah, mendaki bukit,\r\n                        melewati lautan jamur beracun, memasuki lorong tikus bawah tanah.',
        'image/buku1.jpg'
    ),
    (
        3,
        'Rabu, 18 Mei 2021',
        'Novel \"Hujan\" Tere Liye',
        '<p>Novel hujan adalah novel yang dibuat oleh Tere Liye pada tahun 2015.\r\n                        Novel ini menceritakan tentang dunia modern tetapi sedang dalam ambang\r\n                        kepunahan.Cerita dimulai dari pertemuan antara seorang pasien dengan dokter.\r\n                        Pasien tersebut bernama Lail dan dokter tersebut bernama Elijah.\r\n                        Lail bertemu dengan dokter tersebut dengan satu tujuan, yaitu menghapus\r\n                        ingatannya tentang hujan. Untuk menghapus ingatannya Lail harus menceritakan semua cerita\r\n                        hidupnya\r\n                        dengan detail dan tidak boleh ada kebohongan dan tidak ada yang ditutup-tutupi.\r\n                        Kemudian kita di bawa ke dalam kejadian 8 tahun sebelum Lail datang ke dokter Elijah.\r\n                        Yaitu tanggal 21 Mei 2042 dimana bayi kesepuluh milliar baru saja dilahirkan.\r\n                        Banyak pendapat tentang bayi tersebut, ada yang berpendapat itu adalah anugrah\r\n                        tetapi ada juga yang berpendapat bahwa itu adalah sebuah musibah.\r\n                        Ketika manusia sedang mencari jalan keluar terhadap masalah yang sedang dihadapi,\r\n                        yaitu terlalu banyaknya jumlah manusia. Akhirnya alam membuat solusi tersebut sendiri.\r\n                        Di hari yang sama Lail dan ibunya sedang menaiki kereta bawah tanah dan tiba-tiba\r\n                        bencana alam terbesar di dunia datang begitu saja.\r\n                        <br><br>\r\n                        Berlatar waktu pada 2050, Lail, seorang yatim piatu akibat bencana alam hebat bertemu dengan\r\n                        Esok.\r\n                        Setiap perjalanan hidup mereka selalu dilalui bersama, hingga suatu ketika mereka harus\r\n                        berpisah.\r\n                        Esok harus mengemban pendidikan yang lebih tinggi di tempat yang jauh. Jatuh bangun dalam\r\n                        kehidupan\r\n                        membuat Lail makin menyadari bahwa ia membutuhkan Esok. Perjalanan kisah pahit Lail membuatnya\r\n                        memutuskan untuk menghilangkan semua memorinya. Apakah keputusan Lail untuk menghapus memorinya\r\n                        adalah keputusan tepat? Untuk Anda yang sedang atau pernah mengalami peristiwa kehilangan yang\r\n                        membekas,\r\n                        novel ini bisa jadi teman baik Anda. <br> <br>',
        'image/buku8.jpg'
    );

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
    `id` int(11) NOT NULL,
    `nama` varchar(50) NOT NULL,
    `keterangan` varchar(1000) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO
    `tb_kategori` (`id`, `nama`, `keterangan`)
VALUES (
        1,
        'Biografi Penulis Novel Tere Liye',
        'Artikel ini akan membahas tentang biografi penulis novel Tere Liye.'
    ),
    (
        4,
        'Novel \"Moon\" Tere Liye',
        'Artikel ini membahas tentang Novel Tere Liye yang berjudul \"Moon\"'
    ),
    (
        5,
        'Novel \"Hujan\" Tere Liye',
        'Artikel ini membahas tentang Novel Tere Liye yang berjudul \"Hujan\"'
    ),
    (
        6,
        'Novel \"Si Kuat\" Tere Liye',
        'Artikel ini membahas tentang Novel Tere Liye berjudul \"Si Kuat\"'
    );

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontribusi`
--

CREATE TABLE `tb_kontribusi` (
    `id` int(11) NOT NULL,
    `artikel` int(5) NOT NULL,
    `kategori` int(5) NOT NULL,
    `penulis` int(5) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tb_kontribusi`
--

INSERT INTO
    `tb_kontribusi` (
        `id`,
        `artikel`,
        `kategori`,
        `penulis`
    )
VALUES (1, 1, 1, 1),
    (2, 2, 4, 1),
    (3, 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
    `id` int(11) NOT NULL,
    `sapaan` varchar(50) NOT NULL,
    `namalengkap` varchar(100) NOT NULL,
    `level` varchar(25) NOT NULL,
    `password` varchar(300) NOT NULL,
    `email` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO
    `tb_pengguna` (
        `id`,
        `sapaan`,
        `namalengkap`,
        `level`,
        `password`,
        `email`
    )
VALUES (
        1,
        'admin',
        'Nama Lengkap',
        'admin',
        'admin',
        'admin@gmail.com'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontribusi`
--
ALTER TABLE `tb_kontribusi`
ADD PRIMARY KEY (`id`),
ADD KEY `ARTIKEL` (`artikel`),
ADD KEY `KATEGORI` (`kategori`),
ADD KEY `PENULIS` (`penulis`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT for table `tb_kontribusi`
--
ALTER TABLE `tb_kontribusi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kontribusi`
--
ALTER TABLE `tb_kontribusi`
ADD CONSTRAINT `tb_kontribusi_ibfk_1` FOREIGN KEY (`artikel`) REFERENCES `tb_artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_kontribusi_ibfk_2` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_kontribusi_ibfk_3` FOREIGN KEY (`penulis`) REFERENCES `tb_pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;