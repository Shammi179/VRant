-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 04:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `f_id` int(11) NOT NULL,
  `f_img` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_star` int(11) NOT NULL,
  `f_price` float NOT NULL,
  `f_details` varchar(1000) NOT NULL,
  `f_category` varchar(255) NOT NULL,
  `f_nutrition` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `f_img`, `f_name`, `f_star`, `f_price`, `f_details`, `f_category`, `f_nutrition`) VALUES
(1, 'img/order/1.png', 'Fruit Salad', 5, 500, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi.', 'Homemade / Salad', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(2, 'img/order/2.png', 'Vegetable Salad', 5, 450, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Salad', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(3, 'img/order/3.png', 'Ilish Panta', 5, 200, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi.', 'Homemade / Fish', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(4, 'img/order/4.png', 'Yougurt with Fruit & Almond', 3, 550, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Yougurt', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(5, 'img/order/5.png', 'Rui Fish Curry', 5, 350, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Fish', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(6, 'img/order/6.png', 'Vegetable Soup', 5, 300, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Soup', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(7, 'img/order/7.png', 'Chicken Curry', 5, 400, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Chicken', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(8, 'img/order/8.png', 'Fresh Juice', 5, 100, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Juice', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(9, 'img/order/9.png', 'Chicken Soup', 5, 300, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Soup', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(10, 'img/order/10.png', 'Roasted Vegetable', 5, 200, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Vegetable', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(11, 'img/order/11.png', 'Payesh', 5, 200, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Dessert', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>'),
(12, 'img/order/12.png', 'Sea Fish', 5, 700, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus vitae esse necessitatibus, distinctio ipsa sapiente alias, repellat consectetur libero sequi. ', 'Homemade / Fish', 'Energy: 544 kcal <br>\nProtein: 7.8 g <br>\nCarbohydrate: 51.6 g <br>\nFat: 20 g <br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`f_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
