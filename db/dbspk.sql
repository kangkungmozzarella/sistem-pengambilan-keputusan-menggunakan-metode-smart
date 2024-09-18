-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 12:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbspk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif` varchar(100) DEFAULT NULL,
  `C1` int(11) DEFAULT NULL,
  `C2` int(11) DEFAULT NULL,
  `C3` int(11) DEFAULT NULL,
  `C4` int(11) DEFAULT NULL,
  `C5` int(11) DEFAULT NULL,
  `C6` int(11) DEFAULT NULL,
  `C7` int(11) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id`, `alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `jurusan`) VALUES
(1, 'ASUS ROG Zephyrus GA401QEC-AW', 1, 3, 3, 1, 4, 3, 5, 'Informatika'),
(2, 'ACER Nitro 5 AN515-58-710Q', 2, 3, 5, 2, 4, 5, 3, 'Informatika'),
(3, 'ASUS TUF Dash F15 FX516PM-I738B7-WO', 3, 3, 5, 1, 4, 5, 3, 'Informatika'),
(4, 'ACER Swift X 14 SFX14-71G-70KB', 1, 3, 3, 2, 5, 4, 5, 'Informatika'),
(5, 'LENOVO Legion 5 15ACH6', 3, 2, 5, 1, 4, 2, 3, 'Informatika'),
(6, 'LENOVO LOQ 15IAH7', 4, 3, 5, 2, 3, 2, 3, 'Informatika'),
(7, 'ASUS VivoBook Pro M3500QC-OLED955', 4, 3, 5, 2, 4, 2, 3, 'Informatika'),
(8, 'ASUS VivoBook 14 A1404ZA-IPS321', 5, 1, 5, 1, 3, 4, 3, 'Informatika'),
(9, 'MSI Thin GF63 12VE-498ID', 4, 2, 5, 2, 3, 4, 3, 'Informatika'),
(10, 'MSI Bravo 15 C7VE', 3, 2, 5, 2, 4, 4, 3, 'Informatika'),
(11, 'Asus Zenbook UX333FA', 1, 2, 3, 2, 3, 4, 5, 'Manajemen'),
(12, 'Dell XPS 13', 2, 3, 3, 3, 4, 3, 5, 'Manajemen'),
(13, 'Lenovo ThinkPad X1 Carbon', 2, 2, 3, 2, 5, 5, 3, 'Manajemen'),
(14, 'HP Envy 13', 1, 2, 3, 2, 4, 5, 3, 'Manajemen'),
(15, 'Acer Swift 3', 3, 2, 3, 2, 3, 5, 5, 'Manajemen'),
(16, 'Microsoft Surface Laptop 3', 4, 2, 3, 1, 3, 2, 3, 'Manajemen'),
(17, 'Apple MacBook Air', 3, 2, 3, 3, 4, 2, 3, 'Manajemen'),
(18, 'Asus VivoBook S15', 5, 2, 5, 2, 3, 3, 5, 'Manajemen'),
(19, 'Lenovo IdeaPad 330S', 5, 2, 3, 2, 3, 4, 3, 'Manajemen'),
(20, 'HP Pavilion 14', 4, 2, 3, 2, 3, 5, 3, 'Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informatika`
--

CREATE TABLE `tbl_informatika` (
  `id` int(11) NOT NULL,
  `merek` varchar(50) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `processor` varchar(50) DEFAULT NULL,
  `ukuran_layar` varchar(20) DEFAULT NULL,
  `sistem_operasi` varchar(20) DEFAULT NULL,
  `kapasitas_ram` varchar(10) DEFAULT NULL,
  `tipe_vga` varchar(50) DEFAULT NULL,
  `penyimpanan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_informatika`
--

INSERT INTO `tbl_informatika` (`id`, `merek`, `harga`, `processor`, `ukuran_layar`, `sistem_operasi`, `kapasitas_ram`, `tipe_vga`, `penyimpanan`) VALUES
(1, 'ASUS ROG Zephyrus GA401QEC-AW', 'Rp. 28.000.000', 'AMD Octa Core', '14 Inch', 'Windows 10 Home', '16 GB', 'NVIDIA GeForce RTX 3050Ti 4GB', '1 TB SSD'),
(2, 'ACER Nitro 5 AN515-58-71Q0', 'Rp. 22.700.000', 'Intel Core i7', '15.6 Inch', 'Windows 11 Home', '16 GB', 'NVIDIA GeForce RTX 4060', '512 GB SSD'),
(3, 'ASUS TUF Dash F15 FX516PM-I736B7W-O', 'Rp. 20.100.000', 'Intel Core i7', '15.6 Inch', 'Windows 10 Home', '16 GB', 'NVIDIA GeForce RTX 3060', '512 GB SSD'),
(4, 'ACER Swift X 14 SFX14-71G-70KB', 'Rp. 27.350.000', 'Intel Core i7', '14.5 Inch', 'Windows 11 Home', '32 GB', 'NVIDIA GeForce RTX 4050 GDDR6 6GB', '1 TB SSD'),
(5, 'LENOVO Legion 5 15ACH6', 'Rp. 18.200.000', 'AMD Hexa Core', '15.6 Inch', 'Windows 10 Home', '16 GB', 'NVIDIA GeForce RTX 3050 4GB', '512 GB SSD'),
(6, 'LENOVO LOQ 15IAX9', 'Rp. 13.100.000', 'Intel Core i5', '15.6 Inch', 'Windows 11 Home', '12 GB', 'NVIDIA GeForce RTX 3050 6GB GDDR6', '512 GB SSD'),
(7, 'ASUS VivoBook Pro M3500QC-OLED955', 'Rp. 14.500.000', 'AMD Octa Core', '15.6 Inch', 'Windows 11 Home', '16 GB', 'NVIDIA GeForce RTX 3050 4GB', '512 GB SSD'),
(8, 'Asus Vivobook 14 A1404ZA-IPS321', 'Rp. 6.800.000', 'Core i3-1215U', '14 Inch', 'Windows 11 Home', '8 GB', 'Intel UPD Graphics', '256 GB SSD'),
(9, 'MSI Thin GF63 12VE-498ID', 'Rp. 15.500.000', 'Intel Core i7', '15.6 Inch', 'Windows 11 Home', '8 GB', 'NVIDIA GeForce RTX 4050 GDDR6 6GB', '512 GB SSD'),
(10, 'MSI Bravo 15 C7VE', 'Rp. 17.100.000', 'AMD Hexa Core', '15.6 Inch', 'Windows 11 Home', '16 GB', 'NVIDIA GeForce RTX 4050 GDDR6 6GB', '512 GB SSD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(50) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL,
  `normalisasi` decimal(5,2) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `kriteria`, `bobot`, `normalisasi`, `jenis`) VALUES
(1, 'Harga', 25, 0.25, 'Cost'),
(2, 'Tipe Prosesor', 20, 0.20, 'Benefit'),
(3, 'Ukuran Layar', 10, 0.10, 'Benefit'),
(4, 'Sistem Operasi', 5, 0.05, 'Benefit'),
(5, 'Kapasitas RAM', 15, 0.15, 'Benefit'),
(6, 'Tipe VGA', 10, 0.10, 'Benefit'),
(8, 'Kapasitas Penyimpanan', 15, 0.15, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manajemen`
--

CREATE TABLE `tbl_manajemen` (
  `id` int(11) NOT NULL,
  `merek` varchar(50) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `processor` varchar(50) DEFAULT NULL,
  `ukuran_layar` varchar(20) DEFAULT NULL,
  `sistem_operasi` varchar(20) DEFAULT NULL,
  `kapasitas_ram` varchar(10) DEFAULT NULL,
  `tipe_vga` varchar(50) DEFAULT NULL,
  `penyimpanan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_manajemen`
--

INSERT INTO `tbl_manajemen` (`id`, `merek`, `harga`, `processor`, `ukuran_layar`, `sistem_operasi`, `kapasitas_ram`, `tipe_vga`, `penyimpanan`) VALUES
(1, 'Asus Zenbook UX333FA', 'Rp. 28.000.000', 'Intel Core i5-8265U', '13.3 inci', 'Windows 10 Home', '8GB', 'Intel UHD Graphics 620', '512GB SSD'),
(2, 'Dell XPS 13', 'Rp. 22.700.000', 'Intel Core i7-1165G7', '13.4 inci', 'Windows 11 Home', '16GB', 'Intel Iris Xe Graphics', '512GB SSD'),
(3, 'Lenovo ThinkPad X1 Carbon', 'Rp. 20.100.000', 'Intel Core i5', '14. inci', 'Windows 10 Home', '32 GB', 'Intel UHD Graphics', '256 GB'),
(4, 'HP Envy 13', 'Rp. 27.350.000', 'Intel Core i5', '13.3 inci', 'Windows 10 Home', '16 GB', 'Intel UHD Graphics', '256 GB'),
(5, 'Acer Swift 3', 'Rp. 18.200.000', 'Intel Core i5-1035G1', '14. inci', 'Windows 10 Home', '8GB', 'Intel UHD Graphics', '512 GB'),
(6, 'Microsoft Surface Laptop 3', 'Rp. 13.100.000', 'Intel Core i5', '13,5 inci', 'macOS', '8GB', 'Intel Iris Plus Graphics', '256GB'),
(7, 'Apple MacBook Air', 'Rp. 15.999.000', 'Intel Core i5', '13.3 inci', 'Windows 11 Home', '8 GB', 'Intel Iris Plus Graphics', '256GB'),
(8, 'Asus VivoBook S15', 'Rp. 9.000.000', 'Intel Core i5-1135G7', '15 inci', 'Windows 10 Home', '8GB', 'Intel Iris Xe Graphics', '512 GB'),
(9, 'Lenovo IdeaPad 330S', 'Rp. 6.999.000', 'Intel Core i5-8250U', '14 inci', 'Windows 10 Home', '8 GB', 'Intel UHD Graphics 620', '256GB'),
(10, 'HP Pvilion 14', 'Rp. 10.000.000', 'Intel Core i5-1035G1', '13.3 inci', 'Windows 10 Home', '8 GB', 'Intel UHD Graphics', '256GB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_kriteria`
--

CREATE TABLE `tbl_sub_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `sub_kriteria` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL,
  `bobot` decimal(5,2) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sub_kriteria`
--

INSERT INTO `tbl_sub_kriteria` (`id`, `kriteria`, `sub_kriteria`, `nilai`, `bobot`, `jurusan`) VALUES
(1, 'Harga', 'Sangat Mahal (> 25 Juta)', 1, 25.00, 'Informatika'),
(2, 'Harga', 'Mahal (20-25 Juta)', 2, 25.00, 'Informatika'),
(3, 'Harga', 'Sedang (15-20 Juta)', 3, 25.00, 'Informatika'),
(4, 'Harga', 'Murah (10-15 Juta)', 4, 25.00, 'Informatika'),
(5, 'Harga', 'Sangat Murah (< 10 Juta)', 5, 25.00, 'Informatika'),
(6, 'Tipe Processor', 'Intel Core i3 / AMD Quad Core', 1, 15.00, 'Informatika'),
(7, 'Tipe Processor', 'Intel Core i5 / AMD Hexa Core', 2, 15.00, 'Informatika'),
(8, 'Tipe Processor', 'Intel Core i7 / AMD Octa Core', 3, 15.00, 'Informatika'),
(9, 'Tipe Processor', 'Intel Core i9 / AMD Deca Core', 4, 15.00, 'Informatika'),
(10, 'Tipe Processor', 'AMD Ryzen 5 / Intel Xeon', 5, 15.00, 'Informatika'),
(11, 'Ukuran Layar', '< 11 Inch', 1, 10.00, 'Informatika'),
(12, 'Ukuran Layar', '12-14,5 Inch', 3, 10.00, 'Informatika'),
(13, 'Ukuran Layar', '<=15 Inch', 5, 10.00, 'Informatika'),
(14, 'Kapasitas RAM', '< 4GB', 1, 15.00, 'Informatika'),
(15, 'Kapasitas RAM', '4 GB', 2, 15.00, 'Informatika'),
(16, 'Kapasitas RAM', '8-12 GB', 3, 15.00, 'Informatika'),
(17, 'Kapasitas RAM', '12-16 GB', 4, 15.00, 'Informatika'),
(18, 'Kapasitas RAM', '> 16 GB', 5, 15.00, 'Informatika'),
(19, 'Tipe VGA', 'Integrated', 1, 10.00, 'Informatika'),
(20, 'Tipe VGA', 'NVIDIA GeForce RTX 3050', 2, 10.00, 'Informatika'),
(21, 'Tipe VGA', 'NVIDIA GeForce RTX 3050Ti', 3, 10.00, 'Informatika'),
(22, 'Tipe VGA', 'NVIDIA GeForce RTX 4050', 4, 10.00, 'Informatika'),
(23, 'Tipe VGA', 'NVIDIA GeForce RTX 4060', 5, 10.00, 'Informatika'),
(24, 'Penyimpanan', '< 256 GB', 1, 15.00, 'Informatika'),
(25, 'Penyimpanan', '256 - 512 GB', 3, 15.00, 'Informatika'),
(26, 'Penyimpanan', '> 512 GB', 5, 15.00, 'Informatika'),
(27, 'Sistem Operasi', 'Windows 10 Home', 1, 10.00, 'Informatika'),
(28, 'Sistem Operasi', 'Windows 11 Home', 2, 10.00, 'Informatika'),
(29, 'Harga', 'Sangat Mahal (> 25 Juta)', 1, 25.00, 'Manajemen'),
(30, 'Harga', 'Mahal (20-25 Juta)', 2, 25.00, 'Manajemen'),
(31, 'Harga', 'Sedang (15-20 Juta)', 3, 25.00, 'Manajemen'),
(32, 'Harga', 'Murah (10-15 Juta)', 4, 25.00, 'Manajemen'),
(33, 'Harga', 'Sangat Murah (< 10 Juta)', 5, 25.00, 'Manajemen'),
(34, 'Tipe Processor', 'Intel Core i3 / AMD Quad Core', 1, 15.00, 'Manajemen'),
(35, 'Tipe Processor', 'Intel Core i5 / AMD Hexa Core', 2, 15.00, 'Manajemen'),
(36, 'Tipe Processor', 'Intel Core i7 / AMD Octa Core', 3, 15.00, 'Manajemen'),
(37, 'Tipe Processor', 'Intel Core i9 / AMD Deca Core', 4, 15.00, 'Manajemen'),
(38, 'Tipe Processor', 'AMD Ryzen 5 / Intel Xeon', 5, 15.00, 'Manajemen'),
(39, 'Ukuran Layar', '< 11 Inch', 1, 10.00, 'Manajemen'),
(40, 'Ukuran Layar', '12-14,5 Inch', 3, 10.00, 'Manajemen'),
(41, 'Ukuran Layar', '<=15 Inch', 5, 10.00, 'Manajemen'),
(42, 'Kapasitas RAM', '< 4GB', 1, 15.00, 'Manajemen'),
(43, 'Kapasitas RAM', '4 GB', 2, 15.00, 'Manajemen'),
(44, 'Kapasitas RAM', '8GB-12 GB', 3, 15.00, 'Manajemen'),
(45, 'Kapasitas RAM', '12-16 GB', 4, 15.00, 'Manajemen'),
(46, 'Kapasitas RAM', '> 16 GB', 5, 15.00, 'Manajemen'),
(47, 'Tipe VGA', 'Intel Iris Plus Graphics', 2, 15.00, 'Manajemen'),
(48, 'Tipe VGA', 'Intel Iris Xe Graphics', 3, 15.00, 'Manajemen'),
(49, 'Tipe VGA', 'Intel UHD Graphics 620', 4, 15.00, 'Manajemen'),
(50, 'Tipe VGA', 'Intel UHD Graphics', 5, 15.00, 'Manajemen'),
(51, 'Penyimpanan', '< 256 GB', 1, 15.00, 'Manajemen'),
(52, 'Penyimpanan', '256 - 512 GB', 3, 15.00, 'Manajemen'),
(53, 'Penyimpanan', '> 512 GB', 5, 15.00, 'Manajemen'),
(54, 'Sistem Operasi', 'macOS', 1, 10.00, 'Manajemen'),
(55, 'Sistem Operasi', 'Windows 10 Home', 2, 10.00, 'Manajemen'),
(56, 'Sistem Operasi', 'Windows 11 Home', 3, 10.00, 'Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_informatika`
--
ALTER TABLE `tbl_informatika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manajemen`
--
ALTER TABLE `tbl_manajemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_informatika`
--
ALTER TABLE `tbl_informatika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_manajemen`
--
ALTER TABLE `tbl_manajemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
