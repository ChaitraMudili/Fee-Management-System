-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2021 at 01:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fee_db`
--
CREATE DATABASE IF NOT EXISTS `fee_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fee_db`;

-- --------------------------------------------------------

--
-- Table structure for table `accountants`
--

CREATE TABLE `accountants` (
  `ID` varchar(20) NOT NULL,
  `NAME` varchar(40) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `GENDER` varchar(5) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `CONTACT` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accountants`
--

INSERT INTO `accountants` (`ID`, `NAME`, `PASSWORD`, `GENDER`, `EMAIL`, `CONTACT`, `ADDRESS`) VALUES
('000', 'Test', '000', 'F', 'test@gmail.com', '9196811690', 'MUMBAI'),
('101', 'MIRA PEREZ', 'mia$%87', 'F', 'mia@gmail.com', '6128408158', 'DELHI'),
('102', 'GEORGE ENGLISH', 'geo$%12', 'M', 'geo@gmail.com', '8637099085', 'DELHI'),
('103', 'LEE MICHLE', 'lee$%92', 'M', 'lee@gmail.com', '7318417648', 'VISAKHAPATNAM'),
('104', 'BRUNO QUINN', 'bru$%77', 'M', 'bru@gmail.com', '6027859169', 'MUMBAI'),
('105', 'KYLER MOONEY', 'kyl$%65', 'M', 'kyl@gmail.com', '8847382270', 'BENGALURU'),
('106', 'BRYAN ADAM', 'bry$%11', 'M', 'bry@gmail.com', '6793962127', 'DELHI'),
('107', 'SAM IRWIN', 'sam$%12', 'M', 'sam@gmail.com', '8910413502', 'KERELA'),
('108', 'CONOR LANG', 'con$%32', 'M', 'con@gmail.com', '7887435979', 'BIHAR'),
('109', 'ORLANDO BLOOM', 'orl$%34', 'M', 'orl@gmail.com', '8079951182', 'PUNJAB'),
('110', 'NIA MOORE', 'niai$%77', 'F', 'nia@gmail.com', '9612797533', 'HYDERABAD'),
('111', 'ELENA SALVATORE', 'elen$%92', 'F', 'elen@gmail.com', '6319942003', 'CHENNAI'),
('112', 'MELODY CASEY', 'mel$%72', 'F', 'mel@gmail.com', '7112165855', 'JAIPUR'),
('113', 'HARRY STYLES', 'har$%62', 'M', 'har@gmail.com', '8701026161', 'HYDERABAD'),
('114', 'LUKE EVANS', 'luk$%17', 'M', 'luk@gmail.com', '7931376249', 'VISAKHAPATNAM'),
('115', 'JASON BATEMAN', 'jas$%18', 'M', 'jas@gmail.com', '9196811690', 'DELHI'),
('116', 'DAVE FRANCO', 'dav%18', 'M', 'dav@gmail.com', '6748003387', 'GOA');

-- --------------------------------------------------------

--
-- Table structure for table `fee_dues`
--

CREATE TABLE `fee_dues` (
  `ID` varchar(20) DEFAULT NULL,
  `tuition` float(15,2) DEFAULT NULL,
  `T_AND_P` float(15,2) DEFAULT NULL,
  `exam` float(10,2) DEFAULT NULL,
  `miscellaneous` float(15,2) DEFAULT NULL,
  `transport` float(15,2) DEFAULT NULL,
  `hostel` float(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee_dues`
--

INSERT INTO `fee_dues` (`ID`, `tuition`, `T_AND_P`, `exam`, `miscellaneous`, `transport`, `hostel`) VALUES
('18331A0531', 5000.00, 1500.00, 1000.00, 0.00, 0.00, 25000.00),
('18331A0532', 12000.00, 3000.00, 1200.00, 0.00, 13000.00, 0.00),
('18331A0533', 0.00, 1000.00, 500.00, 0.00, 25000.00, 0.00),
('18331A0534', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('18331A0535', 0.00, 1000.00, 2500.00, 0.00, 5000.00, 0.00),
('18331A0537', 0.00, 2000.00, 1500.00, 0.00, 0.00, 0.00),
('18331A0538', 0.00, 4000.00, 1500.00, 1000.00, 20000.00, 0.00),
('18331A0539', 0.00, 1500.00, 0.00, 1000.00, 0.00, 2500.00),
('18331A0540', 20000.00, 0.00, 0.00, 2000.00, 0.00, 0.00),
('18331A0541', 7000.00, 5000.00, 1000.00, 0.00, 15000.00, 0.00),
('18331A0542', 0.00, 1000.00, 1500.00, 1000.00, 15000.00, 0.00),
('18331A0543', 30000.00, 1000.00, 0.00, 500.00, 0.00, 0.00),
('18331A0544', 80000.00, 0.00, 1200.00, 0.00, 0.00, 24000.00),
('18331A0545', 0.00, 0.00, 20000.00, 0.00, 1000.00, 60000.00),
('18331A0546', 50000.00, 0.00, 1000.00, 0.00, 0.00, 20000.00),
('18331A0547', 0.00, 9000.00, 0.00, 2000.00, 0.00, 0.00),
('18331A0548', 50000.00, 0.00, 200.00, 1300.00, 3000.00, 20000.00),
('18331A0549', 50000.00, 0.00, 200.00, 1200.00, 3000.00, 30000.00),
('18331A0550', 0.00, 5000.00, 1000.00, 0.00, 10000.00, 0.00),
('18331A0551', 0.00, 500.00, 1250.00, 0.00, 1000.00, 0.00),
('18331A0552', 40000.00, 1000.00, 0.00, 2500.00, 2000.00, 21000.00),
('18331A0553', 0.00, 5000.00, 500.00, 2000.00, 1000.00, 0.00),
('18331A0554', 10000.00, 1500.00, 0.00, 1000.00, 0.00, 25000.00),
('18331A0555', 0.00, 0.00, 1200.00, 5000.00, 15000.00, 0.00),
('18331A0536', 35000.00, 250.00, 1200.00, 0.00, 12000.00, 0.00),
('18331A0501', 500.00, 1500.00, 1000.00, 0.00, 0.00, 25000.00),
('18331A0502', 0.00, 1000.00, 500.00, 0.00, 25000.00, 0.00),
('18331A0504', 0.00, 2000.00, 1000.00, 1000.00, 0.00, 1500.00),
('18331A0506', 0.00, 1000.00, 1500.00, 0.00, 1000.00, 0.00),
('18331A0507', 15000.00, 250.00, 1200.00, 0.00, 1000.00, 0.00),
('18331A0508', 0.00, 2000.00, 1200.00, 0.00, 0.00, 0.00),
('18331A0509', 10000.00, 0.00, 0.00, 2000.00, 0.00, 0.00),
('18331A0510', 0.00, 1000.00, 1500.00, 1200.00, 10000.00, 0.00),
('18331A0511', 20000.00, 15000.00, 0.00, 0.00, 15000.00, 0.00),
('18331A0512', 0.00, 500.00, 0.00, 1200.00, 0.00, 2500.00),
('18331A0513', 2000.00, 5000.00, 1000.00, 0.00, 15000.00, 0.00),
('18331A0514', 0.00, 1000.00, 1500.00, 1200.00, 15000.00, 0.00),
('18331A0515', 10000.00, 1000.00, 0.00, 1500.00, 0.00, 0.00),
('18331A0516', 0.00, 0.00, 25000.00, 0.00, 1000.00, 60000.00),
('18331A0517', 83000.00, 0.00, 1200.00, 0.00, 0.00, 25000.00),
('18331A0518', 0.00, 10000.00, 0.00, 2000.00, 0.00, 0.00),
('18331A0519', 50000.00, 0.00, 200.00, 1200.00, 3000.00, 30000.00),
('18331A0520', 0.00, 5000.00, 1000.00, 0.00, 15000.00, 0.00),
('18331A0521', 75000.00, 1000.00, 500.00, 0.00, 25000.00, 0.00),
('18331A0522', 0.00, 1000.00, 1250.00, 0.00, 1000.00, 0.00),
('18331A0523', 40000.00, 1000.00, 0.00, 2500.00, 2000.00, 25000.00),
('18331A0524', 0.00, 5000.00, 500.00, 2000.00, 1500.00, 0.00),
('18331A0525', 10000.00, 15000.00, 0.00, 10000.00, 0.00, 25000.00),
('18331A0527', 1000.00, 15000.00, 500.00, 0.00, 15000.00, 0.00),
('18331A0528', 0.00, 1000.00, 2000.00, 0.00, 15000.00, 25000.00),
('18331A0529', 20000.00, 2000.00, 0.00, 5000.00, 25000.00, 0.00),
('18331A0530', 0.00, 1500.00, 1200.00, 0.00, 2000.00, 30000.00),
('18331A0503', 10000.00, 5000.00, 1200.00, 0.00, 15000.00, 0.00),
('18331A0505', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('18331A0526', 0.00, 0.00, 1250.00, 5000.00, 15000.00, 0.00),
('18331A0557', 0.00, 1000.00, 2000.00, 0.00, 18000.00, 28000.00),
('18331A0559', 50000.00, 2000.00, 0.00, 5000.00, 13000.00, 0.00),
('18331A0560', 10000.00, 1500.00, 500.00, 0.00, 0.00, 0.00),
('18331A0556', 10000.00, 15000.00, 500.00, 0.00, 15000.00, 0.00),
('18331A0558', 0.00, 1500.00, 1200.00, 0.00, 2000.00, 30000.00),
('111', 16500.00, 200.00, 600.00, 3000.00, 5000.00, 0.00),
('222', 0.00, 700.00, 250.00, 1300.00, 8250.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` varchar(20) NOT NULL,
  `NAME` varchar(40) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `GENDER` varchar(5) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `CONTACT` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `CATEGORY` varchar(5) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `BATCH` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `NAME`, `PASSWORD`, `GENDER`, `EMAIL`, `CONTACT`, `ADDRESS`, `CATEGORY`, `Branch`, `BATCH`) VALUES
('111', 'test1', '111', 'M', 'test1@gmail.com', '7894561230', 'URBANA', 'A', 'CSE', '2018-2022'),
('18331A0501', 'ANUSHA AKKENA', 'anu$%21', 'F', 'anuakki@gmail.com', '8765329064', 'MUMBAI', 'A', 'ECE', '2018-2022'),
('18331A0502', 'LEELA RAPALI', 'lera@1223', 'F', 'leelarapali@gmail.com', '9876543207', 'DELHI', 'B', 'CSE', '2018-2022'),
('18331A0503', 'JITENDRA ALLU', 'jitu@%923', 'M', 'jituallu@gmail.com', '9874532709', 'TAMILNADU', 'A', 'EEE', '2018-2022'),
('18331A0504', 'PRANEETH KUPPILI', 'Pra$@143', 'M', 'praneethkuppili@gmail.com', '6789054321', 'SRINAGAR', 'B', 'MECH', '2018-2022'),
('18331A0505', 'KUMAR CHINTHADA', 'kumi@%123', 'M', 'kumarchinthada@gmail.com', '9805432160', 'SRINAGAR', 'A', 'CIVIL', '2018-2022'),
('18331A0506', 'PAVANI GANNGI', 'pamu@$453', 'F', 'pavaniganngi@gmail.com', '9075643217', 'DELHI', 'B', 'CSE', '2018-2022'),
('18331A0507', 'NIKHITHA  PUSARLA', 'nikki$%12', 'F', 'nikkipusarla@gmail.com', '8097654321', 'MUMBAI', 'A', 'CIVIL', '2018-2022'),
('18331A0508', 'VINAY SIRIKI', 'vinnu@123', 'M', 'vinnusiriki@gmail.com', '6307564390', 'HYDERABAD', 'B', 'CSE', '2018-2022'),
('18331A0509', 'VENKAT CHITIKEL', 'vinnky@$%12', 'M', 'vinnkychitikel@gmail.com', '9119867054', 'ANDHRA PRADESSH', 'A', 'CHEM', '2018-2022'),
('18331A0510', 'SWATHI  PALURI', 'swathi$@2', 'F', 'swathipaluri@gmail.com', '9807894321', 'ANDHRA PRADESH', 'B', 'CSE', '2018-2022'),
('18331A0511', 'VIDYA  GANDI', 'Vidu@$1234', 'F', 'vidyagandi@gmail.com', '9885566221', 'DELHI', 'A', 'ECE', '2018-2022'),
('18331A0512', 'MEGHANA VANGA', 'megha@12', 'F', 'meghavanga@gmail.com', '9087654321', 'KERELA', 'B', 'CSE', '2018-2022'),
('18331A0513', 'RAJESH MEESALA', 'raju@$%12', 'M', 'rajeshmeesala@gmail.com', '9654367890', 'DELHI', 'A', 'EEE', '2018-2022'),
('18331A0514', 'MANASA  PUTTEPA', 'manu@%1435', 'F', 'manasaputtepa@gmail.com', '7509543218', 'HYDERABAD', 'B', 'MECH', '2018-2022'),
('18331A0515', 'SRIRAM MUKKU', 'sri$%12', 'M', 'srirammukku@gmail.com', '6098754321', 'TAMILNADU', 'A', 'CIVIL', '2018-2022'),
('18331A0516', 'RAMA MUDILI', 'rama$@%023', 'F', 'ramamudili@gmail.com', '9876452361', 'MUMBAI', 'B', 'CSE', '2018-2022'),
('18331A0517', 'SRUTHI ROLLA', 'sruthi@$%12', 'M', 'sruthirolla@gmail.com', '9876543210', 'KERELA', 'A', 'CIVIL', '2018-2022'),
('18331A0518', 'PRIYA MUTHI', 'priya@1243', 'F', 'priyamuthi@gmail.com', '7654389021', 'BHIAR', 'B', 'CSE', '2018-2022'),
('18331A0519', 'RAMU MUCHSI', 'muchsi@%902', 'M', 'ramumuchsi@gmail.com', '8097654321', 'BANGALORE', 'A', 'CHEM', '2018-2022'),
('18331A0520', 'SARANYA  SIRUVURI', 'Saru@$%678', 'F', 'saranyasiruvuri@gmail.com', '7890654321', 'KARNATAKA', 'B', 'CSE', '2018-2022'),
('18331A0521', 'HARSHA GUNDU', 'harsh@%456', 'M', 'harshagundu@gmail.com', '8043215678', 'KERELA', 'A', 'ECE', '2018-2022'),
('18331A0522', 'AKHILA CHEBOLU', 'akki@#$123', 'F', 'akhilachebolu@gmail.com', '7890543210', 'ANDHRS PRADESH', 'B', 'CSE', '2018-2022'),
('18331A0523', 'SAIKIRAN', 'sai@234', 'M', 'saikiran@gmail.com', '8765432108', 'BANGALORE', 'A', 'EEE', '2018-2022'),
('18331A0524', 'PADMA KURELLA', 'padu@1234', 'F', 'padmakurella@gmail.com', '7989594939', 'MUMBAI', 'B', 'MECH', '2018-2022'),
('18331A0525', 'KISHORE PALLANTLA', 'kish@!#123', 'M', 'kishorepallantla@gmail.com', '7890654321', 'TAMILNADU', 'A', 'CIVIL', '2018-2022'),
('18331A0526', 'JAYANTH LAGUDU', 'Jay@1$24', 'M', 'jayanthlagudu@gmail.com', '875432109', 'KARNATAKA', 'B', 'CSE', '2018-2022'),
('18331A0527', 'BHAVANA KOTDITHA', 'bhavas!@##!', 'F', 'bhavanakotditha@gmail.com', '9765421380', 'MUMBAI', 'A', 'CIVIL', '2018-2022'),
('18331A0528', 'PRAMOD VEDULA', 'Pram@%$654', 'M', 'pramodvedula@gmail.com', '7689054321', 'MADHYA PRADESH', 'B', 'CSE', '2018-2022'),
('18331A0529', 'SANJAY KANDI', 'Sanju@#!123', 'M', 'sanjaykandi@gmail.com', '7654321901', 'BIHAR ', 'A', 'CHEM', '2018-2022'),
('18331A0530', 'RAMYA KARKI', 'ramu@#$1', 'F', 'ramyakarki', '9087651230', 'ANDHRA PRADESH', 'B', 'CSE', '2018-2022'),
('18331A0531', 'REECE WONKA', 'rece$%12', 'M', 'rece@gmail.com', '987343324', 'DELHI', 'A', 'ECE', '2018-2022'),
('18331A0532', 'LISA KUDROW', 'lisa$%43', 'F', 'lisa@gmail.com', '9255432324', 'PATNA', 'A', 'CSE', '2018-2022'),
('18331A0533', 'BRENT HANEY', 'bre$%17', 'M', 'bre@gmail.com', '6299432320', 'RANCHI', 'B', 'EEE', '2018-2022'),
('18331A0534', 'JAIDA ROY', 'jai$%12', 'F', 'jai@gmail.com', '8708487150', 'DELHI', 'A', 'MECH', '2018-2022'),
('18331A0535', 'MILTON STROKES', 'mil$%12', 'M', 'mil@gmail.com', '8079026894', 'GOA', 'B', 'CIVIL', '2018-2022'),
('18331A0536', 'ADELYN GRIFFITH', 'ade$%87', 'F', 'ade@gmail.com', '8167614642', 'BENGALURU', 'A', 'CSE', '2018-2022'),
('18331A0537', 'TOM ELLIS', 'tom$%12', 'M', 'tom@gmail.com', '6411713878', 'MUMBAI', 'B', 'CIVIL', '2018-2022'),
('18331A0538', 'ANNIE HOUSE', 'ann$%44', 'F', 'ann@gmail.com', '8067397847', 'BADRA', 'B', 'CSE', '2018-2022'),
('18331A0539', 'JANE TUCKER', 'jane$%65', 'F', 'jane@gmail.com', '6127920404', 'GANGTOK', 'B', 'CHEM', '2018-2022'),
('18331A0540', 'JOHN ASH', 'john$%32', 'M', 'john@gmail.com', '6127903815', 'KOLKATA', 'A', 'CSE', '2018-2022'),
('18331A0541', 'KEN ADAMS', 'ken$%12', 'M', 'ken@gmail.com', '8167280809', 'KERELA', 'A', 'ECE', '2018-2022'),
('18331A0542', 'AMY JACKSON', 'amy$%76', 'F', 'amy@gmail.com', '8079512591', 'CHENNAI', 'B', 'CSE', '2018-2022'),
('18331A0543', 'ELIJAH WOODS', 'eli$%65', 'M', 'eli@gmail.com', '7979053084', 'ANDHRA PRADESH', 'A', 'EEE', '2018-2022'),
('18331A0544', 'ALVIN KELLEY', 'alv%97', 'M', 'alv@gmail.com', '6506803431', 'SHILLONG', 'A', 'MECH', '2018-2022'),
('18331A0545', 'JENNY JACKSON', 'jen$%12', 'F', 'jen@gmail.com', '6127603527', 'MUMBAI', 'B', 'CIVIL', '2018-2022'),
('18331A0546', 'PHOEBE BUFFEY', 'phoe$%88', 'F', 'phoe@gmail.com', '7477653415', 'LUCKNOW', 'A', 'CSE', '2018-2022'),
('18331A0547', 'MONICA GELLER', 'mon$%76', 'F', 'mon@gmail.com', '8079600489', 'DELHI', 'B', 'CIVIL', '2018-2022'),
('18331A0548', 'ROSS GELLER', 'ross$%43', 'M', 'ross@gmail.com', '6127934417', 'DELHI', 'A', 'CSE', '2018-2022'),
('18331A0549', 'RACHEL GREEN', 'rach$%12', 'F', 'rach@gmail.com', '7367020972', 'PUNJAB', 'A', 'CHEM', '2018-2022'),
('18331A0550', 'CHANDLER BING', 'chan$%11', 'M', 'chan@gmail.com', '8919330834', 'HARYNA', 'B', 'CSE', '2018-2022'),
('18331A0551', 'JOEY TRIBBIANY', 'joe$%43', 'M', 'joe@gmail.com', '7311055996', 'ODISHA', 'B', 'ECE', '2018-2022'),
('18331A0552', 'ZACH RICH', 'zac$%98', 'M', 'zac@gmail.com', '8917423557', 'ANDHRA PRADESH', 'A', 'CSE', '2018-2022'),
('18331A0553', 'SYLVIA BONILLA', 'syl$%88', 'F', 'syl@gmail.com', '731366360', 'HYDERABAD', 'B', 'EEE', '2018-2022'),
('18331A0554', 'CAMERON TUCKER', 'cam$%65', 'M', 'cam@gmail.com', '6127946111', 'PATNA', 'A', 'MECH', '2018-2022'),
('18331A0555', 'PITERO BOSIILI', 'pit$%12', 'M', 'pit@gmail.com', '8841161488', 'GUJARAT', 'B', 'CIVIL', '2018-2022'),
('18331A0556', 'CHARLIE SHEEEN', 'char$%12', 'M', 'char@gmail.com', '6094990035', 'CHENNAI', 'A', 'CSE', '2018-2022'),
('18331A0557', 'ELECTRA REMONA', 'elec$%65', 'F', 'elec@gmail.com', '7218566233', 'HYDERABAD', 'B', 'CIVIL', '2018-2022'),
('18331A0558', 'WILL ROWE', 'wil$%44', 'M', 'will@gmail.com', '6127958199', 'JAIPUR', 'B', 'CSE', '2018-2022'),
('18331A0559', 'LANA DELREY', 'lana$%54', 'F', 'lana@gmail.com', '7979766700', 'BIHAR', 'A', 'CHEM', '2018-2022'),
('18331A0560', 'LEXIS RAY', 'lexi$%87', 'F', 'lexi@gmail.com', '7887761684', 'MUMBAI', 'A', 'CSE', '2018-2022'),
('222', 'test2', '222', 'F', 'test1@gmail.com', '9876543211', 'CHENNAI', 'B', 'CSE', '2018-2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountants`
--
ALTER TABLE `accountants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fee_dues`
--
ALTER TABLE `fee_dues`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee_dues`
--
ALTER TABLE `fee_dues`
  ADD CONSTRAINT `fee_dues_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `students` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
