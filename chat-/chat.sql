SET FOREIGN_KEY_CHECKS=0;

CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `chattime` datetime,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;