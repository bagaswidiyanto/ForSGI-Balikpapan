-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Okt 2022 pada 06.51
-- Versi server: 10.3.36-MariaDB-log-cll-lve
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forsgibpn_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat_wa`
--

CREATE TABLE `tbl_chat_wa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `startOnline` time NOT NULL,
  `endOnline` time NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `createUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat_wa`
--

INSERT INTO `tbl_chat_wa` (`id`, `nama`, `phone`, `image`, `startOnline`, `endOnline`, `createDate`, `createUserId`) VALUES
(1, 'Admin', '082155750908', 'Admin_2022-08-28 06:36:44.png', '08:00:00', '17:00:00', '2022-08-19 06:57:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`, `image`) VALUES
(140, 'Foto1', '630aa5673d30d.jpg'),
(141, 'Foto2', '630aa65fbc01b.jpg'),
(142, 'Foto3', '630aa69aec4d5.jpg'),
(143, 'Foto4', '630aa6ac1858b.jpg'),
(144, 'Foto5', '630b0473f172c.png'),
(145, 'Foto6', '630b04938aec8.png'),
(146, 'Foto7', '630aa6ef56eed.jpg'),
(147, 'Foto8', '630aa70712677.jpg'),
(148, 'Foto9', '630aa71ed1a29.jpg'),
(149, 'Foto10', '630aa730b1d77.jpg'),
(150, 'Foto11', '630aa767db4e3.jpg'),
(151, 'Foto12', '630aa779b9713.jpg'),
(152, 'Foto13', '630aa790037e4.jpg'),
(153, 'Foto14', '630b04c5f0e68.png'),
(154, 'Foto15', '630aa7bce42e3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_homeweb`
--

CREATE TABLE `tbl_homeweb` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Asal` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_homeweb`
--

INSERT INTO `tbl_homeweb` (`id`, `title`, `Asal`, `deskripsi`) VALUES
(2, 'FORUM SEPAK BOLA  GENERASI INDONESIA', 'BALIKPAPAN', 'Sepakbola mulai sejak dini, Prestasi menanti, Jeli, Peduli, dan Teliti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kepengurusan`
--

CREATE TABLE `tbl_kepengurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kepengurusan`
--

INSERT INTO `tbl_kepengurusan` (`id`, `nama`, `jabatan`, `image`) VALUES
(1, 'Kiper', 'Kiper', '630c3cf04dade.png'),
(2, 'Kiper', 'Kiper', '630c3cf04dade.png'),
(3, 'Kiper', 'Kiper', '630c3cf04dade.png'),
(4, 'Kiper', 'Kiper', '630c3cf04dade.png'),
(5, 'Kiper', 'Kiper', '630c3cf04dade.png'),
(6, 'Kiper', 'Kiper', '630c3cf04dade.png'),
(7, 'Kiper', 'Kiper', '630c3cf04dade.png'),
(8, 'Kiper', 'Kiper', '630c3cf04dade.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_our_merchandise`
--

CREATE TABLE `tbl_our_merchandise` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(12) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_our_merchandise`
--

INSERT INTO `tbl_our_merchandise` (`id`, `title`, `price`, `image`) VALUES
(6, 'BOLA', 0, '630aae195a098.jpg'),
(5, 'SEPATU OLAHRAGA ADIDAS', 0, '630aad4955457.jpg'),
(3, 'JERSEY ORIGINAL FORSGI BALIKPAPAN', 0, '630aa97395900.jpg'),
(4, 'SEPATU BOLA NIKE', 0, '630aa933df402.jpg'),
(7, 'BOLA', 0, '630aae2dc6419.jpg'),
(8, 'BOLA', 0, '630aae49de789.jpg'),
(9, 'MEDALI', 0, '630aae5e05da8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_program`
--

CREATE TABLE `tbl_program` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_program`
--

INSERT INTO `tbl_program` (`id`, `image`, `content`, `deskripsi`) VALUES
(1, 'merchan-slider-1.png', 'SSB Usia Dini', 'Siswa akan mendapatkan pelatihan selama 3 bulan dengan ketentuan yang telah disepakati, dengan fasilitas yang sudah disediakan'),
(2, 'merchan-slider-1.png', 'Sertifikasi Pelatih Tingkat Junior', 'Program singkat pelatihan para pelatih bola kelompok Junior. Dengan materi pelatihan lengkap dan pemateei yang memiliki pengalaman tinggi serta bersertifikat PSSI'),
(3, 'merchan-slider-1.png', 'SSB Kelompok Remaja', 'Siswa akan mendapatkan pelatihan selama 3 bulan dengan ketentuan yang telah disepakati, dengan fasilitas yang sudah disediakan'),
(4, 'merchan-slider-1.png', 'Coaching Clinic', 'Siswa akan mendapatkan materi teknik singkat dari Coach berpengalaman.'),
(5, '', '', '<p>Berikut adalah program kerja FORSGI Balikpapan, Informasi lanjut mengenai program-program ini, silahkan hubungi Admin FORSGI Balikpapan pada nomor yang tertera pada website ini</p>\n'),
(6, '630c713f4680b.jpg', 'Coming Soon', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `name`, `link`, `icon`) VALUES
(1, 'Facebook', 'https://www.facebook.com/', 'fa-facebook'),
(2, 'Twitter', 'https://twitter.com/', 'fa-twitter'),
(3, 'Instagram', 'https://www.instagram.com/progitoken/', 'fa-instagram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `testi` text NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id`, `nama`, `testi`, `image`) VALUES
(9, 'DODONI AMANAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget convallis interdum varius ut sit. Eget ut sapien aliquam ac euismod pellentesque a.', 'detail-5-testi-slide.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `title`, `deskripsi`, `image`) VALUES
(1, 'Visi', '<p style=\"text-align:center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Tristique sollicitudin nibh sit amet commodo. Tortor aliquam nulla facilisi cras fermentum.</p>\r\n', '630ab73dc1f3c.png'),
(2, 'Misi', '<p style=\"text-align:center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Tristique sollicitudin nibh sit amet commodo. Tortor aliquam nulla facilisi cras fermentum.</p>\r\n', '630ab74a08016.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_website`
--

CREATE TABLE `tbl_website` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `metaTitle` varchar(80) NOT NULL,
  `metaKeywords` text NOT NULL,
  `metaDescription` text NOT NULL,
  `map` text NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `name`, `address`, `phone`, `fax`, `email`, `description`, `metaTitle`, `metaKeywords`, `metaDescription`, `map`, `image`) VALUES
(3, 'FORSGI BALIKPAPAN', '<p>Jl. Guntur Damai RT.38 No.114 Kelurahan Gunung Sari Ulu Kecamatan Balikpapan Tengah. Kota Balikpapan 76122</p>\r\n', '082155750908', '', 'forsgi.bpn@gmail.com', '<p>FORSGI (Forum Sepak Bola Generasi Indonesia) adalah forum yang dilahirkan oleh Komunitas Alumni Pe-Sepakbola Nasional. Dengan wadah ini diharapkan akan muncul ide-ide cemerlang untuk Pembinaan Sepak Bola Usia Dini dan Usia Muda.&nbsp;Hingga saat ini FORSGI telah berkembang pesat dan telah hadir di 34 Provinsi di Indonesia, FORSGI berkembang dan berjalan secara mandiri, swadaya &amp; gotong royong serta memegang moto Jeli, Peduli &amp; Teliti.</p>\r\n', 'FORSGI BALIKPAPAN | Club Bola ForSGI Balikpapan FC', '<p>FORSGI BALIKPAPAN | Club Bola ForSGI Balikpapan FC</p>\r\n', '<p>FORSGI BALIKPAPAN | Club Bola ForSGI Balikpapan FC</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d834.9083097987004!2d116.85242929999998!3d-1.2544393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1478d9692d3a3%3A0x9b576457262f41c0!2sPondok%20Pesantren%20Bairuha%20Balikpapan%20(LDII)!5e1!3m2!1sid!2sid!4v1660873793244!5m2!1sid!2sid\"  width=\"100%\" height=\"100%\" style=\"border:0;border-radius: 10px;\" allowfullscreen=\"\"  loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo-png.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kepengurusan`
--
ALTER TABLE `tbl_kepengurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_our_merchandise`
--
ALTER TABLE `tbl_our_merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_program`
--
ALTER TABLE `tbl_program`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kepengurusan`
--
ALTER TABLE `tbl_kepengurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_our_merchandise`
--
ALTER TABLE `tbl_our_merchandise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_program`
--
ALTER TABLE `tbl_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
