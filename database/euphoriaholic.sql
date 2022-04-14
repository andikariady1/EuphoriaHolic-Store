-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2022 pada 12.55
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `euphoriaholic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Blouse Pink', 'Blouse from Cotton Ink', 'Pakaian Wanita', 295000, 4009, 'blouse.jpg'),
(3, 'Dress', 'Dress from Beatrice Clothing', 'Pakaian Wanita', 200000, 3561, 'dress.jpg'),
(6, 'Oversized Sweater Hoodie', 'from Zahra Signature', 'Pakaian Wanita', 250000, 4431, 'hoodiew.jpg'),
(7, 'Buttoned Loose Floral Shirt', 'Kemeja from Pomelo', 'Pakaian Wanita', 439000, 69, 'kemejaw.jpg'),
(8, 'Natura Hoodie Jacket', 'From Rubylicious', 'Pakaian Wanita', 149000, 9432, 'jaketw.jpg'),
(9, 'Coral Batik Melati Two-Tone', 'From Cotton Ink', 'Pakaian Wanita', 150000, 54324, 'batikwanita.jpg'),
(11, 'Treya Skirt', 'From Chic Girl', 'Pakaian Wanita', 180000, 67432, 'rok.jpg'),
(12, 'Swing Skirt', 'from Danora', 'Pakaian Wanita', 150000, 84, 'rokpjg.jpg'),
(13, 'Celana Jeans', 'from Zara', 'Pakaian Wanita', 500000, 80, 'celana.jpg'),
(14, 'Diamond Pants', 'from Hailey', 'Pakaian Wanita', 125000, 95, 'celanapen.jpg'),
(15, 'Fringe Lace Kimono Cardigan', 'from Liva Girl', 'Pakaian Wanita', 150000, 75, 'cardigan.jpg'),
(16, 'Antidot', 'from Raivan', 'Pakaian Wanita', 175000, 75, 'tshirtW.jpg'),
(17, 'Meccanism', 'from Zaskia Mecca', 'Pakaian Wanita', 75000, 69, 'hijab.jpg'),
(21, 'Double Breasted Waistcoat', 'from Zalora Basics', 'Pakaian Pria', 330000, 67, 'rompipria.jpg'),
(22, 'Celana Chino', 'from Zara', 'Pakaian Pria', 67000, 6444, 'celanapr.jpg'),
(26, 'Adidas', 'Bahan 100% dari cotton single jersey yang terasa lembut di badan.', 'T-Shirt Pria', 312000, 1233, 'kaosp_2.jpg'),
(27, 'Geof Maxx', 'Kaos dengan Kualitas yang tidak diragukan lagi.', 'T-Shirt Pria', 70000, 4322, 'kaosp_3.jpg'),
(28, 'Screamous', 'Kainnya memiliki kualitas yang sangat baik dengan sentuhan akhir yang sempurna', 'T-Shirt Pria', 76000, 43, 'kaosp_4.jpg'),
(29, 'Walexa ', ' Merek Jepang yang diciptakan dua puluh tahun lalu ini telah berhasil menggabungkan aksesibilitas ke produk organik.', 'T-Shirt Pria', 125000, 54, 'kaosp5.jpg'),
(30, '180 Degrees', 'Regular fit tidak terlalu ketat juga tidak terlalu baggy. Cocok untuk penampilan kasual Anda sehari-hari.', 'T-Shirt Pria', 45000, 432, 'kaosp6.jpg'),
(32, 'Levis', 'Dengan beragam pilihan model dan bahan yang nyaman dipakai, kemeja ini dapat diandalkan untuk menemani aktivitas padatmu sepanjang hari.', 'Kemeja Pria', 140000, 52, 'kemejap2.jpg'),
(33, 'Giordano', 'Merek dagang ini memproduksi salah satu kemeja pria terbaik dengan beragam pilihan model, seperti kemeja polo dan woven shirt tanpa kerah yang sedang jadi tren fashion pria.', 'Kemeja Pria', 125000, 5342, 'kemejap3.jpg'),
(34, 'BOSS', 'meskipun harga kemeja pria merek Boss ini termasuk murah, tetapi kualitas yang ditawarkan sama sekali nggak murahan, lho.', 'Kemeja Pria', 112000, 764, 'kemejap4.jpg'),
(35, 'Ralph Lauren', 'Mulai dari yang formal sampai kasual, lengan pendek maupun lengan panjang, polos atau bercorak, semuanya dilengkapi dengan logo Ralph Lauren yang khas tersemat di bagian kiri atas kemeja.', 'Kemeja Pria', 175000, 69, 'kemejap5.jpg'),
(36, 'UNIQLO', 'pamor Uniqlo terus meningkat dengan produk-produknya yang terkenal dengan desain simpel namun tetap terbuat dari bahan yang nyaman.', 'Kemeja Pria', 120000, 65, 'kemejap6.jpg'),
(37, 'Levi’s Trucker', 'Jaket jeans hitam dengan model sederhana ini bisa dengan mudah kamu padupadan dengan fashion item lainnya.', 'Jaket Pria', 1257922, 635, 'jaketp1.jpg'),
(38, 'Uniqlo Jaket Work Washed Jersey', 'Menariknya jaket satu ini juga bisa digunakan untuk berbagai acara baik casual maupun formal.', 'Jaket Pria', 499000, 65, 'jaketp2.jpg'),
(39, 'Eiger Gazania Travel Parka', 'Jaket ini dirancang untuk menjaga kamu tetap hangat dan nyaman saat traveling dan beraktivitas sehari-hari.', 'Jaket Pria', 699000, 6876, 'jaketp3.jpg'),
(40, 'Superdry Crafted Casuals Polar Overhead Hoodie', 'Superdry Crafted Casuals polar hoodie sangat cocok untuk gaya street wear yang sporty dan nyaman.', 'Jaket Pria', 606342, 21, 'jaketp4.jpg'),
(41, 'Nerdy Fleece Stand-Neck Jacket Beige', 'Jaket yang terbuat dari bulu domba ini didominasi dengan warna beige dan dihias dengan sendtuhan warna ungu dan kuning.', 'Jaket Pria', 1768500, 8766, 'jaketp5.jpg'),
(42, 'Hoodieku Zipper Basic Black', 'Dibuat dari material cotton fleece, hoodie zipper polos ini terasa lebih adem, ringan, serta tidak gatal di kulit, dan tentunya dapat memberikan kenyamanan saat digunakan.', 'Hoodie Pria', 119000, 3231, 'hoodiep1.jpg'),
(43, 'Adidas Trefoil Warm-Up Hoodie', 'Hoodie ini tidak oversized yang dapat membuatmu terlihat gemuk dan juga tidak terlalu ketat, sehingga leluasa untuk bergerak.', 'Hoodie Pria', 675000, 767, 'hoodiep2.jpg'),
(44, 'Gildan Hood Fleece', 'Produk yang satu ini terbuat dari kombinasi 50% bahan cotton fleece yang membuatnya terasa nyaman dan lembut di kulit. ', 'Hoodie Pria', 212500, 787, 'hoodiep3.jpg'),
(45, 'H&M Basic Divided ', 'Kalau kamu kurang menyukai pakaian yang bermotif, jaket hoodie pria hitam dari H&M bisa menjadi produk yang wajib untuk dimiliki. ', 'Hoodie Pria', 149000, 75, 'hoodiep4.jpg'),
(46, 'Timberland Men House Camo Print', 'Motif pada pakaian memang membuat pakaian tampak lebih hidup. Nah, buat kamu yang menginginkan hoodie bermotif, namun tetap terlihat kalem dan tidak berlebihan, hoodie pria keren dari Timberland bisa menjadi produk yang tepat', 'Hoodie Pria', 1564000, 7543, 'hoodiep5.jpg'),
(47, 'Batik Keris', 'Batik Keris sempat mendirikan sebuah pabrik di Sarinah pada tahun 1972. Meski sudah lama berdiri, produk batik siap pakainya tetap terlihat trendi', 'Batik Pria', 1250000, 213, 'batikp1.jpg'),
(48, 'Batik Semar', 'Batik Semar berasal dari Solo dan sudah ada sejak tahun 1966. Pada saat itu, Batik Semar hanya ditujukan pada golongan menengah atas, karena hanya memiliki koleksi batik tulis', 'Batik Pria', 692500, 753, 'batikp2.jpg'),
(49, 'Batik Danar Hadi', 'Berawal dari industri rumahan, Batik Danar Hadi telah menyesuaikan zaman sehingga masuk dalam industri modern. Label batik ini juga berasal dari Solo dan didirkan oleh pasangan suami istri H. Santoesa Dullah dan Hj. Danarsih ', 'Batik Pria', 215000, 986, 'batikp3.jpg'),
(50, 'Parang Kencana', 'Parang Kencana tetap mempertahankan nilai tradisional hingga sekarang. Namun merek ini tidak pernah hilang dan semakin berkembang dengan pesat.', 'Batik Pria', 899000, 34342, 'batikp4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(10, 'Alana van Debora', 'Bekasi, Jawa Barat', '2021-12-07 23:14:05', '2021-12-08 23:14:05'),
(11, 'Queen Faradiba Al Isra Syam', 'Bekasi, Jawa Barat', '2022-04-07 14:33:12', '2022-04-08 14:33:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(12, 8, 1, 'Blouse', 1, 295000, ''),
(13, 8, 2, 'Hoodie', 1, 178000, ''),
(14, 8, 3, 'Dress', 2, 200000, ''),
(17, 10, 1, 'Blouse', 2, 295000, ''),
(18, 10, 3, 'Dress', 1, 200000, ''),
(19, 10, 6, 'Oversized Sweater Hoodie', 1, 250000, ''),
(20, 11, 1, 'Blouse Pink', 1, 295000, ''),
(21, 12, 1, 'Blouse Pink', 1, 295000, ''),
(22, 13, 3, 'Dress', 1, 200000, ''),
(23, 14, 3, 'Dress', 1, 200000, ''),
(24, 15, 6, 'Oversized Sweater Hoodie', 1, 250000, '');

--
-- Trigger `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `is_active` int(11) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `username`, `password`, `image`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'Admin', '', 'Admin', '123', '', 1, 0, 0),
(2, 'user', '', 'user', '123', '', 2, 0, 0),
(7, 'Queen Faradiba', '', 'QueenFrdb', '123', '', 2, 0, 0),
(11, 'Queen Faradiba Al Isra Syam', '', 'QueenFrdb', '123', 'default.jpg', 2, 0, 1649439074),
(12, 'Alana van Debora', 'Bandung, Jawa Barat', 'Alana', '123', 'default.jpg', 2, 0, 1649480284);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
