--
-- Table structure for table `product`
--

CREATE TABLE `phoneshop`.`product` ( 
`id` INT(11) NOT NULL , 
`name` VARCHAR(50) NOT NULL , 
`category` VARCHAR(50) NOT NULL , 
`code` varchar(255) NOT NULL,
`price` VARCHAR(20) NOT NULL , 
`description` VARCHAR(1024) NOT NULL , 
`image` VARCHAR(1024) NOT NULL ,
)ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `code`, `price`, `description`, `image`) VALUES
(1, 'Iphone 8', 'apple', 'APP08', 500, 'Black - 128GB - Line new', 'images/phone/iphone8.jpg'),
(2, 'Iphone 11', 'apple', 'APP11', 700, 'Green Dark - 64GB - New', 'images/phone/iphone11.jpg'),
(3, 'Iphone 12', 'apple', 'APP12', 1500, 'Silver - 256GB - Line new', 'images/phone/iphone12.jpg'),
(4, 'Nokia 24', 'nokia', 'NKA24', 200, 'Gray - 24GB - Old', 'images/phone/nokia24.jpg'),
(5, 'Oppo A53', 'oppo', 'OPA53', 300, 'Blue Ocean - 64GB - Line new', 'images/phone/oppoa53.png'),
(6, 'Samsung Galaxy A51', 'samsung', 'SSA51', 600, 'Green Corel - 32GB - Line new', 'images/phone/samsunggalaxya51.jpg'),
(7, 'Samsung Galaxy 10plus+', 'samsung', 'SS10P', 1200, 'Silver - 128GB - New', 'images/phone/samsunggalaxynote10plus.jpg'),
(8, 'Vivo V20', 'vivo', 'VVV20', 150, 'Blue Corel - 32GB - New', 'images/phone/vivov20.png')

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;