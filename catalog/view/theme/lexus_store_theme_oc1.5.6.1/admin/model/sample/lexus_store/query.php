<?php 

$query['pavsliderlayer'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."pavoslidergroups`; ";
$query['pavsliderlayer'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."pavosliderlayers`; ";
$query['pavsliderlayer'][] = "
CREATE TABLE `".DB_PREFIX ."pavoslidergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
"; 

$query['pavsliderlayer'][] = "
CREATE TABLE `".DB_PREFIX ."pavosliderlayers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `params` text NOT NULL,
  `layersparams` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
"; 


$query['pavsliderlayer'][] ="
INSERT INTO `".DB_PREFIX ."pavoslidergroups` (`id`, `title`, `params`) VALUES
(1,'Slideshow','a:28:{s:5:\"title\";s:9:\"Slideshow\";s:5:\"delay\";s:4:\"9000\";s:9:\"fullwidth\";s:0:\"\";s:5:\"width\";s:4:\"1170\";s:6:\"height\";s:3:\"450\";s:12:\"touch_mobile\";s:1:\"1\";s:13:\"stop_on_hover\";s:1:\"0\";s:12:\"shuffle_mode\";s:1:\"0\";s:14:\"image_cropping\";s:1:\"1\";s:11:\"shadow_type\";s:1:\"0\";s:14:\"show_time_line\";s:1:\"0\";s:18:\"time_line_position\";s:3:\"top\";s:16:\"background_color\";s:7:\"#d9d9d9\";s:6:\"margin\";s:1:\"0\";s:7:\"padding\";s:1:\"0\";s:16:\"background_image\";s:1:\"0\";s:14:\"background_url\";s:0:\"\";s:14:\"navigator_type\";s:6:\"bullet\";s:16:\"navigator_arrows\";s:16:\"verticalcentered\";s:16:\"navigation_style\";s:5:\"round\";s:17:\"offset_horizontal\";s:1:\"0\";s:15:\"offset_vertical\";s:1:\"0\";s:14:\"show_navigator\";s:1:\"1\";s:20:\"hide_navigator_after\";s:3:\"200\";s:15:\"thumbnail_width\";s:3:\"100\";s:16:\"thumbnail_height\";s:2:\"50\";s:16:\"thumbnail_amount\";s:1:\"5\";s:17:\"hide_screen_width\";s:0:\"\";}');"; 	

$query['pavsliderlayer'][] = "
INSERT INTO `".DB_PREFIX ."pavosliderlayers` (`id`, `title`, `parent_id`, `group_id`, `params`, `layersparams`, `image`, `status`, `position`) VALUES
(1,'image slideshow1',0,1,'a:16:{s:2:\"id\";s:1:\"1\";s:15:\"slider_group_id\";s:1:\"1\";s:12:\"slider_title\";s:16:\"image slideshow1\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:6:\"random\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:1:\"1\";s:12:\"slider_image\";s:20:\"data/demo/slider.jpg\";}','O:8:\"stdClass\":1:{s:6:\"layers\";a:5:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"large_text\";s:13:\"layer_caption\";s:17:\"2014 NEW ARRIVALS\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"110\";s:10:\"layer_left\";s:3:\"112\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"668\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:11:\"medium_text\";s:13:\"layer_caption\";s:17:\"GET UP TO 25% OFF\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"163\";s:10:\"layer_left\";s:3:\"112\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1323\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"small_text\";s:13:\"layer_caption\";s:65:\"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"209\";s:10:\"layer_left\";s:3:\"113\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2026\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"small_text\";s:13:\"layer_caption\";s:27:\"lorem quis bibendum auctor.\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"236\";s:10:\"layer_left\";s:3:\"115\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2754\";}i:4;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:5;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:27:\"tp-button btn-theme-primary\";s:13:\"layer_caption\";s:5:\"MORE \";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"277\";s:10:\"layer_left\";s:3:\"113\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"3246\";}}}','data/demo/slider.jpg',1,1),
(11,'Image slideshow4',0,1,'a:16:{s:2:\"id\";s:2:\"11\";s:15:\"slider_group_id\";s:1:\"1\";s:12:\"slider_title\";s:16:\"Image slideshow4\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:6:\"random\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:2:\"11\";s:12:\"slider_image\";s:22:\"data/demo/silder-1.jpg\";}','O:8:\"stdClass\":1:{s:6:\"layers\";a:5:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"large_text\";s:13:\"layer_caption\";s:17:\"2014 NEW ARRIVALS\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"107\";s:10:\"layer_left\";s:3:\"131\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"629\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:11:\"medium_text\";s:13:\"layer_caption\";s:17:\"GET UP TO 25% OFF\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"157\";s:10:\"layer_left\";s:3:\"133\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1479\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"small_text\";s:13:\"layer_caption\";s:65:\"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"206\";s:10:\"layer_left\";s:3:\"136\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2160\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"small_text\";s:13:\"layer_caption\";s:26:\"lorem quis bibendum auctor\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"238\";s:10:\"layer_left\";s:3:\"136\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2868\";}i:4;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:5;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:27:\"tp-button btn-theme-primary\";s:13:\"layer_caption\";s:5:\"MORE \";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"279\";s:10:\"layer_left\";s:3:\"137\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"3416\";}}}','data/demo/silder-1.jpg',1,2),
(9,'Image slideshow2',0,1,'a:16:{s:2:\"id\";s:1:\"9\";s:15:\"slider_group_id\";s:1:\"1\";s:12:\"slider_title\";s:16:\"Image slideshow2\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:6:\"random\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:1:\"9\";s:12:\"slider_image\";s:22:\"data/demo/shopping.jpg\";}','O:8:\"stdClass\":1:{s:6:\"layers\";a:5:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"large_text\";s:13:\"layer_caption\";s:17:\"2014 NEW ARRIVALS\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"101\";s:10:\"layer_left\";s:3:\"128\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"525\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:11:\"medium_text\";s:13:\"layer_caption\";s:17:\"GET UP TO 25% OFF\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"151\";s:10:\"layer_left\";s:3:\"130\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1108\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"small_text\";s:13:\"layer_caption\";s:66:\"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, \";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"192\";s:10:\"layer_left\";s:3:\"130\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1600\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:10:\"small_text\";s:13:\"layer_caption\";s:26:\"lorem quis bibendum auctor\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"219\";s:10:\"layer_left\";s:3:\"130\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2402\";}i:4;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:5;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:27:\"tp-button btn-theme-primary\";s:13:\"layer_caption\";s:5:\"MORE \";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"260\";s:10:\"layer_left\";s:3:\"130\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"3025\";}}}','data/demo/shopping.jpg',1,3);
"; 


$query['pavmegamenu'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."megamenu`; ";
$query['pavmegamenu'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."megamenu_description`; "; 
$query['pavmegamenu'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."megamenu_widgets`; "; 
$query['pavmegamenu'][]  = "	
CREATE TABLE `".DB_PREFIX ."megamenu` (
   `megamenu_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_group` smallint(6) NOT NULL DEFAULT '2',
  `width` varchar(255) DEFAULT NULL,
  `submenu_width` varchar(255) DEFAULT NULL,
  `colum_width` varchar(255) DEFAULT NULL,
  `submenu_colum_width` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `colums` varchar(255) DEFAULT '1',
  `type` varchar(255) NOT NULL,
  `is_content` smallint(6) NOT NULL DEFAULT '2',
  `show_title` smallint(6) NOT NULL DEFAULT '1',
  `type_submenu` varchar(10) NOT NULL DEFAULT '1',
  `level_depth` smallint(6) NOT NULL DEFAULT '0',
  `published` smallint(6) NOT NULL DEFAULT '1',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position` int(11) unsigned NOT NULL DEFAULT '0',
  `show_sub` smallint(6) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(25) DEFAULT NULL,
  `privacy` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_type` varchar(25) DEFAULT 'top',
  `menu_class` varchar(25) DEFAULT NULL,
  `description` text,
  `content_text` text,
  `submenu_content` text,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`megamenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
				
";

$query['pavmegamenu'][]  = "	
	CREATE TABLE `".DB_PREFIX ."megamenu_description` (
  `megamenu_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`megamenu_id`,`language_id`),
  KEY `name` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
";

$query['pavmegamenu'][]  = "	
CREATE TABLE `".DB_PREFIX ."megamenu_widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
";
	
$query['pavmegamenu'][] = "	
	INSERT INTO `".DB_PREFIX ."megamenu` (`megamenu_id`, `image`, `parent_id`, `is_group`, `width`, `submenu_width`, `colum_width`, `submenu_colum_width`, `item`, `colums`, `type`, `is_content`, `show_title`, `type_submenu`, `level_depth`, `published`, `store_id`, `position`, `show_sub`, `url`, `target`, `privacy`, `position_type`, `menu_class`, `description`, `content_text`, `submenu_content`, `level`, `left`, `right`, `widget_id`) VALUES
(1,'',0,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'1',0,1,0,0,0,NULL,NULL,0,'top',NULL,NULL,NULL,NULL,-5,34,47,0),
(2,'',1,0,NULL,NULL,NULL,'','20','','category',0,1,'menu',0,1,0,2,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(3,'',1,0,NULL,NULL,NULL,'','17','1','category',0,1,'menu',0,1,0,5,0,'',NULL,0,'top','pav-parrent',NULL,'','',0,0,0,1),
(4,'',3,0,NULL,NULL,NULL,'','25','1','category',0,1,'menu',0,1,0,1,0,'',NULL,0,'top','pav-parrent',NULL,'','',0,0,0,1),
(5,'',1,0,NULL,NULL,NULL,'','18','1','category',0,1,'menu',0,1,0,3,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(7,'',1,0,NULL,NULL,NULL,'','25','1','category',0,1,'menu',0,1,0,4,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(25,'',3,0,NULL,NULL,NULL,'','79','1','category',0,1,'menu',0,1,0,2,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(26,'',3,0,NULL,NULL,NULL,'','74','1','category',0,1,'menu',0,1,0,3,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(27,'',3,0,NULL,NULL,NULL,'','73','1','category',0,1,'menu',0,1,0,4,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(28,'',3,0,NULL,NULL,NULL,'','80','1','category',0,1,'menu',0,1,0,5,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(29,'',3,0,NULL,NULL,NULL,'','','1','category',0,1,'menu',0,1,0,6,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(30,'',3,0,NULL,NULL,NULL,'','46','1','category',0,1,'menu',0,1,0,7,0,'',NULL,0,'top','',NULL,'','',0,0,0,1),
(38,'',1,0,NULL,NULL,NULL,'','57','1','url',0,1,'menu',0,1,0,7,0,'?route=pavblog/blogs',NULL,0,'top','',NULL,'','',0,0,0,1),
(40,'data/icon-home.png',1,0,NULL,NULL,NULL,'','','1','url',0,1,'menu',0,1,0,1,0,'?route=common/home',NULL,0,'top','home',NULL,'','',0,0,0,1);

	";
$query['pavmegamenu'][] = "	
INSERT INTO `".DB_PREFIX ."megamenu_description` (`megamenu_id`, `language_id`, `title`, `description`) VALUES
(3, 3, 'Drinks', ''),
(4, 1, 'Watches', ''),
(4, 3, 'Watches', ''),
(5, 1, 'Chicken', ''),
(37, 4, 'برگر', ''),
(7, 1, 'Salads', ''),
(7, 3, 'Salads', ''),
(40, 3, 'Home', ''),
(40, 1, 'Home', ''),
(2, 1, 'Breakfast', ''),
(2, 3, 'Breakfast', ''),
(2, 4, 'صبحانه', ''),
(5, 4, 'جوجه', ''),
(3, 4, 'نوشیدنی ها', ''),
(38, 1, 'Blog', ''),
(38, 3, 'Blog', ''),
(38, 4, 'وبلاگ', ''),
(4, 4, 'Watches', ''),
(25, 4, 'Aliquam', ''),
(26, 4, 'Claritas', ''),
(27, 3, 'Consectetuer', ''),
(27, 4, 'Consectetuer', ''),
(28, 4, 'Hendrerit', ''),
(29, 4, 'Litterarum', ''),
(30, 4, 'Macs', ''),
(37, 3, 'Burgers', ''),
(25, 3, 'Aliquam', ''),
(25, 1, 'Aliquam', ''),
(26, 3, 'Claritas', ''),
(26, 1, 'Claritas', ''),
(27, 1, 'Consectetuer', ''),
(28, 3, 'Hendrerit', ''),
(28, 1, 'Hendrerit', ''),
(29, 3, 'Litterarum', ''),
(29, 1, 'Litterarum', ''),
(30, 3, 'Macs', ''),
(30, 1, 'Macs', ''),
(40, 4, 'خانه', ''),
(5, 3, 'Chicken', ''),
(7, 4, 'قدرت', ''),
(3, 1, 'Drinks', ''),
(37, 1, 'Burgers', '');
	";
 

$query['pavmegamenu'][] =  " 
INSERT INTO `".DB_PREFIX ."megamenu_widgets` (`id`, `name`, `type`, `params`, `store_id`) VALUES
(1,'Video Opencart Installation','video_code','a:1:{s:10:\"video_code\";s:320:\"&lt;iframe width=&quot;400&quot; height=&quot;210&quot; src=&quot;//www.youtube.com/embed/fNEepYl3LAk&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;\r\n&lt;p&gt;The Quickstart Package consists on a complete Opencart! + Template + Various Extensions + Sample Content, excellent for beginner...&lt;/p&gt;\";}',0),
(2,'Demo HTML','html','a:1:{s:4:\"html\";a:3:{i:1;s:164:\"&lt;p&gt;&lt;img src=&quot;image/data/demo/img-menu.jpg&quot; /&gt;&lt;/p&gt;\r\nFusce a congue purus, sit amet sollicitudin libero. In hac habitasse platea dictumst.\";i:3;s:164:\"&lt;p&gt;&lt;img src=&quot;image/data/demo/img-menu.jpg&quot; /&gt;&lt;/p&gt;\r\nFusce a congue purus, sit amet sollicitudin libero. In hac habitasse platea dictumst.\";i:4;s:164:\"&lt;p&gt;&lt;img src=&quot;image/data/demo/img-menu.jpg&quot; /&gt;&lt;/p&gt;\r\nFusce a congue purus, sit amet sollicitudin libero. In hac habitasse platea dictumst.\";}}',0),
(3,'Products Special','product_list','a:4:{s:9:\"list_type\";s:10:\"bestseller\";s:5:\"limit\";s:1:\"4\";s:11:\"image_width\";s:2:\"63\";s:12:\"image_height\";s:2:\"87\";}',0),
(4,'Products In Cat 20','product_category','a:4:{s:11:\"category_id\";s:2:\"20\";s:5:\"limit\";s:1:\"6\";s:11:\"image_width\";s:3:\"120\";s:12:\"image_height\";s:3:\"120\";}',0),
(5,'Band','banner','a:4:{s:8:\"group_id\";s:1:\"9\";s:11:\"image_width\";s:3:\"120\";s:12:\"image_height\";s:2:\"65\";s:5:\"limit\";s:1:\"6\";}',0),
(6,'PavoThemes Feed','feed','a:1:{s:8:\"feed_url\";s:55:\"http://www.pavothemes.com/opencart-themes.feed?type=rss\";}',0),
(11,'Category','html','a:1:{s:4:\"html\";a:3:{i:1;s:1061:\"&lt;ul class=&quot;list&quot;&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=20&quot;&gt;Men\'s blazers&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=18&quot;&gt;Men\'s Chinos&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=25&quot;&gt;Men\'s Jeans&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot;&gt;Men\'s Shirts&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=24&quot;&gt;Men\'s Shorts&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot;&gt;Men\'s Suits&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n                        &lt;a href=&quot;index.php?route=product/category&amp;amp;path=20_26&quot;&gt;Men\'s Joggers&lt;/a&gt;\r\n                      &lt;/li&gt;\r\n&lt;/ul&gt;\";i:3;s:1061:\"&lt;ul class=&quot;list&quot;&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=20&quot;&gt;Men\'s blazers&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=18&quot;&gt;Men\'s Chinos&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=25&quot;&gt;Men\'s Jeans&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot;&gt;Men\'s Shirts&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=24&quot;&gt;Men\'s Shorts&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot;&gt;Men\'s Suits&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n                        &lt;a href=&quot;index.php?route=product/category&amp;amp;path=20_26&quot;&gt;Men\'s Joggers&lt;/a&gt;\r\n                      &lt;/li&gt;\r\n&lt;/ul&gt;\";i:4;s:1061:\"&lt;ul class=&quot;list&quot;&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=20&quot;&gt;Men\'s blazers&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=18&quot;&gt;Men\'s Chinos&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=25&quot;&gt;Men\'s Jeans&lt;/a&gt;\r\n    &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot;&gt;Men\'s Shirts&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=24&quot;&gt;Men\'s Shorts&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot;&gt;Men\'s Suits&lt;/a&gt;\r\n            &lt;/li&gt;\r\n  &lt;li&gt;\r\n                        &lt;a href=&quot;index.php?route=product/category&amp;amp;path=20_26&quot;&gt;Men\'s Joggers&lt;/a&gt;\r\n                      &lt;/li&gt;\r\n&lt;/ul&gt;\";}}',0),
(10,'Latest Produce','product_list','a:4:{s:9:\"list_type\";s:6:\"newest\";s:5:\"limit\";s:1:\"1\";s:11:\"image_width\";s:3:\"200\";s:12:\"image_height\";s:3:\"275\";}',0),
(12,'Banner','html','a:1:{s:4:\"html\";a:3:{i:1;s:57:\"&lt;img src=&quot;image/data/img-category.jpg&quot; /&gt;\";i:3;s:57:\"&lt;img src=&quot;image/data/img-category.jpg&quot; /&gt;\";i:4;s:57:\"&lt;img src=&quot;image/data/img-category.jpg&quot; /&gt;\";}}',0);
   ";
   
$query['pavmegamenu'][]  = "DELETE FROM `".DB_PREFIX ."setting` WHERE `group`='pavmegamenu' and `key` = 'pavmegamenu_module'";
$query['pavmegamenu'][] =  " 
INSERT INTO `".DB_PREFIX ."setting` (`setting_id`, `store_id`, `group`, `key`, `value`, `serialized`) VALUES
(0, 0, 'pavmegamenu', 'pavmegamenu_module', 'a:1:{i:0;a:4:{s:9:\"layout_id\";s:5:\"99999\";s:8:\"position\";s:8:\"mainmenu\";s:6:\"status\";s:1:\"1\";s:10:\"sort_order\";i:1;}}', 1);";

$query['pavmegamenu'][]  = "DELETE FROM `".DB_PREFIX ."setting` WHERE `group`='pavmegamenu_params' and `key` = 'params'";
$query['pavmegamenu'][] =  " 
INSERT INTO `".DB_PREFIX ."setting` (`setting_id`, `store_id`, `group`, `key`, `value`, `serialized`) VALUES
(0, 0, 'pavmegamenu_params', 'params', '[{\"submenu\":1,\"subwidth\":900,\"id\":2,\"cols\":\"\",\"group\":0,\"rows\":[{\"cols\":[{\"widgets\":\"wid-10\",\"colwidth\":3},{\"widgets\":\"wid-2\",\"colwidth\":5,\"colclass\":\"\"},{\"widgets\":\"wid-3\",\"colwidth\":4}]},{\"cols\":[{\"widgets\":\"wid-5\",\"colclass\":\"hidden-title\",\"colwidth\":12}]}]},{\"submenu\":1,\"subwidth\":650,\"cols\":1,\"group\":0,\"id\":5,\"rows\":[{\"cols\":[{\"widgets\":\"wid-11\",\"colwidth\":4},{\"widgets\":\"wid-1\",\"colwidth\":8}]},{\"cols\":[{\"widgets\":\"wid-12\",\"colclass\":\"hidden-title\",\"colwidth\":12}]}]},{\"submenu\":1,\"cols\":1,\"group\":0,\"id\":3,\"rows\":[{\"cols\":[{\"colwidth\":12,\"type\":\"menu\"}]}]}]', 0);
";  



$query['pavblog'][]  = "  DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_blog`; ";
$query['pavblog'][]  = "   DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_blog_description`; ";
$query['pavblog'][]  = "  DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_category`; ";
$query['pavblog'][]  = "   DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_category_description`; ";
$query['pavblog'][]  = "   DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_comment`; ";


$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `date_modified` date NOT NULL,
  `video_code` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
";

$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_blog_description` (
  `blog_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_category` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_group` smallint(6) NOT NULL DEFAULT '2',
  `width` varchar(255) DEFAULT NULL,
  `submenu_width` varchar(255) DEFAULT NULL,
  `colum_width` varchar(255) DEFAULT NULL,
  `submenu_colum_width` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `colums` varchar(255) DEFAULT '1',
  `type` varchar(255) NOT NULL,
  `is_content` smallint(6) NOT NULL DEFAULT '2',
  `show_title` smallint(6) NOT NULL DEFAULT '1',
  `meta_keyword` varchar(255) NOT NULL DEFAULT '1',
  `level_depth` smallint(6) NOT NULL DEFAULT '0',
  `published` smallint(6) NOT NULL DEFAULT '1',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position` int(11) unsigned NOT NULL DEFAULT '0',
  `show_sub` smallint(6) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(25) DEFAULT NULL,
  `privacy` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_type` varchar(25) DEFAULT 'top',
  `menu_class` varchar(25) DEFAULT NULL,
  `description` text,
  `meta_description` text,
  `meta_title` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
";
			
$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_category_description` (
  `category_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`category_id`,`language_id`),
  KEY `name` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
";	
	
$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) unsigned NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `FK_blog_comment` (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
";
			

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_blog` (`blog_id`, `category_id`, `position`, `created`, `status`, `user_id`, `hits`, `image`, `meta_keyword`, `meta_description`, `meta_title`, `date_modified`, `video_code`, `params`, `tags`, `featured`, `keyword`) VALUES
(7,21,2,'2013-03-09',1,1,48,'data/pavblog/blog_2.jpg','','','','2013-12-30','','','joomla, prestashop, magento',1,''),
(9,21,0,'2013-03-09',1,1,102,'data/pavblog/blog_1.jpg','','','','2013-12-30','','','prestashop, magento',0,''),
(10,21,0,'2013-03-09',1,1,23,'data/pavblog/blog_3.jpg','test test','','Custom SEO Titlte','2013-12-30','','','prestashop',0,''),
(11,21,0,'2013-03-11',1,1,75,'data/pavblog/blog_2.jpg','','','','2013-12-30','','','opencart',0,'');
"; 	
		
$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_blog_description` (`blog_id`, `language_id`, `title`, `description`, `content`) VALUES
(10, 1, 'Neque porro quisquam dolorem', '&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quas.&lt;/p&gt;\r\n', '&lt;p&gt;Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo. Ut bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie.&lt;/p&gt;\r\n\r\n&lt;p&gt;Etiam eget erat est. Phasellus elit justo, mattis non lorem non, aliquam aliquam leo. Sed fermentum consectetur magna, eget semper ante. Aliquam scelerisque justo velit. Fusce cursus blandit dolor, in sodales urna vulputate lobortis. Nulla ut tellus turpis. Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi, vulputate ac nulla eu, ultricies tincidunt tellus. Nunc tincidunt sem urna, nec venenatis libero vehicula ut.&lt;/p&gt;\r\n\r\n&lt;p&gt;Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur faucibus aliquam pulvinar. Vivamus mattis volutpat erat, et congue nisi semper quis. Cras vehicula dignissim libero in elementum. Mauris sit amet dolor justo. Morbi consequat velit vel est fermentum euismod. Curabitur in magna augue.&lt;/p&gt;\r\n'),
(10, 3, 'Neque porro quisquam dolorem', '&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.&lt;/p&gt;\r\n', '&lt;p&gt;Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo. Ut bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie.&lt;/p&gt;\r\n\r\n&lt;p&gt;Etiam eget erat est. Phasellus elit justo, mattis non lorem non, aliquam aliquam leo. Sed fermentum consectetur magna, eget semper ante. Aliquam scelerisque justo velit. Fusce cursus blandit dolor, in sodales urna vulputate lobortis. Nulla ut tellus turpis. Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi, vulputate ac nulla eu, ultricies tincidunt tellus. Nunc tincidunt sem urna, nec venenatis libero vehicula ut.&lt;/p&gt;\r\n\r\n&lt;p&gt;Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur faucibus aliquam pulvinar. Vivamus mattis volutpat erat, et congue nisi semper quis. Cras vehicula dignissim libero in elementum. Mauris sit amet dolor justo. Morbi consequat velit vel est fermentum euismod. Curabitur in magna augue.&lt;/p&gt;\r\n'),
(10, 4, 'Neque porro quisquam dolorem', '&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.&lt;/p&gt;\r\n', '&lt;p&gt;Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo. Ut bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie.&lt;/p&gt;\r\n\r\n&lt;p&gt;Etiam eget erat est. Phasellus elit justo, mattis non lorem non, aliquam aliquam leo. Sed fermentum consectetur magna, eget semper ante. Aliquam scelerisque justo velit. Fusce cursus blandit dolor, in sodales urna vulputate lobortis. Nulla ut tellus turpis. Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi, vulputate ac nulla eu, ultricies tincidunt tellus. Nunc tincidunt sem urna, nec venenatis libero vehicula ut.&lt;/p&gt;\r\n\r\n&lt;p&gt;Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur faucibus aliquam pulvinar. Vivamus mattis volutpat erat, et congue nisi semper quis. Cras vehicula dignissim libero in elementum. Mauris sit amet dolor justo. Morbi consequat velit vel est fermentum euismod. Curabitur in magna augue.&lt;/p&gt;\r\n'),
(7, 1, 'Ac tincidunt pendisse malesuada', '&lt;p&gt;Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum. Praesent Nam adipiscing Aliquam elit accumsan wisi sit semper scelerisque convallis&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(7, 3, 'Ac tincidunt pendisse malesuada', '&lt;p&gt;Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum. Praesent Nam adipiscing Aliquam elit accumsan wisi sit semper scelerisque convallis. Sed quisque cum velit&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(7, 4, 'Ac tincidunt pendisse malesuada', '&lt;p&gt;Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum. Praesent Nam adipiscing Aliquam elit accumsan wisi sit semper scelerisque convallis. Sed quisque cum velit&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(11, 1, 'Donec tellus lorem elit tristique ', '&lt;p&gt;Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(11, 3, 'Donec tellus lorem elit tristique ', '&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(11, 4, 'Donec tellus lorem elit tristique ', '&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(9, 1, 'Commodo laoreet semper lorem ', '&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla.&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(9, 3, 'Commodo laoreet semper lorem ', '&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(9, 4, 'Commodo laoreet semper lorem ', '&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n');
"; 		

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_category` (`category_id`, `image`, `parent_id`, `is_group`, `width`, `submenu_width`, `colum_width`, `submenu_colum_width`, `item`, `colums`, `type`, `is_content`, `show_title`, `meta_keyword`, `level_depth`, `published`, `store_id`, `position`, `show_sub`, `url`, `target`, `privacy`, `position_type`, `menu_class`, `description`, `meta_description`, `meta_title`, `level`, `left`, `right`, `keyword`) VALUES
(1,'',0,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'1',0,1,0,0,0,NULL,NULL,0,'top',NULL,NULL,NULL,NULL,-5,34,47,''),
(20,'data/pavblog/img-blog4.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'1',0,1,0,7,0,NULL,NULL,0,'top','test test',NULL,'','',0,0,0,''),
(21,'data/pavblog/img-blog1.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'1',0,1,0,1,0,NULL,NULL,0,'top','',NULL,'','',0,0,0,''),
(22,'data/pavblog/img-blog1.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'1',0,1,0,8,0,NULL,NULL,0,'top','',NULL,'','',0,0,0,''),
(23,'data/pavblog/img-blog2.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'1',0,1,0,6,0,NULL,NULL,0,'top','',NULL,'','',0,0,0,''),
(24,'data/pavblog/img-blog5.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'1',0,1,0,3,0,NULL,NULL,0,'top','',NULL,'','',0,0,0,''),
(25,'data/pavblog/img-blog3.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'',0,1,0,2,0,NULL,NULL,0,'top','',NULL,'','',0,0,0,''),
(26,'data/pavblog/img-blog4.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'',0,1,0,4,0,NULL,NULL,0,'top','',NULL,'','',0,0,0,''),
(27,'data/pavblog/img-blog5.jpg',1,2,NULL,NULL,NULL,NULL,NULL,'1','',2,1,'',0,1,0,5,0,NULL,NULL,0,'top','',NULL,'','',0,0,0,'');
"; 		

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_category_description` (`category_id`, `language_id`, `title`, `description`) VALUES
(1, 1, 'ROOT', 'Menu Root'),
(24, 1, 'Turpis ipsum', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo.&lt;/p&gt;\r\n'),
(20, 1, 'Pharetra ultrices', '&lt;p&gt;Donec ornare elementum velit eu condimentum. In ullamcorper velit ultrices nisl tincidunt, tempus dapibus orci iaculis. Phasellus pharetra ultrices massa, sit amet viverra tellus vestibulum posuere.&lt;/p&gt;\r\n'),
(24, 3, 'Turpis ipsum', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo.&lt;/p&gt;\r\n'),
(24, 4, 'بشكل ما عبر إدخبعض ', '&lt;p&gt;نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخبعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.&lt;/p&gt;\r\n'),
(22, 4, 'القارئ عن التركيز على ', '&lt;p&gt;هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج&lt;/p&gt;\r\n'),
(22, 3, 'Bibendum sem', '&lt;p&gt;Bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie.&lt;/p&gt;\r\n'),
(22, 1, 'Bibendum sem', '&lt;p&gt;Bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie.&lt;/p&gt;\r\n'),
(25, 4, 'ولاً أن ليس هناك أي', '&lt;p&gt;نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخبعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.&lt;/p&gt;\r\n'),
(25, 3, 'Sed fermentum', '&lt;p&gt;Etiam eget erat est. Phasellus elit justo, mattis non lorem non, aliquam aliquam leo. Sed fermentum consectetur magna, eget semper ante. Aliquam scelerisque justo velit.&lt;/p&gt;\r\n'),
(25, 1, 'Sed fermentum', '&lt;p&gt;Etiam eget erat est. Phasellus elit justo, mattis non lorem non, aliquam aliquam leo. Sed fermentum consectetur magna, eget semper ante. Aliquam scelerisque justo velit.&lt;/p&gt;\r\n'),
(26, 4, 'نت تريد أن تستخدم نص', '&lt;p&gt;نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخبعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.&lt;/p&gt;\r\n'),
(26, 3, 'Fusce cursus', '&lt;p&gt;Fusce cursus blandit dolor, in sodales urna vulputate lobortis. Nulla ut tellus turpis. Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna.&lt;/p&gt;\r\n'),
(26, 1, 'Fusce cursus', '&lt;p&gt;Fusce cursus blandit dolor, in sodales urna vulputate lobortis. Nulla ut tellus turpis. Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna.&lt;/p&gt;\r\n'),
(27, 4, 'المتوفرة لنصوص', '&lt;p&gt;نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخبعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.&lt;/p&gt;\r\n'),
(27, 3, 'Curabitur faucibus', '&lt;p&gt;Curabitur faucibus aliquam pulvinar. Vivamus mattis volutpat erat, et congue nisi semper quis. Cras vehicula dignissim libero in elementum. Mauris sit amet dolor justo.&lt;/p&gt;\r\n'),
(27, 1, 'Curabitur faucibus', '&lt;p&gt;Curabitur faucibus aliquam pulvinar. Vivamus mattis volutpat erat, et congue nisi semper quis. Cras vehicula dignissim libero in elementum. Mauris sit amet dolor justo.&lt;/p&gt;\r\n'),
(21, 4, 'المقروء لصفحة ما سيلهي', '&lt;p&gt;هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج&lt;/p&gt;\r\n'),
(21, 3, 'Vestibulum massa', '&lt;p&gt;Mauris vitae vestibulum massa. Vestibulum id lacus sit amet nisi vestibulum euismod. Fusce bibendum aliquet urna, vel euismod tortor molestie in. Nunc convallis nibh nisl, nec lacinia sapien pretium et.&lt;/p&gt;\r\n'),
(21, 1, 'Vestibulum massa', '&lt;p&gt;Mauris vitae vestibulum massa. Vestibulum id lacus sit amet nisi vestibulum euismod. Fusce bibendum aliquet urna, vel euismod tortor molestie in. Nunc convallis nibh nisl, nec lacinia sapien pretium et.&lt;/p&gt;\r\n'),
(20, 3, 'Pharetra ultrices', '&lt;p&gt;Donec ornare elementum velit eu condimentum. In ullamcorper velit ultrices nisl tincidunt, tempus dapibus orci iaculis. Phasellus pharetra ultrices massa, sit amet viverra tellus vestibulum posuere.&lt;/p&gt;\r\n'),
(20, 4, 'لائقة مخبأة في هذا النص', '&lt;p&gt;نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخبعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.&lt;/p&gt;\r\n'),
(23, 1, 'Placerat egestas', '&lt;p&gt;Aenean aliquet leo nec lacus placerat egestas. Nullam volutpat tellus quis fermentum lacinia. Vestibulum eu massa id purus dictum interdum. Donec vitae justo pellentesque, scelerisque sapien vitae, ullamcorper ligula.g&lt;/p&gt;\r\n'),
(23, 3, 'Placerat egestas', '&lt;p&gt;Aenean aliquet leo nec lacus placerat egestas. Nullam volutpat tellus quis fermentum lacinia. Vestibulum eu massa id purus dictum interdum. Donec vitae justo pellentesque, scelerisque sapien vitae, ullamcorper ligula.&lt;/p&gt;\r\n'),
(23, 4, ' تعديلها بشكل ما عبر ', '&lt;p&gt;نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخبعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي عل&lt;/p&gt;\r\n');
"; 	

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_comment` (`comment_id`, `blog_id`, `comment`, `status`, `created`, `user`, `email`) VALUES
(6, 10, 'Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag', 1, '2013-03-12 14:23:09', 'ha cong tien', 'hatuhn@gmail.com'),
(7, 10, 'Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag', 1, '2013-03-12 14:25:19', 'ha cong tien', 'hatuhn@gmail.com'),
(8, 10, 'Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag', 1, '2013-03-12 14:30:17', 'Test Test ', 'ngoisao@aa.com');
"; 			
?>