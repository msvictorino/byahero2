ALTER TABLE `tours` ADD `description` TEXT NULL DEFAULT NULL AFTER `price`;
ALTER TABLE `tours` ADD `upload_path` TEXT NULL DEFAULT NULL AFTER `description`;


CREATE TABLE `testimonials` (
 `id` int(11) NOT NULL,
 `user_id` int(11) NOT NULL DEFAULT '0',
 `first_name` varchar(100) NOT NULL,
 `last_name` varchar(100) NOT NULL,
 `contact` varchar(50) NOT NULL,
 `email` varchar(100) NOT NULL,
 `comment` text NOT NULL,
 `rate` double NOT NULL,
 `is_anonymous` tinyint(4) NOT NULL DEFAULT '1',
 `status` tinyint(4) NOT NULL DEFAULT '0',
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1