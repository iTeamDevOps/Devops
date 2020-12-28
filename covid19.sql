-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 08:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`) VALUES
(1, 'Avez-vous Fiévre(températeur buccale de 38 °C (100,4 °F) et plus ou de 37,8 °C (100,0 °F) et plus pour les personnes agées.'),
(2, 'Avez-vous toux recente ou aggravation d\'une toux chronique ou empiree depuis peu ?'),
(3, '   Avez-vous Mal de tète?   ');

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

CREATE TABLE `reponse` (
  `id_rep` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`id_rep`, `id_user`, `text`) VALUES
(1, 1, 'jgfhhfjhj\r\nhjghj\r\nhgjh'),
(2, 3, 'hendi somali\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephon` int(8) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `langue` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `matricule` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `hopitale` varchar(60) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `telephon`, `sexe`, `ville`, `langue`, `pass`, `matricule`, `date`, `hopitale`, `role`) VALUES
(1, 'hedi', 'naouara', 'hedi.1997@live.fr', 696, 'Male', 'KORBA', 'arab', 'az', NULL, NULL, NULL, 'patient'),
(2, 'saadia ', 'borgou', 'hedi.1997@live.fr', 24356, 'Female', 'tunis', 'fr', '21', NULL, NULL, NULL, 'patient'),
(3, 'Bailey', 'borgou', 'cedouariel@gmail.com', 345678, '', 'tunis', 'arabe', '123456', NULL, NULL, NULL, 'patient'),
(4, 'ariel ', 'Cido', 'ariel@gmail.com', 53467489, 'Male', 'tunis', 'arabe', 'Naouara', '1212', '2020-12-28', 'SALAH AZIZ', 'medecin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_rep`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
