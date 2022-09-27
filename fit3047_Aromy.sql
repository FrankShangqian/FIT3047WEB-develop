

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE users (
    users_id INT AUTO_INCREMENT PRIMARY KEY,
    users_email VARCHAR(255) NOT NULL,
    users_password VARCHAR(255) NOT NULL,
    users_name varchar(255) NOT NULL,
    users_mobile_phone VARCHAR(30) DEFAULT '',
    users_role int(11) NOT NULL DEFAULT 0,
    users_created DATETIME,
    users_modified DATETIME
);

CREATE TABLE customers (
  customer_id int(11) NOT NULL,
  customer_name varchar(255) NOT NULL,
  customer_address varchar(255) NOT NULL,
  customer_postcode int(11) NOT NULL,
  customer_city varchar(255) NOT NULL,
  customer_phonenumber bigint(20) NOT NULL,
  customer_email varchar(255) NOT NULL
);

CREATE TABLE enquiries (
  enquiries_id int(11) NOT NULL,
  enquiries_full_name varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NOT NULL,
  enquiries_email varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NOT NULL,
  enquiries_body text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NOT NULL,
  enquiries_created timestamp NULL DEFAULT current_timestamp(),
  enquiries_email_sent tinyint(1) NOT NULL DEFAULT 0
);

CREATE TABLE order_line (
  orderline_id int NOT NULL,
  product_id int NOT NULL,
  order_quantity int NOT NULL,
  order_id int NOT NULL
);

CREATE TABLE orders (
  order_id int(11) NOT NULL,
  order_date date NOT NULL,
  order_total decimal(9,2) NOT NULL,
  order_status tinyint(1) NOT NULL,
  order_item int(11) NOT NULL,
  customer_id int(11) NOT NULL
);

CREATE TABLE products (
  product_id int(11) NOT NULL,
  product_name varchar(255) NOT NULL,
  product_quantity int(11) NOT NULL,
  product_price decimal(9,2) NOT NULL,
  stock_alert int(11) NOT NULL
);

ALTER TABLE enquiries
  ADD PRIMARY KEY (enquiries_id);

ALTER TABLE customers
  ADD PRIMARY KEY (customer_id);

ALTER TABLE products
  ADD PRIMARY KEY (product_id);

ALTER TABLE order_line
  MODIFY orderline_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

ALTER TABLE customers
  MODIFY customer_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

ALTER TABLE enquiries
  MODIFY enquiries_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

ALTER TABLE orders
  ADD PRIMARY KEY (order_id),
  ADD CONSTRAINT customer_id FOREIGN KEY (customer_id) REFERENCES customers (customer_id);

ALTER TABLE order_line
  ADD PRIMARY KEY (orderline_id),
  ADD CONSTRAINT order_id FOREIGN KEY (order_id) REFERENCES orders (order_id),
  ADD CONSTRAINT product_id FOREIGN KEY (product_id) REFERENCES products (product_id);


INSERT INTO products (product_id, product_name, product_quantity, product_price, stock_alert) VALUES
(1, 'Lorem ipsum dolor sit amet,', 829, '94.00', 756),
(2, 'Lorem ipsum dolor sit', 422, '16.00', 682),
(3, 'Lorem ipsum dolor', 73, '95.00', 343),
(4, 'Lorem ipsum', 810, '29.00', 524),
(5, 'Lorem', 337, '93.00', 69);

INSERT INTO orders (order_id, order_date, order_total, order_status, order_item, customer_id) VALUES
(1, NOW(), 100, 1, 1, 1);

INSERT INTO customers (customer_id, customer_name, customer_address, customer_postcode, customer_city, customer_phonenumber, customer_email) VALUES
(1, 'Coby Frazier', '9670 Vitae Av.', 6652, 'Roxburgh', 456, 'Cras.eu@erat.net'),
(2, 'Ronan Kim', '4483 Lobortis Avenue', 4286, 'Treppo Carnico', 414, 'tempor@cursus.ca'),
(3, 'Alexander Fisher', '9932 Eget, Street', 8946, 'Grimma', 451, 'sed.libero@loremvitae.edu'),
(4, 'Kenyon Rollins', 'Ap #321-5788 Massa. Av.', 7956, 'Borriana', 440, 'Mauris.vel.turpis@eratsemperrutrum.net'),
(5, 'Moana Strickland', 'P.O. Box 904, 7418 Nunc St.', 4042, 'Okigwe', 484, 'lacus@eteros.ca'),
(6, 'Casey Serrano', 'Ap #373-3265 A, Avenue', 8467, 'Omal', 486, 'est@Praesenteudui.ca'),
(7, 'Guy Wolf', '381-2082 Aliquet Street', 4822, 'Bologna', 404, 'Donec.at.arcu@felis.ca'),
(8, 'Carla Bridges', 'P.O. Box 383, 8005 Phasellus Ave', 9376, 'Konstanz', 434, 'Cras.dictum.ultricies@orciluctus.edu'),
(9, 'Kathleen Craig', 'P.O. Box 389, 1976 Quisque Rd.', 7122, 'Heusden', 402, 'enim.Suspendisse@vitaenibh.net'),
(10, 'Sylvia Haley', 'P.O. Box 470, 7701 Ultrices Rd.', 8737, 'Acquedolci', 440, 'aliquet@Phasellusdapibus.net'),
(11, 'Zena Foreman', '811-1545 Magna. Street', 4450, 'Bendigo', 427, 'Fusce@condimentumeget.com'),
(12, 'Abraham Pate', '291-6684 Velit. Road', 5068, 'Salon-de-Provence', 419, 'nisi@fermentumconvallisligula.com'),
(13, 'Eaton Boyd', 'P.O. Box 630, 7145 Curabitur St.', 3204, 'Bilbo', 456, 'at.augue@accumsansed.net'),
(14, 'Jaquelyn Bird', '8905 Justo. St.', 5472, 'Mount Pearl', 455, 'eros.nec.tellus@nislarcu.edu'),
(15, 'Palmer Kent', '926-6523 Montes, Ave', 5731, 'Longueville', 469, 'ante@commodotincidunt.co.uk'),
(16, 'Asher Hernandez', '9487 Consequat Road', 9545, 'Poggiodomo', 460, 'interdum.ligula@amet.net'),
(17, 'Dora Gay', 'Ap #556-8134 Malesuada Street', 2287, 'Slough', 448, 'vehicula.Pellentesque.tincidunt@urna.edu'),
(18, 'Valentine Oneill', '234-5003 Vel Avenue', 7273, 'Bruckneudorf', 466, 'fringilla.Donec.feugiat@euarcuMorbi.net'),
(19, 'Alexandra Beck', 'Ap #198-5936 Mollis Street', 1899, 'Sint-Lambrechts-Woluwe', 494, 'nibh.Quisque@Crasdolor.com'),
(20, 'Joseph Smith', '8345 Gravida St.', 8280, 'PiŽtrain', 410, 'tempor.augue.ac@dignissimpharetra.ca'),
(21, 'Owen Brooks', '716-3571 Interdum Rd.', 2090, 'Bottidda', 494, 'Nam.ligula@amagnaLorem.net'),
(22, 'Colin Mckee', 'Ap #863-752 Interdum St.', 1307, 'Uitkerke', 448, 'scelerisque@ornare.edu'),
(23, 'Olga Brennan', '8366 Sapien. Street', 9283, 'Bornival', 425, 'Nunc.ac@consequatauctor.com'),
(24, 'Heather Mccoy', 'Ap #179-6536 Id Ave', 8905, 'Güssing', 408, 'commodo.ipsum.Suspendisse@ligulaAenean.edu'),
(25, 'Brianna Spears', 'Ap #865-3562 Turpis. Av.', 7337, 'Bozeman', 467, 'nulla@Sedauctor.co.uk'),
(26, 'Kirby Oneill', '224-1625 Eget Av.', 4040, 'Bellingen', 474, 'feugiat.Lorem.ipsum@eget.org'),
(27, 'Alana Mccoy', 'P.O. Box 336, 4695 Ridiculus Street', 8835, 'Sala Baganza', 497, 'nunc@velpede.ca'),
(28, 'Kirby Brewer', 'Ap #166-1925 Lacus Road', 4635, 'Bellevue', 400, 'Aliquam@sitamet.co.uk'),
(29, 'Azalia Blake', 'Ap #490-9231 Eleifend Street', 1623, 'Felixstowe', 468, 'ut.ipsum@enim.ca'),
(30, 'Donna Rogers', '5131 Curabitur Street', 8032, 'Calice al Cornoviglio', 426, 'libero.est.congue@adipiscingelit.co.uk'),
(31, 'Martena Howard', '5588 Aliquam Rd.', 9426, 'Squillace', 422, 'ut.molestie.in@ipsumac.edu'),
(32, 'Kato Garrison', '710-9225 Et Rd.', 4290, 'Maple Creek', 405, 'eget.magna@In.net'),
(33, 'Tyrone Ramos', 'P.O. Box 384, 5087 Sem Street', 8846, 'Richmond', 464, 'quam.Curabitur.vel@egestasSed.ca'),
(34, 'Demetria Kemp', 'P.O. Box 642, 9943 Urna. Avenue', 5112, 'San Lazzaro di Savena', 473, 'urna@arcuAliquam.com'),
(35, 'Hu Dudley', '214-3097 Elit, Street', 4564, 'Ferrazzano', 473, 'lobortis@enimcondimentum.co.uk'),
(36, 'Brady Weeks', '1657 Et, Ave', 3453, 'Bottrop', 490, 'Curabitur.massa.Vestibulum@velit.ca'),
(37, 'Julie Gutierrez', '761-9601 Lacus. Rd.', 3174, 'Cherbourg-Octeville', 499, 'augue.eu.tellus@tincidunt.co.uk'),
(38, 'Channing Herrera', '863-7780 Praesent Rd.', 7137, 'Ruoti', 462, 'Sed.nulla@egestas.ca'),
(39, 'Vladimir Bruce', 'Ap #673-1342 Amet St.', 3368, 'Almere', 478, 'vulputate.posuere.vulputate@molestie.edu'),
(40, 'Kylee Whitaker', 'Ap #575-1473 Mus. St.', 1611, 'Madurai', 448, 'Nulla@molestie.edu'),
(41, 'Xenos Rocha', 'Ap #851-5738 Mauris. St.', 8180, 'Purral', 459, 'risus.Donec.nibh@enimMauris.ca'),
(42, 'Ethan Pugh', 'P.O. Box 634, 9609 Cursus St.', 2703, 'Segni', 499, 'molestie.arcu@lobortisrisusIn.co.uk'),
(43, 'Jayme Carroll', '3897 Justo Avenue', 6971, 'Landau', 409, 'Sed@SuspendisseeleifendCras.ca'),
(44, 'Alec Roberson', 'P.O. Box 750, 283 Libero Road', 1424, 'Hohen Neuendorf', 453, 'nulla.Integer.vulputate@laciniamattis.com'),
(45, 'Nerea Gutierrez', '922-257 Tristique Av.', 5518, 'Banff', 436, 'inceptos.hymenaeos@imperdietullamcorper.org'),
(46, 'Adria Noel', 'P.O. Box 536, 2043 Accumsan Street', 5398, 'Tredegar', 421, 'dui.Fusce.diam@ametconsectetuer.org'),
(47, 'Remedios Wolfe', '5203 Velit. Street', 8898, 'Cavallino', 407, 'pede.et.risus@interdumligula.com'),
(48, 'Simon Rosales', 'P.O. Box 934, 175 Morbi Rd.', 4010, 'Guna', 470, 'Aenean.massa@adipiscingelitEtiam.edu'),
(49, 'Hanae Ware', '6148 Maecenas Street', 7990, 'Albagiara', 467, 'ornare.egestas.ligula@nislelementum.ca'),
(50, 'Emmanuel Riddle', 'P.O. Box 537, 4698 Senectus Avenue', 3320, 'Rockford', 466, 'Curabitur.sed@arcuVivamussit.edu'),
(51, 'Kristen Ford', '220 Adipiscing St.', 8292, 'Tribogna', 448, 'turpis.nec@adipiscing.org'),
(52, 'Evelyn Harris', '417-9506 A, Street', 2197, 'Aquila Arroscia', 497, 'nec@Nunc.co.uk'),
(53, 'Brent Peck', 'P.O. Box 680, 1020 Adipiscing Street', 2445, 'Suwałki', 420, 'In@Uttincidunt.com'),
(54, 'Orli Barton', '739-6326 At Road', 3914, 'Ambleside', 427, 'tellus@vehicularisus.org'),
(55, 'Candice Bradshaw', '726-1708 Dolor Avenue', 1627, 'Husum', 414, 'nisl.Maecenas@enim.com'),
(56, 'Hunter Lowe', 'Ap #591-2607 Et Ave', 3971, 'Mansfield', 488, 'accumsan.laoreet.ipsum@Sedet.com'),
(57, 'Cleo Hensley', '861-2645 Leo, Road', 5993, 'Burgos', 429, 'nec@liberoProin.org'),
(58, 'Neville Petty', '5700 Aliquam St.', 7903, 'Fochabers', 493, 'mi.enim@egetnisi.net'),
(59, 'Erin Austin', '888-5780 Odio. Street', 4764, 'Los Ángeles', 485, 'libero@nonarcu.org'),
(60, 'Ishmael Walker', 'P.O. Box 437, 1444 Malesuada Ave', 1871, 'Rum', 495, 'Cras.eu@vestibulumnequesed.com'),
(61, 'Christen Marks', '636-1852 Cras Rd.', 5417, 'Mellet', 457, 'ut.sem.Nulla@famesac.ca'),
(62, 'Fuller Hanson', 'Ap #142-6886 Non Rd.', 9012, 'Heestert', 401, 'turpis@nonummy.com'),
(63, 'Margaret Salazar', '743-9009 Luctus St.', 8335, 'Çeşme', 427, 'imperdiet@egestas.net'),
(64, 'Duncan Howell', 'P.O. Box 416, 1483 In Road', 3116, 'Keumiee', 429, 'lacus@vulputate.com'),
(65, 'Astra Morrison', '318-8946 Erat Avenue', 3682, 'Völklingen', 431, 'consequat.nec.mollis@mollisdui.co.uk'),
(66, 'Driscoll Petersen', '7188 Et Ave', 8651, 'Beert', 423, 'rhoncus.Nullam@atortor.net'),
(67, 'Xerxes Case', 'P.O. Box 894, 543 Vitae St.', 1746, 'Grafton', 475, 'non.enim@Praesenteu.net'),
(68, 'Blair Salas', 'P.O. Box 986, 8899 Nunc Rd.', 4901, 'Wörgl', 448, 'urna.Ut@condimentumDonec.com'),
(69, 'Randall Parrish', '466-9557 Donec St.', 9858, 'Buckie', 478, 'purus.sapien@Duis.co.uk'),
(70, 'Lisandra Baird', 'P.O. Box 736, 6954 Blandit St.', 8805, 'Maipú', 455, 'ultrices.a.auctor@fringilla.com'),
(71, 'Kato Simmons', 'Ap #372-2214 Tellus. St.', 6513, 'Barahanagar', 404, 'in.dolor.Fusce@id.org'),
(72, 'Ginger Holcomb', 'Ap #207-4475 Eu, St.', 1111, 'Terme', 424, 'a.facilisis.non@sodalesnisi.edu'),
(73, 'Malachi Coffey', 'P.O. Box 919, 7827 Aenean Road', 5090, 'Salihli', 432, 'risus@atrisus.net'),
(74, 'Jaden Charles', 'P.O. Box 378, 1485 Adipiscing Street', 1770, 'Colico', 435, 'elementum.lorem.ut@nequeNullamut.net'),
(75, 'Bert Solomon', '526-2369 Rhoncus. Ave', 1611, 'Meeswijk', 420, 'urna.convallis@egestas.net'),
(76, 'Rhona Moran', '289 Sed, St.', 9274, 'Camporotondo di Fiastrone', 457, 'Nulla@Nuncmauris.co.uk'),
(77, 'Nyssa Holman', '976-6189 Vulputate, Rd.', 6658, 'Goiânia', 493, 'Nulla.eu.neque@liberoInteger.edu'),
(78, 'Sarah Bradley', 'P.O. Box 455, 4024 Donec Ave', 8558, 'San Maurizio Canavese', 409, 'libero.dui.nec@nisi.org'),
(79, 'Natalie Strickland', '893-4939 Bibendum Road', 4575, 'Rutten', 416, 'Sed.nec.metus@nequevenenatis.org'),
(80, 'Uriah Spence', '790-3833 Ultrices. St.', 7896, 'Rotheux-RimiŽre', 499, 'Suspendisse@liberoProinsed.com'),
(81, 'Tad Bray', 'P.O. Box 255, 6984 Non Ave', 7848, 'Rachecourt', 407, 'velit.justo.nec@eget.ca'),
(82, 'Xanthus Hood', 'Ap #195-6071 Montes, Street', 5263, 'Marilles', 441, 'dui.augue@ullamcorperDuiscursus.ca'),
(83, 'Luke Guerra', '1497 Donec St.', 4002, 'Stewart', 452, 'Duis@Donecnibhenim.co.uk'),
(84, 'Myra Lindsay', '2248 Egestas. Avenue', 7578, 'Idar-Oberstei', 433, 'mauris@cursusaenim.ca'),
(85, 'Madeson Bell', '1256 Dapibus Rd.', 7880, 'Vandoies/Vintl', 405, 'ante@dignissimtemporarcu.ca'),
(86, 'Joelle Skinner', '7952 Non Av.', 3649, 'Uikhoven', 437, 'Integer.sem.elit@dictumPhasellusin.ca'),
(87, 'Clark Hammond', '4962 Quam Av.', 4996, 'San Pedro', 492, 'nonummy.ipsum.non@Morbinon.org'),
(88, 'Aquila Alvarado', '538-3562 Lacinia Rd.', 1112, 'Belfast', 415, 'nec.diam@pede.edu'),
(89, 'Kaye Larson', '5730 Amet, Ave', 3238, 'Coelemu', 405, 'gravida.mauris.ut@Cras.net'),
(90, 'Paula Bartlett', '9477 Integer St.', 3107, 'Coupar Angus', 461, 'Sed.malesuada.augue@Donectempus.com'),
(91, 'Plato Conrad', '988-6004 Neque. St.', 1652, 'Sacramento', 408, 'sed.consequat.auctor@perinceptoshymenaeos.ca'),
(92, 'Kelsey Campbell', 'P.O. Box 876, 2985 Eleifend Rd.', 3161, 'GozŽe', 418, 'non.luctus@facilisis.net'),
(93, 'Brenna Murphy', '5255 Nisl. Street', 4118, 'Valparaíso', 407, 'libero.Integer.in@Uttincidunt.org'),
(94, 'Trevor Parsons', '940-9137 Nullam Road', 7499, 'Balvano', 475, 'libero@idante.com'),
(95, 'Marah Mccormick', '9300 Sed St.', 2136, 'High Wycombe', 489, 'Nunc.ut@Sedid.edu'),
(96, 'Marah Watkins', '471 Morbi Street', 2488, 'Paisley', 436, 'ornare.placerat@adipiscingfringilla.org'),
(97, 'Tatiana Fleming', '886-879 A Ave', 5661, 'Nieuwmunster', 419, 'augue.Sed.molestie@ultrices.co.uk'),
(98, 'Candice Bolton', '418-723 Fusce Rd.', 8488, 'Topeka', 416, 'imperdiet.ornare.In@elita.com'),
(99, 'Charles Carey', '895-8351 Eleifend Ave', 3102, 'Koszalin', 474, 'magna.Phasellus@Cras.ca'),
(100, 'Minerva Wagner', '213-5491 Cursus. Avenue', 6780, 'Arvier', 482, 'elit.dictum@cursus.edu');

INSERT INTO order_line (orderline_id, product_id, order_quantity, order_id) VALUES
(1, 1, 1, 1);

INSERT INTO enquiries (enquiries_id, enquiries_full_name, enquiries_email, enquiries_body, enquiries_created, enquiries_email_sent) VALUES
(0, 'qq', 'sduu0007@student.monash.edu', '11111', '2022-09-24 14:38:44', 1);

INSERT INTO users (users_email, users_password, users_name, users_created, users_modified, users_role) VALUES
('root@example.com', '$2y$10$g/gbftSdcZpuFYbwqYD5de4AWFuwG1pXykGo1Qc..hVZcEN/96ryG', 'Arthur', NOW(), NOW(), 3);

COMMIT;



