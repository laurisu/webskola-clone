-- Table structure for table `programmas`
--

CREATE TABLE IF NOT EXISTS `programmas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `program_type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `short_descr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `long_descr` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `grounding` text COLLATE utf8_unicode_ci NOT NULL,
  `number_of_ppl` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `languages` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `payment` int(11) NOT NULL,
  `dates` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;