CREATE DATABASE ape - de - bruges;

CREATE TABLE `season` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `start_year` date NOT NULL COMMENT '(DC2Type:date_immutable)', `end_year` date NOT NULL COMMENT '(DC2Type:date_immutable)'
);

CREATE TABLE `ape_function` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` varchar(50) NOT NULL
);

CREATE TABLE `article` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `title` varchar(255) NOT NULL, `text` longtext NOT NULL, `is_display` tinyint(1) NOT NULL, `image_name` varchar(255) DEFAULT NULL, `image_size` int(11) DEFAULT NULL, `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
);

CREATE TABLE `info_ape` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` varchar(255) NOT NULL, `description` longtext DEFAULT NULL, `url` varchar(255) DEFAULT NULL
);

CREATE TABLE `logo` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `image_name` varchar(255) DEFAULT NULL, `image_size` int(11) DEFAULT NULL, `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
);

CREATE TABLE `place` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` varchar(255) NOT NULL, `address` varchar(255) NOT NULL
);

CREATE TABLE `title_event` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` varchar(255) NOT NULL
);

CREATE TABLE `ag` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `season_id` int(11) NOT NULL FOREIGN KEY REFERENCES `season` (`id`), `file_name` varchar(255) DEFAULT NULL, `file_size` int(11) DEFAULT NULL, `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
);

CREATE TABLE `event` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `title_id` int(11) NOT NULL FOREIGN KEY REFERENCES `title_event` (`id`), `season_id` int(11) NOT NULL FOREIGN KEY REFERENCES `season` (`id`), `place_id` int(11) NOT NULL FOREIGN KEY REFERENCES `place` (`id`), `start` datetime NOT NULL, `end` datetime NOT NULL, `slogan` varchar(255) NOT NULL, `description` longtext NOT NULL, `is_in_news` tinyint(1) NOT NULL
);

CREATE TABLE `image_event` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `event_id` int(11) NOT NULL FOREIGN KEY REFERENCES `event` (`id`), `image_name` varchar(255) DEFAULT NULL, `image_size` int(11) DEFAULT NULL, `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
);

CREATE TABLE `user` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `ape_function_id` int(11) NOT NULL FOREIGN KEY REFERENCES `ape_function` (`id`), `email` varchar(180) NOT NULL, `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)), `password` varchar(255) NOT NULL, `firstname` varchar(100) NOT NULL, `lastname` varchar(100) NOT NULL
);

SELECT *
FROM season
WHERE
    season.start_year < "2024-03-25 09:33:08"
    AND season.end_year > "2024-03-25 09:33:08"

SELECT *
FROM event
WHERE
    event.start > "2024-03-25 09:33:08"
ORDER BY event.start ASC

SELECT *
FROM event
WHERE
    event.start < "2024-03-25 09:33:08"
    AND event.start > "2023-09-01 00:00:00"
ORDER BY event.start ASC