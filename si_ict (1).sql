-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 12:48 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_ict`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_lainnya`
--

CREATE TABLE `barang_lainnya` (
  `id_barang` varchar(11) NOT NULL,
  `id_jenis` varchar(11) DEFAULT NULL,
  `id_merk` varchar(11) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `tanggal_pasang` date DEFAULT NULL,
  `tanggal_habis` date DEFAULT NULL,
  `sisa_usia_bulan` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_lainnya`
--

INSERT INTO `barang_lainnya` (`id_barang`, `id_jenis`, `id_merk`, `nama_barang`, `tanggal_pasang`, `tanggal_habis`, `sisa_usia_bulan`) VALUES
('9017', '013', '041', 'Seagate 2.5 600 GB SAS 12Gb/s eMLCc', '2018-07-13', '2022-07-13', 24.10),
('9018', '013', '026', 'HD WP Purple 4TB WD40PURX', '2018-07-13', '2022-07-13', 24.10),
('9019', '013', '026', 'WD Elements USB 3.0 1TB', '2018-08-10', '2022-08-10', 25.03),
('9020', '013', '026', 'WD 1 TB', '2018-08-10', '2022-08-10', 25.03),
('9021', '013', '026', 'WD 500 GB', '2018-02-12', '2022-02-12', 19.07),
('9022', '013', '026', 'HD WP Purple 4TB WD40PURX', '2018-02-12', '2022-02-12', 19.07),
('9023', '013', '026', 'Western Digital 2 TB', '2018-09-13', '2022-09-13', 26.17),
('9024', '013', '026', 'Western Digital 1 TB', '2018-09-13', '2022-09-13', 26.17),
('9025', '013', '041', 'Seagate Barracuda 1 TB', '2018-09-13', '2022-09-13', 26.17),
('9026', '013', '041', 'Seagate Barracuda 1 TB', '2018-09-13', '2022-09-13', 26.17),
('9027', '013', '026', 'Western Digital 3TB', '2016-09-16', '2020-09-16', 1.93),
('9028', '013', '026', 'Western Digital 1 TB', '2016-09-16', '2020-09-16', 1.93),
('9029', '013', '041', 'Seagate Falcon 1 TB', '2016-09-10', '2020-09-10', 1.73),
('9030', '013', '041', 'Seagate 2.5 600 GB SAS 12Gb/s eMLC', '2016-09-10', '2020-09-10', 1.73),
('9031', '013', '026', 'HD WP Purple 4TB WD40PURX', '2017-08-14', '2021-08-14', 13.00),
('9032', '014', '024', 'Cisco RV325 K9 G5', '2016-12-24', '2020-12-24', 5.23),
('9033', '014', '040', 'LINKSYS Wireless N', '2016-12-24', '2020-12-24', 5.23),
('9034', '015', '024', 'CISCO SG9D-08-AS', '2017-11-20', '2021-11-20', 16.27),
('9035', '015', '038', 'HP V1420-24G-2SFP', '2017-12-25', '2021-12-25', 17.43),
('9036', '026', '020', 'Storage Rack Mounted', '2016-09-16', '2020-09-16', 1.93),
('9037', '033', '042', 'BELDEN', '2016-08-08', '2020-08-08', 0.63),
('9038', '033', '050', 'Jaringan Internet Gedung E  Rusunawa', '2018-11-23', '2022-11-23', 28.53),
('9039', '034', '020', 'Bosch DCNM WAP', '2016-09-10', '2020-09-10', 1.73),
('9040', '034', '020', 'AIR-CAP17021-FK9', '2017-08-14', '2021-08-14', 13.00),
('9041', '034', '020', 'nikritik rb952ui-5 ac2nd = 5 / rb951g = 5', '2017-12-26', '2021-12-26', 17.47),
('9042', '034', '039', 'TP-LINK WR941HP', '2017-11-20', '2021-11-20', 16.27),
('9043', '034', '024', 'CISCO WAP121-E-K9-G5', '2017-11-20', '2021-11-20', 16.27),
('9044', '034', '040', 'LYNKSYS N300', '2017-11-28', '2021-11-28', 16.53),
('9045', '029', '024', 'CISCO Switch Managed (WS-C2960+48TC-S)', '2016-09-14', '2020-09-14', 1.87),
('9046', '029', '024', 'CISCO SLM2008T-EU', '2016-09-14', '2020-09-14', 1.87),
('9047', '029', '038', 'HP Switch Managed', '2018-12-12', '2022-12-12', 29.17),
('9048', '029', '039', 'TP-LINK /SG-1008D', '2018-12-12', '2022-12-12', 29.17),
('9049', '029', '024', 'Cisco SFP 1G (GLC-LH-SMD)', '2018-12-12', '2022-12-12', 29.17),
('9050', '034', '025', 'CISCO Aironet 700 Series Access Point (AIR-CAP7021', '2016-10-20', '2020-10-20', 3.07),
('9051', '035', '051', 'Rack System Wallmount INDORACK WIR4504S', '2018-09-26', '2022-09-26', 26.60),
('9052', '035', '051', 'Indorack, Wallmount Rack, 12U, 19\"', '2018-09-26', '2022-09-26', 26.60),
('9053', '037', '023', 'HUAWEI USB MODEM - K4505', '2016-10-07', '2020-10-07', 2.63),
('9054', '038', '020', 'TRENDNET TC-NT2 Tests Pin Configuration of 10/100/', '2017-09-16', '2021-09-16', 14.10),
('9055', '041', '021', 'TRENDNET/TFC-110S15', '2018-09-26', '2022-09-26', 26.60),
('9056', '041', '022', 'Ezcap SDI and HDMI Video capture EZ-286/Ezcap SDI', '2018-08-23', '2022-08-23', 25.47),
('9057', '041', '023', 'Fiber Converter TRENDNET TFC-110S15', '2018-09-26', '2022-09-26', 26.60),
('9058', '043', '024', 'Cisco/1000BASE-LX/LH SFP transceiver module [GLC-L', '2018-09-30', '2022-09-30', 26.73),
('9059', '043', '024', 'Cisco/1000BASE-LX/LH SFP transceiver module [GLC-L', '2018-09-30', '2022-09-30', 26.73),
('9060', '015', '039', 'TP-LINK Smart Swicth SG1024DE', '2018-12-27', '2022-12-27', 29.67),
('9061', '014', '024', 'Cisco Linksys WRT54GL DD WRT Spesial Wireless Rout', '2017-05-22', '2021-05-22', 10.20),
('9062', '043', '024', 'CISCO 1000BASE-T', '2017-12-18', '2021-12-18', 17.20);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` varchar(11) NOT NULL,
  `jenis_barang` varchar(30) DEFAULT NULL,
  `umur_barang` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_barang`, `umur_barang`) VALUES
('00', '00', 0),
('012', 'Server', 4),
('013', 'Hardisk', 4),
('014', 'Router', 4),
('015', 'Hub', 4),
('016', 'Modem', 4),
('017', 'Netware Interface External', 4),
('018', 'Repeater and Transciever', 4),
('019', 'Head Copy Terminal', 4),
('020', 'Rack Modem', 4),
('021', 'Card Punch', 4),
('022', 'Head Copy Printer', 4),
('023', 'Character Terminal', 4),
('024', 'Graphic Terminal', 4),
('025', 'Terminal', 4),
('026', 'Rak Server', 4),
('027', 'Firewall', 4),
('028', 'Rak Switch', 4),
('029', 'Switch', 4),
('030', 'E-Mail Security', 4),
('031', 'Client Clearing House', 4),
('032', 'CAT 6 Cable', 4),
('033', 'Kabel UTP', 4),
('034', 'Access Point', 4),
('035', 'Rackmount', 4),
('036', 'Keyboard Video Monitor', 4),
('037', 'Mobile Modem GSM/ CDMA', 4),
('038', 'Network Cable Tester', 4),
('039', 'Jaringan Satpas', 4),
('040', 'NComputing', 4),
('041', 'Ethernet Converter', 4),
('042', 'Optical Termination Box', 4),
('043', 'Modul Core Switch', 4),
('044', 'Peralatan Jaringan Lainnya', 4);

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merk` varchar(11) NOT NULL,
  `merk_barang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merk`, `merk_barang`) VALUES
('00', '00'),
('020', '-'),
('021', 'Alcatel'),
('022', 'Lenovo'),
('023', 'Huawei'),
('024', 'Cisco'),
('025', 'IBM'),
('026', 'WD'),
('027', 'ESCAM'),
('028', 'EDUP'),
('029', 'Kextech'),
('030', 'Supermicro'),
('031', 'Bluelink'),
('032', 'SIFREE'),
('033', 'ZTE'),
('034', 'DELL'),
('035', 'Intel'),
('036', 'Rainer'),
('037', 'EXTRON'),
('038', 'HP'),
('039', 'TP-Link'),
('040', 'Linksys'),
('041', 'Seagate'),
('042', 'BELDEN'),
('043', 'MFP'),
('044', 'GLC'),
('045', 'UBIQUITY'),
('046', 'THECUS'),
('047', 'ABBA'),
('048', 'MOTION'),
('049', 'EDIMAX'),
('050', 'Commscope'),
('051', 'INDORACK');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_request` int(3) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `jenis_barang` varchar(30) DEFAULT NULL,
  `merk_barang` varchar(30) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `validasi` enum('yes','no','belum') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_request`, `id_barang`, `jenis_barang`, `merk_barang`, `nama_barang`, `validasi`) VALUES
(1101, '9006', 'Server', 'Lenovo', 'Lenovo System X3250 MS', 'yes'),
(1102, '9007', 'Server', 'DELL', 'DELL 3020 MT', 'yes'),
(1103, '9009', 'Server', 'Supermicro', 'Supermicro SSG 6028R-E1CR12T 2U rackmount server', 'belum'),
(1104, '9010', 'Server', 'DELL', 'DELL POWEREDGET20', 'no'),
(1105, '9011', 'Server', 'HP', 'HP PROLIANT ML 150 G2', 'no'),
(1106, '9012', 'Server', 'HP', 'HP Proliant ML350G5-892/A', 'no'),
(1107, '9013', 'Server', 'Lenovo', 'LENOVO System X3650M5-ILA (2Xeon,16GB)', 'yes'),
(1108, '9007', 'Server', 'DELL', 'DELL 3020 MT', 'no'),
(1109, '9027', 'Hardisk', 'WD', 'Western Digital 3TB', 'yes');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sembar`
-- (See below for the actual view)
--
CREATE TABLE `sembar` (
`id_barang` varchar(11)
,`nama_barang` varchar(100)
,`id_jenis` varchar(11)
,`id_merk` varchar(11)
,`tanggal_pasang` date
,`tanggal_habis` date
,`sisa_usia_bulan` double(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sembar_fix`
-- (See below for the actual view)
--
CREATE TABLE `sembar_fix` (
`id_barang` varchar(11)
,`nama_barang` varchar(100)
,`jenis_barang` varchar(30)
,`merk_barang` varchar(30)
,`tanggal_pasang` date
,`tanggal_habis` date
,`sisa_usia_bulan` double(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `id_server` varchar(11) NOT NULL,
  `id_barang` varchar(11) DEFAULT NULL,
  `id_jenis` varchar(11) DEFAULT NULL,
  `id_merk` varchar(11) DEFAULT NULL,
  `nama_server` varchar(100) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `tanggal_pasang` date DEFAULT NULL,
  `tanggal_habis` date DEFAULT NULL,
  `sisa_usia_bulan` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`id_server`, `id_barang`, `id_jenis`, `id_merk`, `nama_server`, `nickname`, `tanggal_pasang`, `tanggal_habis`, `sisa_usia_bulan`) VALUES
('7001', '9001', '012', '020', 'Asus Nagios Admin', 'localhost', '2018-07-14', '2022-07-14', 22.93),
('7002', '9002', '012', '020', 'Nagios Agent 1', 'ngsagent1', '2018-08-10', '2022-08-10', 23.83),
('7003', '9003', '012', '020', 'Nagios Agent 2', 'ngsagent2', '2018-02-12', '2022-02-12', 17.87),
('7004', '9004', '012', '020', 'Nagios Agent 3', 'ngsagent3', '2018-09-13', '2022-09-13', 24.97),
('7005', '9005', '012', '038', 'HP ProLiant DL380G9', NULL, '2018-09-13', '2022-09-13', 24.97),
('7006', '9006', '012', '022', 'Lenovo System X3250 MS', NULL, '2016-09-16', '2020-09-16', 0.73),
('7007', '9007', '012', '034', 'DELL 3020 MT', NULL, '2016-09-10', '2020-09-10', 0.53),
('7008', '9008', '012', '024', 'Cisco Firepower 4110 Master', NULL, '2017-08-14', '2021-08-14', 11.80),
('7009', '9009', '012', '030', 'Supermicro SSG 6028R-E1CR12T 2U rackmount server', '', '2016-09-14', '2020-09-14', 0.67),
('7010', '9010', '012', '034', 'DELL POWEREDGET20', NULL, '2016-10-10', '2020-10-10', 1.53),
('7011', '9011', '012', '038', 'HP PROLIANT ML 150 G2', NULL, '2016-11-24', '2020-11-24', 3.03),
('7012', '9012', '012', '038', 'HP Proliant ML350G5-892/A', NULL, '2016-11-24', '2020-11-24', 3.03),
('7013', '9013', '012', '022', 'LENOVO System X3650M5-ILA (2Xeon,16GB)', NULL, '2016-11-14', '2020-11-14', 2.70),
('7014', '9014', '012', '022', 'LENOVO 81Y9806', NULL, '2017-11-29', '2021-11-29', 15.37),
('7016', '9016', '012', '025', 'IBM System X3500-M4', NULL, '2016-11-10', '2020-11-10', 2.57);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal`) VALUES
('001', 'Pandu Kent Elian', 'pkelian@gmail.com', 'pkelian', '0192023a7bbd73250516f069df18b500', 'Admin', '2019-11-18 06:42:17'),
('002', 'Bukan Admin', 'bukanadmin@gmail.com', 'bukanadmin', '0192023a7bbd73250516f069df18b500', 'Pegawai', '2020-08-10 11:50:39'),
('003', 'Pimpinan', 'pimpinan@gmail.com', 'pimpinan', '0192023a7bbd73250516f069df18b500', 'Pimpinan', '2019-12-25 14:54:54');

-- --------------------------------------------------------

--
-- Structure for view `sembar`
--
DROP TABLE IF EXISTS `sembar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sembar`  AS  select `a`.`id_barang` AS `id_barang`,`a`.`nama_barang` AS `nama_barang`,`a`.`id_jenis` AS `id_jenis`,`a`.`id_merk` AS `id_merk`,`a`.`tanggal_pasang` AS `tanggal_pasang`,`a`.`tanggal_habis` AS `tanggal_habis`,`a`.`sisa_usia_bulan` AS `sisa_usia_bulan` from `barang_lainnya` `a` union select `b`.`id_barang` AS `id_barang`,`b`.`nama_server` AS `nama_server`,`b`.`id_jenis` AS `id_jenis`,`b`.`id_merk` AS `id_merk`,`b`.`tanggal_pasang` AS `tanggal_pasang`,`b`.`tanggal_habis` AS `tanggal_habis`,`b`.`sisa_usia_bulan` AS `sisa_usia_bulan` from `server` `b` order by `id_barang` ;

-- --------------------------------------------------------

--
-- Structure for view `sembar_fix`
--
DROP TABLE IF EXISTS `sembar_fix`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sembar_fix`  AS  select `a`.`id_barang` AS `id_barang`,`a`.`nama_barang` AS `nama_barang`,`b`.`jenis_barang` AS `jenis_barang`,`c`.`merk_barang` AS `merk_barang`,`a`.`tanggal_pasang` AS `tanggal_pasang`,`a`.`tanggal_habis` AS `tanggal_habis`,`a`.`sisa_usia_bulan` AS `sisa_usia_bulan` from ((`sembar` `a` join `jenis` `b` on((`b`.`id_jenis` = `a`.`id_jenis`))) join `merk` `c` on((`c`.`id_merk` = `a`.`id_merk`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_lainnya`
--
ALTER TABLE `barang_lainnya`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`) USING BTREE;

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id_server`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
