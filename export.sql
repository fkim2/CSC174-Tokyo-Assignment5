-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 01, 2018 at 07:32 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `roots`
--

-- --------------------------------------------------------

--
-- Table structure for table `surv`
--

CREATE TABLE `surv` (
  `id` int(11) NOT NULL,
  `SeeTrash` varchar(50) NOT NULL,
  `PickTrash` varchar(50) NOT NULL,
  `PrevTrash` varchar(150) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surv`
--

INSERT INTO `surv` (`id`, `SeeTrash`, `PickTrash`, `PrevTrash`, `created_at`) VALUES
(1, '', '', 'cand', '2018-04-30 21:55:04'),
(2, '', '', 'noice', '2018-04-30 22:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'isaiahpule', '$2y$10$5HwOsRVZ2l9JI/YT2oGONOqJ4o3VMKN67iuJOYPAIfPQ.z1QpUyUm', '2018-04-29 03:05:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surv`
--
ALTER TABLE `surv`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PrevTrash` (`PrevTrash`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surv`
--
ALTER TABLE `surv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
