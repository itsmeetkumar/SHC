-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 02:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shc`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
`id` int(99) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `doc_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pat_id`, `doc_id`, `date`, `time`) VALUES
(1, '1234', '123', '2017/03/28', '12'),
(2, '789654132', '123', '2017/09/28', '6'),
(3, '55555', 'Select the Doctor Name', '2017/04/01', '1'),
(4, '55555', 'Adwaita', '2017/04/01', '10:00 AM - 11:00 AM'),
(5, '55555', 'Adwaita', '2017/04/01', '07:00 AM - 08:00 AM'),
(6, '98765', '12345', '2017/04/02', '1'),
(7, '8140', 'Adwaita', '2017/04/02', '11:00 AM - 12:00 PM'),
(8, '8140', 'Select the Doctor Name', '2017/04/02', '20:00 PM - 21:00 PM'),
(9, 'Select the Patient ID', 'Select the Doctor Name', '2017/07/29', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bb`
--

CREATE TABLE IF NOT EXISTS `bb` (
`id` int(99) NOT NULL,
  `r_number` varchar(255) NOT NULL,
  `h` varchar(255) NOT NULL,
  `w` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
`id` int(90) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `dr_id` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bp`
--

CREATE TABLE IF NOT EXISTS `bp` (
`id` int(99) NOT NULL,
  `bp` varchar(255) NOT NULL,
  `r_number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bp`
--

INSERT INTO `bp` (`id`, `bp`, `r_number`, `date`) VALUES
(1, '999', '55555', '2017/04/01'),
(2, '200', '55555', '2017/04/01'),
(3, '700', '55555', '2017/04/08'),
(4, '78', '8140', '2017/04/02'),
(5, '59', '8140', '2017/04/02'),
(6, '45', '8140', '2017/04/02'),
(7, '999', '8140', '2017/07/29');

-- --------------------------------------------------------

--
-- Table structure for table `chemist`
--

CREATE TABLE IF NOT EXISTS `chemist` (
`id` int(99) NOT NULL,
  `ch_id` varchar(255) NOT NULL,
  `ch_name` varchar(255) NOT NULL,
  `ch_loc_1` varchar(255) NOT NULL,
  `ch_loc_2` varchar(255) NOT NULL,
  `ch_address` text NOT NULL,
  `ch_number` varchar(255) NOT NULL,
  `ch_ow_name` varchar(255) NOT NULL,
  `ch_ow_age` varchar(255) NOT NULL,
  `ch_ow_sex` varchar(255) NOT NULL,
  `ch_ow_phone` varchar(255) NOT NULL,
  `ch_ow_email` varchar(255) NOT NULL,
  `ch_ow_address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemist`
--

INSERT INTO `chemist` (`id`, `ch_id`, `ch_name`, `ch_loc_1`, `ch_loc_2`, `ch_address`, `ch_number`, `ch_ow_name`, `ch_ow_age`, `ch_ow_sex`, `ch_ow_phone`, `ch_ow_email`, `ch_ow_address`) VALUES
(1, '123456', 'FGHJK', '78', '78', 'VBNM,', '09712629808', 'KJHGF', '78', 'Male', '09712629808', 'meetp1197@gmail.com', 'naranpura ahmedabad'),
(2, '1234', 'fghjk', '7', '7', 'ghjkbnm', '09712629808', 'fghjk', '78', 'Male', '09712629808', 'meetp1197@gmail.com', 'naranpura ahmedabad'),
(3, '780', 'meet', '90', '90', 'naranpura ahmedabad', '09712629808', 'pin', '20', 'Male', '09712629808', 'meetp1197@gmail.com', 'naranpura ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `dmdb`
--

CREATE TABLE IF NOT EXISTS `dmdb` (
`id` int(99) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `case` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
`id` int(99) NOT NULL,
  `dr_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `desi` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dr_code`, `name`, `gender`, `address`, `desi`) VALUES
(1, '123654789', 'hhhhhhhhhh hhhhhh', 'Male', 'bvyvyyvyvy', 'hbbbbuuub'),
(2, '12345', 'abcde', 'Male', 'fkhtkhftg,k', 'gftrsjtm'),
(3, '123', 'Adwaita', 'Female', 'bktfikl', 'hcjhck,ggvkvk');

-- --------------------------------------------------------

--
-- Table structure for table `gluc`
--

CREATE TABLE IF NOT EXISTS `gluc` (
`id` int(99) NOT NULL,
  `r_number` varchar(255) NOT NULL,
  `gluc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gluc`
--

INSERT INTO `gluc` (`id`, `r_number`, `gluc`, `date`) VALUES
(1, '55555', '90', '2017/04/01'),
(2, '8140', '56', '2017/04/02'),
(3, '8140', '80', '2017/04/02'),
(4, '8140', '39', '2017/04/02'),
(5, '8140', '999', '2017/07/29');

-- --------------------------------------------------------

--
-- Table structure for table `medi_cat`
--

CREATE TABLE IF NOT EXISTS `medi_cat` (
`id` int(90) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medi_cat`
--

INSERT INTO `medi_cat` (`id`, `cat`) VALUES
(1, 'Demo1'),
(2, 'demo2'),
(3, 'cold'),
(4, 'fgh');

-- --------------------------------------------------------

--
-- Table structure for table `medi_data`
--

CREATE TABLE IF NOT EXISTS `medi_data` (
`id` int(90) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medi_data`
--

INSERT INTO `medi_data` (`id`, `name`, `des`, `cat`, `cost`, `stock`) VALUES
(1, 'Demo1med', 'demo1med', 'demo2', '25', '300'),
(2, 'abcde', 'hbsdLJDbvlsdvb', 'demo2', '58', '6'),
(3, 'Paragard5', 'bp', 'demo2', '99', '100'),
(4, 'hjk', 'dfghjkldfg', 'cold', '6', '666');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
`id` int(90) NOT NULL,
  `r_number` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `psex` varchar(255) NOT NULL,
  `add` text NOT NULL,
  `p_number` varchar(255) NOT NULL,
  `dr_code` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `mailid` varchar(255) NOT NULL,
  `pms` varchar(255) NOT NULL,
  `m_inc` varchar(255) NOT NULL,
  `pbg` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gadd` text NOT NULL,
  `gp_number` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `r_number`, `pin`, `name`, `psex`, `add`, `p_number`, `dr_code`, `age`, `mailid`, `pms`, `m_inc`, `pbg`, `gname`, `gadd`, `gp_number`, `sex`, `dep`) VALUES
(1, '123', '', 'demo', 'Male', 'kjafasvs lvns pslh vlv l', '7778832229', '', '', '', '', '', '', '', '', '', '', ''),
(2, '123', '', 'demo', 'Male', 'kjafasvs lvns pslh vlv l', '7778832229', '', '', '', '', '', '', '', '', '', '', ''),
(3, '123', '', 'Meetkumar patel', 'Male', 'Demo For now', '7778832229', '', '', '', '', '', '', '', '', '', '', ''),
(4, '1234', '', 'meet', 'Male', 'khkbknkbkb', '7777888', '', '', '', '', '', '', '', '', '', '', ''),
(5, '98765', '', 'HARSH PATEL HARAMI', 'Male', 'zxcvbnmasdfghjklqwertyuiop', '7896541230', '', '20', 'asdfgh@gmail.com', 'Married', '0789456', 'A+', 'asdfghjkl', 'zxcvbnm,asdfghjklqwertyuiop', '7894561230', 'Male', 'Accident and emergency cases'),
(6, '12', '', 'patel kamal', 'Male', 'ehehrdhbdd', '2424255363', '', '', '', '', '', '', '', '', '', '', ''),
(7, '156523', '', 'Adwaita', 'Female', 'hhgiuufl;oij;o', '5562383', '', '', '', '', '', '', '', '', '', '', ''),
(8, '2156', '', 'gjfujgdjm', 'Male', '34jhvhjvkhk', '6546734', '', '', '', '', '', '', '', '', '', '', ''),
(9, '123365', '', 'afefffef', 'Male', 'cacaca', '1236547890', '', '', '', '', '', '', '', '', '', '', ''),
(10, '55555', '55555', 'Vruti', 'Female', '25,sjedjesttjsryksxykhst', '9876543210', '', '20', 'v.d@yahoo.com', 'Married', '150000', 'AB+', 'Drashti Shah', '43,bwueycbausckbuka,adbajv', '899566', 'Female', 'General Surgery'),
(11, '99999', '', 'Kamal Patel ', 'Male', 'naranpura ahmedabad', '9712629808', '', '20', 'meetp1197@gmail.com', 'Married', '9999999', 'A+', 'MEET PATEL', 'near Bhikhari Road', '9712629808', 'Male', 'Accident and emergency cases'),
(12, '789654132', '', 'asdfghjkl', 'Male', 'zxcvbnmasdfghjklqwertyuiop', '7896541230', '', '20', 'asdfgh@gmail.com', 'Unmarried', '0789456', 'O+', 'asdfghjkl', 'zxcvbnm,asdfghjklqwertyuiop', '7894561230', 'Male', 'Accident and emergency cases'),
(13, '8140', '8140', 'MeetKumar Patel', 'Male', 'Near Sayona city, ghatlodiya , Naranpura, Ahmedabad, Gujarat', '7778832229', '', '21', 'meetp1197@gmail.com', 'Unmarried', '34000', 'AB-', 'Jayendrabhai', 'Near Sayona city, ghatlodiya , Naranpura, Ahmedabad, Gujarat', '9427020198', 'Male', 'Anaesthetics');

-- --------------------------------------------------------

--
-- Table structure for table `pat_dia`
--

CREATE TABLE IF NOT EXISTS `pat_dia` (
`id` int(90) NOT NULL,
  `diag_no` varchar(255) NOT NULL,
  `diag_data` longtext NOT NULL,
  `remarks` longtext NOT NULL,
  `diag_date` varchar(255) NOT NULL,
  `other` longtext NOT NULL,
  `pat_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_dia`
--

INSERT INTO `pat_dia` (`id`, `diag_no`, `diag_data`, `remarks`, `diag_date`, `other`, `pat_id`) VALUES
(1, '', 'dthdcfkuglihuj;', 'gvrtdxjfkgihjn.mk', '2017/03/27', 'azsxcyvjbkjnlkmkjyt', '1234'),
(2, '', 'jsbfALJegbLIWEgh', 'ahbhgvigwbeg', '2017/03/27', 'BVJHVBHGEL', '123'),
(3, '', 'demo', 'demo', '2017/04/02', 'MRI', '55555'),
(4, '', 'demo', 'demo', '2017/04/02', 'MRI', '55555'),
(5, '', 'demo', 'demo', '2017/04/02', 'MRI', '55555'),
(6, '', 'A biopsy is the removal of a small amount of tissue. It is an important way doctors diagnose many different types of cancer. The sample removed during the biopsy needs to be processed and analyzed before the doctor can make a diagnosis. To make a diagnosis, the doctor views the sample under a microscope and may perform other tests. After a biopsy, your health care team completes several steps before the pathologist makes a diagnosis. A pathologist is a doctor who specializes in interpreting laboratory tests and evaluating cells, tissues, and organs to diagnose disease.', 'The sample may be needed for other tests based on the suspected diagnosis. Molecular tests find genes that might be active, changed, or missing. Other gene or protein tests may be needed to identify which treatments will work. The pathologist or a technician will prepare a part of the specimen for these tests.', '2017/04/02', 'Pathology', '8140');

-- --------------------------------------------------------

--
-- Table structure for table `pres_data`
--

CREATE TABLE IF NOT EXISTS `pres_data` (
`id` int(90) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `doc_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `pre_data` text NOT NULL,
  `remark` text NOT NULL,
  `other` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pres_data`
--

INSERT INTO `pres_data` (`id`, `pat_id`, `doc_id`, `date`, `pre_data`, `remark`, `other`) VALUES
(1, '123', '', '2017/03/27', 'klklklklklk', 'klklklklklk', 'klnlnlnjlnl'),
(2, '55555', '', '2017/03/27', 'kjdfLKSEhfaULKSE', 'sjgDbKshzrh', 'rgsrhhr'),
(3, '55555', '', '2017/03/27', 'kjdfLKSEhfaULKSE', 'sjgDbKshzrh', 'rgsrhhr'),
(4, '8140', '', '2017/04/02', 'rsenic alb 30 ch, 3 drops twice daily and ipecac 3 ch, twice daily. Give her ors liquid solution. Revert me after 3 days', 'none for now', 'no'),
(5, '8140', '', '2017/07/28', 'DEMO 123', 'F*** You ', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
`id` int(99) NOT NULL,
  `r_number` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `r_number`, `temp`, `date`) VALUES
(1, '55555', '90', '2017/04/01'),
(2, '8140', '70', '2017/04/02'),
(3, '8140', '85', '2017/04/02'),
(4, '8140', '29', '2017/04/02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bb`
--
ALTER TABLE `bb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bp`
--
ALTER TABLE `bp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemist`
--
ALTER TABLE `chemist`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmdb`
--
ALTER TABLE `dmdb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gluc`
--
ALTER TABLE `gluc`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medi_cat`
--
ALTER TABLE `medi_cat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medi_data`
--
ALTER TABLE `medi_data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pat_dia`
--
ALTER TABLE `pat_dia`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pres_data`
--
ALTER TABLE `pres_data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bb`
--
ALTER TABLE `bb`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp`
--
ALTER TABLE `bp`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chemist`
--
ALTER TABLE `chemist`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dmdb`
--
ALTER TABLE `dmdb`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gluc`
--
ALTER TABLE `gluc`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `medi_cat`
--
ALTER TABLE `medi_cat`
MODIFY `id` int(90) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medi_data`
--
ALTER TABLE `medi_data`
MODIFY `id` int(90) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `id` int(90) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pat_dia`
--
ALTER TABLE `pat_dia`
MODIFY `id` int(90) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pres_data`
--
ALTER TABLE `pres_data`
MODIFY `id` int(90) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
