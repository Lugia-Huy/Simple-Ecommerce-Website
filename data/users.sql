--
-- Table structure for table `users`
--

CREATE TABLE `phoneshop`.`users` ( 
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`username` VARCHAR(30) NOT NULL , 
`password` VARCHAR(30) NOT NULL , 
`name` VARCHAR(256) NOT NULL , 
`email` VARCHAR(256) NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB; CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`) VALUES
(1, '518h0020', '123456', 'quanghuy', '518h0020@student.tdtu.edu.vn')