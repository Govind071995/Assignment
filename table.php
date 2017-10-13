<?php  
CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `chatLimit` int(11) NOT NULL,
  `emailLimit` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

?>
