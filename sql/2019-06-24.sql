ALTER TABLE `transactions` ADD `packages_id` INT NULL DEFAULT NULL AFTER `tours_id`, ADD `packages_pax_id` INT NULL DEFAULT NULL AFTER `packages_id`;
ALTER TABLE `transactions` ADD `upload_path` TEXT NULL AFTER `travel_date`, ADD `payment_status` TINYINT NOT NULL DEFAULT '0 `upload_path`;
