ALTER TABLE `tours` ADD `description` TEXT NULL DEFAULT NULL AFTER `price`;
ALTER TABLE `tours` ADD `upload_path` TEXT NULL DEFAULT NULL AFTER `description`;

	
CREATE TABLE `testimonials` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL DEFAULT '0',
 `first_name` varchar(100) DEFAULT NULL,
 `last_name` varchar(100) DEFAULT NULL,
 `contact` varchar(50) DEFAULT NULL,
 `email` varchar(100) DEFAULT NULL,
 `comment` text NOT NULL,
 `rate` double NOT NULL,
 `is_anonymous` tinyint(4) NOT NULL DEFAULT '1',
 `status` tinyint(4) NOT NULL DEFAULT '0',
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1