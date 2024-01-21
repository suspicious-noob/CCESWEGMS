-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 06:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `Cashier_ID` int(11) NOT NULL,
  `Cashier_Name` varchar(50) NOT NULL,
  `Tuition_Fee` int(11) NOT NULL,
  `Transaction_Type` varchar(50) NOT NULL,
  `Balance_Amount` int(11) NOT NULL,
  `Patial_Payment` int(11) NOT NULL,
  `Full_Payment` int(11) NOT NULL,
  `Miscellaneous` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_ID` int(11) NOT NULL,
  `Grade_Level` int(11) NOT NULL,
  `Section` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `Curriculum_ID` int(11) NOT NULL,
  `Curriculum_Name` varchar(50) NOT NULL,
  `Year_Implemented` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `Staff_ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Contact_Num` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `Requirements_ID` int(11) NOT NULL,
  `Birthcertificate` varchar(500) NOT NULL,
  `Good_Moral` varchar(300) NOT NULL,
  `Diagnostic_Exam` varchar(400) NOT NULL,
  `Certificate _of_Completion` varchar(300) NOT NULL,
  `Form138` varchar(300) NOT NULL,
  `Form137` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `School_YearID` int(11) NOT NULL,
  `School_Start` date NOT NULL,
  `School_End` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Section_ID` int(11) NOT NULL,
  `Section_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` int(11) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) NOT NULL,
  `Birthdate` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_Num` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Mother_Name` varchar(60) NOT NULL,
  `Father_Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Lname`, `Fname`, `Mname`, `Gender`, `Birthdate`, `Address`, `Contact_Num`, `Age`, `Mother_Name`, `Father_Name`) VALUES
(1802110, 'Simbahan', 'Malik', 'Lubang', 'Male', '1995-10-24', 'Macasaet St., Brgy. Tibag, Calapan City, Oriental ', 20, 27, 'Leovina L. Simbahan', 'Manuel I. Simbahan');

-- --------------------------------------------------------

--
-- Table structure for table `students_grades`
--

CREATE TABLE `students_grades` (
  `Students_gradesID` int(11) NOT NULL,
  `Activity` int(11) NOT NULL,
  `Quiz` int(11) NOT NULL,
  `Projects` int(11) NOT NULL,
  `First_Quarter` int(11) NOT NULL,
  `Second_Quarter` int(11) NOT NULL,
  `Third_Quarter` int(11) NOT NULL,
  `Fourth_Quarter` int(11) NOT NULL,
  `Final_Grade` int(11) NOT NULL,
  `Remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_ID` int(11) NOT NULL,
  `Subject_Name` int(11) NOT NULL,
  `Subject_Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_teacher`
--

CREATE TABLE `subject_teacher` (
  `SubTeacher_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Teachers_ID` int(11) NOT NULL,
  `Teacher_Name` varchar(60) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`Cashier_ID`),
  ADD UNIQUE KEY `Cashier_Name` (`Cashier_Name`),
  ADD UNIQUE KEY `Tuition_Fee` (`Tuition_Fee`),
  ADD UNIQUE KEY `Transaction_Type` (`Transaction_Type`),
  ADD UNIQUE KEY `Balance_Amount` (`Balance_Amount`),
  ADD UNIQUE KEY `Patial_Payment` (`Patial_Payment`),
  ADD UNIQUE KEY `Full_Payment` (`Full_Payment`),
  ADD UNIQUE KEY `Miscellaneous` (`Miscellaneous`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_ID`),
  ADD UNIQUE KEY `Grade_Level` (`Grade_Level`),
  ADD UNIQUE KEY `Section` (`Section`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`Curriculum_ID`),
  ADD UNIQUE KEY `Curriculum_Name` (`Curriculum_Name`),
  ADD UNIQUE KEY `Year_Implemented` (`Year_Implemented`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Gender` (`Gender`),
  ADD UNIQUE KEY `Contact_Num` (`Contact_Num`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`Requirements_ID`),
  ADD UNIQUE KEY `Birthcertificate` (`Birthcertificate`),
  ADD UNIQUE KEY `Good_Moral` (`Good_Moral`),
  ADD UNIQUE KEY `Diagnostic_Exam` (`Diagnostic_Exam`),
  ADD UNIQUE KEY `Certificate _of_Completion` (`Certificate _of_Completion`),
  ADD UNIQUE KEY `Form138` (`Form138`),
  ADD UNIQUE KEY `Form137` (`Form137`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Schedule_ID`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`School_YearID`),
  ADD UNIQUE KEY `School_Start` (`School_Start`),
  ADD UNIQUE KEY `School_End` (`School_End`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Section_ID`),
  ADD UNIQUE KEY `Section_Name` (`Section_Name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`),
  ADD UNIQUE KEY `Lname` (`Lname`),
  ADD UNIQUE KEY `Fname` (`Fname`),
  ADD UNIQUE KEY `Mname` (`Mname`),
  ADD UNIQUE KEY `Gender` (`Gender`),
  ADD UNIQUE KEY `Address` (`Address`),
  ADD UNIQUE KEY `Birthdate` (`Birthdate`),
  ADD UNIQUE KEY `Contact_Num` (`Contact_Num`),
  ADD UNIQUE KEY `Mother_Name` (`Mother_Name`),
  ADD UNIQUE KEY `Age` (`Age`),
  ADD UNIQUE KEY `Father_Name` (`Father_Name`);

--
-- Indexes for table `students_grades`
--
ALTER TABLE `students_grades`
  ADD PRIMARY KEY (`Students_gradesID`),
  ADD UNIQUE KEY `Remarks` (`Remarks`),
  ADD UNIQUE KEY `Final_Grade` (`Final_Grade`),
  ADD UNIQUE KEY `Fourth_Quarter` (`Fourth_Quarter`),
  ADD UNIQUE KEY `Third_Quarter` (`Third_Quarter`),
  ADD UNIQUE KEY `Second_Quarter` (`Second_Quarter`),
  ADD UNIQUE KEY `Activity` (`Activity`),
  ADD UNIQUE KEY `Quiz` (`Quiz`),
  ADD UNIQUE KEY `Projects` (`Projects`),
  ADD UNIQUE KEY `First_Quarter` (`First_Quarter`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_ID`),
  ADD UNIQUE KEY `Subject_Name` (`Subject_Name`),
  ADD UNIQUE KEY `Subject_Description` (`Subject_Description`);

--
-- Indexes for table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  ADD PRIMARY KEY (`SubTeacher_ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Teachers_ID`),
  ADD UNIQUE KEY `Teacher_Name` (`Teacher_Name`),
  ADD UNIQUE KEY `Age` (`Age`),
  ADD UNIQUE KEY `Address` (`Address`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
