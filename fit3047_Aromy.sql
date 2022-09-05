-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2022 at 05:26 AM
-- Server version: 8.0.26
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit3047_Aromy`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_postcode` int NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_phonenumber` varchar(20) NOT NULL,
  `customer_email` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_address`, `customer_postcode`, `customer_city`, `customer_phonenumber`, `customer_email`) VALUES
(1, 'Coby Frazier', '9670 Vitae Av.', 6652, 'Roxburgh', '0456 172 649', 'Cras.eu@erat.net'),
(2, 'Ronan Kim', '4483 Lobortis Avenue', 4286, 'Treppo Carnico', '0414 893 062', 'tempor@cursus.ca'),
(3, 'Alexander Fisher', '9932 Eget, Street', 8946, 'Grimma', '0451 719 349', 'sed.libero@loremvitae.edu'),
(4, 'Kenyon Rollins', 'Ap #321-5788 Massa. Av.', 7956, 'Borriana', '0440 929 487', 'Mauris.vel.turpis@eratsemperrutrum.net'),
(5, 'Moana Strickland', 'P.O. Box 904, 7418 Nunc St.', 4042, 'Okigwe', '0484 705 123', 'lacus@eteros.ca'),
(6, 'Casey Serrano', 'Ap #373-3265 A, Avenue', 8467, 'Omal', '0486 707 147', 'est@Praesenteudui.ca'),
(7, 'Guy Wolf', '381-2082 Aliquet Street', 4822, 'Bologna', '0404 464 597', 'Donec.at.arcu@felis.ca'),
(8, 'Carla Bridges', 'P.O. Box 383, 8005 Phasellus Ave', 9376, 'Konstanz', '0434 177 462', 'Cras.dictum.ultricies@orciluctus.edu'),
(9, 'Kathleen Craig', 'P.O. Box 389, 1976 Quisque Rd.', 7122, 'Heusden', '0402 422 643', 'enim.Suspendisse@vitaenibh.net'),
(10, 'Sylvia Haley', 'P.O. Box 470, 7701 Ultrices Rd.', 8737, 'Acquedolci', '0440 609 923', 'aliquet@Phasellusdapibus.net'),
(11, 'Zena Foreman', '811-1545 Magna. Street', 4450, 'Bendigo', '0427 424 247', 'Fusce@condimentumeget.com'),
(12, 'Abraham Pate', '291-6684 Velit. Road', 5068, 'Salon-de-Provence', '0419 984 601', 'nisi@fermentumconvallisligula.com'),
(13, 'Eaton Boyd', 'P.O. Box 630, 7145 Curabitur St.', 3204, 'Bilbo', '0456 489 023', 'at.augue@accumsansed.net'),
(14, 'Jaquelyn Bird', '8905 Justo. St.', 5472, 'Mount Pearl', '0455 072 538', 'eros.nec.tellus@nislarcu.edu'),
(15, 'Palmer Kent', '926-6523 Montes, Ave', 5731, 'Longueville', '0469 388 358', 'ante@commodotincidunt.co.uk'),
(16, 'Asher Hernandez', '9487 Consequat Road', 9545, 'Poggiodomo', '0460 482 117', 'interdum.ligula@amet.net'),
(17, 'Dora Gay', 'Ap #556-8134 Malesuada Street', 2287, 'Slough', '0448 585 225', 'vehicula.Pellentesque.tincidunt@urna.edu'),
(18, 'Valentine Oneill', '234-5003 Vel Avenue', 7273, 'Bruckneudorf', '0466 024 838', 'fringilla.Donec.feugiat@euarcuMorbi.net'),
(19, 'Alexandra Beck', 'Ap #198-5936 Mollis Street', 1899, 'Sint-Lambrechts-Woluwe', '0494 071 210', 'nibh.Quisque@Crasdolor.com'),
(20, 'Joseph Smith', '8345 Gravida St.', 8280, 'PiŽtrain', '0410 839 292', 'tempor.augue.ac@dignissimpharetra.ca'),
(21, 'Owen Brooks', '716-3571 Interdum Rd.', 2090, 'Bottidda', '0494 002 560', 'Nam.ligula@amagnaLorem.net'),
(22, 'Colin Mckee', 'Ap #863-752 Interdum St.', 1307, 'Uitkerke', '0448 479 106', 'scelerisque@ornare.edu'),
(23, 'Olga Brennan', '8366 Sapien. Street', 9283, 'Bornival', '0425 327 509', 'Nunc.ac@consequatauctor.com'),
(24, 'Heather Mccoy', 'Ap #179-6536 Id Ave', 8905, 'Güssing', '0408 755 709', 'commodo.ipsum.Suspendisse@ligulaAenean.edu'),
(25, 'Brianna Spears', 'Ap #865-3562 Turpis. Av.', 7337, 'Bozeman', '0467 418 513', 'nulla@Sedauctor.co.uk'),
(26, 'Kirby Oneill', '224-1625 Eget Av.', 4040, 'Bellingen', '0474 804 861', 'feugiat.Lorem.ipsum@eget.org'),
(27, 'Alana Mccoy', 'P.O. Box 336, 4695 Ridiculus Street', 8835, 'Sala Baganza', '0497 993 297', 'nunc@velpede.ca'),
(28, 'Kirby Brewer', 'Ap #166-1925 Lacus Road', 4635, 'Bellevue', '0400 262 775', 'Aliquam@sitamet.co.uk'),
(29, 'Azalia Blake', 'Ap #490-9231 Eleifend Street', 1623, 'Felixstowe', '0468 490 645', 'ut.ipsum@enim.ca'),
(30, 'Donna Rogers', '5131 Curabitur Street', 8032, 'Calice al Cornoviglio', '0426 931 628', 'libero.est.congue@adipiscingelit.co.uk'),
(31, 'Martena Howard', '5588 Aliquam Rd.', 9426, 'Squillace', '0422 211 517', 'ut.molestie.in@ipsumac.edu'),
(32, 'Kato Garrison', '710-9225 Et Rd.', 4290, 'Maple Creek', '0405 476 463', 'eget.magna@In.net'),
(33, 'Tyrone Ramos', 'P.O. Box 384, 5087 Sem Street', 8846, 'Richmond', '0464 139 319', 'quam.Curabitur.vel@egestasSed.ca'),
(34, 'Demetria Kemp', 'P.O. Box 642, 9943 Urna. Avenue', 5112, 'San Lazzaro di Savena', '0473 842 058', 'urna@arcuAliquam.com'),
(35, 'Hu Dudley', '214-3097 Elit, Street', 4564, 'Ferrazzano', '0473 432 387', 'lobortis@enimcondimentum.co.uk'),
(36, 'Brady Weeks', '1657 Et, Ave', 3453, 'Bottrop', '0490 272 026', 'Curabitur.massa.Vestibulum@velit.ca'),
(37, 'Julie Gutierrez', '761-9601 Lacus. Rd.', 3174, 'Cherbourg-Octeville', '0499 434 932', 'augue.eu.tellus@tincidunt.co.uk'),
(38, 'Channing Herrera', '863-7780 Praesent Rd.', 7137, 'Ruoti', '0462 595 629', 'Sed.nulla@egestas.ca'),
(39, 'Vladimir Bruce', 'Ap #673-1342 Amet St.', 3368, 'Almere', '0478 387 384', 'vulputate.posuere.vulputate@molestie.edu'),
(40, 'Kylee Whitaker', 'Ap #575-1473 Mus. St.', 1611, 'Madurai', '0448 359 194', 'Nulla@molestie.edu'),
(41, 'Xenos Rocha', 'Ap #851-5738 Mauris. St.', 8180, 'Purral', '0459 242 668', 'risus.Donec.nibh@enimMauris.ca'),
(42, 'Ethan Pugh', 'P.O. Box 634, 9609 Cursus St.', 2703, 'Segni', '0499 127 633', 'molestie.arcu@lobortisrisusIn.co.uk'),
(43, 'Jayme Carroll', '3897 Justo Avenue', 6971, 'Landau', '0409 476 474', 'Sed@SuspendisseeleifendCras.ca'),
(44, 'Alec Roberson', 'P.O. Box 750, 283 Libero Road', 1424, 'Hohen Neuendorf', '0453 870 104', 'nulla.Integer.vulputate@laciniamattis.com'),
(45, 'Nerea Gutierrez', '922-257 Tristique Av.', 5518, 'Banff', '0436 537 661', 'inceptos.hymenaeos@imperdietullamcorper.org'),
(46, 'Adria Noel', 'P.O. Box 536, 2043 Accumsan Street', 5398, 'Tredegar', '0421 754 651', 'dui.Fusce.diam@ametconsectetuer.org'),
(47, 'Remedios Wolfe', '5203 Velit. Street', 8898, 'Cavallino', '0407 974 864', 'pede.et.risus@interdumligula.com'),
(48, 'Simon Rosales', 'P.O. Box 934, 175 Morbi Rd.', 4010, 'Guna', '0470 124 599', 'Aenean.massa@adipiscingelitEtiam.edu'),
(49, 'Hanae Ware', '6148 Maecenas Street', 7990, 'Albagiara', '0467 092 053', 'ornare.egestas.ligula@nislelementum.ca'),
(50, 'Emmanuel Riddle', 'P.O. Box 537, 4698 Senectus Avenue', 3320, 'Rockford', '0466 990 102', 'Curabitur.sed@arcuVivamussit.edu'),
(51, 'Kristen Ford', '220 Adipiscing St.', 8292, 'Tribogna', '0448 299 101', 'turpis.nec@adipiscing.org'),
(52, 'Evelyn Harris', '417-9506 A, Street', 2197, 'Aquila d\'Arroscia', '0497 053 389', 'nec@Nunc.co.uk'),
(53, 'Brent Peck', 'P.O. Box 680, 1020 Adipiscing Street', 2445, 'Suwałki', '0420 871 845', 'In@Uttincidunt.com'),
(54, 'Orli Barton', '739-6326 At Road', 3914, 'Ambleside', '0427 595 494', 'tellus@vehicularisus.org'),
(55, 'Candice Bradshaw', '726-1708 Dolor Avenue', 1627, 'Husum', '0414 039 268', 'nisl.Maecenas@enim.com'),
(56, 'Hunter Lowe', 'Ap #591-2607 Et Ave', 3971, 'Mansfield', '0488 098 090', 'accumsan.laoreet.ipsum@Sedet.com'),
(57, 'Cleo Hensley', '861-2645 Leo, Road', 5993, 'Burgos', '0429 055 276', 'nec@liberoProin.org'),
(58, 'Neville Petty', '5700 Aliquam St.', 7903, 'Fochabers', '0493 238 205', 'mi.enim@egetnisi.net'),
(59, 'Erin Austin', '888-5780 Odio. Street', 4764, 'Los Ángeles', '0485 055 800', 'libero@nonarcu.org'),
(60, 'Ishmael Walker', 'P.O. Box 437, 1444 Malesuada Ave', 1871, 'Rum', '0495 374 520', 'Cras.eu@vestibulumnequesed.com'),
(61, 'Christen Marks', '636-1852 Cras Rd.', 5417, 'Mellet', '0457 114 620', 'ut.sem.Nulla@famesac.ca'),
(62, 'Fuller Hanson', 'Ap #142-6886 Non Rd.', 9012, 'Heestert', '0401 738 400', 'turpis@nonummy.com'),
(63, 'Margaret Salazar', '743-9009 Luctus St.', 8335, 'Çeşme', '0427 630 394', 'imperdiet@egestas.net'),
(64, 'Duncan Howell', 'P.O. Box 416, 1483 In Road', 3116, 'Keumiee', '0429 991 095', 'lacus@vulputate.com'),
(65, 'Astra Morrison', '318-8946 Erat Avenue', 3682, 'Völklingen', '0431 383 577', 'consequat.nec.mollis@mollisdui.co.uk'),
(66, 'Driscoll Petersen', '7188 Et Ave', 8651, 'Beert', '0423 035 978', 'rhoncus.Nullam@atortor.net'),
(67, 'Xerxes Case', 'P.O. Box 894, 543 Vitae St.', 1746, 'Grafton', '0475 051 492', 'non.enim@Praesenteu.net'),
(68, 'Blair Salas', 'P.O. Box 986, 8899 Nunc Rd.', 4901, 'Wörgl', '0448 583 605', 'urna.Ut@condimentumDonec.com'),
(69, 'Randall Parrish', '466-9557 Donec St.', 9858, 'Buckie', '0478 911 703', 'purus.sapien@Duis.co.uk'),
(70, 'Lisandra Baird', 'P.O. Box 736, 6954 Blandit St.', 8805, 'Maipú', '0455 736 779', 'ultrices.a.auctor@fringilla.com'),
(71, 'Kato Simmons', 'Ap #372-2214 Tellus. St.', 6513, 'Barahanagar', '0404 453 770', 'in.dolor.Fusce@id.org'),
(72, 'Ginger Holcomb', 'Ap #207-4475 Eu, St.', 1111, 'Terme', '0424 968 212', 'a.facilisis.non@sodalesnisi.edu'),
(73, 'Malachi Coffey', 'P.O. Box 919, 7827 Aenean Road', 5090, 'Salihli', '0432 017 103', 'risus@atrisus.net'),
(74, 'Jaden Charles', 'P.O. Box 378, 1485 Adipiscing Street', 1770, 'Colico', '0435 756 546', 'elementum.lorem.ut@nequeNullamut.net'),
(75, 'Bert Solomon', '526-2369 Rhoncus. Ave', 1611, 'Meeswijk', '0420 518 137', 'urna.convallis@egestas.net'),
(76, 'Rhona Moran', '289 Sed, St.', 9274, 'Camporotondo di Fiastrone', '0457 452 332', 'Nulla@Nuncmauris.co.uk'),
(77, 'Nyssa Holman', '976-6189 Vulputate, Rd.', 6658, 'Goiânia', '0493 336 616', 'Nulla.eu.neque@liberoInteger.edu'),
(78, 'Sarah Bradley', 'P.O. Box 455, 4024 Donec Ave', 8558, 'San Maurizio Canavese', '0409 198 528', 'libero.dui.nec@nisi.org'),
(79, 'Natalie Strickland', '893-4939 Bibendum Road', 4575, 'Rutten', '0416 337 263', 'Sed.nec.metus@nequevenenatis.org'),
(80, 'Uriah Spence', '790-3833 Ultrices. St.', 7896, 'Rotheux-RimiŽre', '0499 863 402', 'Suspendisse@liberoProinsed.com'),
(81, 'Tad Bray', 'P.O. Box 255, 6984 Non Ave', 7848, 'Rachecourt', '0407 102 923', 'velit.justo.nec@eget.ca'),
(82, 'Xanthus Hood', 'Ap #195-6071 Montes, Street', 5263, 'Marilles', '0441 628 293', 'dui.augue@ullamcorperDuiscursus.ca'),
(83, 'Luke Guerra', '1497 Donec St.', 4002, 'Stewart', '0452 694 314', 'Duis@Donecnibhenim.co.uk'),
(84, 'Myra Lindsay', '2248 Egestas. Avenue', 7578, 'Idar-Oberstei', '0433 153 507', 'mauris@cursusaenim.ca'),
(85, 'Madeson Bell', '1256 Dapibus Rd.', 7880, 'Vandoies/Vintl', '0405 099 824', 'ante@dignissimtemporarcu.ca'),
(86, 'Joelle Skinner', '7952 Non Av.', 3649, 'Uikhoven', '0437 395 117', 'Integer.sem.elit@dictumPhasellusin.ca'),
(87, 'Clark Hammond', '4962 Quam Av.', 4996, 'San Pedro', '0492 146 327', 'nonummy.ipsum.non@Morbinon.org'),
(88, 'Aquila Alvarado', '538-3562 Lacinia Rd.', 1112, 'Belfast', '0415 525 507', 'nec.diam@pede.edu'),
(89, 'Kaye Larson', '5730 Amet, Ave', 3238, 'Coelemu', '0405 941 552', 'gravida.mauris.ut@Cras.net'),
(90, 'Paula Bartlett', '9477 Integer St.', 3107, 'Coupar Angus', '0461 479 036', 'Sed.malesuada.augue@Donectempus.com'),
(91, 'Plato Conrad', '988-6004 Neque. St.', 1652, 'Sacramento', '0408 829 098', 'sed.consequat.auctor@perinceptoshymenaeos.ca'),
(92, 'Kelsey Campbell', 'P.O. Box 876, 2985 Eleifend Rd.', 3161, 'GozŽe', '0418 838 622', 'non.luctus@facilisis.net'),
(93, 'Brenna Murphy', '5255 Nisl. Street', 4118, 'Valparaíso', '0407 919 144', 'libero.Integer.in@Uttincidunt.org'),
(94, 'Trevor Parsons', '940-9137 Nullam Road', 7499, 'Balvano', '0475 679 674', 'libero@idante.com'),
(95, 'Marah Mccormick', '9300 Sed St.', 2136, 'High Wycombe', '0489 115 650', 'Nunc.ut@Sedid.edu'),
(96, 'Marah Watkins', '471 Morbi Street', 2488, 'Paisley', '0436 196 888', 'ornare.placerat@adipiscingfringilla.org'),
(97, 'Tatiana Fleming', '886-879 A Ave', 5661, 'Nieuwmunster', '0419 286 019', 'augue.Sed.molestie@ultrices.co.uk'),
(98, 'Candice Bolton', '418-723 Fusce Rd.', 8488, 'Topeka', '0416 793 768', 'imperdiet.ornare.In@elita.com'),
(99, 'Charles Carey', '895-8351 Eleifend Ave', 3102, 'Koszalin', '0474 030 498', 'magna.Phasellus@Cras.ca'),
(100, 'Minerva Wagner', '213-5491 Cursus. Avenue', 6780, 'Arvier', '0482 330 055', 'elit.dictum@cursus.edu');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int NOT NULL,
  `order_id` int NOT NULL
) ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `order_id`) VALUES
(2, 101);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `order_date` datetime NOT NULL,
  `order_total` decimal(9,2) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `order_item` int NOT NULL,
  `customer_id` int NOT NULL
) ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_total`, `order_status`, `order_item`, `customer_id`) VALUES
(101, '2022-08-29 03:16:36', '37.00', 0, 32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` int NOT NULL,
  `product_price` decimal(9,2) NOT NULL,
  `stock_alert` int NOT NULL
) ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_quantity`, `product_price`, `stock_alert`) VALUES
(1, 'Lorem ipsum dolor sit amet,', 829, '94.00', 756),
(2, 'Lorem ipsum dolor sit amet,', 224, '94.00', 774),
(3, 'Lorem ipsum dolor sit', 422, '16.00', 682),
(4, 'Lorem ipsum dolor', 73, '95.00', 343),
(5, 'Lorem ipsum dolor sit', 560, '96.00', 660),
(6, 'Lorem ipsum dolor sit amet,', 33, '62.00', 574),
(7, 'Lorem', 337, '93.00', 69),
(8, 'Lorem', 192, '50.00', 649),
(9, 'Lorem ipsum dolor', 975, '31.00', 508),
(10, 'Lorem ipsum dolor sit amet,', 164, '53.00', 629),
(11, 'Lorem ipsum dolor sit amet,', 207, '97.00', 848),
(12, 'Lorem ipsum', 716, '95.00', 853),
(13, 'Lorem ipsum', 810, '29.00', 524),
(14, 'Lorem ipsum dolor sit', 247, '70.00', 116),
(15, 'Lorem ipsum', 667, '95.00', 271),
(16, 'Lorem ipsum dolor sit', 131, '81.00', 244),
(17, 'Lorem ipsum dolor', 791, '89.00', 558),
(18, 'Lorem', 638, '82.00', 669),
(19, 'Lorem ipsum dolor sit', 665, '35.00', 491),
(20, 'Lorem ipsum', 997, '35.00', 577),
(21, 'Lorem ipsum dolor sit', 574, '40.00', 805),
(22, 'Lorem ipsum dolor', 846, '22.00', 31),
(23, 'Lorem ipsum', 233, '59.00', 927),
(24, 'Lorem ipsum dolor', 184, '90.00', 948),
(25, 'Lorem', 950, '68.00', 130),
(26, 'Lorem ipsum dolor', 631, '63.00', 226),
(27, 'Lorem', 749, '35.00', 31),
(28, 'Lorem ipsum', 540, '54.00', 644),
(29, 'Lorem ipsum dolor sit', 422, '73.00', 402),
(30, 'Lorem ipsum dolor sit amet,', 779, '72.00', 770),
(31, 'Lorem', 635, '37.00', 470),
(32, 'Lorem', 20, '37.00', 142),
(33, 'Lorem ipsum dolor sit', 821, '41.00', 266),
(34, 'Lorem ipsum', 655, '92.00', 53),
(35, 'Lorem ipsum dolor sit', 581, '21.00', 361),
(36, 'Lorem ipsum dolor sit', 603, '52.00', 450),
(37, 'Lorem ipsum dolor sit amet,', 542, '45.00', 923),
(38, 'Lorem ipsum', 857, '19.00', 549),
(39, 'Lorem ipsum', 364, '58.00', 511),
(40, 'Lorem ipsum dolor', 627, '72.00', 553);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `purchased_item` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_item` (`order_item`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_total` (`order_total`),
  ADD KEY `order_date` (`order_date`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_price` (`product_price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_item`) REFERENCES `products` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`order_total`) REFERENCES `products` (`product_price`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
