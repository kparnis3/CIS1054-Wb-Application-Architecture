-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 09:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `iID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`iID`, `userID`) VALUES
(5, 1),
(6, 1),
(7, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(256) NOT NULL,
  `usr_surname` varchar(256) NOT NULL,
  `usr_email` varchar(256) NOT NULL,
  `usr_nmb` varchar(256) NOT NULL,
  `usr_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usr_id`, `usr_name`, `usr_surname`, `usr_email`, `usr_nmb`, `usr_pwd`) VALUES
(1, 'Kian', ' Parnis', ' kpar0007@gmail.com', '77884757', '1234'),
(2, 'Evangeline', ' Azzopardi', ' evieazzopardi@gmail.com', '79045826', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `iID` int(11) NOT NULL,
  `iName` char(20) NOT NULL,
  `iDesc` char(200) NOT NULL,
  `iIngre` char(250) NOT NULL,
  `iPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`iID`, `iName`, `iDesc`, `iIngre`, `iPrice`) VALUES
(1, 'Water', 'It is just water, there is nothing to explain or describe.', '100% Water', 2),
(2, 'Iced Tea', 'Iced tea, peach or lemon flavoured', 'Water, fructose, citric acid, lemon juice concentrate, natural flavour, tea, potassium, sugar.', 2.95),
(3, 'Tea and Coffee', 'White, Green and Black Tea available. Black coffee, Cappucino and Espresso available', 'Tea leaves, Coffee Beans, Plant-based and regular milk.', 3.5),
(4, 'Sandwiches', 'Customise your sandwich with the choices below.', 'White or Oatmeal bread, Ham, Chicken, Bacon, Tuna, Lettuce, Spinach, Alfalfa sprouts, Tomatoes, Peppers, Onions, Hummus, Tofu, Mushrooms, Mayonnaise, Ranch dressing.', 3.95),
(5, 'Wraps', 'Customise your wrap with the choices below.', 'White or Oatmeal wrap, Ham, Chicken, Bacon, Tuna, Lettuce, Avacado, Spinach, Tomatoes, Peppers, Onions, Hummus, Tofu, Mushrooms, Mayonnaise, Ranch dressing.', 4.95),
(6, 'Pasta Salad', 'Customise your pasta salad with the choices below.', 'White or Brown pasta, Ham, Chicken, Bacon, Tuna, Avacado, Spinach, Tomatoes, Peppers, Onions, Hummus on the side, Tofu, Mushrooms, Pesto, Tomato and Basil Sauce', 5.95),
(7, 'Cake Slices', 'Victoria Sponge, Chocolate, Red Velvet, Coffee and Vanilla flavours available. Vegan and Gluten Free options available', 'Flour, Eggs, Water, Milk, Flax Seeds, Cocoa powder, Coffee powder, Jam, Vanilla, Cream.', 2.55),
(8, 'Ice Cream', 'Chocolate, Strawberry, Red Velvet, Coffee, Vanilla, Mint flavours available. Vegan and Gluten Free options available', 'Milk, Flax Seeds, Cocoa powder, Coffee powder, Stawberry Jam, Vanilla beans, Cream, Mint.', 0.95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD KEY `iID` (`iID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`iID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `iID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`iID`) REFERENCES `menu_item` (`iID`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `login` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
