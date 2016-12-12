SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-08:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj_front`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(42, 2) NOT NULL,
  `description` text NOT NULL,
  `supplylistid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `services` (`id`, `name`, `price`, `description`, `supplylistid`) VALUES
		(1, 'Preparation', 68362, 'Top off plane with fuel and oil. Takes 50 gallons of fuel, and 12 gallons of oil.', 1),
        (2, 'Maintenence',  400000, 'Check oil levels and overall wear on rivets, airframe, eqiupment, engine, and plane coating. Takes 20 gallons of oil and 25 rivets.', 2), 
        (3, 'Rearm for Air Combat',  2520000, 'Add missles and ammo to rearm. Takes 6 missles and 480 rounds of ammo.', 3), 
        (4, 'Rearm for Ground Combat',  1000000, 'Add a few missles, ammo, and some bombs to rearm. Takes 2 missles, 480 rounds of ammo, and 4 JDAM\'s.', 4), 
        (5, 'Wheel Repair',  23000, 'Swap wheel and check landing gear. Takes 3 wheels.', 5), 
        (6, 'Replace Windshield',  94000, 'Swap the windshield, as it may be cracked by airborne materials or high G manouvers. Takes 1 Windshield', 6);
			  
-- --------------------------------------------------------

DROP TABLE IF EXISTS `servicesSupplies`;
CREATE TABLE `servicesSupplies` (
  `serviceid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `quantity` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `servicesSupplies` (`serviceid`, `itemid`, `quantity`) VALUES
		(1, 1, 50),
		(1, 2, 12),
		(2, 2, 20),
		(2, 5, 25),
		(3, 3, 6),
		(3, 4, 480),
		(4, 3, 2),
		(4, 4, 480),
		(4, 6, 4),
		(5, 7, 3),
		(6, 8, 1);
		
-- -----------------------------------------------------------------------------------------------------

DROP TABLE IF EXISTS `production`;
CREATE TABLE `production` (
  `serviceid` int(11) NOT NULL,
  `quantity` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -----------------------------------------------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ab521e816c254503a4e967752be65f09a8c44ecf', '127.0.0.1', 1478209192, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383230383839323b),
('04b949b0fe08c5f9e15adf60ce6286a9ca41e7f6', '127.0.0.1', 1478209570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383230393337393b),
('4a2fb0a020fe8f6ec80ce4614f7e9d0771c8ea2a', '127.0.0.1', 1478209989, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383230393638393b75736572726f6c657c733a343a2275736572223b),
('e403df0ab04a4de7fcc0007c2c1f362e3b6dc197', '127.0.0.1', 1478210255, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383230393939303b75736572726f6c657c733a353a2261646d696e223b),
('cce00f2e854dff640de87a5c4cc4821917cfbf29', '127.0.0.1', 1478210780, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383231303531343b75736572726f6c657c733a343a2275736572223b),
('6a5e01134afbee20c8e6fce3e5aa7e6106da528a', '127.0.0.1', 1478211524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383231313235333b75736572726f6c657c733a353a2261646d696e223b),
('49f30636c369d8f29e72b26c627e2a780ecd506f', '127.0.0.1', 1478211784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383231313632393b75736572726f6c657c733a343a2275736572223b),
('550fe2d03c39a4938d1eae6f617331d8e764386b', '127.0.0.1', 1478812441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831323333323b75736572726f6c657c733a343a2275736572223b),
('bff99c340ff1452122c39be9ab3fd3ce6450dfc8', '127.0.0.1', 1478815598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831353332323b75736572726f6c657c733a353a2261646d696e223b),
('fa6b32d830e3fed1cb69575d173a3163d2600e03', '127.0.0.1', 1478816174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831353838353b75736572726f6c657c733a353a2261646d696e223b),
('8b5d9f98ca5878600e96d7748fe46b70e0c918bf', '127.0.0.1', 1478816435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831363230303b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2236223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2236223b733a343a226e616d65223b733a353a22446f6e7574223b733a31313a226465736372697074696f6e223b733a39323a2244697367757374696e676c792073776565742c20746f7070656420776974682061727465727920636c6f6767696e672063686f636f6c61746520616e64207468656e20737072696e6b6c656420776974682050697869652064757374223b733a353a227072696365223b733a343a22312e3235223b733a373a2270696374757265223b733a353a22362e706e67223b733a383a2263617465676f7279223b733a313a2273223b7d),
('74c15e6f0a59a9c203a1e18eb172133dc9bca86a', '127.0.0.1', 1478816859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831363536363b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2236223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2236223b733a343a226e616d65223b733a353a22446f6e7574223b733a31313a226465736372697074696f6e223b733a39323a2244697367757374696e676c792073776565742c20746f7070656420776974682061727465727920636c6f6767696e672063686f636f6c61746520616e64207468656e20737072696e6b6c656420776974682050697869652064757374223b733a353a227072696365223b733a343a22312e3235223b733a373a2270696374757265223b733a353a22362e706e67223b733a383a2263617465676f7279223b733a313a2273223b7d),
('3158cc2ce572b7b28469f86fcad3333fc8237e34', '127.0.0.1', 1478816710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831363730303b75736572726f6c657c733a353a2261646d696e223b6b65797c733a323a223130223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a323a223130223b733a343a226e616d65223b733a363a22427562626c79223b733a31313a226465736372697074696f6e223b733a38383a2231393634204d6f657420436861726d6f6e2c206d6164652066726f6d20677261706573206372757368656420627920656c766573207769746820636c65616e20666565742c20706572666563746c79206368696c6c65642e223b733a353a227072696365223b733a353a2231342e3530223b733a373a2270696374757265223b733a363a2231302e706e67223b733a383a2263617465676f7279223b733a313a2264223b7d),
('f4a883c7bffd7953f26ec33f550a34258cf7b010', '127.0.0.1', 1478817268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831373031363b75736572726f6c657c733a353a2261646d696e223b6b65797c733a323a223231223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a323a223231223b733a343a226e616d65223b733a363a22436f66666565223b733a31313a226465736372697074696f6e223b733a3135373a22412064656c6963696f757320637570206f6620746865206e6563746172206f66206c6966652c20736176696f7572206f662073747564656e74732c206d6f726e696e67206b69636b2d737461727465723b206d61646520776974682066726573686c792067726f756e6473207468617420796f7520646f6e27742077616e7420746f206b6e6f7720776865726520746865792063616d652066726f6d21223b733a353a227072696365223b733a343a22322e3935223b733a373a2270696374757265223b733a31303a22636f666665652e706e67223b733a383a2263617465676f7279223b733a313a2264223b7d),
('4cf4ddc50bcbd57b80683a15fb314d9608b405ef', '127.0.0.1', 1478817948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831373733343b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2238223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2238223b733a343a226e616d65223b733a373a22486f7420446f67223b733a31313a226465736372697074696f6e223b733a3230323a22506f726b207472696d6d696e6773206d69786564207769746820706f77646572656420707265736572766174697665732c20666c61766f7572696e67732c2072656420636f6c6f7572696e6720616e64206472656e6368656420696e207761746572206265666f7265206265696e672073717565657a656420696e746f20706c61737469632074756265732e20546f707065642077697468206f6e696f6e732c206261636f6e2c206368696c69206f7220636865657365202d206e6f206578747261206368617267652e223b733a353a227072696365223b733a343a22362e3930223b733a373a2270696374757265223b733a353a22382e706e67223b733a383a2263617465676f7279223b733a313a226d223b7d),
('95c2fd6bac1a24a8ca0c2651cffcad0d38757a61', '127.0.0.1', 1478819107, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831383939393b75736572726f6c657c733a353a2261646d696e223b),
('82d18344304176db0750bad98f6dfae8b752e2ae', '127.0.0.1', 1478819769, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383831393736343b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2236223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2236223b733a343a226e616d65223b733a353a22446f6e7574223b733a31313a226465736372697074696f6e223b733a39323a2244697367757374696e676c792073776565742c20746f7070656420776974682061727465727920636c6f6767696e672063686f636f6c61746520616e64207468656e20737072696e6b6c656420776974682050697869652064757374223b733a353a227072696365223b733a343a22312e3235223b733a373a2270696374757265223b733a353a22362e706e67223b733a383a2263617465676f7279223b733a313a2273223b7d),
('de9b6119f98a5385ef3109b3a5ba145caa0f65a9', '127.0.0.1', 1479075704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393037353730343b),
('9d1db2f12ec3139b0bce4af6a85128c02425bb6a', '127.0.0.1', 1479081256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038303935373b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2232223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2232223b733a343a226e616d65223b733a363a225475726b6579223b733a31313a226465736372697074696f6e223b733a35383a22526f61737465642c2073756363756c656e742c20737475666665642c206c6f76696e676c7920736c69636564207475726b657920627265617374223b733a353a227072696365223b733a343a22352e3935223b733a373a2270696374757265223b733a31373a22736d616c6c65725f4e69786f6e2e6a7067223b733a383a2263617465676f7279223b733a313a226d223b7d),
('c96711aeb96f827d57fc4d135ad14f89e77115b4', '127.0.0.1', 1479081467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038313236333b75736572726f6c657c733a353a2261646d696e223b6b65797c4e3b7265636f72647c4e3b),
('a302173a6bbb615b95a9dd7f36783827f584a5c8', '127.0.0.1', 1479082333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038323331333b75736572726f6c657c733a353a2261646d696e223b6b65797c4e3b7265636f72647c4e3b),
('5b5986d7998f909965937a4f9fbe718be774f044', '127.0.0.1', 1479082945, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038323739323b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2231223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22436865657365223b733a31313a226465736372697074696f6e223b733a39383a224c65617665207468697320726177206d696c6b2c20626565667920616e6420737765657420636865657365206f757420666f7220616e20686f7572206265666f72652073657276696e6720616e64207061697220776974682070656172206a616d2e223b733a353a227072696365223b733a343a22322e3935223b733a373a2270696374757265223b733a353a22312e706e67223b733a383a2263617465676f7279223b733a313a226d223b7d),
('3ae888c8e2e56fb4343144bb76554d1774e2749c', '127.0.0.1', 1479083483, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038333437393b75736572726f6c657c733a353a2261646d696e223b6b65797c4e3b7265636f72647c4e3b),
('8a29b2c870dada4441587b694e4f12ea1f0dbebd', '127.0.0.1', 1479083849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038333834393b),
('f4cab8af015d48819e9a040a201c7747d2458c15', '127.0.0.1', 1479084366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038343037323b75736572726f6c657c733a353a2261646d696e223b6b65797c4e3b7265636f72647c4e3b),
('ab27225caea532258d885387c5275ccb90e4ceca', '127.0.0.1', 1479084436, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038343433323b75736572726f6c657c733a353a2261646d696e223b6b65797c4e3b7265636f72647c4e3b),
('23850872d2358447a5a5fc12bc84c89df3819e2c', '127.0.0.1', 1479086005, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393038353938393b75736572726f6c657c733a353a2261646d696e223b6b65797c4e3b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a303a22223b733a343a226e616d65223b733a303a22223b733a31313a226465736372697074696f6e223b733a303a22223b733a353a227072696365223b733a303a22223b733a373a2270696374757265223b733a303a22223b733a383a2263617465676f7279223b733a303a22223b7d),
('91ca6001eb625a58553f2de3a5165851d1c25056', '127.0.0.1', 1479419277, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393431393039303b75736572726f6c657c733a353a2261646d696e223b),
('b7ec274fdc85ede694574e9dbcbbdf2b476afbd5', '127.0.0.1', 1479420012, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393431393737373b75736572726f6c657c733a353a2261646d696e223b6f726465727c4f3a353a224f72646572223a333a7b733a363a226e756d626572223b693a303b733a383a226461746574696d65223b4e3b733a353a226974656d73223b613a303a7b7d7d),
('6a9a6ea19b74a9b44ebdd9342be213e3da090771', '127.0.0.1', 1479421486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393432313139313b75736572726f6c657c733a353a2261646d696e223b6f726465727c613a333a7b733a363a226e756d626572223b693a303b733a383a226461746574696d65223b4e3b733a353a226974656d73223b613a313a7b693a32313b693a313b7d7d),
('0ffdbef3ae5f6be21602bdf5af278f317982d8ea', '127.0.0.1', 1479421775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393432313538343b75736572726f6c657c733a353a2261646d696e223b6f726465727c613a333a7b733a363a226e756d626572223b693a303b733a383a226461746574696d65223b4e3b733a353a226974656d73223b613a313a7b693a313b693a353b7d7d),
('a8b8714a0455da62419ff8527e36329f85f1491a', '127.0.0.1', 1479422284, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393432323036313b75736572726f6c657c733a353a2261646d696e223b),
('8865091e45f5c3a4db9f2310c19733a94d3cea98', '127.0.0.1', 1479422674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393432323433373b75736572726f6c657c733a353a2261646d696e223b6f726465727c613a333a7b733a363a226e756d626572223b693a303b733a383a226461746574696d65223b4e3b733a353a226974656d73223b613a333a7b693a31303b693a313b693a313b693a313b693a32353b693a313b7d7d),
('c40a1c50a3e230aa0b85ba38039f1008e6e67268', '127.0.0.1', 1479422839, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393432323830363b75736572726f6c657c733a353a2261646d696e223b),
('f373454e61d500ef9e490be26ab624e7c9dc6acb', '127.0.0.1', 1479423366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393432333133323b75736572726f6c657c733a353a2261646d696e223b),
('f9085815d43558c92a396f33722f8e28e012df54', '127.0.0.1', 1479676037, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393637353736333b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2231223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22436865657365223b733a31313a226465736372697074696f6e223b733a39383a224c65617665207468697320726177206d696c6b2c20626565667920616e6420737765657420636865657365206f757420666f7220616e20686f7572206265666f72652073657276696e6720616e64207061697220776974682070656172206a616d2e223b733a353a227072696365223b733a343a22322e3935223b733a373a2270696374757265223b733a353a22312e706e67223b733a383a2263617465676f7279223b733a313a226d223b7d),
('0daadcb660f5d494f298b63d214777d8da31593e', '127.0.0.1', 1479676432, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393637363134383b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2231223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22436865657365223b733a31313a226465736372697074696f6e223b733a39383a224c65617665207468697320726177206d696c6b2c20626565667920616e6420737765657420636865657365206f757420666f7220616e20686f7572206265666f72652073657276696e6720616e64207061697220776974682070656172206a616d2e223b733a353a227072696365223b733a343a22322e3935223b733a373a2270696374757265223b733a353a22312e706e67223b733a383a2263617465676f7279223b733a313a226d223b7d),
('fc87dd1f6d29c0835bc59b74cbbfc530bfaf17c5', '127.0.0.1', 1479676552, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393637363530373b75736572726f6c657c733a353a2261646d696e223b6b65797c733a313a2231223b7265636f72647c4f3a383a22737464436c617373223a363a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22436865657365223b733a31313a226465736372697074696f6e223b733a39383a224c65617665207468697320726177206d696c6b2c20626565667920616e6420737765657420636865657365206f757420666f7220616e20686f7572206265666f72652073657276696e6720616e64207061697220776974682070656172206a616d2e223b733a353a227072696365223b733a343a22322e3935223b733a373a2270696374757265223b733a353a22312e706e67223b733a383a2263617465676f7279223b733a313a226d223b7d),
('7be24ff3843684bcbd0559dd9aca31598b785204', '127.0.0.1', 1479676559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393637363535393b);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesSupplies`
--
ALTER TABLE `servicesSupplies`
  ADD PRIMARY KEY (`serviceid`, `itemid`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`serviceid`);
  
--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);