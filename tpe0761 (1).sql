-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 11:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpe0761`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbk_kategori`
--

CREATE TABLE `tbk_kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbk_kategori`
--

INSERT INTO `tbk_kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Living Room'),
(2, 'Bedroom'),
(3, 'Dining Room'),
(4, 'Home Office'),
(5, 'Kitchen Room'),
(6, 'Bathroom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_user` int(19) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_user`, `email`, `username`, `password`) VALUES
(1, 'ahninuraini.srg@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya`
--

CREATE TABLE `tbl_biaya` (
  `id_biaya` int(11) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `biaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya`
--

INSERT INTO `tbl_biaya` (`id_biaya`, `lokasi`, `biaya`) VALUES
(1, 'aimas', '20.000'),
(2, 'SP', '30.000'),
(3, 'Katimin', '35.000'),
(4, 'Katapop', '35.000'),
(5, 'Modan', '40.000'),
(6, 'km19-km10', '15.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `status_order` varchar(2) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `total` int(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `id_session` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_kat`, `id_style`, `nm_produk`, `harga`, `stok`, `warna`, `gambar`, `deskripsi`) VALUES
(3, 2, 3, 'Iron Bed', '2.000.000', 4, 'black', 'bedrom5.jpg', 'The charm of old world splendor is brought to life in this antique iron bed.'),
(4, 2, 1, 'Bed Frame', '5.000.000', 4, 'Cream', 'bedrom2.jpg', 'Your bedroom deserves a bed that will stand the test of time in a world full of trends.'),
(5, 2, 3, 'Beaded Headboard', '3.000.000', 3, 'Cream', 'bedrom8.jpg', 'Showing off effortless, classic style, this metal bed pairs well with a traditional space.'),
(6, 2, 4, 'Mirror Standing', '400.000', 10, 'white', 'cermin.jpg', 'Material Alumunim Design 200 x 100 cm'),
(14, 3, 3, 'Phinnaeus French Country Dining Chairs (set 6)', '5.000.000', 2, 'Brown', 'kitcheclasic3.jpg', 'Take your dining room back to a simpler time with this set of four French country dining chairs.'),
(18, 4, 1, 'office chair', '5.000.000', 6, 'Brown', 'pro1.jpg', 'Make room for your corner office with the Lincoln desk. Clever yet classic, this corner desk blends seamlessly into most decors with a modest footprint and simple silhouette.'),
(19, 5, 1, 'velvet chairs set', '8.500.000', 2, 'dusty pink', 'pro2.jpg', 'Features :Set includes 4 chairs ,Velvet upholstery, Mid-century modern style Available in 1 color, Diamond-stitched seatback, Rounded seatback, Armless, Rubber floor protectors, 250-pound weight capacity, Measures 30.5 inches high x 19.5 inches wide x 18.5 inches deep'),
(20, 4, 3, 'Accent Chair', '7.200.000', 5, 'broken white', 'pro4.jpg', 'in design with material fabric and dimensions 28.0 in L  X 27.0 In. W X 43.0 In. made in China'),
(21, 4, 1, 'Student Task Chair', '3.500.000', 3, 'ice blue', 'pro5.jpg', 'Features: Task chair,Molded plastic seat and backrest, Sturdy nylon casters,360-degree swivel, Available in ice blue, Adjustable seat height, Assembly required and Dimensions: Overall: 18.7 inches in diameter x 29.5 - 34.3 inches high, Seat: 15.9 inches wide x 14.6 inches deep, Seat Height: 13.8 - 18.5 inches high'),
(22, 3, 1, 'Baxter Dining Set', '9.000.000', 2, 'dark-grey', 'pro6.jpg', 'Features : Includes 1 table and 4 storage ottomans,Space-saving design, Lift-off ottoman cushions reveal storage space, Made with laminated particle board, vinyl and foam, Available in dark-grey, taupe, or black finish and Dimensions :Table: 29.7 inches high x 31 inches wide x 31 inches deep Ottoman: 18.75 inches high x 15 inches wide x 15 inches deep Ottoman storage: 15.75 inches high x 13.75 inches wide x 13.75 inches deep'),
(23, 1, 4, 'Shofa Bed', '6.600.000', 3, 'broken white', 'pro7.jpg', 'Features : Convert from a loveseat sofa to a sleeper or chaise lounger with adjustable armrests   - Solid, reinforced birch wood frame can support up to 660 lbs   - Two large accent pillows with removable covers for additional lounging comfort   - Soft thick foam padded cushions provide an extra plush experience   - Seat cushion filled with fire retardant foam for added safety  and Specifications : Weight Capacity: 660 lbs   - Sofa Size: 65.25\" L x 27.5\" W x 31.5\" H   - Bed Size: 74\" L x 27.5\" W x 31.5\"   - Lounge Size: 69.25\" L x 27.5\" W x 31.5\" H   - Seat Height: 17\" H   - Cushion Thickness: 3.9\"');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_style`
--

CREATE TABLE `tbl_style` (
  `id_style` int(11) NOT NULL,
  `nama_style` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_style`
--

INSERT INTO `tbl_style` (`id_style`, `nama_style`) VALUES
(1, 'Modern'),
(2, 'Casual'),
(3, 'Clasic'),
(4, 'Aeshtetick');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `iduser` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `firtsname` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`iduser`, `id_biaya`, `firtsname`, `lastname`, `alamat`, `email`, `notelp`, `username`, `password`) VALUES
(6, 1, 'ani', 'nur', 'jl.jambu', 'ahninuraini.srg@gmail.com', 2147483647, 'username', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbk_kategori`
--
ALTER TABLE `tbk_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_style`
--
ALTER TABLE `tbl_style`
  ADD PRIMARY KEY (`id_style`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbk_kategori`
--
ALTER TABLE `tbk_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_user` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_style`
--
ALTER TABLE `tbl_style`
  MODIFY `id_style` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
