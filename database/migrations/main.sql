SET FOREIGN_KEY_CHECKS = FALSE;

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(64) NOT NULL,
    deleted_at DATETIME,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    updated_at DATETIME
);

INSERT INTO `role` (id, title) VALUES (1, 'Super Admin');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id SMALLINT UNSIGNED NOT NULL,
    deleted_at DATETIME,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    updated_at DATETIME,
    FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
);

-- PASSWORD was privately sent through message
INSERT INTO `user` (full_name, username, password, role_id) VALUES(
    "AdminTERCAKEP",
    "admin.magang",
    "$2y$10$5rrnRn.D.p2wlE8LASMeVuj34TR7.Hp.2YvRVbd7zZDOxc9jUOJsm",
    1
);

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    need_review TINYINT NOT NULL DEFAULT 0,
    deleted_at DATETIME,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    updated_at DATETIME
);

DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    address TEXT,
    description TEXT,
    operation_hours JSON NOT NULL,
    price_range BIGINT UNSIGNED NOT NULL DEFAULT 0,
    images varchar(255),
    nearbies JSON,
    geolocation JSON NOT NULL,
    overall_rating SMALLINT NOT NULL DEFAULT 0,
    user_id BIGINT UNSIGNED NOT NULL,
    category_id INT UNSIGNED NOT NULL,
    deleted_at DATETIME,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    updated_at DATETIME,
    FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
    FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
);

DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating` (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    location_id BIGINT UNSIGNED NOT NULL,
    value SMALLINT NOT NULL DEFAULT 0,
    FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
    FOREIGN KEY (`location_id`) REFERENCES `location` (`id`)
);

SET FOREIGN_KEY_CHECKS = TRUE;