-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2023 at 09:31 AM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `slug` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama`, `slug`) VALUES
(1, 'Programming', 'programming'),
(2, 'Relationship', 'relationship'),
(3, 'Machine Learning', 'machine-learning'),
(4, 'Self Improvement', 'self-improvement');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_user` int NOT NULL,
  `id_posting` int NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `like_posting`
--

CREATE TABLE `like_posting` (
  `id_user` int NOT NULL,
  `id_posting` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_posting` int NOT NULL,
  `id_users` int NOT NULL,
  `judul_posting` varchar(300) NOT NULL,
  `slug_posting` varchar(350) NOT NULL,
  `isi_posting` text,
  `tanggalBuat_posting` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggalPublish_posting` datetime DEFAULT NULL,
  `jumlahLike_posting` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `id_users`, `judul_posting`, `slug_posting`, `isi_posting`, `tanggalBuat_posting`, `tanggalPublish_posting`, `jumlahLike_posting`) VALUES
(1, 4, 'Judul Pertama', 'judul-pertama-63627149e0482', '<p>Okee</p>\r\n\r\n<h1>Ini a &nbsp; adaah</h1>\r\n\r\n<p>kokoko<sup>fdfdfd</sup></p>\r\n\r\n<pre>\r\n<code>#include\r\nint main(){\r\nreturn 0\r\n}</code></pre>\r\n\r\n<ul>\r\n	<li><input type=\"checkbox\" />dsds</li>\r\n	<li><input checked=\"checked\" type=\"checkbox\" />dsds</li>\r\n	<li><input checked=\"checked\" type=\"checkbox\" />dsds</li>\r\n	<li>oko</li>\r\n	<li>okok</li>\r\n</ul>\r\n\r\n<h1>DUA</h1>\r\n\r\n<ul>\r\n	<li><input name=\"Okee\" type=\"checkbox\" value=\"Okee\" />&nbsp;Okee</li>\r\n	<li><input checked=\"checked\" name=\"Dua\" type=\"checkbox\" value=\"Dua\" />&nbsp;Default</li>\r\n	<li><input name=\"Tiga\" type=\"checkbox\" value=\"Tiga\" /></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '2022-11-02 20:31:53', NULL, NULL),
(2, 4, 'Juduk Ke Dua', 'juduk-ke-dua-6369162d9501b', '<h1>INI TENTANG SAYA</h1>\r\n\r\n<p>okee cerrta saya</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>oke</td>\r\n			<td>sdsds</td>\r\n		</tr>\r\n		<tr>\r\n			<td>dsds</td>\r\n			<td>dsds</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ds</td>\r\n			<td>ds</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>sdsdsdsdsds</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-11-07 21:29:01', NULL, NULL),
(3, 5, 'Cara Belajar Efektif', 'cara-belajar-efektif-63691d98f03e7', '<h1><u>BELI BUKU</u></h1>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Buku harus dicara bisa berupa e book maupun book</span>, dan harus dijaga</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">NO</th>\r\n			<th scope=\"col\">NAMA</th>\r\n			<th scope=\"col\">ALAMAT</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>PENGARANG</td>\r\n			<td>OKEE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>PENULIS</td>\r\n			<td>OKEE 2</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h1><u>BACA BUKU</u></h1>\r\n\r\n<ul>\r\n	<li><u>FDFD</u></li>\r\n	<li><u>FD</u></li>\r\n	<li><u>dsdsd</u></li>\r\n	<li><u>dsdsd</u></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><u>dsds</u></li>\r\n	<li><u>dsdsdsd</u></li>\r\n	<li><u>dsds</u></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-11-07 22:00:40', NULL, NULL),
(6, 4, 'Siap Publish', 'siap-publish-6371a9bcb0fda', '<h1><span style=\"font-family:Comic Sans MS,cursive\">INI ADALAH JUDUL PUBLISH</span></h1>\r\n\r\n<ul>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">okee</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">dua</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">tiga</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-11-14 09:36:44', '2022-11-14 09:51:57', NULL),
(8, 10, 'Belajar CSS', 'belajar-css-63aaf9cc95891', '<h1>Belajar CSS</h1>\r\n\r\n<h3>Pengenalan</h3>\r\n\r\n<ul>\r\n	<li>Pengertian</li>\r\n	<li>Sejarah</li>\r\n</ul>\r\n\r\n<h3>Syantak Dasar</h3>\r\n\r\n<p>Menggunakan perintah <strong>file.css&nbsp;</strong></p>\r\n\r\n<h3>Penutup</h3>\r\n\r\n<h3>Perbandingan</h3>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Fitur</td>\r\n			<td>CSS</td>\r\n			<td>SCSS</td>\r\n			<td>Bootstrap</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kecepatan</td>\r\n			<td>Paling cepat</td>\r\n			<td>Lambat</td>\r\n			<td>Lambat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kemudahan</td>\r\n			<td>Susah</td>\r\n			<td>Mudah</td>\r\n			<td>Mudah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kerapian</td>\r\n			<td>Berantakan</td>\r\n			<td>Berantakan</td>\r\n			<td>Rapi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Peringakt</td>\r\n			<td>1</td>\r\n			<td>3</td>\r\n			<td>5</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-12-27 20:57:32', '2022-12-27 21:23:47', NULL),
(9, 10, 'Belajar Bootstrap', 'belajar-bootstrap-63aaff8ed0303', '<h2>PENGENALAN</h2>\r\n\r\n<h2>PENUTUP</h2>\r\n', '2022-12-27 21:22:06', NULL, NULL),
(10, 11, 'Cara Belajar Efektif', 'cara-belajar-efektif-63c0bf5ed7cfe', '<p>Ini adalah artikel dari user dev</p>\r\n\r\n<p><strong>okee okee</strong></p>\r\n', '2023-01-13 09:18:06', '2023-01-13 09:18:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posting_category`
--

CREATE TABLE `posting_category` (
  `id_posting` int NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting_category`
--

INSERT INTO `posting_category` (`id_posting`, `id_category`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 4),
(3, 1),
(3, 4),
(6, 2),
(6, 3),
(6, 4),
(8, 1),
(8, 4),
(9, 1),
(10, 2),
(10, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL,
  `jumlahPengikut` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `email`, `password`, `jumlahPengikut`) VALUES
(1, 'anang', 'anangOke', 'anang@gmail.com', '$2y$10$s0RzbiETd5pebsgXuoYW9Oi6D6dt67Eh3uIJ1B/op7O1QSfPlL4ja', NULL),
(2, 'userbaru', 'baruuu', 'baru@baru.com', '$2y$10$cInWbB4Cx3AtnGWlhv9A1OZQi5kjKW9ELMdfwYXuUmoCheR3/jW.a', NULL),
(3, '1234', '1234', 'baru@baru.com', '$2y$10$UsM35T/tx2kDqOk1ZxLu3ea6Rp2tseUSQsbrLyCJat.UpVPejUa/G', NULL),
(4, 'tes', 'tes', 'baru@baru.com', '$2y$10$uI8XbKedixMNXxG6RJCr9uh/2ioR5zWUL3Kn9n2uQnnTPS.f8PINC', NULL),
(5, 'Anang Nur Prasetya', 'anangp', 'baru@baru.com', '$2y$10$EZ1w6HNoeukhFIDmAB0vGe48DDZptrV717qq/jZcDD2sFslqs58mq', NULL),
(10, 'CSS USER', 'cssuser', 'baru@baru.com', '$2y$10$ot539wWNisfsZtuKm7JesO4ytpfrxg5IQjM7qhAq4ljJBwhYToQO.', NULL),
(11, 'dev', 'dev', 'anang@gmail.com', '$2y$10$XIwOGImslUhl8wuZROZS2uD7MWqmOQJAKFpDcNBGdkrZhEq9Fpsq2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_posting` (`id_posting`);

--
-- Indexes for table `like_posting`
--
ALTER TABLE `like_posting`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_posting` (`id_posting`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `posting_category`
--
ALTER TABLE `posting_category`
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_posting` (`id_posting`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_posting`) REFERENCES `posting` (`id_posting`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like_posting`
--
ALTER TABLE `like_posting`
  ADD CONSTRAINT `like_posting_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_posting_ibfk_2` FOREIGN KEY (`id_posting`) REFERENCES `posting` (`id_posting`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posting_category`
--
ALTER TABLE `posting_category`
  ADD CONSTRAINT `posting_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posting_category_ibfk_2` FOREIGN KEY (`id_posting`) REFERENCES `posting` (`id_posting`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
