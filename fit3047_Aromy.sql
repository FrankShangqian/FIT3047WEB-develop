
CREATE TABLE users (
    users_id int(11) AUTO_INCREMENT PRIMARY KEY,
    users_email VARCHAR(255) NOT NULL,
    users_password VARCHAR(255) NOT NULL,
    users_name varchar(255) NOT NULL,
    users_mobile_phone VARCHAR(30) DEFAULT '',
    users_role int(11) NOT NULL DEFAULT 0,
    users_created DATETIME,
    users_modified DATETIME
);

CREATE TABLE categories (
  categories_id int(11) NOT NULL AUTO_INCREMENT,
  categories_name varchar(65) NOT NULL,
  categories_image varchar(255) DEFAULT NULL,
  categories_created datetime DEFAULT NULL,
  categories_modified datetime DEFAULT NULL,
  PRIMARY KEY (`categories_id`)
);

CREATE TABLE customers (
  customer_id int(11) PRIMARY KEY,
  customer_name varchar(255) NOT NULL,
  customer_address varchar(255) NOT NULL,
  customer_postcode int(11) NOT NULL,
  customer_city varchar(255) NOT NULL,
  customer_phonenumber bigint(20) NOT NULL,
  customer_email varchar(255) NOT NULL
);

CREATE TABLE enquiries (
  enquiries_id int(11) PRIMARY KEY,
  enquiries_full_name varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NOT NULL,
  enquiries_email varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NOT NULL,
  enquiries_body text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NOT NULL,
  enquiries_created timestamp NULL DEFAULT current_timestamp(),
  enquiries_email_sent tinyint(1) NOT NULL DEFAULT 0
);

CREATE TABLE orders (
  order_id int(11) PRIMARY KEY,
  order_date date NOT NULL,
  order_total decimal(9,2) NOT NULL,
  order_status tinyint(1) NOT NULL,
  order_item int(11) NOT NULL,
  customer_id int(11) NOT NULL,
  FOREIGN KEY customer_key (customer_id) REFERENCES customers (customer_id)
);

CREATE TABLE products (
  product_id int(11) PRIMARY KEY,
  product_name varchar(255) NOT NULL,
  product_quantity int(11) NOT NULL,
  product_price decimal(9,2) NOT NULL,
  product_stock_alert int(11) NOT NULL
  category_id int(11) DEFAULT NULL,
);

CREATE TABLE order_line (
  orderline_id int PRIMARY KEY,
  product_id int NOT NULL,
  order_quantity int NOT NULL,
  order_id int NOT NULL,
  FOREIGN KEY order_key (order_id) REFERENCES orders (order_id),
  FOREIGN KEY product_key (product_id) REFERENCES products (product_id)
);


ALTER TABLE customers
  MODIFY customer_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

ALTER TABLE enquiries
  MODIFY enquiries_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

ALTER TABLE order_line
  MODIFY orderline_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;


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
(15, 'Palmer Kent', '926-6523 Montes, Ave', 5731, 'Longueville', 469, 'ante@commodotincidunt.co.uk');

INSERT INTO order_line (orderline_id, product_id, order_quantity, order_id) VALUES
(1, 1, 1, 1);

INSERT INTO enquiries (enquiries_id, enquiries_full_name, enquiries_email, enquiries_body, enquiries_created, enquiries_email_sent) VALUES
(0, 'qq', 'sduu0007@student.monash.edu', '11111', '2022-09-24 14:38:44', 1);

INSERT INTO users (users_email, users_password, users_name, users_created, users_modified, users_role) VALUES
('root@example.com', '$2y$10$g/gbftSdcZpuFYbwqYD5de4AWFuwG1pXykGo1Qc..hVZcEN/96ryG', 'Arthur', NOW(), NOW(), 3);

INSERT INTO `categories` (`id`, `name`, `image`, `created`, `modified`) VALUES
  (1, 'Armor', 'https://i.imgur.com/tzLmOMs.png', '2018-07-02 02:30:14', '2018-07-02 02:30:14'),
  (2, 'Weapons', 'https://i.imgur.com/q8kyH1H.png', '2018-07-02 03:14:37', '2018-07-02 03:14:37');


COMMIT;



