-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2013 at 03:14 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeID` int(11) NOT NULL AUTO_INCREMENT,
  `Position` varchar(50) NOT NULL,
  `salary_grade` int(11) NOT NULL,
  `step` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Date_of_Birth` varchar(50) NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `tin` varchar(50) NOT NULL,
  `Eligibility` varchar(50) NOT NULL,
  `RemarkID` int(11) NOT NULL,
  `School` varchar(150) NOT NULL,
  `location` varchar(200) NOT NULL,
  `height` varchar(3) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `gsis` varchar(100) NOT NULL,
  `pag_ibig` varchar(100) NOT NULL,
  `PHILHEALTH` varchar(100) NOT NULL,
  `SSS` varchar(100) NOT NULL,
  `Authorized_Salary` varchar(100) NOT NULL,
  `Actual_Salary` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Civil_Service_Eligibility` varchar(100) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `Residential_Address` varchar(100) NOT NULL,
  `ZIP_CODE1` varchar(20) NOT NULL,
  `Telephone_NO` varchar(20) NOT NULL,
  `Permanent_Address` varchar(100) NOT NULL,
  `ZIP_CODE2` varchar(20) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Cellphone_NO` varchar(15) NOT NULL,
  `Agency_Employee_NO` varchar(20) NOT NULL,
  `Item_Number` varchar(50) NOT NULL,
  `Area_Code` varchar(50) NOT NULL,
  `Area_Type` varchar(50) NOT NULL,
  `ATTRIBUTION` varchar(50) NOT NULL,
  `Employee_No` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `Classification` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  PRIMARY KEY (`employeeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `Position`, `salary_grade`, `step`, `LastName`, `FirstName`, `MiddleName`, `Sex`, `Date_of_Birth`, `birth_place`, `tin`, `Eligibility`, `RemarkID`, `School`, `location`, `height`, `weight`, `civil_status`, `citizenship`, `blood_type`, `gsis`, `pag_ibig`, `PHILHEALTH`, `SSS`, `Authorized_Salary`, `Actual_Salary`, `Status`, `Civil_Service_Eligibility`, `Remarks`, `Residential_Address`, `ZIP_CODE1`, `Telephone_NO`, `Permanent_Address`, `ZIP_CODE2`, `Email_Address`, `Cellphone_NO`, `Agency_Employee_NO`, `Item_Number`, `Area_Code`, `Area_Type`, `ATTRIBUTION`, `Employee_No`, `qualification`, `Classification`, `District`) VALUES
(103, 'SCHOOL PRINCIPAL I', 0, 1, 'RIVERA', 'HELEN', 'LIGADA', 'Female', '12/03/1962', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '365,688 ', '365,688 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-SP1-420994-2010', '2667 ', 'M', 'A.03.e.09.b.16.c.01', '', 'Masteral with units', 'Non-Teaching', ''),
(135, 'TEACHER I', 0, 2, 'DEMASIADO ', 'JUDITH ', 'TAYO ', 'Female', '10/15/1957 ', '', '148427560000 ', '', 0, 'SPED Center - Silay South', 'upload/', '', '', '', '', '', '', '', '', '', '252,936 ', '256,152 ', 'P', 'PBET ', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-SPET1-420005-2008 ', '2667', 'M', 'A.03.e.09.b.16.c.10 ', '', 'Bachelor', 'Teaching', ''),
(23, 'SCHOOL PRINCIPAL IV', 0, 0, 'HERMOSURA', 'WILFREDO', 'ORASUME', 'Male', '4/5/1956', '', '***134294668000***', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bachelor', 'Teaching', ''),
(105, 'TEACHER II', 0, 8, 'LAGNE', 'MARILYN', 'LEONIDA', 'Female', '02/20/2013', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '219,996 ', '240600', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH2-420366-2000', '2667', 'M', 'A.03.e.09.b.16.c.01 ', '', 'Bachelor with units', 'Teaching', ''),
(107, 'TEACHER I', 0, 2, 'LEONIDA', 'EMILY', 'DUSABAN', 'Female', '08/24/1969', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420009-2004', '2667', 'M', 'A.03.e.09.b.16.c.01', '', 'Bachelors Degree', 'Teaching', ''),
(104, 'HEAD TEACHER VI', 0, 6, 'CUSIO', 'CARMENA', 'GONZAGA', 'Female', '04/15/1963', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '219,996 ', '234492', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH2-420026-2007', '2667', 'M', 'A.03.e.09.b.16.c.01', '', 'Bachelors Degree', 'Teaching', ''),
(102, 'TEACHER II', 0, 5, 'ESPINAS', 'FERMINA', 'BABAS', 'Female', '09/15/1963', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '', '', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH2-420025-2007', '2667', 'M', 'A.03.e.09.b.16.c.01', '', 'Bachelor', 'Teaching', ''),
(86, '', 0, 0, 'dsfsfsf', 'sdsd', 'fsfsf', 'Male', '', '', '', '', 0, '', 'upload/', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'fsff', 'fsf', 'fsf', 'fsf', '', '', '', '', '', '', '', '', '', '', 'Teaching', ''),
(101, 'TEACHER II', 0, 7, 'NAYRAN', 'NADIA', 'MAALAT', 'Female', '02/15/1966', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '219,996 ', '237,516 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH2-420018-2003 ', '2667', 'M', 'A.03.e.09.b.16.c.01', '', 'Bachelor', 'Teaching', ''),
(106, 'TEACHER II', 0, 4, 'AMBROCIO', 'CORAZON', 'SEVILLO', 'Female', '06/02/1970', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '', '', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH2-420367-2000', '2667', 'M', 'A.03.e.09.b.16.c.01', '', 'Masteral', 'Teaching', ''),
(108, 'TEACHER I', 0, 2, 'MATINONG', 'ROXANNE', 'TOLENTINO', 'Female', '04/12/1977', '', '', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', '', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420170-2005', '2667', 'M', 'A.03.e.09.b.16.c.01', '', 'Bachelor with units', 'Teaching', ''),
(109, 'SCHOOL PRINCIPAL I', 0, 1, 'BADIAN', 'RODITO', 'RUBICA', 'Male', '09/04/1964', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '365688', '365688', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-SP1-420959-2010', '2667', 'M', 'A.03.e.09.b.16.c.05', '', 'Masteral with units', 'Non-Teaching', ''),
(110, 'TEACHER I', 0, 2, 'AGUIRRE', 'MA. LORELIE', 'CANARIAS', 'Female', '11/25/1975', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420008-2008', '2667 ', 'M', 'A.03.e.09.b.16.c.05', '', 'Bachelor with units', 'Teaching', ''),
(111, 'TEACHER I', 0, 2, 'ESPIDA', 'ELLEN', 'PACLIBAR', 'Female', '', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420009-2008', '2667', 'M', 'A.03.e.09.b.16.c.05', '', 'Masteral', 'Teaching', ''),
(112, 'TEACHER I', 0, 2, 'ROTAS', 'RIZA', 'TRES REYES', 'Female', '02/14/1982', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420068-2008', '2667 ', 'M', 'A.03.e.09.b.16.c.05', '', 'Bachelor with units', 'Teaching', ''),
(113, 'HEAD TEACHER VI', 0, 2, 'LAYO', 'DINAH', 'LEONERO', 'Male', '12/15/1983', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420068-2008', '2667', 'M', 'A.03.e.09.b.16.c.05', '', 'Masteral', 'Teaching', ''),
(114, 'TEACHER I', 0, 2, 'CASIPLE', 'HAYDEE', 'BARBA', 'Male', '07/08/1974', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'LET', '', '', '', '', '', '', '', '', '', '', '2667', 'M', 'A.03.e.09.b.16.c.05', '', 'Bachelor with units', 'Teaching', ''),
(115, 'TEACHER I', 0, 2, 'BONES', 'SAUCY', 'BIBOSO', 'Female', '03/08/1974', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420070-2008', '2667', 'M', 'A.03.e.09.b.16.c.05', '', 'Bachelor with units', 'Teaching', ''),
(116, 'TEACHER I', 0, 2, 'ILIGAN', 'JUDITO', 'RODRIGUEZ', 'Male', '04/03/1982', '', '', '', 0, 'Eustaquio Lopez NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'LET', '', '', '', '', '', '', '', '', '', '', '2667', 'M', 'A.03.e.09.b.16.c.05', '', 'Bachelor with units', 'Teaching', ''),
(117, 'TEACHER I', 0, 1, 'TOLENTINO', 'MILALYN', 'BELLENES', 'Female', '06/06/1973', '', '', '', 0, 'Doña Angeles J. Montinola MHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420010-2008', '2667', 'M', 'A.03.e.09.b.16.c.08', '', 'Masteral', 'Teaching', ''),
(118, 'HEAD TEACHER VI', 0, 2, 'DOLOSO', 'MARK', 'BOOT', 'Male', '10/21/1983', '', '', '', 0, 'Doña Angeles J. Montinola MHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420011-2008', '2667', 'M', 'A.03.e.09.b.16.c.08', '', 'Bachelor with units', 'Teaching', ''),
(119, 'TEACHER I', 0, 2, 'JUEN', 'ANNIE', 'ENCARGUES', 'Female', '', '', '', '', 0, 'Doña Angeles J. Montinola MHS', 'upload/', '', '', '', '', '', '', '', '', '', '205188', '207816', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-SP1-420994-2011', '2667', 'M', 'A.03.e.09.b.16.c.08', '', 'Bachelors Degree', 'Teaching', ''),
(120, 'SCHOOL PRINCIPAL I', 0, 2, 'HERMOSURA ', 'WILFREDO ', 'ORASUME ', 'Male', '04/05/1956 ', '', '***134294668000*** ', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/', '', '', '', '', '', '', '', '', '', '453,744 ', '459,720 ', 'P', 'PBET ', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-SP4-420045-2010 ', '2667 ', 'M', 'A.03.e.09.b.16.c.02 ', '', 'Masteral', 'Teaching', ''),
(121, 'HEAD TEACHER VI', 0, 3, 'BITALAC ', 'MALUZ', 'CHAVEZ', 'Female', '08/06/1956 ', 'Silay City', '134294016000 ', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/', '', '', 'Married', 'Filipino', '', '787654332345', '098123467', '657323899', '08876543321', '365,688 ', '370,560 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-HTEACH6-420001-2005 ', '2667', 'M', 'A.03.e.09.b.16.c.02 ', '', 'Bachelor', 'Teaching', ''),
(122, 'HEAD TEACHER VI', 0, 4, 'BENEDICTO ', 'NANETH', 'LINGA', 'Female', '10/15/1960 ', '', '***134293935000*** ', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/', '', '', 'Married', 'Filipino', 'TYPE O', '98765543121', '5787932134', '087654234567', '0753125689', '365,688 ', '380,532 ', 'P', 'PBET ', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-HTEACH6-420001-2001 ', '2667', 'M', 'A.03.e.09.b.16.c.02 ', '', 'Bachelor', 'Teaching', ''),
(123, 'HEAD TEACHER VI', 0, 2, 'LOREDO ', 'CRISTINA', 'FUENTES', 'Female', '11/06/1964 ', 'Silay City', '134294457000 ', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/', '', '', 'Married', 'F', '', '9876543245', '756234890', '222333344', '07777766889', '365,688 ', '370,560 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-HTEACH6-420002-2001 ', '2667', 'M', 'A.03.e.09.b.16.c.02 ', '', 'Bachelor', 'Teaching', ''),
(124, 'HEAD TEACHER VI', 0, 2, 'BIBAR ', 'MELANIE', 'CHAVEZ', 'Female', '05/16/1958 ', '', '134293894000 ', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/', '', '', 'Married', 'Filipino', '', '', '', '', '', '365,688 ', '370,560 ', 'P', 'PBET ', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-HTEACH6-420004-2001 ', '2667', 'M', 'A.03.e.09.b.16.c.02 ', '', 'Bachelor', 'Teaching', ''),
(125, 'HEAD TEACHER VI', 0, 1, 'PANES ', 'MERLE ', 'BIÑAS ', 'Female', '06/07/1949 ', '', '***134295179000*** ', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/', '', '', 'Married', 'Filipino', '', '987345', '09873676767', '98987878', '08987676865', '365,688 ', '365,688 ', 'P', 'PBET ', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-HTEACH6-420005-2001 ', '2667', 'M', 'A.03.e.09.b.16.c.02 ', '', 'Bachelor', 'Teaching', ''),
(126, 'MASTER TEACHER II', 0, 3, 'VILLARIAS ', 'MERLE ', 'VERAYE', 'Female', '03/07/1950 ', '', '***134295610000*** ', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/', '', '', 'Married', 'Filipino', '', '', '', '', '', '365,688 ', '375,504 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-MTCHR2-420001-1999 ', '2667 ', 'M', 'A.03.e.09.b.16.c.02 ', '', 'Bachelor', 'Teaching', ''),
(127, 'SCHOOL PRINCIPAL I', 0, 1, 'RANDO ', 'LEILA ', 'MARAVILLA ', 'Female', '08/23/1955 ', '', '***134295313000*** ', '', 0, 'Don Felix T. Lacson Memorial NHS', 'upload/', '', '', 'Married', 'Filipino', '', '', '', '', '', '365,688 ', '365,688 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-SP1-420993-2010 ', '2667', 'M', 'A.03.e.09.b.16.c.03 ', '', 'Bachelor', 'Teaching', ''),
(128, 'HEAD TEACHER VI', 0, 5, 'TINGSON ', 'ELSIE ', 'BELANDRES ', 'Female', '11/05/1969 ', '', '152464178000 ', '', 0, 'Don Felix T. Lacson Memorial NHS', 'upload/', '', '', '', '', '', '', '', '', '', '219,996 ', '231,492 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH2-420300-2000 ', '2667 ', 'M', 'A.03.e.09.b.16.c.03 ', '', 'Bachelor', 'Teaching', ''),
(129, 'TEACHER II', 0, 3, 'DELA CRUZ ', 'GENIELEE ', 'LAUDATO ', 'Female', '10/22/1979 ', '', '***935906231000*** ', '', 0, 'Don Felix T. Lacson Memorial NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '210,480 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420208-2002 ', '2667', 'M', 'A.03.e.09.b.16.c.03 ', '', 'Bachelor', 'Teaching', ''),
(130, 'TEACHER II', 0, 4, 'GUARDE ', 'MARIVIC ', 'VALLADAREZ ', 'Female', '06/04/1979 ', '', '927218287000 ', '', 0, 'Don Felix T. Lacson Memorial NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '213,180 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420360-2001 ', '2667', 'M', 'A.03.e.09.b.16.c.03 ', '', 'Bachelor', 'Teaching', ''),
(131, 'TEACHER II', 0, 3, 'CRUZ ', 'HAZEL', 'ARBOLEDA ', 'Female', '05/09/1976 ', '', '***910941474000*** ', '', 0, 'Don Felix T. Lacson Memorial NHS', 'upload/', '', '', '', 'Filipino', '', '', '', '', '', '205,188 ', '210,480 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420728-2004 ', '2667', 'M', 'A.03.e.09.b.16.c.03 ', '', 'Bachelor', 'Teaching', ''),
(132, 'TEACHER II', 0, 1, 'BRIONES ', 'ERNESTO JR ', 'DE PEDRO ', 'Male', '01/03/1977 ', '', '271286583000 ', '', 0, 'Don Felix T. Lacson Memorial NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '205,188 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-453512-1998 ', '2667', 'M', 'A.03.e.09.b.16.c.03 ', '', 'Bachelor', 'Teaching', ''),
(133, 'TEACHER II', 0, 3, 'GANDO ', 'ROGELIN ', 'CAINDOC ', 'Female', '05/11/1975 ', '', '918175344000 ', '', 0, 'Don Felix T. Lacson Memorial NHS', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '210,480 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-453545-1998 ', '2667', 'M', 'A.03.e.09.b.16.c.03 ', '', 'Bachelor', 'Teaching', ''),
(136, 'TEACHER I', 0, 2, 'TABLADA ', 'CATHERINE ', 'SEVA', 'Female', '12/04/1976 ', '', '949180379000 ', '', 0, 'SPED Center - Silay South', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '256,152 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420196-2007 ', '2667', 'M', 'A.03.e.09.b.16.c.10 ', '', 'Bachelors Degree', 'Teaching', ''),
(150, 'MASTER TEACHER II', 0, 7, 'Jurilla', 'Labby', 'Valguna', 'Female', '05/18/1991', 'Leonor, Victorias City', '', '', 0, 'Doña Montserrat Lopez Memorial HS', 'upload/IMG_3540.JPG', '5', '50', 'Complicated', 'Filipino', 'O', '', '', '', '', '10000000', '10000000', 'P', '', 'She loves Michael Bryan.. Hate Randolph', 'Amanda, Victorias City', '', '', 'Barrio, Victorias City', '', 'labby_mike2x@love.com', '09122289657', '', '14344', '', '', '', '', 'Doctoral Degree', 'Non-Teaching', ''),
(138, 'TEACHER I', 0, 2, 'DIAZ', 'CHERRY ANN', 'DIVINAGRACIA ', 'Male', '12/17/1978 ', '', '268297952000 ', '', 0, 'SPED Center - Silay South', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '256,152 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420263-2006 ', '2667', 'M', 'A.03.e.09.b.16.c.10 ', '', 'Bachelor', 'Teaching', ''),
(139, 'TEACHER I', 0, 2, 'PRUDENTE ', 'CRISTINE ', 'LACSON', 'Female', '10/27/1968 ', '', '939337896000 ', '', 0, 'SPED Center - Silay South', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '256,152 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420605-2007 ', '2667 ', 'M', 'A.03.e.09.b.16.c.10 ', '', 'Bachelor', 'Teaching', ''),
(140, 'TEACHER I', 0, 2, 'PALERMO ', ' IVY ', 'DUMALA-UG ', 'Female', '11/25/1980 ', '', '941090004000 ', '', 0, 'SPED Center - Silay South', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '256,152 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420606-2007 ', '2667', 'M', 'A.03.e.09.b.16.c.10 ', '', 'Bachelor', 'Teaching', ''),
(141, 'TEACHER I', 0, 1, 'JAVINES ', 'SAMMY JANDRE ', 'VERDEGUEL ', 'Male', '01/23/1973 ', '', '949193655000 ', '', 0, 'Lantawan Integrated School', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '205,188 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420099-2006 ', '2667', 'M', 'A.03.e.09.b.16.c.04 ', '', 'Bachelor', 'Teaching', ''),
(142, 'TEACHER I', 0, 1, 'BENERUA ', 'NOEME ', 'GUARTIZO ', 'Female', '11/06/1968 ', '', '121357697 ', '', 0, 'Lantawan Integrated School', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '205,188 ', 'P', 'RA4670', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420159-2005 ', '2667', 'M', 'A.03.e.09.b.16.c.04 ', '', 'Bachelor', 'Teaching', ''),
(143, 'TEACHER I', 0, 2, 'VILLANUEVA ', 'CECILIA ', 'AMODIA ', 'Female', '11/22/1976 ', '', '903067610000 ', '', 0, 'Lantawan Integrated School', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '207,816 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420529-2007 ', '2667', 'M', 'A.03.e.09.b.16.c.04 ', '', 'Bachelor', 'Teaching', ''),
(144, 'TEACHER II', 0, 2, 'GUEVARRA ', 'HERMOGINA ', 'VILLONES ', 'Female', '06/20/1969 ', '', '136739805000 ', '', 0, 'Guinhalaran Integrated School', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '207,816 ', 'P', 'PBET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420012-2008 ', '2667', 'M', 'A.03.e.09.b.16.c.09 ', '', 'Bachelor', 'Teaching', ''),
(145, 'TEACHER I', 0, 1, 'CUELLO ', 'GERALDINE ', 'ANTARAN ', 'Female', '08/07/1978 ', '', '412524628000 ', '', 0, 'Guinhalaran Integrated School', 'upload/', '', '', '', '', '', '', '', '', '', '205,188 ', '205,188 ', 'P', 'LET', '', '', '', '', '', '', '', '', '', 'OSEC-DECSB-TCH1-420091-2011 ', '2667', 'M', 'A.03.e.09.b.16.c.09 ', '', 'Bachelor', 'Teaching', ''),
(146, 'HEAD TEACHER VI', 0, 1, 'DEFENSOR ', 'MAE ', 'BUENAFE ', 'Female', '05/26/1972 ', '', '144864573000 ', '', 0, 'Don Albino & Doña Dolores Jison IS', 'upload/', '', '', '', '', '', '', '', '', '', '', '', 'P', 'LET', '', '', '', '', '', '', '', '', '', '', '2667', 'M', 'A.03.e.09.b.16.c.11 ', '', 'Bachelor', 'Teaching', ''),
(147, 'HEAD TEACHER VI', 0, 2, 'PANOLINO ', 'HELEN', 'PALENCIA', 'Female', '02/11/1968 ', '', '926012292000 ', '', 0, 'Guimbala-on NHS', 'upload/', '', '', '', '', '', '', '', '', '', '', '', 'P', 'PBET', '', '', '', '', '', '', '', '', '', '', '2667', 'M', 'A.03.e.09.b.16.c.11 ', '', 'Bachelor', 'Teaching', '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `data` varchar(50) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=254 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `action`, `user`, `data`) VALUES
(1, '2012-08-26 14:23:05', 'Login', '', ' '),
(2, '2012-08-26 14:25:53', 'Login', 'Admin', 'john smith'),
(3, '2012-08-26 14:29:01', 'Logout', 'Admin', 'john smith'),
(4, '2012-08-26 14:29:14', 'Login', 'Admin', 'john smith'),
(5, '2012-08-26 17:27:21', 'Login', 'Admin', 'john smith'),
(6, '2012-08-27 08:17:53', 'Login', 'Admin', 'john smith'),
(7, '2012-08-27 08:40:22', 'Delete Employee', '', 'k '),
(8, '2012-08-27 08:41:25', 'Delete Employee', '', 'l '),
(9, '2012-08-27 08:41:54', 'Delete Employee', '', 'q '),
(10, '2012-08-27 08:47:57', 'Delete Employee', 'Admin', 'x '),
(11, '2012-08-27 20:33:19', 'Login', 'Admin', 'john smith'),
(12, '2012-08-27 21:08:40', 'Delete Employee', 'Admin', 'Villanueva '),
(13, '2012-08-27 21:33:05', 'Login', 'Admin', 'john smith'),
(14, '2012-08-27 21:34:04', 'Logout', 'Admin', 'john smith'),
(15, '2012-08-27 21:34:10', 'Login', 'Admin', 'john smith'),
(16, '2012-08-28 20:58:54', 'Login', 'Admin', 'john smith'),
(17, '2012-08-28 21:25:25', 'Add Employee', 'Admin', 'q q'),
(18, '2012-08-29 19:40:09', 'Login', 'Admin', 'john smith'),
(19, '2012-08-30 06:33:37', 'Login', 'Admin', 'john smith'),
(20, '2012-08-30 06:36:08', 'Logout', 'Admin', 'john smith'),
(21, '2012-08-30 06:41:11', 'Login', 'Admin', 'john smith'),
(22, '2012-08-30 16:22:14', 'Login', 'Admin', 'john smith'),
(23, '2012-08-31 06:46:34', 'Login', 'Admin', 'john smith'),
(24, '2012-08-31 06:48:10', 'Logout', 'Admin', 'john smith'),
(25, '2012-08-31 06:48:16', 'Login', 'Admin', 'john smith'),
(26, '2012-08-31 15:30:21', 'Login', 'Admin', 'john smith'),
(27, '2012-09-01 07:18:15', 'Login', 'Admin', 'john smith'),
(28, '2012-09-01 22:48:48', 'Login', 'Admin', 'john smith'),
(29, '2012-09-02 16:08:17', 'Login', 'Admin', 'john smith'),
(30, '2012-09-04 21:17:45', 'Login', 'Admin', 'john smith'),
(31, '2012-09-04 21:44:15', 'Add Employee', 'Admin', ' '),
(32, '2012-09-04 21:44:17', 'Add Employee', 'Admin', ' '),
(33, '2012-09-04 21:44:19', 'Add Employee', 'Admin', ' '),
(34, '2012-09-04 21:45:41', 'Add Employee', 'Admin', ' '),
(35, '2012-09-05 19:43:03', 'Login', 'Admin', 'john smith'),
(36, '2012-09-05 19:46:01', 'Login', 'Admin', 'john smith'),
(37, '2012-09-05 19:46:08', 'Login', 'Admin', 'john smith'),
(38, '2012-09-05 19:46:18', 'Logout', 'Admin', 'john smith'),
(39, '2012-09-05 19:46:22', 'Login', 'Admin', 'john smith'),
(40, '2012-09-05 19:46:50', 'Login', 'Admin', 'john smith'),
(41, '2012-09-05 19:46:54', 'Login', 'Admin', 'john smith'),
(42, '2012-09-05 19:46:59', 'Login', 'Admin', 'john smith'),
(43, '2012-09-05 19:47:16', 'Login', 'Admin', 'john smith'),
(44, '2012-09-05 19:47:20', 'Logout', 'Admin', 'john smith'),
(45, '2012-09-05 19:47:28', 'Login', 'Admin', 'john smith'),
(46, '2012-09-08 07:19:27', 'Login', 'Admin', 'john smith'),
(47, '2012-09-08 07:30:37', 'Add Employee', 'Admin', ' '),
(48, '2012-09-08 07:34:59', 'Delete Employee', 'Admin', ' '),
(49, '2012-09-16 07:55:38', 'Login', 'Admin', 'john smith'),
(50, '2012-09-16 09:34:59', 'Login', 'Admin', 'john smith'),
(51, '2012-09-20 20:34:05', 'Login', 'Admin', 'john smith'),
(52, '2012-09-22 09:24:33', 'Login', 'Admin', 'john smith'),
(53, '2012-10-03 20:12:31', 'Login', 'Admin', 'john smith'),
(54, '2012-10-03 20:25:10', 'Logout', 'Admin', 'john smith'),
(55, '2012-10-03 20:35:28', 'Login', 'Admin', 'john smith'),
(56, '2012-10-04 08:12:18', 'Login', 'Admin', 'john smith'),
(57, '2012-10-04 21:55:35', 'Login', 'Admin', 'john smith'),
(58, '2012-10-04 22:08:02', 'Add Employee', 'Admin', ' '),
(59, '2012-10-04 22:11:14', 'Add Employee', 'Admin', ' '),
(60, '2012-10-04 22:13:04', 'Delete Employee', 'Admin', ' '),
(61, '2012-10-04 22:13:06', 'Delete Employee', 'Admin', ' '),
(62, '2012-10-04 22:13:16', 'Add Employee', 'Admin', ' '),
(63, '2012-10-04 22:13:22', 'Delete Employee', 'Admin', ' '),
(64, '2012-10-04 22:13:24', 'Delete Employee', 'Admin', ' '),
(65, '2012-10-04 22:13:27', 'Delete Employee', 'Admin', ' '),
(66, '2012-10-04 22:13:29', 'Delete Employee', 'Admin', ' '),
(67, '2012-10-10 21:26:15', 'Login', 'Admin', 'john smith'),
(68, '2012-10-22 18:12:12', 'Login', 'Admin', 'john smith'),
(69, '2012-10-22 19:43:11', 'Login', 'Admin', 'john smith'),
(70, '2012-10-24 17:09:44', 'Login', 'Admin', 'john smith'),
(71, '2012-10-24 17:25:30', 'Login', 'Admin', 'john smith'),
(72, '2012-11-25 10:00:02', 'Login', 'Admin', 'john smith'),
(73, '2012-11-25 18:02:10', 'Login', 'Admin', 'john smith'),
(74, '2012-11-25 18:03:24', 'Login', 'Admin', 'john smith'),
(75, '2012-11-25 18:06:44', 'Logout', 'Admin', 'john smith'),
(76, '2012-11-25 18:06:52', 'Login', 'Admin', 'john smith'),
(77, '2012-11-25 18:08:16', 'Logout', 'Admin', 'john smith'),
(78, '2012-11-25 18:09:23', 'Login', 'Admin', 'john smith'),
(79, '2012-11-25 18:30:00', 'Delete Employee', 'Admin', ' '),
(80, '2012-11-26 21:21:33', 'Login', 'Admin', 'john smith'),
(81, '2012-11-26 22:20:28', 'Add Employee', 'Admin', 'john klk'),
(82, '2012-11-27 21:19:45', 'Login', 'Admin', 'john smith'),
(83, '2012-11-28 20:38:39', 'Login', 'Admin', 'john smith'),
(84, '2012-11-29 07:38:28', 'Login', 'Admin', 'john smith'),
(85, '2012-11-29 21:11:17', 'Login', 'Admin', 'john smith'),
(86, '2012-11-30 08:15:59', 'Login', 'Admin', 'john smith'),
(87, '2012-11-30 10:11:34', 'Logout', 'Admin', 'john smith'),
(88, '2012-11-30 10:11:45', 'Login', 'Admin', 'john smith'),
(89, '2012-11-30 10:13:48', 'Logout', 'Admin', 'john smith'),
(90, '2012-11-30 10:15:10', 'Login', 'Admin', 'john smith'),
(91, '2012-11-30 10:39:23', 'Delete Employee', 'Admin', ' '),
(92, '2012-11-30 13:23:48', 'Login', 'Admin', 'john smith'),
(93, '2012-11-30 14:13:48', 'Logout', 'User', 'john keivn lorayna'),
(94, '2012-11-30 15:57:06', 'Login', 'User', 'john keivn lorayna'),
(95, '2012-11-30 17:36:44', 'Login', 'User', 'john keivn lorayna'),
(96, '2012-11-30 19:10:19', 'Login', 'User', 'john keivn lorayna'),
(97, '2012-11-30 19:24:46', 'Login', 'User', 'john keivn lorayna'),
(98, '2012-11-30 19:35:04', 'Login', 'User', 'john keivn lorayna'),
(99, '2012-12-01 08:12:43', 'Login', 'User', 'john keivn lorayna'),
(100, '2012-12-01 15:03:53', 'Login', 'User', 'john keivn lorayna'),
(101, '2012-12-01 17:14:45', 'Login', 'User', 'john keivn lorayna'),
(102, '2012-12-01 20:13:28', 'Login', 'User', 'john keivn lorayna'),
(103, '2012-12-02 17:01:56', 'Login', 'User', 'john keivn lorayna'),
(104, '2012-12-02 18:16:13', 'Login', 'User', 'john keivn lorayna'),
(105, '2012-12-03 19:13:42', 'Login', 'User', 'john keivn lorayna'),
(106, '2012-12-04 08:08:12', 'Login', 'User', 'john keivn lorayna'),
(107, '2012-12-04 20:54:54', 'Login', 'User', 'john keivn lorayna'),
(108, '2012-12-05 19:51:18', 'Login', 'User', 'john keivn lorayna'),
(109, '2012-12-06 07:01:46', 'Login', 'User', 'john keivn lorayna'),
(110, '2012-12-06 07:02:03', 'Logout', 'User', 'john keivn lorayna'),
(111, '2012-12-06 19:59:33', 'Login', 'User', 'john keivn lorayna'),
(112, '2012-12-07 07:40:15', 'Login', 'User', 'john keivn lorayna'),
(113, '2012-12-07 22:02:58', 'Login', 'User', 'john keivn lorayna'),
(114, '2012-12-08 07:41:44', 'Login', 'User', 'john keivn lorayna'),
(115, '2012-12-08 20:26:43', 'Login', 'User', 'john keivn lorayna'),
(116, '2012-12-08 21:07:06', 'Delete Employee', 'User', 'we '),
(117, '2012-12-08 21:07:11', 'Delete Employee', 'User', 'we '),
(118, '2012-12-08 21:16:00', 'Delete Employee', 'User', 'e '),
(119, '2012-12-08 21:16:07', 'Delete Employee', 'User', 'w '),
(120, '2012-12-08 21:16:13', 'Delete Employee', 'User', 'w '),
(121, '2012-12-08 21:16:20', 'Delete Employee', 'User', 'x '),
(122, '2012-12-08 21:16:25', 'Delete Employee', 'User', 'y '),
(123, '2012-12-08 21:18:44', 'Delete Employee', 'User', 'wewe '),
(124, '2012-12-08 21:21:01', 'Delete Employee', 'User', ' '),
(125, '2012-12-08 21:21:05', 'Delete Employee', 'User', ' '),
(126, '2012-12-08 21:22:48', 'Delete Employee', 'User', ' '),
(127, '2012-12-08 21:28:12', 'Delete Employee', 'User', 'dsd '),
(128, '2012-12-08 21:28:18', 'Delete Employee', 'User', 'dsdksldklklskdlkds '),
(129, '2012-12-08 21:28:24', 'Delete Employee', 'User', 'l '),
(130, '2012-12-08 21:28:29', 'Delete Employee', 'User', 'q '),
(131, '2012-12-08 21:32:07', 'Delete Employee', 'User', ' '),
(132, '2012-12-08 21:32:11', 'Delete Employee', 'User', ' '),
(133, '2012-12-08 21:32:15', 'Delete Employee', 'User', ' '),
(134, '2012-12-08 21:40:45', 'Delete Employee', 'User', 'r '),
(135, '2012-12-10 20:53:54', 'Login', 'User', 'john keivn lorayna'),
(136, '2012-12-10 21:03:19', 'Delete Employee', 'User', ' '),
(137, '2012-12-10 21:04:05', 'Delete Employee', 'User', ' '),
(138, '2012-12-10 21:35:09', 'Delete Employee', 'User', ' '),
(139, '2012-12-11 07:11:34', 'Login', 'User', 'john keivn lorayna'),
(140, '2012-12-11 15:21:37', 'Login', 'User', 'john keivn lorayna'),
(141, '2012-12-11 18:56:20', 'Delete Employee', 'User', ' '),
(142, '2012-12-12 08:39:47', 'Login', 'User', 'john keivn lorayna'),
(143, '2012-12-12 16:52:45', 'Login', 'User', 'john keivn lorayna'),
(144, '2012-12-13 07:30:13', 'Login', 'User', 'john keivn lorayna'),
(145, '2012-12-13 07:35:25', 'Delete Employee', 'User', ' '),
(146, '2012-12-13 07:35:30', 'Delete Employee', 'User', ' '),
(147, '2012-12-13 07:35:36', 'Delete Employee', 'User', 'dsd '),
(148, '2012-12-13 09:25:05', 'Login', 'User', 'john keivn lorayna'),
(149, '2012-12-13 21:45:01', 'Login', 'Admin', 'r r'),
(150, '2012-12-13 21:46:00', 'Logout', 'Admin', 'r r'),
(151, '2012-12-13 21:46:05', 'Login', '', ' '),
(152, '2012-12-13 21:51:28', 'Login', '', ' '),
(153, '2012-12-13 21:51:35', 'Login', '', ' '),
(154, '2012-12-13 21:52:06', 'Login', '', ' '),
(155, '2012-12-13 21:53:27', 'Login', '', ' '),
(156, '2012-12-13 21:53:32', 'Login', '', ' '),
(157, '2012-12-13 21:56:20', 'Login', '', ' '),
(158, '2012-12-13 21:59:11', 'Login', 'User', ' '),
(159, '2012-12-13 22:21:29', 'Logout', 'User', 'john keivn lorayna'),
(160, '2012-12-13 22:21:33', 'Login', 'Admin', 'r r'),
(161, '2012-12-13 22:23:03', 'Logout', 'Admin', 'r r'),
(162, '2012-12-13 22:23:08', 'Login', 'User', ' '),
(163, '2012-12-13 22:48:05', 'Logout', 'User', 'john keivn lorayna'),
(164, '2012-12-23 18:19:45', 'Login', 'Admin', 'john keivn lorayna'),
(165, '2013-01-05 07:33:38', 'Login', 'Admin', 'john keivn lorayna'),
(166, '2013-01-05 08:11:58', 'Login', 'Admin', 'john keivn lorayna'),
(167, '2013-01-05 08:13:13', 'Login', 'Admin', 'john keivn lorayna'),
(168, '2013-01-05 08:44:12', 'Logout', 'Admin', 'john keivn lorayna'),
(169, '2013-01-05 08:44:19', 'Login', 'Admin', 'john keivn lorayna'),
(170, '2013-01-05 09:16:35', 'Login', 'Admin', 'john keivn lorayna'),
(171, '2013-01-05 09:23:07', 'Delete Employee', 'Admin', ' '),
(172, '2013-01-05 09:23:12', 'Delete Employee', 'Admin', ' '),
(173, '2013-01-05 15:25:04', 'Login', 'Admin', 'john keivn lorayna'),
(174, '2013-01-05 19:11:12', 'Login', 'Admin', 'john keivn lorayna'),
(175, '2013-01-06 08:30:56', 'Login', 'Admin', 'john keivn lorayna'),
(176, '2013-01-06 09:05:35', 'Login', 'Admin', 'john keivn lorayna'),
(177, '2013-01-06 09:08:40', 'Delete Employee', 'Admin', ' '),
(178, '2013-01-06 09:08:47', 'Delete Employee', 'Admin', ' '),
(179, '2013-01-06 09:33:20', 'Login', 'Admin', 'john keivn lorayna'),
(180, '2013-01-08 10:55:10', 'Login', 'Admin', 'john keivn lorayna'),
(181, '2013-01-08 11:17:16', 'Logout', '', ' '),
(182, '2013-01-08 14:12:17', 'Login', 'Admin', 'john keivn lorayna'),
(183, '2013-01-08 14:14:29', 'Logout', 'Admin', 'john keivn lorayna'),
(184, '2013-01-08 14:16:46', 'Login', 'Admin', 'john keivn lorayna'),
(185, '2013-01-08 15:02:28', 'Login', 'Admin', 'john keivn lorayna'),
(186, '2013-01-08 15:10:39', 'Delete Employee', 'Admin', 'lorayna '),
(187, '2013-01-08 15:16:44', 'Login', 'Admin', 'admin admin'),
(188, '2013-01-08 15:36:01', 'Login', 'Admin', 'admin admin'),
(189, '2013-01-08 15:42:32', 'Delete Employee', 'Admin', ' '),
(190, '2013-01-08 15:52:19', 'Login', 'Admin', 'admin admin'),
(191, '2013-01-08 15:53:14', 'Delete Employee', 'Admin', 'lorayna '),
(192, '2013-01-08 21:02:04', 'Delete Employee', 'Admin', 't '),
(193, '2013-01-08 21:02:20', 'Delete Employee', 'Admin', 'QUIAPO '),
(194, '2013-01-08 21:02:40', 'Delete Employee', 'Admin', 'tups '),
(195, '2013-01-08 22:28:36', 'Delete Employee', 'Admin', ' '),
(196, '2013-01-08 22:29:28', 'Delete Employee', 'Admin', 'ahai '),
(197, '2013-01-08 22:31:10', 'Delete Employee', 'Admin', 'amos '),
(198, '2013-01-08 22:53:46', 'Delete Employee', 'Admin', 'd '),
(199, '2013-01-08 22:53:50', 'Delete Employee', 'Admin', ' '),
(200, '2013-01-08 22:53:55', 'Delete Employee', 'Admin', 'sdsd '),
(201, '2013-01-08 22:54:02', 'Delete Employee', 'Admin', 'klk '),
(202, '2013-01-08 23:04:36', 'Delete Employee', 'Admin', 'RIVERA '),
(203, '2013-01-08 23:54:33', 'Logout', 'Admin', 'admin admin'),
(204, '2013-01-08 23:54:40', 'Login', 'User', ' '),
(205, '2013-01-08 23:55:15', 'Logout', 'User', 'user user'),
(206, '2013-01-09 14:20:40', 'Login', 'Admin', 'admin admin'),
(207, '2013-01-09 15:54:47', 'Delete Employee', 'Admin', 'SELENDRON '),
(208, '2013-01-09 16:50:06', 'Logout', 'Admin', 'admin admin'),
(209, '2013-01-09 18:13:32', 'Login', 'Admin', 'admin admin'),
(210, '2013-01-09 20:31:03', 'Logout', 'Admin', 'admin admin'),
(211, '2013-01-09 20:31:08', 'Login', 'User', ' '),
(212, '2013-01-10 13:05:48', 'Login', 'Admin', 'admin admin'),
(213, '2013-01-10 14:49:25', 'Delete Employee', 'Admin', ' '),
(214, '2013-01-10 22:18:41', 'Login', 'Admin', 'admin admin'),
(215, '2013-01-10 22:24:40', 'Logout', 'Admin', 'admin admin'),
(216, '2013-01-10 22:24:52', 'Login', 'User', ' '),
(217, '2013-01-10 22:26:11', 'Logout', 'User', 'aha aha'),
(218, '2013-01-10 22:26:21', 'Login', 'Admin', 'admin admin'),
(219, '2013-01-10 22:43:07', 'Login', 'User', ' '),
(220, '2013-01-11 18:29:22', 'Login', 'Admin', 'admin admin'),
(221, '2013-01-11 18:41:00', 'Delete Employee', 'Admin', ' '),
(222, '2013-01-11 19:02:39', 'Logout', 'Admin', 'admin admin'),
(223, '2013-01-11 19:02:45', 'Login', 'User', ' '),
(224, '2013-01-11 22:33:29', 'Delete Employee', 'User', 'VEGA '),
(225, '2013-01-11 22:46:35', 'Logout', 'User', 'user user'),
(226, '2013-01-11 22:46:40', 'Login', 'Admin', 'admin admin'),
(227, '2013-01-11 22:47:29', 'Login', 'User', ' '),
(228, '2013-01-12 10:09:55', 'Login', 'Admin', 'admin admin'),
(229, '2013-01-12 10:20:00', 'Login', 'User', ' '),
(230, '2013-01-12 10:25:51', 'Delete Employee', '', 'SELENDRON  '),
(231, '2013-01-12 10:26:12', 'Delete Employee', '', 'ABOY  '),
(232, '2013-01-12 10:53:27', 'Logout', '', ' '),
(233, '2013-01-12 10:53:35', 'Login', 'Admin', 'admin admin'),
(234, '2013-01-15 14:01:12', 'Login', 'Admin', 'admin admin'),
(235, '2013-01-15 22:40:40', 'Login', 'Admin', 'admin admin'),
(236, '2013-01-15 22:44:37', 'Logout', 'Admin', 'admin admin'),
(237, '2013-01-15 22:44:50', 'Login', 'User', ' '),
(238, '2013-01-15 22:45:27', 'Logout', 'User', 'user user'),
(239, '2013-01-16 21:18:14', 'Login', 'Admin', 'admin admin'),
(240, '2013-01-17 18:22:34', 'Login', 'Admin', 'admin admin'),
(241, '2013-01-25 18:47:37', 'Login', 'Admin', 'admin admin'),
(242, '2013-01-25 19:24:42', 'Logout', 'Admin', 'admin admin'),
(243, '2013-01-25 19:25:02', 'Login', 'User', ' '),
(244, '2013-01-25 19:54:00', 'Login', 'Admin', 'admin admin'),
(245, '2013-01-25 20:00:18', 'Logout', 'Admin', 'admin admin'),
(246, '2013-01-25 20:00:25', 'Login', 'User', ' '),
(247, '2013-01-25 20:09:20', 'Logout', '', ' '),
(248, '2013-01-25 20:09:27', 'Login', 'Admin', 'admin admin'),
(249, '2013-01-25 21:54:23', 'Login', 'Admin', 'admin admin'),
(250, '2013-01-27 20:32:45', 'Login', 'User', ' '),
(251, '2013-01-28 21:17:26', 'Login', 'User', ' '),
(252, '2013-01-28 22:06:42', 'Login', 'Admin', 'admin admin'),
(253, '2013-01-28 22:06:58', 'Login', 'User', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `leave_record`
--

CREATE TABLE IF NOT EXISTS `leave_record` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `employeeID` int(11) NOT NULL,
  `No_of_Days` int(5) NOT NULL,
  `No_of_Days_approved` int(5) NOT NULL,
  `from_date` varchar(100) NOT NULL,
  `to_date` varchar(100) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `leave_record`
--

INSERT INTO `leave_record` (`leave_id`, `employeeID`, `No_of_Days`, `No_of_Days_approved`, `from_date`, `to_date`) VALUES
(16, 119, 10, 10, '01/10/2013', '01/30/2013'),
(17, 119, 10, 5, '01/01/2013', '01/24/2013'),
(18, 136, 10, 7, '01/08/2013', '01/30/2013'),
(20, 107, 7, 5, '06/18/2013', '06/26/2013'),
(22, 123, 5, 5, '03/29/2010', '06/20/2011'),
(23, 119, 3, 3, '10/10/2012', '01/15/2013');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position`) VALUES
(2, 'HEAD TEACHER VI'),
(3, 'MASTER TEACHER II'),
(4, 'MASTER TEACHER I'),
(5, 'HEAD TEACHER III '),
(6, 'ADMINISTRATIVE OFFICER IV '),
(7, 'NURSE II '),
(8, 'HEAD TEACHER I '),
(9, 'GUIDANCE COUNSELOR III'),
(10, 'SCHOOL LIBRARIAN III '),
(11, 'TEACHER III'),
(12, 'ACCOUNTANT I '),
(13, 'TEACHER II '),
(14, 'GUIDANCE COUNSELOR I'),
(15, 'TEACHER I '),
(16, 'ADMINISTRATIVE OFFICER I '),
(17, 'ADMINISTRATIVE ASSISTANT II'),
(18, 'ADMINISTRATIVE AIDE IV'),
(19, 'ADMINISTRATIVE AIDE III'),
(20, 'SECURITY GUARD I '),
(21, 'ADMINISTRATIVE AIDE I -'),
(23, 'SCHOOL PRINCIPAL I ');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `qualification_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification` varchar(100) NOT NULL,
  PRIMARY KEY (`qualification_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualification_id`, `qualification`) VALUES
(12, 'Undergraduate, 70 units'),
(13, 'Bachelors Degree'),
(14, 'CAR for Masters Degree'),
(15, 'Masters Degree'),
(16, 'CAR for Doctoral Degree'),
(17, 'Doctoral Degree');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `Name`) VALUES
(1, 'Guimbala-on NHS'),
(2, 'Don Felix T. Lacson Memorial NHS'),
(3, 'Doña Montserrat Lopez Memorial HS'),
(4, 'SPED Center - Silay South'),
(5, 'Lantawan Integrated School'),
(6, 'Eustaquio Lopez NHS'),
(7, 'Doña Angeles J. Montinola MHS'),
(8, 'Guinhalaran Integrated School'),
(9, 'Don Albino & Doña Dolores Jison IS'),
(10, 'Napilas Integrated School'),
(11, 'Sibato Integrated School'),
(12, 'Violeta Integrated School'),
(13, 'Don Serafin L.Golez Memorial IS'),
(14, 'Division of Silay Pre-School'),
(15, 'Division of Silay Elementary School');

-- --------------------------------------------------------

--
-- Table structure for table `service_credits`
--

CREATE TABLE IF NOT EXISTS `service_credits` (
  `service_credits_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_date` varchar(100) NOT NULL,
  `to_date` varchar(100) NOT NULL,
  `LE_vacation` int(11) NOT NULL,
  `LE_sick` int(11) NOT NULL,
  `LS_vacation` int(11) NOT NULL,
  `LS_sick` int(11) NOT NULL,
  `B_vacation` int(11) NOT NULL,
  `B_sick` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  PRIMARY KEY (`service_credits_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `service_credits`
--

INSERT INTO `service_credits` (`service_credits_id`, `from_date`, `to_date`, `LE_vacation`, `LE_sick`, `LS_vacation`, `LS_sick`, `B_vacation`, `B_sick`, `total`, `employeeID`) VALUES
(12, '01/16/2013', '01/15/2013', 30000, 30000, 300, 200, 29700, 29800, 59500, 27),
(22, '', '', 0, 0, 0, 0, 29700, 29800, 59500, 31),
(23, '01/01/2013', '01/02/2013', 2750, 2750, 0, 0, 35200, 35300, 70500, 30),
(21, '01/23/2013', '01/29/2013', 10000, 10000, 10000, 10000, 29700, 29800, 59500, 27),
(29, '01/01/2013', '01/02/2013', 2750, 2750, 0, 0, 2750, 2750, 5500, 103),
(30, '01/04/2013', '01/05/2013', 15000, 15000, 0, 0, 17750, 17750, 35500, 103),
(31, '01/06/2013', '01/07/2013', 0, 0, 5000, 0, 12750, 17750, 30500, 103),
(32, '01/29/2013', '01/30/2013', 10000, 10000, 5000, 5000, 17750, 22750, 40500, 103);

-- --------------------------------------------------------

--
-- Table structure for table `service_record`
--

CREATE TABLE IF NOT EXISTS `service_record` (
  `service_record_id` int(11) NOT NULL AUTO_INCREMENT,
  `employeeID` int(11) NOT NULL,
  `from_date` varchar(100) NOT NULL,
  `to_date` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `station_place` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`service_record_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `service_record`
--

INSERT INTO `service_record` (`service_record_id`, `employeeID`, `from_date`, `to_date`, `Designation`, `status`, `salary`, `station_place`, `branch`, `Remarks`) VALUES
(8, 27, '12/03/2012', '12/19/2012', '', '', '', '', '', ''),
(2, 27, '12/04/2012', '12/03/2012', 'dsdsd', '', '', '', '', ''),
(3, 27, '12/04/2012', '12/03/2012', 'dsdsd', '', '', '', '', ''),
(6, 27, '12/05/2012', '12/10/2012', 'Teacher 1', 'regular', '100', 'silay city', 'dksdk', 'dksdjsk'),
(7, 27, '12/03/2012', '12/20/2012', 'sdsd', 'dsd', 'dsd', 'dsd', 'dsd', 'dsd'),
(9, 119, '01/01/2013', '01/15/2013', '', 'P', '26000', '', '', ''),
(10, 104, '01/01/2013', '01/23/2013', '', 'P', '456666', '', '', ''),
(11, 119, '01/08/2013', '01/08/2016', '', 'P', '230000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `UserName`, `Password`, `FirstName`, `LastName`, `User_Type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'Admin'),
(4, 'user', 'user', 'user', 'user', 'User');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
