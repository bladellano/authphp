# Host: localhost  (Version 8.0.18)
# Date: 2020-12-16 21:54:51
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `facebook_id` varchar(30) DEFAULT NULL,
  `google_id` varchar(30) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `forget` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (12,'Caio','Nunes','bladellano@gmail.com','$2y$10$ljjac5kuq6U8E1F2jncVK.YWp7bMufwyieyyXsLVnaBCo4pDfQWeS','3504927396226980',NULL,'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=3504927396226980&height=200&width=200&ext=1610749931&hash=AeRrdOfs9RTqezY_W8E',NULL,'2020-12-16 22:32:35','2020-12-16 22:32:35');
