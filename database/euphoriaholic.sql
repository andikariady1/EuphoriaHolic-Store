-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2022 pada 06.54
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
(1, 'Adidas', 'Bahan 100% dari cotton single jersey yang terasa lembut di badan.', 'T-Shirt Pria', 312000, 1231, 'kaosp_2.jpg'),
(2, 'Geof Maxx', 'Kaos dengan Kualitas yang tidak diragukan lagi.', 'T-Shirt Pria', 70000, 4322, 'kaosp_3.jpg'),
(3, 'Screamous', 'Kainnya memiliki kualitas yang sangat baik dengan sentuhan akhir yang sempurna', 'T-Shirt Pria', 76000, 43, 'kaosp_4.jpg'),
(4, 'Walexa ', ' Merek Jepang yang diciptakan dua puluh tahun lalu ini telah berhasil menggabungkan aksesibilitas ke produk organik.', 'T-Shirt Pria', 125000, 54, 'kaosp5.jpg'),
(5, '180 Degrees', 'Regular fit tidak terlalu ketat juga tidak terlalu baggy. Cocok untuk penampilan kasual Anda sehari-hari.', 'T-Shirt Pria', 45000, 432, 'kaosp6.jpg'),
(6, 'Levis', 'Dengan beragam pilihan model dan bahan yang nyaman dipakai, kemeja ini dapat diandalkan untuk menemani aktivitas padatmu sepanjang hari.', 'Kemeja Pria', 140000, 52, 'kemejap2.jpg'),
(7, 'Giordano', 'Merek dagang ini memproduksi salah satu kemeja pria terbaik dengan beragam pilihan model, seperti kemeja polo dan woven shirt tanpa kerah yang sedang jadi tren fashion pria.', 'Kemeja Pria', 125000, 5342, 'kemejap3.jpg'),
(8, 'BOSS', 'meskipun harga kemeja pria merek Boss ini termasuk murah, tetapi kualitas yang ditawarkan sama sekali nggak murahan, lho.', 'Kemeja Pria', 112000, 764, 'kemejap4.jpg'),
(9, 'Ralph Lauren', 'Mulai dari yang formal sampai kasual, lengan pendek maupun lengan panjang, polos atau bercorak, semuanya dilengkapi dengan logo Ralph Lauren yang khas tersemat di bagian kiri atas kemeja.', 'Kemeja Pria', 175000, 69, 'kemejap5.jpg'),
(10, 'UNIQLO', 'pamor Uniqlo terus meningkat dengan produk-produknya yang terkenal dengan desain simpel namun tetap terbuat dari bahan yang nyaman.', 'Kemeja Pria', 120000, 65, 'kemejap6.jpg'),
(11, 'Levi’s Trucker', 'Jaket jeans hitam dengan model sederhana ini bisa dengan mudah kamu padupadan dengan fashion item lainnya.', 'Jaket Pria', 1257922, 635, 'jaketp1.jpg'),
(12, 'Uniqlo Jaket Work Washed Jersey', 'Menariknya jaket satu ini juga bisa digunakan untuk berbagai acara baik casual maupun formal.', 'Jaket Pria', 499000, 65, 'jaketp2.jpg'),
(13, 'Eiger Gazania Travel Parka', 'Jaket ini dirancang untuk menjaga kamu tetap hangat dan nyaman saat traveling dan beraktivitas sehari-hari.', 'Jaket Pria', 699000, 6876, 'jaketp3.jpg'),
(14, 'Superdry Crafted Casuals Polar Overhead Hoodie', 'Superdry Crafted Casuals polar hoodie sangat cocok untuk gaya street wear yang sporty dan nyaman.', 'Jaket Pria', 606342, 21, 'jaketp4.jpg'),
(15, 'Nerdy Fleece Stand-Neck Jacket Beige', 'Jaket yang terbuat dari bulu domba ini didominasi dengan warna beige dan dihias dengan sendtuhan warna ungu dan kuning.', 'Jaket Pria', 1768500, 8766, 'jaketp5.jpg'),
(16, 'Hoodieku Zipper Basic Black', 'Dibuat dari material cotton fleece, hoodie zipper polos ini terasa lebih adem, ringan, serta tidak gatal di kulit, dan tentunya dapat memberikan kenyamanan saat digunakan.', 'Hoodie Pria', 119000, 3231, 'hoodiep1.jpg'),
(17, 'Adidas Trefoil Warm-Up Hoodie', 'Hoodie ini tidak oversized yang dapat membuatmu terlihat gemuk dan juga tidak terlalu ketat, sehingga leluasa untuk bergerak.', 'Hoodie Pria', 675000, 767, 'hoodiep2.jpg'),
(18, 'Gildan Hood Fleece', 'Produk yang satu ini terbuat dari kombinasi 50% bahan cotton fleece yang membuatnya terasa nyaman dan lembut di kulit. ', 'Hoodie Pria', 212500, 787, 'hoodiep3.jpg'),
(19, 'H&M Basic Divided ', 'Kalau kamu kurang menyukai pakaian yang bermotif, jaket hoodie pria hitam dari H&M bisa menjadi produk yang wajib untuk dimiliki. ', 'Hoodie Pria', 149000, 75, 'hoodiep4.jpg'),
(20, 'Timberland Men House Camo Print', 'Motif pada pakaian memang membuat pakaian tampak lebih hidup. Nah, buat kamu yang menginginkan hoodie bermotif, namun tetap terlihat kalem dan tidak berlebihan, hoodie pria keren dari Timberland bisa menjadi produk yang tepat', 'Hoodie Pria', 1564000, 7543, 'hoodiep5.jpg'),
(21, 'Batik Keris', 'Batik Keris sempat mendirikan sebuah pabrik di Sarinah pada tahun 1972. Meski sudah lama berdiri, produk batik siap pakainya tetap terlihat trendi', 'Batik Pria', 1250000, 213, 'batikp1.jpg'),
(22, 'Batik Semar', 'Batik Semar berasal dari Solo dan sudah ada sejak tahun 1966. Pada saat itu, Batik Semar hanya ditujukan pada golongan menengah atas, karena hanya memiliki koleksi batik tulis', 'Batik Pria', 692500, 753, 'batikp2.jpg'),
(23, 'Batik Danar Hadi', 'Berawal dari industri rumahan, Batik Danar Hadi telah menyesuaikan zaman sehingga masuk dalam industri modern. Label batik ini juga berasal dari Solo dan didirkan oleh pasangan suami istri H. Santoesa Dullah dan Hj. Danarsih ', 'Batik Pria', 215000, 986, 'batikp3.jpg'),
(24, 'Parang Kencana', 'Parang Kencana tetap mempertahankan nilai tradisional hingga sekarang. Namun merek ini tidak pernah hilang dan semakin berkembang dengan pesat.', 'Batik Pria', 899000, 34342, 'batikp4.jpg'),
(25, 'Lolliestory Lavinia Cotton Mini Dress', 'Anda yang membutuhkan dress untuk dipakai saat acara prom night, produk dari Lolliestory ini patut dipertimbangkan. Lavinia Mini Dress ini dibuat dengan potongan A-line sehingga menciptakan flowy look yang anggun.', 'Dress Wanita', 245000, 4553, 'dressw5.png'),
(60, 'MyYoora Elegant Sabrina Lace Dress', 'Dengan desain off-shoulder, dress ini mampu membuat Anda tampak lebih feminin. Anda pun jadi bisa menunjukkan bone structure yang menawan saat memakainya. Selain itu, produk ini juga dirancang menggunakan bahan full brokat.', 'Dress Wanita', 299999, 7664, 'dressw31.png'),
(61, 'N.y.L.a Sandra Dress', 'Off-shoulder dress ini dapat membuat tubuh bagian atas Anda terlihat lebih bervolume. Hal ini berkat lengannya yang berdesain puff shoulder dan bagian dadanya yang berkerut.', 'Dress Wanita', 99000, 774, 'dressw11.png'),
(62, 'NEWLAN Korean Dress Motif Bunga Daisy', 'Apabila Anda mempunyai rencana untuk berlibur ke pantai, jangan pergi dulu sebelum memiliki summer dress yang oke. Nah, mini dress Korean style yang satu ini bisa Anda pertimbangkan.', 'Dress Wanita', 88330, 54, 'dressw21.png'),
(63, 'Cloth Inc Micah Pleat Dress', 'Bagi Anda yang hobi mengenakan aksesori, penting untuk menjaga agar penampilan tidak tampak heboh. Solusinya, Anda bisa pilih dress polos yang desainnya simpel seperti produk ini.', 'Dress Wanita', 399000, 431, 'dressw4.png'),
(64, 'Eiger Athena WTP Jacket', ' Athena WTP Jacket dari Eiger. Ini merupakan jaket waterproof dan breathable yang terbuat dari bahan Eiger Shell polyester 2,5 layer. Produk ini dirancang khusus untuk wanita dan pas dipakai saat melakukan kegiatan ekstrem.', 'Jaket Wanita', 1200000, 553, 'jaketw1.jpg'),
(65, 'Zahra Signature Oversized Sweater Hoodie', 'Siapa bilang para hijabers tidak bisa tampil sporty dan bergaya? Dengan jaket hoodie ini, Anda pengguna hijab pun bisa tampil kian trendy. ', 'Hoodie Wanita', 199000, 34, 'hodiw1.jpg'),
(66, 'Maxius Hoodie FROZEL', 'Jaket hoodie ini berwarna gelap dengan motif animasi di bagian depan dan motif bunga daisy di logo bagian belakang. Hal tersebut menjadikan produk ini cocok untuk Anda yang ingin tampil feminin sekaligus sporty.', 'Hoodie Wanita', 179000, 42, 'hodiw2.jpg'),
(67, 'LEVI\'S X PEANUTS 2020 HOODIE', 'Untuk Anda yang menggemari karakter animasi Scoopy, sebaiknya jangan lewatkan hoodie ini. Levi\'s berkolaborasi dengan Snoopy untuk menghasilkan jaket hoodie wanita yang lucu dan menggemaskan dengan motif Snoopy.', 'Hoodie Wanita', 449500, 643, 'hodiw3.png'),
(68, 'GUESS LS GUESS CLASSIC TRI OG HOODIE', 'Jika Anda pencinta barang-barang branded, jaket wanita keluaran GUESS ini layak dijadikan koleksi tambahan. Merek jaket branded wanita ini menghadirkan hoodie dengan logo berukuran cukup besar di bagian depan. Berkatnya, Anda', 'Hoodie Wanita', 1499000, 324, 'hodiw4.jpg'),
(69, 'Universal Traveller PU Leather Jacket with Tailored Collar', 'Jika Anda sedang mencari jaket kulit yang cocok digunakan saat cuaca dingin, pertimbangkanlah produk ini. Jaket kulit yang terinspirasi dari outfit penerbang pesawat ini dilengkapi lapisan bulu di bagian kerahnya. Selain tera', 'Jaket Wanita', 2090000, 3424, 'jaketw2.png'),
(70, 'Skullend Varsity Jacket Bomber Baseball Sukajan Vintage Wanita Full Bordir', 'Jaket bomber wanita ini cocok untuk Anda yang ingin menunjukkan karakter personal yang dimiliki. Didesain full bordir, jaket ini bisa membuat Anda jadi pusat perhatian banyak orang. Bomber jacket ini dapat dipakai untuk hango', 'Jaket Wanita', 350000, 52, 'jaketw3.png'),
(71, 'The North Face Women Travel Wind Parka', 'Jaket seperti kemeja? Kenapa tidak! The North Face Women\'s Travel Wind Parka ditujukan untuk Anda yang telah bosan dengan model jaket yang itu-itu saja. Tidak seperti jaket lain yang biasanya menggunakan ritsleting, produk in', 'Jaket Wanita', 2490000, 342, 'jaketw4.jpg'),
(72, 'Nike Nike Air Women\'s Full-Zip Top', 'Lengkapi gaya street look Anda dengan jaket baggy Nike Air Women\'s Full-Zip Top merupakan jaket dengan potongan baggy dan berukuran oversized. Jaket ini sangat pas melengkapi street look Anda.', 'Jaket Wanita', 1080000, 775, 'jaketw5.png'),
(73, 'Monellina Ayana Rok Midi Selutut', 'Tampil preppy dengan motif kotak-kotak Rok satu ini adalah pilihan tepat untuk Anda yang menginginkan tampilan preppy saat bepergian. Anda bisa memakainya ke kantor ataupun sekadar menghabiskan waktu di mal atau kafe.', 'Rok Wanita', 275000, 7764, 'rokw1.jpg'),
(74, 'Clouwny Checkered Mermaid Skirt', 'Bergaya kekinian ala street fashion Korea Kalau Anda mengikuti dan menyukai tren fashion ala Korea Selatan, rok ini pasti familier untuk Anda. ', 'Rok Wanita', 225000, 998, 'rokw2-fococlipping-standard.png'),
(75, 'Miyoshi Jeans Short Skirt', 'Unik dengan ikat pinggang berbentuk lengan kemeja Anda pasti pernah mengikatkan jaket pada pinggang, bukan? Ini dia keunikan rok mini bergaya feminin yang satu ini. Ikat pinggangnya memiliki model seperti lengan kemeja yang t', 'Rok Wanita', 329900, 75, 'rokw3-fococlipping-standard.png'),
(76, 'Love, Bonito Daley Asymmetrical Ruffle Skirt', 'Lebih feminin dan mewah, rasanya seperti pakai gaun Daley Asymmetrical Ruffle Skirt dari Love, Bonito ini memiliki tampilan yang cantik dan mewah. Rok ini berpotongan asimetris yang pendek pada bagian depan dan panjang di bel', 'Rok Wanita', 490000, 7432, 'rokw4-fococlipping-standard.png'),
(77, 'Riana Cardigan', 'Simpel dan berwarna netral, cocok dipakai ke mana saja Untuk produk terakhir di daftar saya, saya akan merekomendasikan blouse yang satu ini. Produk ini terlihat sangat simpel dan tersedia dalam tiga pilihan warna netral', 'Cardigan Wanita', 63000, 543, 'cardiw1-fococlipping-HD.png'),
(78, 'ELLIPSES INC Set Cardigan Tie Dye', 'Bergaya trendi bersama tren tie-dye Tak dapat dimungkiri lagi, beberapa tahun belakangan ini eksistensi dari busana tie-dye sedang digemari oleh banyak orang. Nah, untuk Anda yang ingin mengikuti tren saat ini, produk dari EL', 'Cardigan Wanita', 200000, 432, 'cardiw2.png'),
(79, 'Rodeo Quinza Outer Batik', 'Corak batiknya tampilkan pesona khas Indonesia Solusi tepat bagi Anda yang menginginkan produk dengan corak khas Indonesia adalah produk keluaran Rodeo ini. Cardigan ini memiliki model tanpa lengan dengan balutan motif batik.', 'Cardigan Wanita', 369900, 323, 'cardiw3.png'),
(80, 'Clouwny Levon Long Outer', 'Cardigan kerah lapel ciptakan preppy look yang menawan Lengkapi outfit ngantor Anda dengan produk dari Clouwny ini, yuk! Cardigan ini memiliki model lengan panjang dengan detail kerah lapel yang lebar. Ada tiga warna yang bis', 'Cardigan Wanita', 229000, 3232, 'cardiw4.png'),
(81, 'MKY Clothing Cable Button Knit Cardigan', 'intage style didapat berkat pattern yang khas Apakah Anda penyuka vintage style? Kalau begitu, tak usah ragu menjatuhkan pilihan Anda pada Cable Button Knit Cardigan dari MKY Clothing ini, ya! Pola rajut yang ada pada cardiga', 'Cardigan Wanita', 399000, 3231, 'cardiw5.png');

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
(13, 'Alana van Debora', '', '2022-04-15 20:46:09', '2022-04-16 20:46:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `status` enum('Belum Bayar','Sudah Bayar','','') CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Belum Bayar',
  `tgl_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `id_user`, `nama_brg`, `jumlah`, `harga`, `status`, `tgl_pesan`) VALUES
(26, 13, 1, 0, 'Adidas', 1, 312000, '', '0000-00-00 00:00:00');

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
(12, 'Alana van Debora', 'Bandung, Jawa Barat', 'Alana', '123', 'pro1649947748.jpg', 2, 0, 1649480284);

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
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
