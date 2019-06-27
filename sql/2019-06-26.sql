ALTER TABLE `transactions` ADD `rate` INT NULL DEFAULT NULL AFTER `travel_date`, ADD `comment` TEXT NULL DEFAULT NULL AFTER `rate`, ADD `is_review` TINYINT NOT NULL DEFAULT '0' AFTER `comment`;
ALTER TABLE `locations` ADD `description` TEXT NULL DEFAULT NULL AFTER `region`, ADD `upload_path` TEXT NULL DEFAULT NULL AFTER `description`;



