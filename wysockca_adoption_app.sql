-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2018 at 09:00 AM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wysockca_adoption_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Carly', 'wysockca@sheridancollege.ca', 'Test', 'This is a test ya dingus'),
(2, 'Carly', 'user@test.com', 'test', 'test'),
(3, 'tester', 'user@test.com', 'lkfjldsf', 'dfasldkfls'),
(4, 'dfgh', 'user@test.com', 'ldfikjv', 'zxcvbnm,');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `pet_id`) VALUES
(10, 9, 14),
(9, 9, 8),
(8, 9, 5),
(11, 9, 2),
(5, 9, 1),
(18, 7, 9),
(24, 7, 18),
(25, 6, 13),
(26, 6, 2),
(27, 6, 1),
(28, 6, 7),
(29, 6, 14);

-- --------------------------------------------------------

--
-- Table structure for table `pet-profile`
--

CREATE TABLE `pet-profile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `animal` varchar(15) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(6) NOT NULL,
  `neutered` varchar(3) NOT NULL,
  `declawed` varchar(3) NOT NULL,
  `kids` varchar(3) NOT NULL,
  `otherPets` varchar(3) NOT NULL,
  `dependency` varchar(15) NOT NULL,
  `energy` varchar(10) NOT NULL,
  `about` longtext NOT NULL,
  `image` varchar(75) NOT NULL,
  `shelter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet-profile`
--

INSERT INTO `pet-profile` (`id`, `name`, `age`, `sex`, `animal`, `breed`, `color`, `size`, `neutered`, `declawed`, `kids`, `otherPets`, `dependency`, `energy`, `about`, `image`, `shelter_id`) VALUES
(1, 'Gizmo', '2017-06-08', 'Male', 'Cat', 'Domestic Shorthair/Mix', 'Brown/Black', 'Small', 'Yes', 'No', 'Yes', 'Yes', 'Social', 'Average', 'Don\'t feed him after midnight!', 'gizmo.jpg', 1),
(2, 'Garfield', '2016-06-19', 'Male', 'Cat', 'Domestic Shorthair/Mix', 'Orange', 'Small', 'Yes', 'No', 'No', 'Yes', 'Independent', 'Lazy', 'I hate Mondays', 'garfield.jpg', 2),
(3, 'Molly', '2018-10-31', 'Female', 'Cat', 'Domestic Shorthair/Mix', 'Black/White', 'Small', 'No', 'No', 'Yes', 'Yes', 'Dependent ', 'Energetic', 'I\'m a cute kitten', 'molly.jpg', 3),
(4, 'Artemis', '2016-01-01', 'Male', 'Cat', 'Domestic Shorthair/Mix', 'White', 'Small', 'Yes', 'Yes', 'Yes', 'Yes', 'Social', 'Lazy', 'Guardian kitty ', 'artemis.jpg', 4),
(5, 'Daisy', '2018-01-15', 'Female', 'Cat', 'Domestic Longhair/Mix', 'Brown/Black', 'Small', 'No', 'No', 'Yes', 'Yes', 'Social', 'Average', 'Pretty kitty', 'daisy.jpg', 5),
(6, 'Nala', '2017-04-01', 'Female', 'Cat', 'Bengal/Shorthair', 'Brown/Black', 'Small', 'Yes', 'No', 'No', 'No', 'Social', 'Average', 'Princess cat', 'nala.jpg', 1),
(7, 'Lola', '2017-09-14', 'Female', 'Dog', 'American Pitbull Terrier', 'Brown/White', 'Large', 'Yes', 'No', 'Yes', 'Yes', 'Dependent', 'Average', 'Lola is a sweet girl with lots of love to offer her new family. She is a shy girl but with time and the proper introduction she warms up fast. Ignoring her and letting her come to you is the best method. Once Lola feels comfortable with you, she\'ll always be by your side. This girl is a snuggler and this she\'s a lapdog! ', 'lola.jpg', 1),
(8, 'Bandit', '2017-01-18', 'Female', 'Dog', 'Border Collie', 'Black/White', 'Large', 'Yes', 'No', 'Yes', 'Yes', 'Social', 'Energetic', 'A cute pupper', 'bandit.jpg', 2),
(9, 'Cooper', '2012-04-19', 'Male', 'Dog', 'Labrador Retriever', 'Blond', 'Large', 'Yes', 'No', 'Yes', 'Yes', 'Social', 'Lazy', 'I\'m a big old dog', 'cooper.jpg', 3),
(10, 'Thor', '2016-08-11', 'Male', 'Dog', 'German Shepherd', 'Brown/Black', 'Large', 'Yes', 'No', 'Yes', 'No', 'Social', 'Average', 'Is gud boi', 'thor.jpg', 4),
(11, 'Sir Reginald Von Bartlesby', '2015-11-12', 'Male', 'Dog', 'Cavalier King Charles Spaniel', 'Brown/White', 'Medium', 'Yes', 'No', 'No', 'No', 'Dependent', 'Lazy', 'Sir Reginald Von Bartlesby is a loving boy, but a bit of a prince. He seems to feel entitled to get up on furniture, so boundaries will need to be set early on. Supervision around children and other pets is advised. If you are looking for a fur baby to spoil, look no further!', 'reginald.jpg', 5),
(12, 'Maggie', '2016-05-18', 'Female', 'Dog', 'Boxer/Mix', 'Brown/White', 'Large', 'Yes', 'No', 'Yes', 'Yes', 'Social', 'Energetic', 'Maggie is a sweet girl with lots of love to offer her new family. She is an active girl who will need an equally active family to keep her well exercised. If she does not receive enough daily exercise, she will make her own fun, which will likely come in the form of behavioural issues. Giving her a large backyard to run around in is NOT sufficient exercise. Maggie has a hard time being alone and can be quite vocal. NO apartments or townhouses . ', 'maggie.jpg', 2),
(13, 'Sonic', '2018-06-23', 'Male', 'Small Animal', 'Hedgehog', 'Brown', 'Small', 'No', 'No', 'No', 'No', 'Dependent', 'Energetic', 'Gotta go fast', 'sonic.jpg', 1),
(14, 'Godzilla', '2017-11-03', 'Male', 'Small Animal', 'Teddy Bear Hamster', 'Blond', 'Small', 'No', 'No', 'Yes', 'No', 'Social', 'Energetic', 'Rawr', 'godzilla.jpg', 2),
(17, 'Marshmallow', '2016-07-20', 'Female', 'Small Animal', 'Rabbit', 'White', 'Small', 'Yes', 'No', 'Yes', 'Yes', 'Independent', 'Average', 'I look like a toasty marshmallow', 'marshmallow.jpg', 3),
(18, 'Piggy Sue', '2015-12-10', 'Female', 'Small Animal', 'Guinea Pig', 'Brown', 'Small', 'No', 'No', 'Yes', 'No', 'Social', 'Lazy', 'Guinea Piggy', 'piggysue.jpg', 4),
(19, 'Reptar', '2016-08-22', 'Male', 'Small Animal', 'Leopard Gecko', 'Yellow/Brown', 'Small', 'No', 'No', 'Yes', 'No', 'Independent', 'Lazy', 'a happy scaly boy', 'reptar.jpg', 5),
(20, 'Sunny', '2018-03-17', 'Female', 'Small Animal', 'Cockatiel', 'Yellow/Orange/White', 'Small', 'No', 'No', 'No', 'No', 'Social', 'Average', 'I gots pikachu cheeks!', 'sunny.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `shelterName` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shelter`
--

INSERT INTO `shelter` (`id`, `username`, `shelterName`, `street`, `city`, `postalcode`, `phone`, `email`, `password`, `image`, `role`) VALUES
(1, 'burlingtonhs', 'Burlington Humane Society', '740 Griffith Court', 'Burlington', 'L7L 5R9', '905-637-7325', 'burlingtonhs@email.com', 'password', 'burlington-humane-society-building.jpg', 'shelter'),
(2, 'omhs', 'Oakville & Milton Humane Society', '445 Cornwall Road', 'Oakville', 'L6J 7S8', '905-845-1551', 'adoptions@omhs.ca', 'password', 'oakville-milton-hs.jpg', 'shelter'),
(3, 'hbspca', 'Hamilton Burlington SPCA', '245 Dartnall Road', 'Hamilton', 'L8W 3V9', '905-574-7722', 'info@hbspca.com', 'password', 'hbspca.jpg', 'shelter'),
(4, 'brampton_as', 'Brampton Animal Services', '475 Chrysler Drive', 'Brampton', 'L6S 6G3', '905-458-5800', 'animal.services@brampton.ca', 'password', 'bramptonas.jpg', 'shelter'),
(5, 'torontohs', 'Toronto Humane Society', '11 River Street', 'Toronto', 'M5A 4C2', '416-392-2273', 'torontohs@email.com', 'password', 'ths.jpg', 'shelter');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `cat` int(11) NOT NULL,
  `dog` int(11) NOT NULL,
  `smallAnimal` int(11) NOT NULL,
  `lifestyle` varchar(10) NOT NULL,
  `away` varchar(3) NOT NULL,
  `homeSize` varchar(10) NOT NULL,
  `farm` varchar(3) NOT NULL,
  `kids` varchar(3) NOT NULL,
  `otherPets` varchar(3) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `firstName`, `lastName`, `location`, `cat`, `dog`, `smallAnimal`, `lifestyle`, `away`, `homeSize`, `farm`, `kids`, `otherPets`, `image`) VALUES
(2, '', '', '', '', '', '', 0, 0, 0, '0', '0', '0', '0', '0', '0', ''),
(6, 'calvinklein', 'mcfly@timetravel.com', 'greatscott', 'Marty', 'McFly', 'Toronto', 0, 1, 0, 'Active', 'Yes', 'Medium', 'No', 'No', 'No', 'mcfly.jpg'),
(7, 'damnfinecoffee', 'cooper@twinpeaks.com', 'diane', 'Dale', 'Cooper', 'Richmond Hill', 0, 0, 1, 'Active', 'Yes', 'Small', 'No', 'No', 'No', 'coop.jpg'),
(9, 'wysockca', 'wysockca@sheridancollege.ca', 'password', 'Carly', 'Wysocki', 'Burlington', 1, 0, 0, 'Sedentary', 'No', 'Small', 'No', 'No', 'Yes', 'casper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet-profile`
--
ALTER TABLE `pet-profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pet-profile`
--
ALTER TABLE `pet-profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `shelter`
--
ALTER TABLE `shelter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
