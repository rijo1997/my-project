-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 02:23 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_halwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedid` int(50) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_on` date NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedid`, `cust_id`, `name`, `email`, `message`, `created_on`, `status`) VALUES
(1, 1, 'Rijo', 'r@gmail.com', 'good', '2018-04-06', 1),
(3, 1, 'Rijo', 'r@gmail.com', 'nice', '2018-04-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `status`, `role`) VALUES
('b@gmail.com', 'b1', 1, 1),
('car@gmail.com', 'c1', 1, 1),
('j@gmail.com', 'j1', 1, 1),
('r@gmail.com', 'r1', 1, 1),
('rijo@gmail.com', 'r5', 1, 1),
('rijosrk@gmail.com', 'qwert', 1, 0),
('rp@gmail.com', 'rp2', 1, 1),
('rv@gmail.com', 'rv1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `cust_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`cust_id`, `email`, `name`, `ph_no`) VALUES
(1, 'b@gmail.com', 'Bony joseph', '8589898955'),
(2, 'bo@gmail.com', 'Bony joseph', '8589898989'),
(3, 'ro@gmail.com', 'rony p james', '8589898955'),
(4, 'rijovarghese@mca.ajce.in', 'Rijo', '8589898989'),
(5, 'r@gmail.com', 'Rijo', '8595959595'),
(6, 'j@gmail.com', 'Jubin', '8565458556'),
(8, 'rp@gmail.com', 'Roni p james', '8592926466'),
(9, 'car@gmail.com', 'blaze', '7898858985'),
(10, 'rv@gmail.com', 'Robin ', '8587451445');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `bank_id` int(50) NOT NULL,
  `bankname` varchar(200) NOT NULL,
  `cardno` varchar(255) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `cvv` int(50) NOT NULL,
  `expiredate` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`bank_id`, `bankname`, `cardno`, `cardname`, `cvv`, `expiredate`, `amount`, `status`) VALUES
(1, 'SBI', '1212121212121212', 'Rijo varghese', 123, '15/20', 464535, 1),
(2, 'SBI', '1313131313131313', 'roni', 456, '5/26', 75620, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `totalwp` int(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `p_id`, `cust_id`, `weight`, `totalwp`, `status`) VALUES
(12, 13, 10, 1, 250, 1),
(17, 14, 10, 6, 1530, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'North Indian', 1),
(2, 'South Indian', 1),
(3, 'East Indian', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `dis_id` int(50) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`dis_id`, `d_name`, `status`) VALUES
(1, 'palakkad', 1),
(5, 'kottayam', 1),
(6, 'kannur', 1),
(7, 'Kozikkodu', 1),
(8, 'Thiruvananthapuram', 1),
(9, 'Idukki', 1),
(10, 'Pathanamthitta', 1),
(11, 'Kasargod', 1),
(12, 'Malappuram', 1),
(13, 'Wayanad', 1),
(14, 'Ernakulam', 1),
(15, 'Thrissur', 1),
(16, 'Kollam', 1),
(17, 'Alappuzha', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(50) NOT NULL,
  `p_id` int(100) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `p_id`, `image1`, `status`) VALUES
(1, 1, 'uploads/applehalwa.jpg', 1),
(2, 2, 'uploads/r2.jpg', 1),
(3, 3, 'uploads/r3.jpg', 1),
(8, 8, 'uploads/b1.jpg', 1),
(9, 9, 'uploads/t1.jpg', 1),
(10, 10, 'uploads/moog.jpg', 1),
(11, 11, 'uploads/vv.jpg', 1),
(12, 12, 'uploads/Kesar.jpg', 1),
(13, 13, 'uploads/pista.jpg', 1),
(14, 14, 'uploads/dryfruit.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(50) NOT NULL,
  `cust_id` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `dis_id` int(100) NOT NULL,
  `tot_price` double NOT NULL,
  `weight` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `pcode` int(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date_of_order` date NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `cust_id`, `p_id`, `dis_id`, `tot_price`, `weight`, `name`, `lname`, `phno`, `hname`, `pcode`, `city`, `date_of_order`, `status`) VALUES
(1, 8, 8, 10, 2730, 6, 'Bony', 'Joseph', '8178451452', 'kumbukkal', 686510, '', '2018-05-16', 1),
(2, 8, 10, 10, 2730, 1, 'Bony', 'Joseph', '8178451452', 'kumbukkal', 686510, '', '2018-05-16', 1),
(3, 8, 3, 10, 2730, 1, 'Bony', 'Joseph', '8178451452', 'kumbukkal', 686510, '', '2018-05-16', 1),
(4, 8, 11, 10, 2730, 6, 'Bony', 'Joseph', '8178451452', 'kumbukkal', 686510, '', '2018-05-16', 1),
(5, 8, 9, 10, 2730, 1, 'Bony', 'Joseph', '8178451452', 'kumbukkal', 686510, '', '2018-05-16', 1),
(7, 8, 8, 1, 925, 5, 'ghghggh', 'gjhjhhj', '8189564885', 'jhjhjhhjhj', 989858, '', '2018-05-17', 1),
(8, 10, 3, 10, 300, 2, 'Robin ', 'varghese', '8592926466', 'mukalil', 689510, 'mukkuttuthara', '2018-05-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(20) NOT NULL,
  `category_id` int(50) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(50) NOT NULL,
  `p_dec` varchar(255) NOT NULL,
  `p_weight` varchar(100) NOT NULL,
  `max_weight` int(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `category_id`, `p_name`, `p_price`, `p_dec`, `p_weight`, `max_weight`, `status`) VALUES
(1, 2, 'Apple halwa', 200, 'Apple Halwa is a South Indian Famous halwa and it is an Indian dessert made with grated apples, sugar and ghee', '1', 6, 1),
(2, 2, 'carret halwa', 210, 'Carrot halwa is  popularly known as gajar ka halwa makes its presence in most special occasions like festivals, celebrations and parties.There are a few different ways of making this – a traditional method using whole milk, a rich version using khoya and ', '1', 6, 1),
(3, 1, 'Badam halwa', 195, ' This halwa made with pistachio is very healthy, tasty and it makes use of very less oil.  It can be served for festivals or also can also be served as a dessert to guests.\r\n\r\nPistachios are very healthy.  They help to maintain a healthy heart. ', '1', 6, 1),
(4, 2, 'Moog Dal Halwa', 170, 'yyyyyy uuuuuu iiiii', '1 ', 0, 0),
(5, 2, 'Wheat Halwa', 165, 'uuuuuuuuuuuu', '1', 0, 0),
(8, 2, 'Badam Halwa', 160, 'hhhhhh jjjjjjj ', '1 ', 6, 0),
(9, 2, 'Tirunelveli Halwa', 160, 'ttttt yyyyyyyyyyy uuuuuuuuuuu ', ' 1', 6, 1),
(10, 1, 'Moog Dal Halwa', 170, 'hmbhsdbckdsbjcdsbc  kjnkjnbkjnfk\r\nd;lcmncdsbckdsc ncdnden', '1', 6, 1),
(11, 1, 'Suki Ka Halwa', 190, 'bcbdckdcck', '1', 6, 0),
(12, 3, 'kesar Halwa', 175, 'kjefnfvkfvkvknv  rvjrnvlrnvlrnv', '1', 6, 0),
(13, 1, ' Pista Halwa', 250, 'This halwa made with pistachio is very healthy, tasty and it makes use of very less oil.  It can be served for festivals or also can also be served as a dessert to guests.\r\n\r\nPistachios are very healthy.  They help to maintain a healthy heart, and also he', '1', 6, 1),
(14, 2, ' Kozkodan Dry fruites Halwa', 255, 'Delicious and exclusive Malabar Style sweet from Kerala and Good quality edible oil & Ghee used for cooking', '1', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedid`),
  ADD KEY `email` (`email`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `p_id_2` (`p_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `pro_id` (`p_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `dis_id` (`dis_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `bank_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `dis_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `signup` (`cust_id`);

--
-- Constraints for table `signup`
--
ALTER TABLE `signup`
  ADD CONSTRAINT `signup_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_product` (`p_id`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `signup` (`cust_id`);

--
-- Constraints for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD CONSTRAINT `tbl_image_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_product` (`p_id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `signup` (`cust_id`),
  ADD CONSTRAINT `tbl_order_ibfk_3` FOREIGN KEY (`p_id`) REFERENCES `tbl_product` (`p_id`),
  ADD CONSTRAINT `tbl_order_ibfk_4` FOREIGN KEY (`dis_id`) REFERENCES `tbl_district` (`dis_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
