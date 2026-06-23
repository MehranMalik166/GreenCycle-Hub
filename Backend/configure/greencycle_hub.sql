-- GREEN CYCLE HUB DATABASE (CLEAN STRUCTURE ONLY)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- =========================
-- TABLE: contacts
-- =========================
CREATE TABLE `contacts` (
`id` int(11) NOT NULL,
`user_token` varchar(100) DEFAULT NULL,
`name` varchar(100) DEFAULT NULL,
`email` varchar(100) DEFAULT NULL,
`subject` varchar(15) NOT NULL,
`message` text DEFAULT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- =========================
-- TABLE: conversions
-- =========================
CREATE TABLE `conversions` (
`id` int(11) NOT NULL,
`user_token` varchar(100) DEFAULT NULL,
`input_type` varchar(50) DEFAULT NULL,
`input_weight` varchar(50) DEFAULT NULL,
`output_type` varchar(50) DEFAULT NULL,
`result` text DEFAULT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- =========================
-- PRIMARY KEYS
-- =========================
ALTER TABLE `contacts`
ADD PRIMARY KEY (`id`);

ALTER TABLE `conversions`
ADD PRIMARY KEY (`id`);

-- =========================
-- AUTO INCREMENT
-- =========================
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `conversions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

COMMIT;
