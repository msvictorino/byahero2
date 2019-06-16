ALTER TABLE `users` ADD `role` VARCHAR(50) NULL DEFAULT 'user' AFTER `uuid`;
ALTER TABLE `users` ADD `username` VARCHAR(50) NULL DEFAULT NULL AFTER `password_changed_at`, 
                    ADD `birthday` DATE NULL DEFAULT NULL AFTER `username`, 
                    ADD `marital_status` VARCHAR(50) NULL DEFAULT NULL AFTER `birthday`, 
                    ADD `gender` VARCHAR(20) NULL DEFAULT NULL AFTER `marital_status`, 
                    ADD `contact_no` VARCHAR(50) NULL DEFAULT NULL AFTER `gender`, 
                    ADD `tel_no` VARCHAR(30) NULL DEFAULT NULL AFTER `contact_no`, 
                    ADD `address` TEXT NULL DEFAULT NULL AFTER `tel_no`, 
                    ADD `city` VARCHAR(100) NULL DEFAULT NULL AFTER `address`, 
                    ADD `province` VARCHAR(100) NULL DEFAULT NULL AFTER `city`, 
                    ADD `zip` VARCHAR(20) NULL DEFAULT NULL AFTER `province`;
                    