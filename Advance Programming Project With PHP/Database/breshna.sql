-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 08:36 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breshna`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date_year` int(11) NOT NULL,
  `date_month` tinyint(4) NOT NULL,
  `date_day` tinyint(4) NOT NULL,
  `absent_hour` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `position` varchar(32) NOT NULL,
  `gross_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `counterbox`
--

CREATE TABLE `counterbox` (
  `counter_id` int(11) NOT NULL,
  `customer_type` tinyint(1) NOT NULL,
  `coefficent` int(11) NOT NULL,
  `phase` tinyint(4) NOT NULL,
  `account_no` int(11) NOT NULL,
  `customer_no` int(11) NOT NULL,
  `customer_name` varchar(128) NOT NULL,
  `fathername` varchar(32) DEFAULT NULL,
  `province_id` int(11) NOT NULL,
  `district` varchar(64) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `junction` varchar(128) NOT NULL,
  `transformer` varchar(128) NOT NULL,
  `box_no` varchar(128) NOT NULL,
  `route_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `fathername` varchar(32) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birth_year` int(11) NOT NULL,
  `nic` varchar(64) NOT NULL,
  `marital_status` tinyint(1) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district` varchar(64) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `degree_id` int(11) NOT NULL,
  `photo` varchar(128) DEFAULT NULL,
  `hire_date` date NOT NULL,
  `resign_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `firstname`, `lastname`, `fathername`, `gender`, `birth_year`, `nic`, `marital_status`, `province_id`, `district`, `address`, `email`, `degree_id`, `photo`, `hire_date`, `resign_date`) VALUES
(1, 'ali', 'ahmadi', 'mahmod', 0, 1990, 'volume 1, page3', 0, 1, 'kabul', 'karte 4', NULL, 3, NULL, '2015-08-22', NULL),
(2, 'Ahmad', 'Ahmadi', 'Mahmod', 0, 1987, 'volume 10, page 4, number 23', 0, 3, 'Khewa', 'more adderess, ....', 'ahmad@yahoo.com', 3, 'images/employee/1440584889K8CcxUmpW33a1Myp1384933301.jpg', '2015-08-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_phone`
--

CREATE TABLE `employee_phone` (
  `phone_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emp_degree`
--

CREATE TABLE `emp_degree` (
  `degree_id` int(11) NOT NULL,
  `degree_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp_degree`
--

INSERT INTO `emp_degree` (`degree_id`, `degree_name`) VALUES
(3, 'Bachelor'),
(2, 'Bachloria'),
(4, 'Master'),
(1, 'Non-Educated'),
(5, 'PHD');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `currency` tinyint(1) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `payment_year` int(11) NOT NULL,
  `payment_month` tinyint(4) NOT NULL,
  `payment_day` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `invoice_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `receipt_year` int(11) NOT NULL,
  `receipt_month` tinyint(4) NOT NULL,
  `receipt_day` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `counter_id` int(11) NOT NULL,
  `round_read` tinyint(4) NOT NULL,
  `issue_year` int(11) NOT NULL,
  `issue_month` tinyint(4) NOT NULL,
  `issude_day` tinyint(4) NOT NULL,
  `expire_date` date NOT NULL,
  `previous_value` int(11) NOT NULL,
  `present_value` int(11) NOT NULL,
  `electricty_charge` int(11) NOT NULL,
  `bank_charge` int(11) NOT NULL DEFAULT '0',
  `service_charge` int(11) NOT NULL DEFAULT '0',
  `stationary_charge` int(11) NOT NULL DEFAULT '0',
  `surcharge` int(11) NOT NULL DEFAULT '0',
  `invoice_amount` int(11) NOT NULL,
  `tax` int(11) NOT NULL DEFAULT '0',
  `payable_amount` int(11) NOT NULL,
  `due_amount` int(11) NOT NULL DEFAULT '0',
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `employee_id` int(11) NOT NULL DEFAULT '0',
  `date_year` int(11) NOT NULL DEFAULT '0',
  `date_month` tinyint(4) NOT NULL DEFAULT '0',
  `date_day` tinyint(4) NOT NULL DEFAULT '0',
  `over_hour` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `employee_id` int(11) NOT NULL DEFAULT '0',
  `date_year` int(11) NOT NULL DEFAULT '0',
  `date_month` tinyint(4) NOT NULL DEFAULT '0',
  `overtime_amount` int(11) NOT NULL DEFAULT '0',
  `absent_amount` int(11) NOT NULL DEFAULT '0',
  `allowance` int(11) NOT NULL DEFAULT '0',
  `allowance_remark` varchar(255) DEFAULT NULL,
  `deduct` int(11) NOT NULL DEFAULT '0',
  `deduct_remark` varchar(255) DEFAULT NULL,
  `taxable_salary` int(11) NOT NULL,
  `tax_amount` int(11) NOT NULL DEFAULT '0',
  `net_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(4, 'Balkh'),
(2, 'Herat'),
(3, 'Jalalabad'),
(1, 'Kabul'),
(5, 'Kandahar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `employee_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `account_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`employee_id`, `username`, `password`, `account_status`) VALUES
(1, 'admin', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `employee_id` int(11) NOT NULL,
  `admin_level` tinyint(4) NOT NULL DEFAULT '0',
  `hr_level` tinyint(4) NOT NULL DEFAULT '0',
  `finance_level` tinyint(4) NOT NULL DEFAULT '0',
  `customer_level` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `employee_attndance_fk` (`employee_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`),
  ADD UNIQUE KEY `bank_name` (`bank_name`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`),
  ADD KEY `employee_contract_fk` (`employee_id`);

--
-- Indexes for table `counterbox`
--
ALTER TABLE `counterbox`
  ADD PRIMARY KEY (`counter_id`),
  ADD KEY `province_counterbox_fk` (`province_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `province_employee_fk` (`province_id`),
  ADD KEY `degree_employee_fk` (`degree_id`);

--
-- Indexes for table `employee_phone`
--
ALTER TABLE `employee_phone`
  ADD PRIMARY KEY (`phone_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `employee_phone_fk` (`employee_id`);

--
-- Indexes for table `emp_degree`
--
ALTER TABLE `emp_degree`
  ADD PRIMARY KEY (`degree_id`),
  ADD UNIQUE KEY `degree_name` (`degree_name`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `bank_income_fk` (`bank_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `counterbox_invoice_fk` (`counter_id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`employee_id`,`date_year`,`date_month`,`date_day`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`employee_id`,`date_year`,`date_month`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`),
  ADD UNIQUE KEY `province_name` (`province_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee_phone`
--
ALTER TABLE `employee_phone`
  MODIFY `phone_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emp_degree`
--
ALTER TABLE `emp_degree`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `employee_attndance_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `employee_contract_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `counterbox`
--
ALTER TABLE `counterbox`
  ADD CONSTRAINT `province_counterbox_fk` FOREIGN KEY (`province_id`) REFERENCES `province` (`province_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `degree_employee_fk` FOREIGN KEY (`degree_id`) REFERENCES `emp_degree` (`degree_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `province_employee_fk` FOREIGN KEY (`province_id`) REFERENCES `province` (`province_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `employee_phone`
--
ALTER TABLE `employee_phone`
  ADD CONSTRAINT `employee_phone_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `bank_income_fk` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`bank_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_income_fk` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `counterbox_invoice_fk` FOREIGN KEY (`counter_id`) REFERENCES `counterbox` (`counter_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `overtime`
--
ALTER TABLE `overtime`
  ADD CONSTRAINT `employee_overtime` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `employee_payment_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `employee_users_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_level`
--
ALTER TABLE `user_level`
  ADD CONSTRAINT `users_user_level_fk` FOREIGN KEY (`employee_id`) REFERENCES `users` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
