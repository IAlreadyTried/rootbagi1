-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasironline`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `gambar`, `username`, `komentar`, `waktu`) VALUES
(1, '', 'user1', 'awawfawf', '10-42-37<br>15-12-2021'),
(2, '', 'user1', 'oawidhawd', '10:43:10<br>15-12-2021'),
(3, '', 'user1', 'Keren', '15-12-2021<br>17:06:48'),
(4, '', 'user7', 'Cepat sikit, dah lapar ni\r\n', '17:08:29<br>15-12-2021'),
(5, '', 'user11', 'Cepat bre, udah laper nih', '19:18:50<br>15-12-2021'),
(6, '', 'user50', 'Cepat bre, udah lapar nih', '10:53:59<br>16-12-2021');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `nama1` varchar(20) NOT NULL,
  `nama2` varchar(40) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `favorit` int(1) NOT NULL DEFAULT 0,
  `stok` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama1`, `nama2`, `harga`, `gambar`, `favorit`, `stok`) VALUES
(13, 'Ayam', 'Ayam Goreng', '25.000', '61b30df1db0ff.png', 0, 25),
(15, 'Pastel', 'Pastel goreng', '50.000', '61b4d5d6e44ab.png', 0, 14),
(17, 'Kebab', 'Kebab Sapi', '20.000', '61b7986acad65.png', 0, -197),
(18, 'Sop', 'Sop Tofu', '25.000', '61b7996c7c3c6.png', 0, 0),
(19, 'Kentang', 'Kentang Goreng', '20000', '61bab9bae11a0.png', 0, 99);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `menu` text DEFAULT 'Belum Memesan',
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `waktu`, `username`, `menu`, `total`) VALUES
(1, '13-12-2021', 'user7', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr><tr><td>Pastel goreng</td><td>@4</td><td>Rp. 200000</td></tr><tr><td>Kebab Sapi</td><td>@5</td><td>Rp. 125000</td></tr></table>', 375000),
(2, '13-12-2021', 'user7', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr><tr><td>Pastel goreng</td><td>@4</td><td>Rp. 200000</td></tr><tr><td>Kebab Sapi</td><td>@5</td><td>Rp. 125000</td></tr></table>', 375000),
(3, '13-12-2021', 'user7', '', 0),
(4, '13-12-2021', 'user7', '', 0),
(5, '13-12-2021', 'user7', '', 0),
(6, '13-12-2021', 'user7', '', 0),
(7, '13-12-2021', 'user7', '', 0),
(8, '13-12-2021', 'user7', '', 0),
(9, '13-12-2021', 'user7', '', 0),
(10, '13-12-2021', 'user7', 'Belum Memesan', 0),
(11, '13-12-2021', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@20</td><td>Rp. 500000</td></tr><tr><td>Pastel goreng</td><td>@7</td><td>Rp. 350000</td></tr><tr><td>Kebab Sapi</td><td>@7</td><td>Rp. 175000</td></tr></table>', 1025000),
(12, '13-12-2021', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr><tr><td>Kebab Sapi</td><td>@1</td><td>Rp. 25000</td></tr></table>', 100000),
(13, '13-12-2021', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@20</td><td>Rp. 500000</td></tr><tr><td>Pastel goreng</td><td>@5</td><td>Rp. 250000</td></tr><tr><td>Kebab Sapi</td><td>@15</td><td>Rp. 375000</td></tr></table>', 1125000),
(14, '14-12-2021', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr><tr><td>Sop Tofu</td><td>@2</td><td>Rp. 50000</td></tr></table>', 150000),
(15, '14-12-2021 08:58:39', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 50000),
(16, '14-12-2021<br>09:00:37', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@2</td><td>Rp. 100000</td></tr></table>', 100000),
(17, '14-12-2021<br>10:31:05', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@2</td><td>Rp. 100000</td></tr></table>', 100000),
(18, '15-12-2021<br>00:51:41', 'user7', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr><tr><td>Kebab Sapi</td><td>@3</td><td>Rp. 75000</td></tr><tr><td>Pastel goreng</td><td>@2</td><td>Rp. 100000</td></tr></table>', 200000),
(19, '15-12-2021<br>01:03:13', 'user1', '<table id=pesanan style=width:100%;><tr><td>Sop Tofu</td><td>@1</td><td>Rp. 25000</td></tr></table>', 25000),
(20, '15-12-2021<br>01:05:11', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 50000),
(21, '15-12-2021<br>01:08:34', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr></table>', 50000),
(22, '15-12-2021<br>01:15:44', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@5</td><td>Rp. 125000</td></tr></table>', 125000),
(23, '15-12-2021<br>01:16:50', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr><tr><td>Ayam Goreng</td><td>@4</td><td>Rp. 100000</td></tr></table>', 150000),
(24, '15-12-2021<br>01:17:58', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@3</td><td>Rp. 75000</td></tr></table>', 75000),
(25, '15-12-2021<br>01:18:44', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@5</td><td>Rp. 250000</td></tr></table>', 250000),
(26, '15-12-2021<br>01:19:34', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@5</td><td>Rp. 125000</td></tr></table>', 125000),
(27, '15-12-2021<br>01:27:09', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@3</td><td>Rp. 150000</td></tr><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr></table>', 175000),
(28, '15-12-2021<br>01:28:02', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@2</td><td>Rp. 100000</td></tr></table>', 100000),
(29, '15-12-2021<br>01:28:38', 'user1', 'Belum Memesan', 0),
(30, '15-12-2021<br>01:45:20', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr></table>', 50000),
(31, '15-12-2021<br>01:45:45', 'user1', 'Belum Memesan', 0),
(32, '15-12-2021<br>01:45:59', 'user1', 'Belum Memesan', 0),
(33, '15-12-2021<br>01:46:12', 'user1', 'Belum Memesan', 0),
(34, '15-12-2021<br>01:46:17', 'user1', 'Belum Memesan', 0),
(35, '15-12-2021<br>01:47:37', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@10</td><td>Rp. 500000</td></tr></table>', 500000),
(36, '15-12-2021<br>01:47:39', 'user1', 'Belum Memesan', 0),
(37, '15-12-2021<br>01:47:51', 'user1', 'Belum Memesan', 0),
(38, '15-12-2021<br>01:48:11', 'user1', 'Belum Memesan', 0),
(39, '15-12-2021<br>02:00:10', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@5</td><td>Rp. 125000</td></tr><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 175000),
(40, '15-12-2021<br>08:22:40', 'user1', '<table id=pesanan style=width:100%;><tr><td>Sop Tofu</td><td>@1</td><td>Rp. 25000</td></tr><tr><td>Pastel goreng</td><td>@2</td><td>Rp. 100000</td></tr></table>', 125000),
(41, '15-12-2021<br>08:26:54', 'user1', 'Belum Memesan', 0),
(42, '15-12-2021<br>11:00:42', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@5</td><td>Rp. 125000</td></tr></table>', 125000),
(43, '15-12-2021<br>11:25:53', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr></table>', 50000),
(44, '15-12-2021<br>15:06:52', 'user7', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 100000),
(45, '15-12-2021<br>15:38:40', 'user7', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@2</td><td>Rp. 50000</td></tr><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 100000),
(46, '15-12-2021<br>15:39:25', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@3</td><td>Rp. 150000</td></tr><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr></table>', 175000),
(47, '15-12-2021<br>17:31:39', 'user7', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@10</td><td>Rp. 500000</td></tr></table>', 500000),
(48, '15-12-2021<br>17:44:05', 'user7', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@10</td><td>Rp. 500000</td></tr></table>', 500000),
(49, '15-12-2021<br>19:19:20', 'user11', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr><tr><td>Pastel goreng</td><td>@3</td><td>Rp. 150000</td></tr></table>', 175000),
(50, '15-12-2021<br>19:22:38', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@20</td><td>Rp. 500000</td></tr><tr><td>Pastel goreng</td><td>@20</td><td>Rp. 1000000</td></tr></table>', 1500000),
(51, '15-12-2021<br>19:23:41', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@7</td><td>Rp. 350000</td></tr><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr></table>', 375000),
(52, '15-12-2021<br>20:44:59', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 75000),
(53, '16-12-2021<br>09:59:13', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 50000),
(54, '16-12-2021<br>10:04:24', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr></table>', 25000),
(55, '16-12-2021<br>10:04:48', 'user1', 'Belum Memesan', 0),
(56, '16-12-2021<br>10:06:05', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr></table>', 25000),
(57, '16-12-2021<br>10:13:11', 'user1', '<table id=pesanan style=width:100%;><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr></table>', 25000),
(58, '16-12-2021<br>10:14:28', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 50000),
(59, '16-12-2021<br>10:16:35', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 50000),
(60, '16-12-2021<br>10:57:43', 'user50', '<table id=pesanan style=width:100%;><tr><td>Sop Tofu</td><td>@5</td><td>Rp. 125000</td></tr><tr><td>Ayam Goreng</td><td>@1</td><td>Rp. 25000</td></tr></table>', 150000),
(61, '16-12-2021<br>11:07:51', 'user1', '<table id=pesanan style=width:100%;><tr><td>Kentang Goreng</td><td>@1</td><td>Rp. 20000</td></tr></table>', 20000),
(62, '16-12-2021<br>23:42:39', 'user1', '<table id=pesanan style=width:100%;><tr><td>Pastel goreng</td><td>@1</td><td>Rp. 50000</td></tr></table>', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `jabatan` varchar(20) NOT NULL DEFAULT 'pengguna',
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telepon` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'offline',
  `pesanan` text DEFAULT 'Belum Memesan',
  `total` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `jabatan`, `nama`, `username`, `telepon`, `email`, `password`, `status`, `pesanan`, `total`) VALUES
(4, 'pengguna', 'awdawd', 'seg', 0, 'e4te4', 't_G$id5sBz5FYYWwrw3r', 'offline', '', 0),
(5, 'pengguna', 'admin', 'awdawd', 0, 'rdgdrg', 't_G$id5sBz5FYYWdrgdr', 'offline', '', 0),
(6, 'pengguna', 'admin', 'sefsef', 0, 'e4te4t', 't_G$id5sBz5FYYWr5yr5y', 'offline', '', 0),
(7, 'admin', 'admin1', 'admin1', 1016291864, 'admin1@gmail.com', 'admin1', 'offline', '', 0),
(8, 'pengguna', 'tw4tey', 'seg', 0, 'r5ur5u', 't_G$id5sBz5FYYWr5ur5', 'offline', '', 0),
(9, 'pengguna', 'halow', 'mangstap', 234324, 'fawfe', 't_G$id5sBz5FYYWsegseg', 'offline', '', 0),
(10, 'pengguna', 'namanya', 'usernamenya', 2147483647, 'kagdwk@gmail.com', '$2y$10$xmQW4Nx9RbVE98/CmLLMTOfW1X//aGs4qPl.TzcF.ZwLj8WqCOp3q', 'offline', '', 0),
(11, 'pengguna', 'namaku', 'usernameku', 2147483647, 'emailku@gmail.com', '$2y$10$nshdpVBCVtdm2q/X3Tsa5e4nl1dL7fk6lyXvPEnjwuQAyljnygLNi', 'offline', '', 0),
(12, 'pengguna', 'udin', 'usernameudin', 26426834, 'udin@gmail.com', '$2y$10$pvL0/9UyKxwN5agly7Fce.r92e8cb8xMYAXRNHEaIThTSFNzET9za', 'offline', '', 0),
(13, 'pengguna', 'afe', 'srgergs', 0, 'sergerg', '$2y$10$Bx87VQ1FzY.TCDtDkhRw0OxwBCSCsR8SOu73kU4NJuhwNGUPVTfK.', 'offline', '', 0),
(14, 'pengguna', 'wqw3rqw3', 're4twe4t', 0, 'w4tew4t', '$2y$10$C7ZgLxixXe0XiRwM1NW67uoWpSjQ.BtXwKx4q43JkfzbvY6cW984q', 'offline', '', 0),
(15, 'pengguna', 'wqw3rqw3gdsrg', 're4twe4tsdr', 0, 'w4tew4trgr', '$2y$10$j7bpHh5K2f3JCPxJ6jOOpugYMmo5YwEuFvpMjf6s8XZ0JjVDKbjmu', 'offline', '', 0),
(16, 'pengguna', 'kerenz', 'kerenz', 91281244, 'wefwefwef', '$2y$10$8mNej7Xq/5I/nlYD/AMGkOtJfAnGWY0jP1zfJe2LjJYwQeSn4/2KO', 'offline', '', 0),
(17, 'pengguna', 'halow', 'halow', 2324234, 'fasfasfa', '$2y$10$Wf5drIboPGDjQ7qywkK2GeqxLKKJfCiv8qpdTERMpMRen5fHbxd8e', 'offline', '', 0),
(18, 'pengguna', 'halowha', 'halowha', 2234234, 'dawdawf', '$2y$10$G285IhwDSsYZcYPlMvgom.NqEHeZFtxZmljXPUI8JYld8G2zpVHQu', 'offline', '', 0),
(19, 'pengguna', 'wawa', 'wawaw', 2147483647, 'liedawldh@gmail.com', '$2y$10$bVdACmZODRiwyZeS8YAQ8.cR9G8yH/6PCnrxIoqmHLSea79ugm422', 'offline', '', 0),
(20, 'pengguna', 'user2', 'user2', 127398123, 'admin2@gmail.com', '$2y$10$yDYHZ12erIIerZRHdvpNEOVFayM8Q2hSj.ML8FW8hYJ7Isn/bxRaa', 'offline', '', 0),
(21, 'pengguna', 'user3', 'user3', 2147483647, 'user3@gmail.com', '$2y$10$A1t5gYA6sVpwu/ezjffwnuUbqMSMGYw278aNalXgI9JWHPxM0jovS', 'offline', '', 0),
(22, 'pengguna', 'user1', 'user1', 2373954, 'user1@gmail.com', '$2y$10$yhKPcqX4rHagTIQmqjrog.U4hUxi6kl27lrvDyKOJKF00zq/8U5l.', 'offline', 'Belum Memesan', 0),
(23, 'pengguna', 'user1', 'useri1', 2147483647, 'iefsefbo', '$2y$10$nIYA08oi.UQDSzB2ek/SEuk4nvpr.MHeqHunBwlUev60zqPpg1aVG', 'offline', '', 0),
(26, 'pengguna', 'user20', 'user20', 2382, 'user20@gmail.com', '$2y$10$01RsC7Q/GU8a78U9NwQHOuJH0tcFbG8usLQlXSge5L10/BUuEV3RK', 'offline', '', 0),
(27, 'pengguna', 'user5', 'user5', 2147483647, 'user5@gmail.com', '$2y$10$K8LxBlS1HjR3lREXRVr.l.dsqA6j2/n3niMeCFjiT0FD/4GTwXS9m', 'offline', '', 0),
(28, 'pengguna', 'user7', 'user7', 2147483647, 'user7@gmail.com', '$2y$10$yzBy.TxFnDpDqJhReqL9seStnbJDYE8VDcDop9XdXoSgkOaZH1SFq', 'offline', 'Belum Memesan', 0),
(29, 'pengguna', 'user11', 'user11', 2147483647, 'user11@gmail.com', '$2y$10$wuicnVkXEItnQKHcZEt4iuUe05AKyhpm2c5URIn4Jf4NSOlrvNtlC', 'offline', 'Belum Memesan', 0),
(30, 'pengguna', 'user50', 'user50', 2147483647, 'user50@gmail.com', '$2y$10$XYysrmaEukWBK4Q9raB/7evQDLqDA5pVZBMKfXGN0lvNXCfraJWsy', 'bayar', 'Belum Memesan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
