DROP TABLE IF EXISTS `images`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `images` (
  `id` int(4) NOT NULL auto_increment,
  `image_name` varchar(255) collate latin1_general_ci NOT NULL,
  `image_type` varchar(4) collate latin1_general_ci NOT NULL,
  `image_size` int(8) NOT NULL,
  `image_data` blob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
SET character_set_client = @saved_cs_client;



