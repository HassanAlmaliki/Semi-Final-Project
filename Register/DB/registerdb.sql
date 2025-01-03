-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 07:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `phone`, `gender`) VALUES
('Hasan', 'hasao7771@gmail.com', '$2y$10$cAduy9axuec07YfOXNJhhOBzS2z7HgYD8kCorWwCQ3K', 777391592, 'male'),
('mohammed', 'motair@gmail.com', '$2y$10$V2Y2aWdI0UEJFZIWa57mXOin/pEFJZGJKPYLIoP2voe', 777771032, 'male'),
('ramzi', 'rama@gmail.com', '$2y$10$OvNShmLGTNggHJ3fSKoFLO9GqdhWXgAKiWfhTH3aRgj', 7789659, 'male'),
('almaliki', 'omaralmaliki2024@gmail.com', '$2y$10$6K0SagZM0iFxOiiKMjSSEO4Ee0Su6qyQ86jRdKfzCpr', 713489161, 'male'),
('ali', 'hasan@gamil.com', '$2y$10$XPqqWRPK9xT2hY15cN5hse6DWrsx8nCuhBp4yc.fDJ/', 14535, 'male'),
('Hasan', 'sdefgthjuolp@gmail.com', '$2y$10$RzqjxMJaM5ATsNMjvaSHTesa.E3ls7crqcQXjGYi/ft', 2147483647, 'male'),
('hasn', 'sadfg@gmail.com', '$2y$10$YRzoWvSY9ujw1hmRJ1joiOeaLNkwul8HKXlmH0dtWzm', 777875542, 'male'),
('ibrahim', 'ib@gmail.com', '$2y$10$pq25OglWtVgLkpNpApuiheEYm2jkYW6jqCHTKxpC8EW', 777849873, 'male'),
('ibrahim', 'i6b@gmail.com', '$2y$10$rJ.tOt2CEkLUsHaz97n1dOY6P8fOMK193bTr1R2.trx', 77784987, 'male'),
('hussian', 'hussian@gmail.com', '$2y$10$s..2RI340BrmacWV1o/cee2O4tnqmKh/JL8KUYeP4M9', 7134891, 'male'),
('ali', 'aa@gmail.com', '$2y$10$Qju7ih5O1zmgxkb3DKgfkuPUV6oWFDWvZYl7.txkSPt', 778899555, 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
