DROP TABLE IF EXISTS tbl_enquiry;

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tbl_enquiry VALUES("123","Amit","amitbaramatimca@gmail.com","8796154725","Narhegoan,Pune","sad");



