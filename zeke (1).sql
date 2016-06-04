-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2015 at 04:54 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zeke`
--

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE IF NOT EXISTS `matkul` (
  `kode_mk` varchar(5) DEFAULT NULL,
  `matkul` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `NPM` varchar(8) DEFAULT NULL,
  `NAMA` varchar(20) DEFAULT NULL,
  `KELAS` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`NPM`, `NAMA`, `KELAS`) VALUES
('15111630', 'putri', '4ka20'),
('15111783', 'rahmat', '4ka20'),
('16111197', 'Rifzky Alam', '3ka20'),
('16111061', 'Reza', '4ka20'),
('11111538', 'Brian', '4ka20'),
('12111166', 'Dino', '4ka20'),
('ikan', 'Avril Lavigne', 'ikan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lokasi`
--

CREATE TABLE IF NOT EXISTS `tbl_lokasi` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `LOKASI` varchar(30) DEFAULT NULL,
  `LANG` varchar(70) DEFAULT NULL,
  `LON` varchar(70) DEFAULT NULL,
  `DESKRIPSI` varchar(2000) DEFAULT NULL,
  `ANGKUTAN` varchar(255) DEFAULT NULL,
  `ANGKUTAN2` varchar(255) DEFAULT NULL,
  `GAMBAR` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`ID`, `LOKASI`, `LANG`, `LON`, `DESKRIPSI`, `ANGKUTAN`, `ANGKUTAN2`, `GAMBAR`) VALUES
(1, 'Istana Bogor', '-6.598477', '106.795171', 'Kebun Raya Bogor atau Kebun Botani Bogor adalah sebuah kebun botani besar yang terletak di Kota Bogor, Indonesia. Luasnya mencapai 87 hektaree dan memiliki 15.000 jenis koleksi pohon dan tumbuhan.', 'ANGKOT 07', 'ANGKOT 03 dilanjutkan 07 di taman topi', 'istana.jpg'),
(2, 'Kampus IPB', '-6.587897', '106.801031', 'Institut Pertanian Bogor adalah lembaga pendidikan tinggi pertanian yang secara historis merupakan bentukan dari lembaga-lembaga pendidikan menengah dan tinggi pertanian serta kedokteran hewan yang dimulai telah pada awal abad ke-20 di Bogor.Sebelum Perang Dunia II, lembaga-lembaga pendidikan menengah tersebut dikenal dengan nama Middelbare Landbouwschool, Middelbare Bosbouwschool dan Nederlandsch Indiche Veeartsenschool.<br> IPB saat ini berlokasi di Jalan Raya Dramaga, Kecamatan Dramaga, Kabupaten Bogor, Provinsi Jawa Barat.<br> <br> Lahirnya IPB pada tanggal 1 September 1963 berdasarkan keputusan Menteri Perguruan Tinggi dan Ilmu Pengetahuan (PTIP) No. 92/1963 yang kemudian disyahkan oleh Presiden RI Pertama dengan Keputusan No. 279/1965. Pada saat itu, dua fakultas di Bogor yang berada dalam naungan UI berkembang menjadi 5 fakultas, yaitu Fakultas Pertanian, Fakultas Kedokteran Hewan, Fakultas Perikanan, Fakultas Peternakan dan Fakultas Kehutanan. Pada tahun 1964, lahir Fakultas Teknologi dan Mekanisasi Pertanian yang kini menjadi Fakultas Teknologi Pertanian.', 'ANGKOT 08-09', 'ANGKOT 09', 'ipb.jpg'),
(3, 'Lanud Atang Sanjaya', '-6.545693', '106.754976', ' Pangkalan Udara atau Pangkalan TNI-AU Atang Senjaya (ATS), yang dulu bernama Pangkalan Udara Semplak, termasuk places yang ditutupi. Tak semua bagian, memang. Hanya area landas pacunya yang berpanjang 1,4 km dan sejumlah bangunan tertentu. Bandara warisan Belanda di Kelurahan Semplak, Kecamatan Bogor Barat, Kota Bogor, ini merupakan markas bagi Skadron 6, yang dikenal dengan armada helikopter Puma dan Super Puma-nya.<br><br>Nama pangkalan udara Atang Senjaya dipetik dari nama Kapten Atang Senjaya, tokoh yang --menurut salah satu versi sejarah TNI-AU-- tewas saat terlibat perakitan helikopter Mi-6 buatan Rusia, yang sosoknya mirip-miripnya dengan keluarga besar helikopter Puma buatan Prancis. Dalam film Rambo II dan III, helikopter Soviet yang dipanah Rambo pun sebenarnya helikopter Puma SA 330 yang didandani mirip helikopter Mi-24. Atang Senjaya dimakamkan di TMP Kalibata dengan pangkat Letkol (Anumerta).', 'JL.MAWAR-ANGKOT 06', 'ANGKOT 03-06', 'lanud.jpg'),
(4, 'Baranang Siang', '-6.604413', '106.806243', 'Baranangsiang adalah salah satu kelurahan di Kecamatan Bogor Timur, Kota Bogor, Jawa Barat, Indonesia. Kelurahan ini merupakan salah satu kelurahan vital di Bogor karena di sinilah, terminal bus utama kota Bogor, Terminal Bus Baranangsiang berada.', NULL, NULL, 'baranangsiang.jpg'),
(5, 'Kantor Walikota', '-6.594755', '106.793934', 'walikota', 'ANGKOT 07', 'ANGKOT 03-07', 'walikota.jpg'),
(6, 'RS Karya Bhakti', '-6.580731', '106.778284', 'Rumah Sakit ini berada di Jl. Dr. Semeru No. 120 Bogor, merupakan salah satu pilihan masyarakt kota bogor sebagai rujukan bilamana salah satu keluarganya sakit. Rumah Sakit (RS) Karya Bhakti resmi diserahkan ke Pemkot Bogor, Kamis (7/8). Penyerahan rumah sakit sekaligus perubahan nama RS Karya Bhakti ke RSUD Kota Bogor dan pengelolaan dari Yayasan Karya Bhakti ke Pemerintah Kota Bogor sesuai dengan Perda no 5 tahun 2013 tanggal 19 September. <br><br>\r\nRumah sakit yang sudah berdiri sejak 34 tahun ini memiliki ruas bangunan 10.181 m2 diatas lahan seluas 30.000 m2 yang berlokasi di Cilendek Barat Kelurahan Menteng Kecamatan Bogor Barat Kota Bogor.', 'JL.MAWAR-ANGKOT 06', 'ANGKOT 03-06', 'karyabakti.jpg'),
(7, 'Bogor Trade Mall', '-6.564214', '106.791303', 'Bogor Trade Mall (BTM) adalah pusat perbelanjaan besar yang terletak di Jalan Juanda no. 68. Berlokasi tidak jauh dari gerbang utama Kebun Raya Bogor. <br><br> Suasana Mal ini berbeda dengan mal lain di Bogor seperti Botani Square, Ekalokasari Plaza. Di BTM banyak terdapat toko-toko kecil yang menjual aksesoris, pakaian dan sepatu dengan harga murah. Jika Anda ingin membeli atau menjual ponsel yang digunakan, mal ini adalah tempat yang tepat.<br><br>Tenant dari BTM antara lain Ramayana Department Store dan Supermarket Ramayana. Ada juga restoran makanan populer cepat seperti Kentucky Fried Chicken, McDonald, dan Hoka Hoka Bento.<br><br>Bogor Trade Mall memiliki foodcourt yang terletak di lantai 4, food court ini memungkinkan pengunjung untuk melihat pemandangan indah Gunung Salak dan bagian timur Bogor. Foodcourt ini juga dilengkapi dengan akses WIFI internet.<br><br><br>Sumber: http://www.kelilingbogor.com/', 'ANGKOT 03', 'ANGKOT 03', 'btm.jpg'),
(8, 'Tugu Kujang', '-6.601460', '106.805058', '<h1>Tugu Kujang</h1> <br><br> <h3>Tugu Bogor atau dikenal juga dengan namaTugu Kujang </h3><br><br>SETIAP kali kita memasuki sebuah kota, biasanya akan disambut dengan keberadaan simbol selamat datang yang lazimnya dilambangkan dengan bangunan berbentuk menara atau biasa disebut dengan monumen atau tugu.<br><br>Ketika kita memasuki wilayah kota Bogor melalui pintu tol Jagorawi kemudian berbelok kearah barat menuju jalan Pajajaran menuju Cibinong, maka kita akan melihat sebuah bangunan megah berbentuk menara dengan tinggi 17 meter, dengan tambahan bangunan berbentuk sebuah senjata khas Jawa Barat atau dikenal dengan nama kujang yang dibangun setinggi 6 meter. Bangunan ini disebut dengan nama Tugu Bogor atau lebih dikenal dengan nama Tugu Kujang.<br><br>Tujuan pendirian tugu ini adalah untuk menghormati pemindahan ibukota kerajaan Pajajaran dari Galuh ke Pakuan oleh Sri Baduga Maharaja pada tahun 1482.<br><br>Selain itu bangunan ini juga merupakan bangunan pengganti monumen kota dari tugu pengembalian kota Bogor dari tangan penguasa Inggris ke tangan Belanda pada tahun 1836.', 'ANGKOT 07-03', 'JALAN KAKI', 'tugu.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
