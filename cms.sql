-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentid` varchar(255) NOT NULL,
  `departmentname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `studentscount` varchar(255) NOT NULL DEFAULT '0',
  `staffscount` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentid`, `departmentname`, `course`, `studentscount`, `staffscount`) VALUES
(2, 'DEPT-4919O', 'abcd', 'BE', '2', '0'),
(3, 'DEPT-2153V', 'Testing', 'ME', '0', '0'),
(4, 'DEPT-4421F', 'Testing', 'ME', '1', '0'),
(5, 'DEPT-9040R', 'gufvg', 'Both', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `driverattendancedata`
--

CREATE TABLE `driverattendancedata` (
  `id` int(11) NOT NULL,
  `driverid` varchar(255) NOT NULL,
  `drivername` varchar(255) NOT NULL,
  `attendancedate` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driverdata`
--

CREATE TABLE `driverdata` (
  `id` int(11) NOT NULL,
  `driverid` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `dateofbirth` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `emergencycontactname` varchar(255) DEFAULT NULL,
  `emergencycontactnumber` varchar(255) DEFAULT NULL,
  `emergencycontactrelationship` varchar(255) DEFAULT NULL,
  `driverphoto` varchar(255) DEFAULT NULL,
  `licensenumb` varchar(255) DEFAULT NULL,
  `licenseexpirydate` varchar(255) DEFAULT NULL,
  `licensephoto` varchar(255) DEFAULT NULL,
  `firstname_lastname` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Inactive',
  `salary` varchar(255) NOT NULL DEFAULT '25000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driversalary`
--

CREATE TABLE `driversalary` (
  `id` int(11) NOT NULL,
  `driverid` varchar(255) NOT NULL,
  `drivername` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generalproficiencycoursedata`
--

CREATE TABLE `generalproficiencycoursedata` (
  `id` int(11) NOT NULL,
  `requestid` varchar(255) NOT NULL,
  `studentid` varchar(255) NOT NULL DEFAULT 'NA',
  `gpcoursetype` varchar(255) NOT NULL DEFAULT 'NA',
  `gpcourse` varchar(255) NOT NULL DEFAULT 'NA',
  `semester` varchar(255) NOT NULL DEFAULT 'NA',
  `status` varchar(255) NOT NULL DEFAULT 'NA',
  `requestdate` varchar(255) NOT NULL DEFAULT 'NA',
  `document` varchar(255) NOT NULL DEFAULT 'NA',
  `documentuploadstatus` varchar(255) NOT NULL DEFAULT 'Not Uploaded',
  `documentverificationstatus` varchar(255) NOT NULL DEFAULT 'NA',
  `cancelrequest` varchar(255) NOT NULL DEFAULT 'NA',
  `canceldate` varchar(255) NOT NULL DEFAULT 'NA',
  `cancelstatus` varchar(255) NOT NULL DEFAULT 'Active',
  `studentname` varchar(255) NOT NULL,
  `preferencelockedstatus` varchar(255) NOT NULL DEFAULT 'NA',
  `documentuploadwindow` varchar(255) NOT NULL DEFAULT 'Closed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generalproficiencycoursedata`
--

INSERT INTO `generalproficiencycoursedata` (`id`, `requestid`, `studentid`, `gpcoursetype`, `gpcourse`, `semester`, `status`, `requestdate`, `document`, `documentuploadstatus`, `documentverificationstatus`, `cancelrequest`, `canceldate`, `cancelstatus`, `studentname`, `preferencelockedstatus`, `documentuploadwindow`) VALUES
(1, 'TN1', 'STD2', 'Proficiency Courses Under DSW', '21GPC Bhangra-I', 'NA', 'Pending', '21-03-24', 'Appraisal_Manual_SOP_Complete_2021-22.pdf', 'Uploaded', 'Approved', 'NA', 'NA', 'Active', 'Manohar More', 'Locked', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id`, `email`, `password`, `role`, `userid`, `studentname`) VALUES
(1, 'admin@gmail.com', 'admin', 'Admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `routedata`
--

CREATE TABLE `routedata` (
  `id` int(11) NOT NULL,
  `serialnumber` varchar(255) NOT NULL DEFAULT 'NA',
  `routename` varchar(255) NOT NULL DEFAULT 'NA',
  `routestartpoint` varchar(255) NOT NULL DEFAULT 'NA',
  `routeendpoint` varchar(255) NOT NULL DEFAULT 'NA',
  `routedistance` varchar(255) NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffattendancedata`
--

CREATE TABLE `staffattendancedata` (
  `id` int(11) NOT NULL,
  `staffid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffcheckincheckoutdata`
--

CREATE TABLE `staffcheckincheckoutdata` (
  `id` int(11) NOT NULL,
  `staffid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `intime` varchar(255) NOT NULL,
  `outtime` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffdata`
--

CREATE TABLE `staffdata` (
  `id` int(11) NOT NULL,
  `staffid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `joiningdate` varchar(255) NOT NULL,
  `profilephoto` varchar(255) NOT NULL,
  `loginemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffhistory`
--

CREATE TABLE `staffhistory` (
  `id` int(11) NOT NULL,
  `staffid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `joiningdate` varchar(255) NOT NULL,
  `profilephoto` varchar(255) NOT NULL,
  `loginemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffleavedata`
--

CREATE TABLE `staffleavedata` (
  `id` int(11) NOT NULL,
  `staffid` varchar(255) NOT NULL DEFAULT 'NA',
  `leavetype` varchar(255) NOT NULL DEFAULT 'NA',
  `leavespan` varchar(255) NOT NULL DEFAULT 'NA',
  `leavedate` varchar(255) NOT NULL DEFAULT 'NA',
  `fromdate` varchar(255) NOT NULL DEFAULT 'NA',
  `todate` varchar(255) NOT NULL DEFAULT 'NA',
  `totaldays` int(11) NOT NULL,
  `leavedescription` varchar(255) NOT NULL DEFAULT 'NA',
  `status` varchar(255) NOT NULL,
  `remainingleavecount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffsalarybasedondesignation`
--

CREATE TABLE `staffsalarybasedondesignation` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffsalarybasedondesignation`
--

INSERT INTO `staffsalarybasedondesignation` (`id`, `designation`, `salary`) VALUES
(1, 'Assistant Professor', '30000'),
(2, 'Professor', '40000'),
(3, 'HOD', '60000'),
(4, 'Librarian', '25000'),
(5, 'Library Assistant', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `staffsalarydata`
--

CREATE TABLE `staffsalarydata` (
  `id` int(11) NOT NULL,
  `staffid` varchar(255) NOT NULL,
  `staffname` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stopdata`
--

CREATE TABLE `stopdata` (
  `id` int(11) NOT NULL,
  `stopserialnumber` varchar(255) NOT NULL DEFAULT 'NA',
  `stopname` varchar(255) NOT NULL DEFAULT 'NA',
  `stopaddress` varchar(255) NOT NULL DEFAULT 'NA',
  `routename` varchar(250) NOT NULL DEFAULT 'NA',
  `routeid` int(11) NOT NULL,
  `stopfees` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `student_first_name` varchar(250) NOT NULL DEFAULT 'NA',
  `student_middle_name` varchar(250) NOT NULL DEFAULT 'NA',
  `student_last_name` varchar(250) NOT NULL DEFAULT 'NA',
  `father_first_name` varchar(250) NOT NULL DEFAULT 'NA',
  `father_middle_name` varchar(250) NOT NULL DEFAULT 'NA',
  `father_last_name` varchar(250) NOT NULL DEFAULT 'NA',
  `mother_first_name` varchar(250) NOT NULL DEFAULT 'NA',
  `mother_middle_name` varchar(250) NOT NULL DEFAULT 'NA',
  `mother_last_name` varchar(250) NOT NULL DEFAULT 'NA',
  `student_date_of_birth` varchar(250) NOT NULL DEFAULT 'NA',
  `gender` varchar(50) NOT NULL DEFAULT 'NA',
  `nationality` varchar(100) NOT NULL DEFAULT 'NA',
  `student_phone_number` varchar(100) NOT NULL DEFAULT 'NA',
  `parent_phone_number` varchar(100) NOT NULL DEFAULT 'NA',
  `email` varchar(100) NOT NULL DEFAULT 'NA',
  `blood_group` varchar(10) NOT NULL DEFAULT 'NA',
  `religion` varchar(50) NOT NULL DEFAULT 'NA',
  `category` varchar(50) NOT NULL DEFAULT 'NA',
  `course` varchar(50) NOT NULL DEFAULT 'NA',
  `type` varchar(50) NOT NULL DEFAULT 'NA',
  `departmentid` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL DEFAULT 'NA',
  `year` varchar(10) NOT NULL DEFAULT 'NA',
  `admission_date` varchar(250) NOT NULL DEFAULT 'NA',
  `address` varchar(255) NOT NULL DEFAULT 'NA',
  `city` varchar(250) NOT NULL DEFAULT 'NA',
  `state` varchar(250) NOT NULL DEFAULT 'NA',
  `country` varchar(250) NOT NULL DEFAULT 'NA',
  `studentphoto` varchar(250) NOT NULL,
  `studentsign` varchar(250) NOT NULL,
  `formstatus` varchar(50) NOT NULL,
  `transportstid` int(11) NOT NULL,
  `studenttransportstatus` varchar(255) NOT NULL,
  `stopname` varchar(255) NOT NULL,
  `totalbusfees` varchar(255) NOT NULL,
  `paidbusfees` varchar(255) NOT NULL,
  `reamainingbusfees` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `student_id`, `student_first_name`, `student_middle_name`, `student_last_name`, `father_first_name`, `father_middle_name`, `father_last_name`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `student_date_of_birth`, `gender`, `nationality`, `student_phone_number`, `parent_phone_number`, `email`, `blood_group`, `religion`, `category`, `course`, `type`, `departmentid`, `department`, `year`, `admission_date`, `address`, `city`, `state`, `country`, `studentphoto`, `studentsign`, `formstatus`, `transportstid`, `studenttransportstatus`, `stopname`, `totalbusfees`, `paidbusfees`, `reamainingbusfees`, `semester`) VALUES
(2, 'STD2', 'Sonal', 'Mukesh', 'Khana', 'Kumar', 'Mahesh', 'Khana', 'Divya', 'Sunil', 'Mate', '2004-12-03', 'Female', 'INDIAN', '9874565356', '7894561265356365', 'pooja@manasvi.tech', 'NA', 'Christian', 'Obc', 'Engineering', 'BE', 'DEPT-4919O', 'abcd', '2', '2024-03-01', 'Nashik Road', 'nashik', 'Maharastra', 'India', 'astroblog1.jpg', 'astroblog1.jpg', 'Filled', 0, '', '', '', '', '', 'NA'),
(3, 'STD3', 'gd', 'd', 'd', 'a', 'f', 'a', 'a', 'a', 'a', '2004-08-12', 'Female', 'INDIAN', '1234667895', '526544651545444441411', 'reseh@ms.com', 'Please Sel', 'Hindu', 'Obc', 'Engineering', 'BE', 'NA', '', '4', '2024-05-01', 'sccsd', 'Goa', 'maharstra', 'rnjrsyjssr', 'bio.jpg', 'bio.jpg', 'Filled', 0, '', '', '', '', '', 'NA'),
(4, 'STD4', 'saaaa', 'ppaaaa', 'ppppppppp', 'ppaaa', 'saadda', 'pppaaa', 'gbg', 'kncfjkn', 'knjkeh', '2004-08-18', 'Female', 'INDIAN', '5465456456', '1213123456', 'abcjabc@acvj', 'Please Sel', 'Hindu', 'Obc', 'Engineering', 'BE', 'NA', '', '4', '2024-04-19', 'sccsd', 'hhbh', 'Maharashtra', 'rnjrsyjssr', 'bio.jpg', 'bio.jpg', 'Filled', 0, '', '', '', '', '', 'NA'),
(5, 'STD5', 'saaaa', 'ppaaaa', 'ppppaaaa', 'ppaaa', 'saadda', 'gbgb', 'pppdnhin', 'kncfjkn', 'gbg', '2004-11-18', 'Female', 'INDIAN', '3151551541', '2131516146', 'hgchchcdyr@tgfi', 'NA', 'Hindu', 'Obc', 'Engineering', 'BE', 'DEPT-9040R', 'gufvg', '3', '2024-01-11', 'sccsd', 'hhbh', 'Maharashtra', 'rnjrsyjssr', 'bio.jpg', 'bio.jpg', 'Filled', 0, '', '', '', '', '', 'NA'),
(6, 'STD6', 'saaaa', 'ppaaaa', 'ppppaaaa', 'ppaaa', 'saadda', 'pppaaa', 'gbg', 'kncfjkn', 'knjkeh', '2004-12-10', 'Male', 'INDIAN', '3151551541', '2131516146', 'rese@hms.com', 'NA', 'Hindu', 'General', 'Engineering', 'BE', 'DEPT-4919O', 'abcd', '2', '2024-03-28', 'cgc kutf@#$16186', 'pune', 'jihu', 'nnn', 'bio.jpg', 'bio.jpg', 'Filled', 0, '', '', '', '', '', 'NA'),
(7, 'STD7', 'Reyansha', 'Mayurkant', 'Nerkar', 'Mayurkant', 'Ramesh', 'Nerkar', 'Rani', 'Mayurkant', 'Nerkar', '2003-02-01', 'Please Select Gender', 'Please Select Nationality', '8765654654', '4543543543', 'pranali@gmailcom', 'Others', 'Please Select Religion', 'Please Select Category', 'Please Select Course', 'Please Select Type', 'NA', '', 'Please Sel', '2024-04-24', 'Pandit colony', 'Nashik', 'Maharashtra', 'India', '2may.jpg', '2may.jpg', 'Filled', 0, '', '', '', '', '', 'NA'),
(8, 'STD8', 'Reyansh', 'Sahil', 'Singhaniya', 'Sahil', 'Parshuram', 'Singhaniya', 'Vishnupriya', 'Sahil', 'Singhaniya', '2004-12-03', 'Male', 'INDIAN', '5464543543', '4543543543545435355454545', 'admin@gmail.com', 'NA', 'Muslim', 'ST', 'Engineering', 'ME', 'DEPT-4421F', 'Testing', 'Please Sel', '2024-04-29', 'gfgfg', 'Nashik', 'dfdsfd', 'India', '2may.jpg', '2may.jpg', 'Filled', 0, '', '', '', '', '', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subjectid` varchar(255) NOT NULL DEFAULT 'NA',
  `subjectname` varchar(255) NOT NULL DEFAULT 'NA',
  `departmentid` varchar(255) NOT NULL DEFAULT 'NA',
  `departmentname` varchar(255) NOT NULL DEFAULT 'NA',
  `course` varchar(255) NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subjectid`, `subjectname`, `departmentid`, `departmentname`, `course`) VALUES
(1, 'SUB-L998DG', 'hgkhvk', 'DEPT-4919O', 'abcd', 'BE'),
(2, 'SUB-A549AT', 'selenium', 'DEPT-4919O', 'abcd', 'BE'),
(3, 'SUB-L334FN', 'zvsfvg srheteh ', 'DEPT-2153V', 'Testing', 'ME'),
(4, 'SUB-X452VB', 'IT', 'DEPT-4919O', 'abcd', 'BE');

-- --------------------------------------------------------

--
-- Table structure for table `transportdata`
--

CREATE TABLE `transportdata` (
  `id` int(11) NOT NULL,
  `transportid` varchar(255) NOT NULL,
  `routename` varchar(255) NOT NULL,
  `routeid` int(11) NOT NULL,
  `vehiclenumber` varchar(255) NOT NULL,
  `vehicletype` varchar(255) NOT NULL,
  `vehicleid` varchar(255) NOT NULL,
  `drivername` varchar(255) NOT NULL,
  `driverid` varchar(255) NOT NULL,
  `totalcapacity` varchar(250) NOT NULL,
  `availablecapacity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transportservicedata`
--

CREATE TABLE `transportservicedata` (
  `id` int(11) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `studentregnumber` varchar(255) NOT NULL,
  `studentdepartment` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `transportid` varchar(255) NOT NULL,
  `routename` varchar(255) NOT NULL,
  `routeid` varchar(255) NOT NULL,
  `stopname` varchar(255) NOT NULL,
  `stopid` varchar(255) NOT NULL,
  `studentid` int(11) NOT NULL,
  `totalbusfees` varchar(255) NOT NULL,
  `paidbusfees` varchar(255) NOT NULL,
  `reamainingbusfees` varchar(255) NOT NULL,
  `feesstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `age`, `gender`, `image`) VALUES
(1, 'Yasim Shaikh', '23', 'Male', ''),
(3, 'Rachel Gonzalez', '25', 'female', ''),
(4, 'Jason Roy', '25', 'female', 'last2.png');

-- --------------------------------------------------------

--
-- Table structure for table `vehicledata`
--

CREATE TABLE `vehicledata` (
  `id` int(11) NOT NULL,
  `vehicleserialnumber` varchar(255) DEFAULT NULL,
  `vehicleregnumber` varchar(255) DEFAULT NULL,
  `vehiclename` varchar(255) DEFAULT NULL,
  `vehiclecompany` varchar(255) DEFAULT NULL,
  `vehicletype` varchar(255) DEFAULT NULL,
  `totalseatingcapacity` varchar(255) DEFAULT NULL,
  `availablecapacity` varchar(250) NOT NULL,
  `fueltype` varchar(255) DEFAULT NULL,
  `insurancecompany` varchar(255) DEFAULT NULL,
  `insurancepolicynumber` varchar(255) DEFAULT NULL,
  `insuranceexpirydate` varchar(255) DEFAULT NULL,
  `insurancedocuments` varchar(255) DEFAULT NULL,
  `busimages` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Inactive',
  `capacitystatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driverattendancedata`
--
ALTER TABLE `driverattendancedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driverdata`
--
ALTER TABLE `driverdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driversalary`
--
ALTER TABLE `driversalary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalproficiencycoursedata`
--
ALTER TABLE `generalproficiencycoursedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routedata`
--
ALTER TABLE `routedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffattendancedata`
--
ALTER TABLE `staffattendancedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffcheckincheckoutdata`
--
ALTER TABLE `staffcheckincheckoutdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffdata`
--
ALTER TABLE `staffdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffhistory`
--
ALTER TABLE `staffhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffleavedata`
--
ALTER TABLE `staffleavedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffsalarybasedondesignation`
--
ALTER TABLE `staffsalarybasedondesignation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffsalarydata`
--
ALTER TABLE `staffsalarydata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stopdata`
--
ALTER TABLE `stopdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportdata`
--
ALTER TABLE `transportdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportservicedata`
--
ALTER TABLE `transportservicedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicledata`
--
ALTER TABLE `vehicledata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `driverattendancedata`
--
ALTER TABLE `driverattendancedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driverdata`
--
ALTER TABLE `driverdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driversalary`
--
ALTER TABLE `driversalary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalproficiencycoursedata`
--
ALTER TABLE `generalproficiencycoursedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `routedata`
--
ALTER TABLE `routedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffattendancedata`
--
ALTER TABLE `staffattendancedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffcheckincheckoutdata`
--
ALTER TABLE `staffcheckincheckoutdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffdata`
--
ALTER TABLE `staffdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffhistory`
--
ALTER TABLE `staffhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffleavedata`
--
ALTER TABLE `staffleavedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffsalarybasedondesignation`
--
ALTER TABLE `staffsalarybasedondesignation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staffsalarydata`
--
ALTER TABLE `staffsalarydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stopdata`
--
ALTER TABLE `stopdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transportdata`
--
ALTER TABLE `transportdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transportservicedata`
--
ALTER TABLE `transportservicedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicledata`
--
ALTER TABLE `vehicledata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
