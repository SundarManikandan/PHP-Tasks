CREATE DATABASE IF NOT EXISTS `db_demo`;
USE `db_demo`;
CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `imagedata` blob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;