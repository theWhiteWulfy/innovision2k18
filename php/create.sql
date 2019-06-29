CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `stuname` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `year` number(10) NOT NULL,
  `event1` varchar(100) NOT NULL,
  `event2` varchar(100) NOT NULL,
  `event3` varchar(100) NOT NULL,
  `event4` varchar(100) NOT NULL,
  `event5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;