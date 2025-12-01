
-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `idEmployee` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipCode` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`idEmployee`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`idEmployee`, `lastname`, `firstname`, `phoneNumber`, `email`, `address`, `zipCode`, `city`) VALUES
(1, 'Grimard', 'Catherine', '03.21.39.60.34', 'catherineGrimard@armyspy.com', '71, Rue St Ferréol', '57070', 'Metz'),
(2, 'Duperré', 'Jean', '05.34.60.16.90', 'Jean.Duperre@jourrapide.com', '75, rue Jean Vilar', '24100', 'Bergerac'),
(3, 'Givry', 'Denis', '04.98.02.77.68', 'DenisGivry@teleworm.us', '32, Avenue De Marlioz', '74100', 'Annemasse');

