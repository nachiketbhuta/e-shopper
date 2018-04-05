-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 02:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(25) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `id`, `name`, `imagePath`, `quantity`, `price`) VALUES
('nachiketbhuta', 4, 'Round Neck T-Shirt', 'assets/products/men/roundneckBlack.jpg', 7, 350);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Name` varchar(30) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Price` float NOT NULL,
  `Product Description` varchar(60) NOT NULL,
  `Path` varchar(50) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Name`, `Quantity`, `Price`, `Product Description`, `Path`, `ID`) VALUES
('Cardigan ', 20, 650, 'Front Opening\r\nHood Neck\r\nFull Sleeve\r\nSoft Touch Cotton Fab', 'assets/products/men/shrugBlue.jpg', 1),
('V-Neck T-Shirt', 20, 350, '80% Cotton and 20% polyester\r\nV-Neck T-Shirt\r\nSlim Fit\r\nHalf', 'assets/products/men/vneckBlack.jpg', 2),
('V-Neck T-Shirt', 20, 350, '80% Cotton and 20% polyester\r\nRound Neck \r\nSlim Fit\r\nHalf Sl', 'assets/products/men/vneckWhite.jpg', 3),
('Round Neck T-Shirt', 20, 350, 'Round Neck T-Shirt', 'assets/products/men/roundneckBlack.jpg', 4),
('Round Neck T-Shirt', 20, 350, '80% Cotton and 20% polyester Round Neck Slim Fit Half Sleeve', 'assets/products/men/roundneckBlue.jpg', 5),
('Collar T-Shirt', 20, 500, '60% Cotton and 40% polyester Collar Neck Slim Fit Half Sleev', 'assets/products/men/collarblack.jpg', 6),
('Collar T-Shirt', 20, 500, '60% Cotton and 40% polyester Collar Neck Slim Fit Half Sleev', 'assets/products/men/collarBlue.jpg', 7),
('Half Sleeve Shirt', 20, 500, '80% Cotton and 20% polyester \r\nRegular Fit \r\nHalf Sleeve \r\nM', 'assets/products/men/halfsleeveshirtGreen.jpg', 8),
('Half Sleeve Shirt', 20, 500, '80% Cotton and 20% polyester \r\nRegular Fit \r\nHalf Sleeve \r\nM', 'assets/products/men/halfsleeveshirtWhite.jpg', 9),
('Full Sleeve Shirt', 20, 650, '80% Cotton and 20% polyester\r\nSlim Fit \r\nFull Sleeve \r\nMachi', 'assets/products/men/fullsleeveBlue.jpg', 10),
('Full Sleeve Shirt', 20, 650, '80% Cotton and 20% polyester\r\nSlim Fit \r\nFull Sleeve \r\nMachi', 'assets/products/men/fullsleeveRed.jpg', 11),
('Joggers Tracks', 20, 700, '97% cotton and 3% elastane\r\nSlim Fit\r\nCold Water Machine Was', 'assets/products/men/joggertracksBlack.jpg', 12),
('Joggers Tracks', 20, 700, '97% cotton and 3% elastane\r\nSlim Fit\r\nCold Water Machine Was', 'assets/products/men/joggertracksGrey.jpg', 13),
('Jogger Jeans', 20, 800, 'Material:- Denim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nM', 'assets/products/men/joggerjeansBlack.jpg', 14),
('Jogger Jeans', 20, 800, 'Material:- Denim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nM', 'assets/products/men/joggerjeansBlue.jpg', 15),
('Jeans', 20, 1000, '\r\nDenim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nMade in In', 'assets/products/men/jeansBlack.jpg', 16),
('Jeans', 20, 1000, '\r\nDenim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nMade in In', 'assets/products/men/jeansBlue.jpg', 17),
('Shorts', 20, 450, '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/shortsBlack.jpg', 18),
('Shorts', 20, 450, '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/shortsCargo.jpg', 19),
('Black Croptop', 20, 500, 'Black CropTop', 'assets/products/women/croptopBlack.jpg', 20),
('Pink CropTop', 20, 600, 'Pink CropTop', 'assets/products/women/croptopPink.jpg', 21),
('Blue Gown', 30, 3000, 'Blue Gown', 'assets/products/women/gownBlue.jpg', 22),
('Red Gown', 30, 4000, 'Red Gown', 'assets/products/women/gownRed.jpg', 23),
('Black Jeans', 25, 1500, 'Black Jeans', 'assets/products/women/jeansBlack.jpg', 24),
('Blue Jeans', 15, 1400, 'Blue Jeans', 'assets/products/women/jeansblue.jpg', 25),
('Black Leggings', 20, 600, 'Black Leggings', 'assets/products/women/leggingsBlack.jpg', 26),
('Grey Leggings', 40, 700, 'Grey Leggings', 'assets/products/women/leggingsGrey.jpg', 27),
('Black One Piece', 20, 3500, 'Black One Piece', 'assets/products/women/onepieceBlack.jpg', 28),
('Blue One Piece', 25, 3750, 'Blue One Piece', 'assets/products/women/onepieceBlue.jpg', 29),
('Black & White Ringtees', 20, 900, 'Black & White Ringtees', 'assets/products/women/ringteesBlackWhite.jpg', 30),
('Red & White Ringtees', 30, 1799, 'Red & White Ringtees', 'assets/products/women/ringteesRedWhite.jpg', 31),
('Blue Shirt', 50, 1500, 'Blue Shirt', 'assets/products/women/shirtBlue.jpg', 32),
('Maroon Shirt', 40, 1600, 'Maroon Shirt', 'assets/products/women/shirtMaroon.jpg', 33),
('Black Shorts', 30, 700, 'Black Shorts', 'assets/products/women/shortsBlack.jpg', 34),
('Blue Shorts', 30, 900, 'Blue Shorts', 'assets/products/women/shortsBlue.jpg', 35),
('Black Skirt', 20, 1300, 'Black Skirt', 'assets/products/women/skirtBlack.jpg', 36),
('Blue Skirt', 35, 1500, 'Blue Skirt', 'assets/products/women/skirtBlue.jpg', 37),
('Blue Top', 40, 1500, 'Blue Top', 'assets/products/women/topBlue.jpg', 38),
('Pink Top', 50, 1200, 'Pink Top', 'assets/products/women/topPink.jpg', 39),
('Black Collar T-Shirt', 20, 500, 'Black Collar T-Shirt', 'assets/products/kids/collartshirtBlack.jpg', 40),
('White Collar T-Shirt', 25, 700, 'White Collar T-Shirt', 'assets/products/kids/collartshirtWhite.jpg', 41),
('Red Full Sleeve Shirt', 25, 1200, 'Red Full Sleeve Shirt', 'assets/products/kids/fullsleeveRedBlack.jpg', 42),
('White Full Sleeve Shirt', 20, 1300, 'White Full Sleeve Shirt', 'assets/products/kids/fullsleeveWhite.jpg', 43),
('White Half Sleeve Shirt', 25, 1500, 'White Half Sleeve Shirt', 'assets/products/kids/halfsleeveBlackWhite.jpg', 44),
('Red & White Half Sleeve Shirt', 25, 1400, 'Red & White Half Sleeve Shirt', 'assets/products/kids/halfsleeveWhiteRed.jpg', 45),
('Black Jeans', 25, 1700, 'Black Jeans', 'assets/products/kids/jeansBlack.jpg', 46),
('Blue Jeans', 25, 1800, 'Blue Jeans', 'assets/products/kids/jeansBlue.jpg', 47),
('Black Jogger Jeans', 25, 1600, 'Black Jogger Jeans', 'assets/products/kids/joggerjeansBlack.jpg', 48),
('Blue Jogger Jeans', 50, 900, 'Blue Jogger Jeans', 'assets/products/kids/joggerjeansBlue.jpg', 49),
('Black Round Neck T-Shirt', 50, 600, 'Black Round Neck T-Shirt', 'assets/products/kids/roundneckBlack.jpg', 50),
('Red Round Neck T-Shirt', 50, 700, 'Red Round Neck T-Shirt', 'assets/products/kids/roundneckRed.jpg', 51),
('Blue Shorts', 50, 300, 'Blue Shorts', 'assets/products/kids/shortsBlue.jpg', 52),
('Green Shorts', 25, 350, 'Green Shorts', 'assets/products/kids/shortsGreen.jpg', 53),
('Black Skirt', 25, 600, 'Black Skirt', 'assets/products/kids/skirtBlack.jpg', 54),
('Pink Skirt', 25, 700, 'Pink Skirt', 'assets/products/kids/skirtPink.jpg', 55),
('Black Track Pant', 25, 900, 'Black Track Pant', 'assets/products/kids/trackpantBlack.jpg', 56),
('Grey Track Pant', 30, 800, 'Grey Track Pant', 'assets/products/kids/trackpantGrey.jpg', 57),
('Black V-Neck T-Shirt', 35, 1300, 'Black V-Neck T-Shirt', 'assets/products/kids/vneckBlack.jpg', 58),
('Green Top for Girls', 35, 1000, 'Green Top for Girls', 'assets/products/kids/vneckGreen.jpg', 59);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(80) NOT NULL,
  `pin` int(6) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`email`, `name`, `address`, `pin`, `mobile`) VALUES
('abc@abc.com', 'Nachiket Bhuta', 'C 104 old Kapol Nagar opposite Kapol college, Majhatai park', 401209, 2147483647),
('abc@abc.in', 'Karan', 'C 104 old Kapol Nagar opposite Kapol college, Majhatai park', 401209, 2147483647),
('nachiket944@gmail.com', 'Karan', 'C 104 old Kapol Nagar opposite Kapol college, Majhatai park', 401209, 2147483647),
('nachiketbhuta@gmail.com', 'Karan', 'C 104 old Kapol Nagar opposite Kapol college, Majhatai park', 401209, 2147483647),
('nshmadhani@gmail.com', 'Karan', 'C 104 old Kapol Nagar opposite Kapol college, Majhatai park', 401209, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('desaidhairya', 'e10adc3949ba59abbe56e057f20f883e', 'desaidhairya3@gmail.com'),
('nachiketbhuta', '202cb962ac59075b964b07152d234b70', 'nachiketbhuta@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
